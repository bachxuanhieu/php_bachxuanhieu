<?php
if(!empty($_GET['msg'])){
    $msg=unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
        echo '<span style="color:blue;">'.$value.'</span>';
    }
}

?>

<h2>Danh sách bài viết</h2>
<table class="table">
  <thead>
    <tr>
   
      <th scope="col">id</th>
      <th scope="col">Tên bài viết</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Nôi dụng</th>
      <th scope="col">Quản lý</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=0;
        foreach($post as $key => $pos){
            $i++;
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $pos['title_post']; ?></td>
      <td> <img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $pos['image_post']; ?>" height="100" width="100" alt=""> </td>
      <td><?php echo $pos['title_category_post']; ?></td>
      <td><?php echo $pos['content_post'] ?></td> 
      <td><a href="<?php echo BASE_URL ?>/post/delete_post/<?php echo $pos['id_post']?>">Xoa</a> || <a href="<?php echo BASE_URL ?>/post/edit_post/<?php echo $pos['id_post']?>">Cap nhat</a></td>
    </tr>
    <?php
        };
    ?>
  </tbody>
</table>