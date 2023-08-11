<?php

class customermodel extends DModel{
 public function __construct(){
  parent:: __construct();
 }
//  public function category($table){
//   $sql="SELECT * FROM $table ORDER BY id_category_product DESC";
//   return $this->db->select($sql);
  
//  }
//  public function categorybyid($table,$table_product,$id){
//   $sql="SELECT * FROM $table,$table_product WHERE $table.id_category_product = $table_product.id_category_product
//   AND $table_product.id_category_product ='$id' order by $table_product.id_product desc";
//  return $this->db->select($sql);
//  }

//  insert dữ liệu vào trang bang đăng ký 
 public function insertcustomer($table_customers,$data){
  return $this->db->insert($table_customers,$data);
 }

 public function login($table_customers,$username,$password){
    $sql="SELECT * FROM $table_customers WHERE customers_name=? AND customers_password=?";
    return $this->db->affectedRows($sql,$username,$password);
   }
   public function getLogin($table_customers,$username,$password){
      $sql="SELECT * FROM $table_customers WHERE customers_name=? AND customers_password=?";
      return $this->db->selectUser($sql,$username,$password);
   }

//  public function updatecategory($table_category_product,$data,$cond){
//     return $this->db->update($table_category_product,$data,$cond);
//  }
//  public function deletecategory($table_category_product,$cond){
//     return $this->db->delete($table_category_product,$cond);
//  }


}