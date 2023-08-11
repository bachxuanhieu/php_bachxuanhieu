<?php

class giohang extends DController{

    public function __construct(){
        $data = array();
        parent::__construct();
    }

    public function index(){
        $this->giohang();
    }

    // trang giỏ hàng
    public function giohang(){
     Session::init();
        $this->load->view('cart');
    }

    public function themgiohang(){
     Session::init();
    //  Session::destroy();
 
     if(isset($_POST['product_id'], $_POST['product_title'], $_POST['product_price'], $_POST['product_image'], $_POST['product_quanlity'])){
         $product_id = $_POST['product_id'];
         $product_title = $_POST['product_title'];
         $product_price = $_POST['product_price'];
         $product_image = $_POST['product_image'];
         $product_quanlity = $_POST['product_quanlity'];
 
         if(isset($_SESSION["shopping_cart"])){
             $available = 0;
             foreach($_SESSION["shopping_cart"] as $key => $value){
                 if($_SESSION["shopping_cart"][$key]['product_id'] == $product_id){
                     $available++;
                     $_SESSION["shopping_cart"][$key]['product_quanlity'] += $product_quanlity;
                 }
             }
             if($available == 0){
                 $item = array(
                     'product_id' => $product_id,
                     'product_title' => $product_title,
                     'product_price' => $product_price,
                     'product_image' => $product_image,
                     'product_quanlity' => $product_quanlity,
                 );
                 $_SESSION['shopping_cart'][] = $item;
             }
         } else {
             $item = array(
                 'product_id' => $product_id,
                 'product_title' => $product_title,
                 'product_price' => $product_price,
                 'product_image' => $product_image,
                 'product_quanlity' => $product_quanlity,
             );
             $_SESSION["shopping_cart"][] = $item;
         }
     }
 
     header("Location:".BASE_URL."/giohang");
 }

    public function updategiohang(){
        Session::init();
        if(isset($_POST['delete_cart'])){
            if(isset($_SESSION['shopping_cart'])){
                foreach($_SESSION['shopping_cart'] as $key => $values){
                    if($_SESSION['shopping_cart'][$key]['product_id']== $_POST['delete_cart']){
                        unset($_SESSION['shopping_cart'][$key]);
                    }
                }
                header('Location:'.BASE_URL.'/giohang');
                }else{
                header('Location:'.BASE_URL);
                }
        }else
        {
            foreach($_POST['qty'] as $key => $qty)
            {
                foreach($_SESSION['shopping_cart'] as $session => $values)
                {
                    if($values['product_id']== $key && $qty >=1){
                        $_SESSION['shopping_cart'][$session]['product_quanlity']= $qty;
                    }elseif($values['product_id']== $key && $qty <=0){
                        unset($_SESSION['shopping_cart'][$key]);
                    }
                }
            }
            header('Location:'.BASE_URL.'/giohang');
        }
    }




    public function dathang(){
        Session:: init();
        $table_order= "tbl_order";
        $table_order_details="tbl_order_details";
        $ordermodel = $this ->load->model('ordermodel');
        $name= $_POST['name'];
        $sodienthoai= $_POST['sodienthoai'];
        $email= $_POST['email'];
        $noidung= $_POST['noidung'];
        $diachi= $_POST['diachi'];
        $order_code = rand(0,9999);

        date_default_timezone_set('asia/ho_chi_minh');
        $date = date("d/m/Y");
        $hour = date("h:i:sa");
        $order_date = $date.$hour;

        $data_order= array(
            'order_status' => 'moi',
            'order_code' =>$order_code,
            'order_date' =>$date.' '.$hour,
        );

        $result_order = $ordermodel->insert_order($table_order, $data_order);

        if(Session::get("shopping_cart")== true){
            foreach(Session::get("shopping_cart") as $key => $value){
                $data_details= array(
                    'order_code' => $order_code,
                    'product_id' =>$value['product_id'],
                    'product_quanlity' =>$value['product_quanlity'],
                    'name' => $name,
                    'sodienthoai' => $sodienthoai,
                    'email' => $email,
                    'noidung' => $noidung,
                    'diachi' => $diachi,
                );
                $result_order_details = $ordermodel->insert_order_details($table_order_details, $data_details);
            }
            unset($_SESSION['shopping_cart']);
        }
        if($result_order_details){
            $message['msg']="Bạn đã đặt hàng thành công";
            header('Location:'.BASE_URL.'/giohang?msg='.urlencode(serialize($message)));
        }

    }


}
