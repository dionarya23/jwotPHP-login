<?php
require_once __DIR__. '/core/init.php';

if(isset($_COOKIE['userData'])){
  header("Location: ".$base->base_url()."view.php");
}

$pesan = '';

if(isset($_POST['submit'])){

    $datas = array(
      'nama'     => $_POST['nama'],
      'username' => $_POST['username'],
      'passsword' => password_hash($_POST['pass'], PASSWORD_DEFAULT)
    );


    if($user->daftar($datas)){
      header('Location: '.$base->base_url().'index.php');
    }else{
      $pesan = "Maaf Gagal Mendaftar";
    }

}

 ?>
<!dotype html>
<html>
<head>
  <title>Daftar Disini</title>
</head>
<body>

<?php echo $pesan; ?>

<h1>Daftar Disini</h1>
<form method="post">
  Nama     : <input name="nama" type="text"><br>
  Username : <input name="username" type="text"><br>
  Password : <input name="pass" type="password">
  <input type="submit" name="submit" value="DAFTAR">
</form>


</body>
</html>
