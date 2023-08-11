<?php

class Database extends PDO{
 public function __construct($connect,$user,$pass){
  parent:: __construct($connect,$user,$pass);
 }

 // lay du lieu tu bang co so du lieu
 public function select($sql,$data= array(), $fetchStyle = PDO::FETCH_ASSOC){
  $statement= $this->prepare($sql);
  foreach($data as $key=> $value){
   $statement->bindParam($key,$value);
  }
  $statement->execute();
  return $statement-> fetchAll($fetchStyle);
 }


 // insert vao bang
 public function insert($table,$data){

  $keys= implode(",",array_keys($data));
  $values=":".implode(", :",array_keys($data));

  $sql= "INSERT INTO $table($keys) VALUES ($values)";

  $statement =$this->prepare($sql);
  foreach($data as $key => $value){
   $statement->bindValue(":$key",$value);
  }

  return $statement->execute();
 }


 public function update($table, $data, $cond){
   if(empty($data) || !is_array($data) || empty($cond)) {
       return false;
   }

   $updateKeys = '';
   foreach($data as $key => $value) {
       $updateKeys .= "$key = :$key,";
   };
   $updateKeys = rtrim($updateKeys, ",");

   $sql = "UPDATE $table SET $updateKeys WHERE $cond";
   $statement = $this->prepare($sql);

   foreach($data as $key => $value) {
       // Sử dụng ràng buộc tham số để tránh SQL Injection
       $statement->bindValue(":$key", $value);
   }

   return $statement->execute();
}


 public function delete($table,$cond){
    $sql="DELETE FROM $table WHERE $cond ";
    return $this->exec($sql);
 }

 public function affectedRows($sql,$username,$password){
    $statement= $this->prepare($sql);
    $statement->execute(array($username,$password));
    return $statement->rowCount();
 }
 public function selectUser($sql,$username,$password){
   $statement= $this->prepare($sql);
    $statement->execute(array($username,$password));
    return $statement->fetchAll(PDO::FETCH_ASSOC);
 }


}