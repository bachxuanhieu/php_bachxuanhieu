

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Cart</title>
 <style>
        /* CSS styles from the previous example */
        header {
    text-align: center;
    padding: 20px;
}
.cart-item {
    display: grid;
    grid-template-columns: 1fr 2fr 1fr 1fr 1fr auto;
    align-items: center;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    padding: 10px;
}

.cart-item img {
    width: 100px;
    height: auto;
    margin-right: 10px;
}
.subtotal {
    font-weight: bold;
}


.footer-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
}

.checkout-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.formdathang {
    margin-top: 50px;
    padding: 20px;
    border: 1px solid #ccc;
}

.formdathang h5 {
    margin-bottom: 20px;
}



.formdathang .form-check {
    margin-bottom: 20px;
}

.formdathang .btn-primary {
    background-color: #007bff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}


    </style>
</head> 
<body>
    <header>
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo BASE_URL?>/index">Trang chủ</a>
    </div>
    </nav>
        <h3>Giỏ hàng</h3>
    </header>
    <main>
        <?php
            if(isset($_SESSION['shopping_cart'])){
                $total=0;
                foreach($_SESSION['shopping_cart'] as $key => $value){
                    $subtotal=$value['product_quanlity']*$value['product_price'];
                    $total+=$subtotal;
        ?>
        <form action="<?php echo BASE_URL ?>/giohang/updategiohang" method="POST">
            <div class="cart-item">
                <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['product_image'] ?>">
                <div class="item-details">
                    <h5><?php echo $value['product_title'] ?></h5>
                    <p>Giá: <?php echo number_format($value['product_price'], 0, ',', '.') ?>đ</p>
                </div>
                <div class="quantity">
                    <h5>Số lượng</h5>
                  <input style="width: 80px;" type="number" min="1" name="qty[<?php echo $value['product_id']?>]" value="<?php echo $value['product_quanlity'] ?>">
                </div>
                <div class="subtotal">
                    <h5>Thành tiền</h5>
                    <p>Giá: <?php echo number_format($subtotal, 0, ',', '.') ?>đ</p>
                
                </div>
                
                <button class="btn btn-info" style="width: 100px;" type="submit" name="update_cart" value="<?php echo $value['product_id']?>">Cập nhật</button>
                <button class="btn btn-danger" style="width: 100px;" type="submit" name="delete_cart" value="<?php echo $value['product_id']?>">Xóa</button>
            </div>
        </form>
       <?php
                }
            
        ?>

      
    </main>
    <footer>
        <h3 style="color: red">Tổng thành tiền: <?php echo number_format($total,0,',','.') ?>đ</h3>
        <?php
                }
            
        ?>
        <div class="formdathang">
                <div class="container">
                <h5>Thông tin đặt hàng</h5>
                <?php
            if(!empty($_GET['msg'])){
                $msg=unserialize(urldecode($_GET['msg']));
                foreach($msg as $key => $value){
                    echo '<span style="color:blue;">'.$value.'</span>';
                }
            }

            ?>
            <form name="FormDatHang" method="POST" autocomplete="off" action="<?php echo BASE_URL ?>/giohang/dathang">
                <div class="mb-3">
                    <label  class="form-label">Họ và tên: </label>
                    <input type="text" class="form-control" name="name">
                <div class="mb-3">
                    <label  class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" name="sodienthoai">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" name="diachi">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Nội Dung</label>
                    <input type="text" class="form-control" name="noidung">
                </div>
                <input type="submit" class="btn btn-info" name="frmSubmit" value="Gửi đơn hàng">
                <input type="reset" class="btn btn-info"  value="Nhập lại">
                </form>
        </div>
            </div>
       
    </footer>
</body>
</html>
