<?php
if(!empty($_GET['msg'])){
    $msg=unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
        echo '<span style="color:blue;">'.$value.'</span>';
    }
}

?>
<p>Thêm sản phẩm</p>
<form action="<?php echo BASE_URL ?>/product/insert_product" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">Tên sản phẩm</label>
    <input type="text" name="title_product" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Hình ảnh sản phẩm</label>
    <input type="file" name="image_product" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Giá sản phẩm</label>
    <input type="text" name="price_product" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Số lương  sản phẩm</label>
    <input type="text" name="quanlity_product" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Miêu tả sản phẩm</label>
   <textarea id="editor" name="desc_product" id=""  rows="5" class="form-label"></textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">Danh mục  sản phẩm</label>
    <select name="category_product" id="" class="form-label">
      <?php
      foreach($category as $key => $cate){
      ?>
      <option value="<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></option>
      <?php
      }
      ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Thêm  sản phẩm</button>
</form>
