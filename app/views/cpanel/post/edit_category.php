<?php
if(!empty($_GET['msg'])){
    $msg=unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
        echo '<span style="color:blue;">'.$value.'</span>';
    }
}

?>
<p>Chinh sua danh mục bai viet</p>
<?php
foreach($categorybyid as $key => $cate){
?>
<form action="<?php echo BASE_URL ?>/post/update_post/<?php echo $cate['id_category_post'] ?>" method="POST">
  <div class="mb-3">
    <label  class="form-label">Tên danh mục sản phẩm</label>
    <input type="text" value="<?php echo $cate['title_category_post'] ?>" name="title_category_post" class="form-control" >
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Miêu tả danh mục</label>
    <input type="text" value="<?php echo $cate['desc_category_post'] ?>"  name="desc_category_post" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Chinh sua danh mục bai viet</button>
</form>

<?php
};
?>
