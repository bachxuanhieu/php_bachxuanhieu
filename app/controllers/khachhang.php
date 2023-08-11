<?php

class khachhang extends DController{


public function __construct(){
 $data=array();
 parent:: __construct();
}

public function index(){
     $this->khachhang();
}

// trang chủ
public function khachhang(){
//     $table='tbl_category_product';
//     $table_product='tbl_product';
//     $categorymodel = $this->load->model('categorymodel');
//     $data['category']= $categorymodel->category($table);
//     $data['product']= $categorymodel->list_product($table_product);
//  $this->load->view('header',$data);

//  $this->load->view('slider');

//  $this->load->view('home',$data);


//  $this->load->view('footer');
}

public function dangnhap(){
   
    $table='tbl_category_product';
    $table_product='tbl_product';
    $categorymodel = $this->load->model('categorymodel');
    $data['category']= $categorymodel->category($table);
    Session::init();
    $this->load->view('header',$data);

    $this->load->view('customer_login');


    $this->load->view('footer');
}



    // thực hiện đăng ký:
public function insert_dangky(){
    $name= $_POST['txtHoten'];
    $email= $_POST['txtEmail'];
    $phone= $_POST['txtDienthoai'];
    $address= $_POST['txtDiachi'];
    $password= $_POST['txtPassword'];
      
     
    $table_customers="tbl_customers";
    $data=array(
        'customers_name'=>$name,
        'customers_email'=>$email,
        'customers_phone'=>$phone,
        'customers_address'=>$address,
        'customers_password'=>md5($password),
    );
    $customermodel = $this->load->model('customermodel');
    $result = $customermodel->insertcustomer($table_customers,$data);
    if($result==1){
      
        $message['msg']="Đăng ký thành công";
        header('Location:'.BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
    }else{
        $message['msg']="Đăng ký  thất bại";
        header('Location:'.BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
    }
}



// thực hiên đăng nhập
public function login_customer(){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $table_customers="tbl_customers";
    $customermodel = $this->load->model('customermodel');

    $count=$customermodel->login($table_customers,$username,$password);

    if($count==0){
     $message['msg']="Username hoặc pass word nhập sai";
     header('Location:'.BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
    }else{

     $result=$customermodel->getLogin($table_customers,$username,$password);
     Session::init();
     Session::set('customer',true);
     Session::set('customer_name',$result[0]['customer_name']);
     Session::set('customer_id',$result[0]['customer_id']);

     $message['msg']="Đăng nhập thành công";
     header('Location:'.BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
    }

}

// thưc hiện đăng xuất
 public function dangxuat(){
    Session::init();
    Session::destroy();
    $message['msg']="Đăng xuất thàng công thành công";
    header('Location:'.BASE_URL."/khachhang/dangnhap?msg=".urlencode(serialize($message)));
 }

}