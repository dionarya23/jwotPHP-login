<?php
require './vendor/autoload.php';

spl_autoload_register(function($class){
  require './class/'.$class.'.php';
});

$user = new User();
$base = new Basepath();
$jwot = new Jwot();
$maha = new Mahasiswa();
