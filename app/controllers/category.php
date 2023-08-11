<?php

class category extends DController{


public function __construct(){
 $data=array();
 $message=array();
 parent:: __construct();
}



//lay danh du lieu danh mục sản phẩm
public function list_category(){
 $this->load->view('header');

 
 $categorymodel= $this->load->model('categorymodel');

 $table_category_product= 'tbl_category_product';
 $data['category']=$categorymodel->category($table_category_product);
 $this->load->view('category',$data);




 $this->load->view('footer');
}


// lấy sản phẩm theo danh mục


public function catebyid(){
 $this->load->view('header');

 
 $categorymodel= $this->load->model('categorymodel');
 $id=2;
 $table_category_product= 'tbl_category_product';
 $data['categorybyid']=$categorymodel->categorybyid($table_category_product,$id);
 $this->load->view('categorybyid',$data);
 $this->load->view('footer');
}

// insert du lieu bang trang form
public function addCategory(){
 $this->load->view('addCategory');

}

//them danh mục sản phẩm vào bảng cơ sở dữ liệu

public function insertcategory(){
 $categorymodel= $this->load->model('categorymodel');

 $table_category_product= 'tbl_category_product';
 $title =$_POST['title'];
 $desc =$_POST['desc'];
 $data= array(
  'title_category_product'=>$title,
  'desc_category_product'=>$desc
 );
 $result=$categorymodel->insertcategory($table_category_product,$data);
 if ($result == 1) {
  $message['msg'] = "Thêm dữ liệu thành công";
} else {
  $message['msg'] = "Thêm dữ liệu thất bại";
}
$this->load->view('addCategory', $message);

}

//cap nhat danh muc san pham:
public function updatecategory(){
  $categorymodel= $this->load->model('categorymodel');
 
  $table_category_product= "tbl_category_product";
 $id=3;
 $cond="tbl_category_product.id_category_product='$id'";
  $data= array(
   'title_category_product'=>"Macbook  Air",
   'desc_category_product'=>"Macbook  Air gia tot"
  );
  $result=$categorymodel->updatecategory($table_category_product,$data,$cond);
  if ($result == 1) {
   echo  "cap nhat du liệu thành công";
 } else {
   echo"cap nhat dữ liệu thất bại";
 } 
 }

 public function deletecategory(){
  $categorymodel= $this->load->model('categorymodel');
 
  $table_category_product= "tbl_category_product";

 $cond="id_category_product=26";
 
  $result=$categorymodel->deletecategory($table_category_product,$cond);
  if ($result == 1) {
   echo  "xoa du liệu thành công";
 } else {
   echo "xoa dữ liệu thất bại";
 } 
 }

}