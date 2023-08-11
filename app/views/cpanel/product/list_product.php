<?php
if(!empty($_GET['msg'])){
    $msg=unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
        echo '<span style="color:blue;">'.$value.'</span>';
    }
}

?>

<h2>Danh sách Sản Phẩm</h2>
<table class="table">
  <thead>
    <tr>
   
      <th scope="col">id</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Danh mục</th>
      <th scope="col">Giá</th>
      <th scope="col">Số lương </th>
 
   
      <th scope="col">Quản lý</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=0;
        foreach($product as $key => $pro){
            $i++;
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $pro['title_product']; ?></td>
      <td> <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image_product']; ?>" height="100" width="100" alt=""> </td>
      <td><?php echo $pro['title_category_product']; ?></td>
      <td><?php echo number_format($pro['price_product'],0,',','.').' đ'; ?></td>
    
      <td><?php echo $pro['quanlity_product']; ?></td>
      <td><a href="<?php echo BASE_URL ?>/product/delete_product/<?php echo $pro['id_product']?>">Xoa</a> || <a href="<?php echo BASE_URL ?>/product/edit_product/<?php echo $pro['id_product']?>">Cap nhat</a></td>
    </tr>
    <?php
        };
    ?>
  </tbody>
</table>