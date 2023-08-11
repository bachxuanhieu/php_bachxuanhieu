<?php

class sanpham extends DController{


public function __construct(){
 $data=array();
 parent:: __construct();
}

public function index(){
     $this->danhmuc();
}
// trang sản phẩm
    public function tatcasanpham(){
        $this->load->title = 'Tất cả sản phẩm';
        $this->load->desc = 'tất cả bài viết';

        $table='tbl_category_product';
        $table_product='tbl_product';
        $categorymodel = $this->load->model('categorymodel');
        $data['category']= $categorymodel->category($table);
        $data['list_product']= $categorymodel->list_product($table_product);
        $this->load->view('header',$data);
        $this->load->view('list_product',$data);
       
       
        $this->load->view('footer');
    }



public function danhmuc($id){
    $table='tbl_category_product';
    $table_product='tbl_product';
    $categorymodel = $this->load->model('categorymodel');
    $data['category']= $categorymodel->category($table);
    $data['product']= $categorymodel->categorybyid($table,$table_product,$id);
    $this->load->view('header',$data);
    $this->load->view('categoryproduct',$data);
   
   
    $this->load->view('footer');
}

// trang chi tiết sản phẩm
public function chitietsanpham($id){
    $table='tbl_category_product';
    $table_product='tbl_product';
    $cond="$table_product.id_product='$id'";
    $categorymodel = $this->load->model('categorymodel');
    $data['category']= $categorymodel->category($table);
    $data['details_product']= $categorymodel->details_product($table_product,$cond);
    $this->load->view('header',$data);
    $this->load->view('details_product',$data);
    $this->load->view('footer');
}

}