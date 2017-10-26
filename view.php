<?php
require_once 'core/init.php';

if(!isset($_COOKIE['userData'])){
  header("Location: ".$base->base_url()."index.php");
}

$dataUser  = $jwot->decoded($_COOKIE['userData'], $_COOKIE['key']);
$mahasiswa = $maha->select();

?>

<!doctype html>
<html>
<head>
  <title>Hallo <?php echo $dataUser['username']; ?> </title>
</head>
<body>

  <table border="1">
    <tr>
      <th>NIM</th>
      <th>Nama</th>
    </tr>
    <?php foreach ($mahasiswa as $m): ?>
    <tr>
      <td><?=$m->NIM;?></td>
      <td><?=$m->Nama;?></td>
    </tr>
  <?php endforeach; ?>
  </table>

<br>
    Untuk Tambah Data Silahkan Klik -> <a href="<?php echo $base->base_url()."add.php"; ?>">Tambah</a>

</body>
</html>
