<?php

class post extends DController{

public function __construct(){
 parent:: __construct();
}
public function index(){
    $this->add_post();
   }
  

   public function add_post(){
    $this->load->view('cpanel/header');
    $this->load->view('cpanel/menu');

    $postmodel = $this->load->model('postmodel');
    $table="tbl_category_post";
    $data['category'] = $postmodel->category_post($table);

    $this->load->view('cpanel/post/add_post',$data);
    $this->load->view('cpanel/footer');
   }

   public function insert_post(){
    $title= $_POST['title_post'];
    $content= $_POST['content_post'];
       //  sử lý hình ảnh
       $image = $_FILES['image_post']['name'];
       $tmp_image = $_FILES['image_post']['tmp_name'];
       $div = explode('.', $image);
       $file_ext = strtolower(end($div));
       $unique_image = $div[0] . time() . '.' . $file_ext;
       $path_uploads = "public/uploads/post/" . $unique_image; 
       

    //kết thúc sử lý hình ảnh
    $category= $_POST['category_product'];
    $table="tbl_post";
    $data=array(
        'title_post'=>$title,
        'content_post'=>$content,
        'image_post'=>$unique_image,
        'id_category_post'=>$category,
    );
    $postmodel = $this->load->model('postmodel');
    $result = $postmodel->insertpost($table,$data);
    if($result==1){
        move_uploaded_file($tmp_image, $path_uploads);
        $message['msg']="Thêm bài viết thành công";
        header('Location:'.BASE_URL."/post/add_post?msg=".urlencode(serialize($message)));
    }else{
        $message['msg']="Thêm bài viét thất bại";
        header('Location:'.BASE_URL."/post/add_post?msg=".urlencode(serialize($message)));
    }
   }

   // xuất bài viết
   public function list_post(){
    $this->load->view('cpanel/header');
    $this->load->view('cpanel/menu');


    $table_post="tbl_post";
    $table_category="tbl_category_post";
    $postmodel = $this->load->model('postmodel');
    $data['post'] = $postmodel->post($table_post,  $table_category);


    $this->load->view('cpanel/post/list_post',$data);
    $this->load->view('cpanel/footer');
}

// Xóa bài viết: 

public function delete_post($id){
    $table="tbl_post";
    $cond= "id_post='$id'";
    $postmodel = $this->load->model('postmodel');
    $result = $postmodel->deletepost($table, $cond);
    if($result==1){
        $message['msg']="Xóa bài viết thành công";
        header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
    }else{
        $message['msg']="Xóa bài viết thất bại";
        header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
    }

}
}