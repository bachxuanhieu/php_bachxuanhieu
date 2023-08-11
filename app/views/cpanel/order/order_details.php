<h2>Thông tin khách hàng</h2>
<table class="table">
  <thead>
    <tr>
   
      <th scope="col">id</th>
      <th scope="col">Tên khach hàng</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Email</th>
      <th scope="col">Ghi chú</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=0;
  
        foreach($order_info as $key => $ord){
            
            $i++;
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $ord['name']; ?></td>
      <td><?php echo $ord['sodienthoai']; ?></td>
     
      <td><?php echo $ord['diachi']; ?></td>
      <td><?php echo $ord['email']; ?></td>
      <td><?php echo $ord['noidung']; ?></td>
    <?php
        };
    ?>
  </tbody>
</table>





<h2>Chi tiết đơn hàng</h2>
<table class="table">
  <thead>
    <tr>
   
      <th scope="col">id</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">số Lượng</th>
      <th scope="col">Đơn giá</th>
      <th scope="col">Thành tiền</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=0;
    $total=0;
        foreach($order_details as $key => $ord){
            $total=$ord['product_quanlity']*$ord['price_product'];
            $i++;
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $ord['title_product']; ?></td>
      <td> <img src="<?= BASE_URL ?>/public/uploads/product/<?= $ord['image_product'] ?>" style="width: 100px; height: 100px;" alt=""></td>
      <td><?php echo $ord['product_quanlity']; ?></td>
      <td><?php echo number_format($ord['price_product'],0,',','.'); ?>đ</td>
      
      <td><?php echo number_format( $ord['product_quanlity']*$ord['price_product'],0,',','.'); ?>đ</td>
    </tr>
    <?php
        };
    ?>
    <form action="<?php echo BASE_URL ?>/order/order_confirm/<?php echo $ord['order_code']?>" method="POST">
    <tr>
        <td><input type="submit" name="update_order" value="Đơn đã xử lý"></td>
        <td>Tổng tiền: <?php echo number_format($total,0,',','.'); ?>đ  </td>
    </tr>
    </form>
  </tbody>
</table>