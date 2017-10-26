<?php
use PirloDB\Database;

class User {

  private $db;

  public function __construct(){
    $this->db = Database::getInstance('localhost', 'root', '', 'cl_mahasiswa');
    $this->db->setTable('users');
  }

  public function daftar($data = []){
      $this->db->create($data);
      return true;

  }

  public function masuk($username, $password){
    $result = $this->db->where('username', '=', "$username")->first();

    if( password_verify($password, $result->passsword) ){
      return true;
    }else{
      return false;
    }

  }


}
