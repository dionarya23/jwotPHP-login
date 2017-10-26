<?php
use \Firebase\JWT\JWT;

class Jwot{

  public function encode($datas = [], $key){
    return JWT::encode($datas, $key);
  }

  public function decoded($hash, $key){
    $decoded = JWT::decode($hash, $key, array('HS256'));
    $decoded_array = (array) $decoded;
    return $decoded_array;
  }

}
