<?php
if(!empty($_GET['msg'])){
    $msg=unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
        echo '<span style="color:blue;">'.$value.'</span>';
    }
}

?>
<p>Thêm danh mục sản phẩm</p>
<form action="<?php echo BASE_URL ?>/product/insert_category" method="POST">
  <div class="mb-3">
    <label  class="form-label">Tên danh mục sản phẩm</label>
    <input type="text" name="title_category_product" class="form-control" >
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Miêu tả danh mục</label>
    <input  type="text" name="desc_category_product" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Thêm danh mục sản phẩm</button>
</form>
