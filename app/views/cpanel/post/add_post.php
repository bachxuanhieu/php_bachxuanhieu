<?php
if(!empty($_GET['msg'])){
    $msg=unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
        echo '<span style="color:blue;">'.$value.'</span>';
    }
}

?>
<p>Thêm bài viết</p>
<form action="<?php echo BASE_URL ?>/post/insert_post" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">Tên bài viết</label>
    <input type="text" name="title_post" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Hình ảnh bài viết</label>
    <input type="file" name="image_post" class="form-control" >
  </div>

 
  <div class="mb-3">
    <label  class="form-label">Chi tiết bài viết</label>
   <textarea id="editor" name="content_post" id=""  rows="5" class="form-label"></textarea>
  </div>
  <div class="mb-3">
    <label  class="form-label">Danh mục  sản phẩm</label>
    <select name="category_product" id="" class="form-label">
      <?php
      foreach($category as $key => $cate){
      ?>
      <option value="<?php echo $cate['id_category_post'] ?>"><?php echo $cate['title_category_post'] ?></option>
      <?php
      }
      ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Thêm bài viết</button>
</form>
