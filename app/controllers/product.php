<?php

class product extends DController{

public function __construct(){
 parent:: __construct();
}
public function index(){
 $this->add_category();
}
public function add_category(){
    $this->load->view('cpanel/header');
    $this->load->view('cpanel/menu');
    $this->load->view('cpanel/product/add_category');
    $this->load->view('cpanel/footer');

}
// thêm san phẩm ***************************************************************************************
public function add_product(){
    $this->load->view('cpanel/header');
    $this->load->view('cpanel/menu');
    $table="tbl_category_product";
    $categorymodel = $this->load->model('categorymodel');
    $data['category'] = $categorymodel->category($table);
    $this->load->view('cpanel/product/add_product',$data);
    $this->load->view('cpanel/footer');

}
public function insert_product(){
    $title= $_POST['title_product'];
    $desc= $_POST['desc_product'];
    $price= $_POST['price_product'];
    $quanlity= $_POST['quanlity_product'];
       //  sử lý hình ảnh
       $image = $_FILES['image_product']['name'];
       $tmp_image = $_FILES['image_product']['tmp_name'];
       $div = explode('.', $image);
       $file_ext = strtolower(end($div));
       $unique_image = $div[0] . time() . '.' . $file_ext;
       $path_uploads = "public/uploads/product/" . $unique_image; 
       

    //kết thúc sử lý hình ảnh
    $category= $_POST['category_product'];
    $table="tbl_product";
    $data=array(
        'title_product'=>$title,
        'desc_product'=>$desc,
        'price_product'=>$price,
        'quanlity_product'=>$quanlity,
        'image_product'=>$unique_image,
        'id_category_product'=>$category,
    );
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->insertproduct($table,$data);
    if($result==1){
        move_uploaded_file($tmp_image, $path_uploads);
        $message['msg']="Thêm sản phẩm thành công";
        header('Location:'.BASE_URL."/product/add_product?msg=".urlencode(serialize($message)));
    }else{
        $message['msg']="Thêm sản phẩm thất bại";
        header('Location:'.BASE_URL."/product/add_product?msg=".urlencode(serialize($message)));
    }
}

// xuất Sản phẩm:
public function list_product(){
    $this->load->view('cpanel/header');
    $this->load->view('cpanel/menu');


    $table_product="tbl_product";
    $table_category="tbl_category_product";
    $categorymodel = $this->load->model('categorymodel');
    $data['product'] = $categorymodel->product($table_product,  $table_category);


    $this->load->view('cpanel/product/list_product',$data);
    $this->load->view('cpanel/footer');
}

// Xóa sản phẩm
public function delete_product($id){
    $table="tbl_product";
    $cond= "id_product='$id'";
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->deleteproduct($table, $cond);
    if($result==1){
        $message['msg']="Xóa sản phẩm thành công";
        header('Location:'.BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
    }else{
        $message['msg']="Xóa sản phẩm thất bại";
        header('Location:'.BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
    }

}
// chỉnh sửa sản phẩm
public function edit_product($id){
    $table="tbl_product";
    $cond= "id_product='$id'";
    $table_category="tbl_category_product";
    $categorymodel = $this->load->model('categorymodel');


    $data['productbyid'] = $categorymodel->productbyid($table, $cond);
    $data['category'] = $categorymodel->category($table_category);


    $this->load->view('cpanel/header');
    $this->load->view('cpanel/menu');
    $this->load->view('cpanel/product/edit_product',$data);
    $this->load->view('cpanel/footer');
}
public function update_product($id){
    $table="tbl_product";
    $category= $_POST['category_product'];
    $cond = "id_product= '$id'";
    $title= $_POST['title_product'];
    $desc= $_POST['desc_product'];
    $price= $_POST['price_product'];
    $quanlity= $_POST['quanlity_product'];
       //  sử lý hình ảnh
       $image = $_FILES['image_product']['name'];
       $tmp_image = $_FILES['image_product']['tmp_name'];
       $div = explode('.', $image);
       $file_ext = strtolower(end($div));
       $unique_image = $div[0] . time() . '.' . $file_ext;
       $path_uploads = "public/uploads/product/" . $unique_image; 
       

    //kết thúc sử lý hình ảnh
    if($image){
      
        $data['productbyid'] = $categorymodel->productbyid($table, $cond);
        foreach( $data['productbyid'] as $key => $value){
            $path_uploads = "public/uploads/product/"; 
                unlink( $path_uploads.$value['image_product']);
          
        }
    
        $data=array(
            'title_product'=>$title,
            'desc_product'=>$desc,
            'price_product'=>$price,
            'quanlity_product'=>$quanlity,
            'image_product'=>$unique_image,
            'id_category_product'=>$category,
        );
        move_uploaded_file($tmp_image, $path_uploads);
    }else{
        $data=array(
            'title_product'=>$title,
            'desc_product'=>$desc,
            'price_product'=>$price,
            'quanlity_product'=>$quanlity,
            'id_category_product'=>$category,
        );
    }
   

  
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->updateproduct($table,$data,$cond);
    if($result==1){
        $message['msg']="Chỉnh sửa sản phẩm thành công";
        header('Location:'.BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
    }else{
        $message['msg']="Chỉnh sửa sản phẩm thất bại";
        header('Location:'.BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
    }


}




//them danh muc sam pham***********************************************************************
public function insert_category(){
    $title= $_POST['title_category_product'];
    $desc= $_POST['desc_category_product'];
    $table="tbl_category_product";
    $data=array(
        'title_category_product'=>$title,
        'desc_category_product'=>$desc
    );
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->insertcategory($table,$data);
    if($result==1){
        $message['msg']="Thêm danh mục thành công";
        header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
    }else{
        $message['msg']="Thêm danh mục thất bại";
        header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
    }
}
// xuat danh muc san pham*********************************************************************************

public function list_category(){
    $this->load->view('cpanel/header');
    $this->load->view('cpanel/menu');


    $table="tbl_category_product";
    $categorymodel = $this->load->model('categorymodel');
    $data['category'] = $categorymodel->category($table);


    $this->load->view('cpanel/product/list_category',$data);
    $this->load->view('cpanel/footer');
}


// xoa danh muc sam pham

public function delete_category($id){
    $table="tbl_category_product";
    $cond= "id_category_product='$id'";
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->deletecategory($table, $cond);
    if($result==1){
        $message['msg']="Xoa danh mục thành công";
        header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
    }else{
        $message['msg']="Xoa danh mục thất bại";
        header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
    }

}

// chinh sua danh muc san pham gom hai function

public function edit_category($id){
    $table="tbl_category_product";
    $cond= "id_category_product='$id'";
    $categorymodel = $this->load->model('categorymodel');
    $data['categorybyid'] = $categorymodel->categorybyid($table, $cond);

    $this->load->view('cpanel/header');
    $this->load->view('cpanel/menu');
    $this->load->view('cpanel/product/edit_category',$data);
    $this->load->view('cpanel/footer');
}
public function update_category_product($id){
    $table="tbl_category_product";
    $cond= "id_category_product='$id'";
    $title= $_POST['title_category_product'];
    $desc= $_POST['desc_category_product'];
    $data=array(
        'title_category_product'=>$title,
        'desc_category_product'=>$desc
    );
    $categorymodel = $this->load->model('categorymodel');
    $result = $categorymodel->updatecategory($table,$data, $cond);
    if($result==1){
        $message['msg']="Chinh sua danh mục thành công";
        header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
    }else{
        $message['msg']="Chinh sua danh mục thất bại";
        header('Location:'.BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
    }


}

}