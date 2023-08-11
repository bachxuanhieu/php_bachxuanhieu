<?php

class postmodel extends DModel{
 public function __construct(){
  parent:: __construct();
 }
 public function category_post($table){
  $sql="SELECT * FROM $table ORDER BY id_category_post DESC";
  return $this->db->select($sql);
  
 }
 public function insertpost($table,$data){
    return $this->db->insert($table,$data);
}
public function post($table_post,$table_category){
   $sql="SELECT * FROM $table_post,$table_category WHERE $table_post.id_category_post = $table_category.id_category_post  ORDER BY $table_post.id_post DESC";
   return $this->db->select($sql);
   
  }

  public function deletepost($table, $cond){
   return $this->db->delete($table,$cond);
  }


}