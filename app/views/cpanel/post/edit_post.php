<?php
if(!empty($_GET['msg'])){
    $msg=unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
        echo '<span style="color:blue;">'.$value.'</span>';
    }
}

?>
<p>Chỉnh sửa sản phẩm</p>
<?php
foreach($productbyid as $key => $pro){
?>
<form action="<?php echo BASE_URL ?>/product/update_product/<?php echo $pro['id_product']?>" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">Tên sản phẩm</label>
    <input type="text" value="<?php echo $pro['title_product']?>" name="title_product" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Hình ảnh sản phẩm</label>
    <input type="file" name="image_product" class="form-control" >
    <p> <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image_product']; ?>" height="100" width="100" alt=""> </p>
  </div>
  <div class="mb-3">
    <label  class="form-label">Giá sản phẩm</label>
    <input type="text" value="<?php echo $pro['price_product']?>" name="price_product" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Số lương  sản phẩm</label>
    <input type="text" value="<?php echo $pro['quanlity_product']?>" name="quanlity_product" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Miêu tả sản phẩm</label>
   <textarea name="desc_product" id=""  rows="5" class="form-label"><?php echo $pro['desc_product']?></textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">Danh mục  sản phẩm</label>
    <select name="category_product" id="" class="form-label">
      <?php
      foreach($category as $key => $cate){
      ?>
      <option <?php if($pro['id_category_product']==$cate['id_category_product']){ echo 'selected';}?>
       value="<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></option>
      <?php
      }
      ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Chỉnh sửa sản phẩm</button>
</form>
<?php
}
?>