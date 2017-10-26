<?php
require_once 'core/init.php';

$pesan = '';

if(!isset($_COOKIE['userData'])){
  header('Location: '.$base->base_url().'index.php');
}

if(isset($_POST['submit'])){
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];

  $data = array(
    'NIM' => $nim,
    'nama' => $nama
  );

  if($maha->insert($data)){
    header('Location: '.$base->base_url().'view.php');
  }else{
    $pesan = "Kesalahan Data";
  }
}

?>
<!doctype html>
<html>
<head>
  <title>Tambah Data</title>
</head>
<body>
<?php echo  $pesan; ?>
<h1>Tambah Data</h1>
<form action="" method="post">
Nim : <input type="number" name="nim">
Nama : <input type="text" name="nama">
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
