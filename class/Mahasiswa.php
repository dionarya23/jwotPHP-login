<?php
use PirloDB\Database;

class Mahasiswa {

  private $db;

  public function __construct(){
    $this->db = Database::getInstance('localhost', 'root', '', 'cl_mahasiswa');
    $this->db->setTable('mahasiswa');
  }

  public function __clone(){
    return false;
  }

  public function select(){
    $result = $this->db->select()->all();

    return $result;
  }

  public function select_one($where){

    if($where == "Nama"){
      $result = $this->db->where('Nama', '=', "$where")->first();
    }else{
      $result = $this->db->where('NIM', '=', "$where")->first();
    }

    return $result;
  }

  public function insert($data = array()){
    $this->db->create($data);
    return true;
  }

  public function update($where, $data = array()){

      if($where == 'Nama'){
        $this->db->where('Nama', '=', "$where")->update($data);
      }else{
        $this->db->where('NIM', '=', "$where")->update($data);
      }

      return true;
  }

  public function delete($where){
    $test->where('NIM', '=', "$where")->delete();
  }


}
