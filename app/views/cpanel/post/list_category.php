<?php
if(!empty($_GET['msg'])){
    $msg=unserialize(urldecode($_GET['msg']));
    foreach($msg as $key => $value){
        echo '<span style="color:blue;">'.$value.'</span>';
    }
}

?>

<h2>Danh muc bai viet</h2>
<table class="table">
  <thead>
    <tr>
   
      <th scope="col">id</th>
      <th scope="col">Ten danh muc bai viet</th>
      <th scope="col">Mo ta danh muc</th>
      <th scope="col">Quan ly</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=0;
        foreach($category as $key => $cate){
            $i++;
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $cate['title_category_post']; ?></td>
      <td><?php echo $cate['desc_category_post']; ?></td>
      <td><a href="<?php echo BASE_URL ?>/post/delete_category/<?php echo $cate['id_category_post']?>">Xoa</a> || <a href="<?php echo BASE_URL ?>/post/edit_category/<?php echo $cate['id_category_post']?>">Cap nhat</a></td>
    </tr>
    <?php
        };
    ?>
  </tbody>
</table>