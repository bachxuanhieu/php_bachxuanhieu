<?php

class index extends DController{


public function __construct(){
 $data=array();
 parent:: __construct();
}

public function index(){
     $this->homepage();
}

// trang chủ
public function homepage(){
    $table='tbl_category_product';
    $table_product='tbl_product';
    $categorymodel = $this->load->model('categorymodel');
    $data['category']= $categorymodel->category($table);
    $data['product']= $categorymodel->list_product($table_product);
 $this->load->view('header',$data);

 $this->load->view('slider');

 $this->load->view('home',$data);


 $this->load->view('footer');
}
// trang liên hệ
public function lienhe(){
    $table='tbl_category_product';
    $categorymodel = $this->load->model('categorymodel');
    $data['category']= $categorymodel->category($table);
    $this->load->view('header',$data);
   
    $this->load->view('contact');
   
   
    $this->load->view('footer');
}

public function notfound(){
    $this->load->view('header');


    $this->load->view('404',);
   
   
    $this->load->view('footer');
}
}