<?php

class categorymodel extends DModel{
 public function __construct(){
  parent:: __construct();
 }
 public function category($table){
  $sql="SELECT * FROM $table ORDER BY id_category_product DESC";
  return $this->db->select($sql);
  
 }
 public function categorybyid($table,$table_product,$id){
  $sql="SELECT * FROM $table,$table_product WHERE $table.id_category_product = $table_product.id_category_product
  AND $table_product.id_category_product ='$id' order by $table_product.id_product desc";
 return $this->db->select($sql);
 }

 public function insertcategory($table_category_product,$data){
  return $this->db->insert($table_category_product,$data);
 }



 public function updatecategory($table_category_product,$data,$cond){
    return $this->db->update($table_category_product,$data,$cond);
 }
 public function deletecategory($table_category_product,$cond){
    return $this->db->delete($table_category_product,$cond);
 }


 // quan ly danh muc bai viet

 public function insertcategory_post($table,$data){
   return $this->db->insert($table,$data);
  }
  public function post_category($table){
   $sql="SELECT * FROM $table ORDER BY id_category_post DESC";
   return $this->db->select($sql);
  }
  public function deletecategory_post($table_category_post,$cond){
   return $this->db->delete($table_category_post,$cond);
   }
   public function categorybyid_post($table, $cond){
      $sql="SELECT * FROM $table WHERE $cond";
   return $this->db->select($sql);
   }
   public function updatecategory_post($table_category_post,$data,$cond){
      return $this->db->update($table_category_post,$data,$cond);
   }

   //quản lý sản phẩm:
    
   public function insertproduct($table_product,$data){
      return $this->db->insert($table_product,$data);
     }
     public function product($table_product,$table_category){
      $sql="SELECT * FROM $table_product,$table_category WHERE $table_product.id_category_product = $table_category.id_category_product  ORDER BY $table_product.id_product DESC";
      return $this->db->select($sql);
      
     }
     public function deleteproduct($table, $cond){
      return $this->db->delete($table,$cond);
     }
     public function productbyid($table, $cond){
      $sql="SELECT * FROM $table WHERE $cond";
     return $this->db->select($sql);
     }
     public function updateproduct($table,$data,$cond){
      return $this->db->update($table,$data,$cond);
     }

   //   xuất tất cả sản phẩm ra web
   public function list_product($table_product){
      $sql="SELECT * FROM $table_product order by $table_product.id_product desc";
      return $this->db->select($sql);
   }

   public function details_product($table_product,$cond){
      $sql="SELECT * FROM $table_product WHERE $cond";
      return $this->db->select($sql);
   }
}