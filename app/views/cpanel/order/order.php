<?php
if(!empty($_GET['msg'])){
    $msg=unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
        echo '<span style="color:blue;">'.$value.'</span>';
    }
}

?>

<h2>Danh mục đơn hàng</h2>
<table class="table">
  <thead>
    <tr>
   
      <th scope="col">id</th>
      <th scope="col">Code đơn hàng</th>
      <th scope="col">Ngày đặt</th>
      <th scope="col">Tình trạng đơn hàng</th>
      <th scope="col">Quản lý</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=0;
        foreach($order as $key => $ord){
            $i++;
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $ord['order_code']; ?></td>
      <td><?php echo $ord['order_date']; ?></td>
      <td><?php if($ord['order_status']==0){
        echo "Đơn hàng mới";
    }else{ echo 'Đơn hàng đã xử lý';}
        ; ?>
        </td>
        <td><a href="<?php echo BASE_URL ?>/order/order_details/<?php echo $ord['order_code']?>">Xem đơn hàng</a></td>
    </tr>
    <?php
        };
    ?>
  </tbody>
</table>