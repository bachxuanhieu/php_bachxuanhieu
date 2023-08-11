<?php
if(!empty($_GET['msg'])){
    $msg=unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
        echo '<span style="color:blue;">'.$value.'</span>';
    }
}

?>
<p>Chinh sua danh mục sản phẩm</p>
<?php
foreach($categorybyid as $key => $cate){
?>
<form action="<?php echo BASE_URL ?>/product/update_category_product/<?php echo $cate['id_category_product'] ?>" method="POST">
  <div class="mb-3">
    <label  class="form-label">Tên danh mục sản phẩm</label>
    <input type="text" value="<?php echo $cate['title_category_product'] ?>" name="title_category_product" class="form-control" >
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Miêu tả danh mục</label>
    <input type="text" value="<?php echo $cate['desc_category_product'] ?>"  name="desc_category_product" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Chinh sua danh mục sản phẩm</button>
</form>

<?php
};
?>
