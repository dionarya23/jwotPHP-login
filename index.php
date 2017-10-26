<?php
require_once 'core/init.php';
$pesan = '';

  if(isset($_COOKIE['userData'])){
    header("Location: ".$base->base_url()."view.php");
  }

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass     = $_POST['password'];

    if($user->masuk($username, $pass)){
      $key = md5(utf8_encode('hello'));
      $dataUser = array(
          'username' => $username
      );

      $jwt = $jwot->encode($dataUser, $key);
      setcookie('userData', $jwt, time() + (86400 * 30));
      setcookie('key', $key, time() + (86400 * 30));
      header('Location: '.$base->base_url().'view.php');
    }else{
      $pesan = "Gagal login Cuy :v";
    }


  }

?>

<!doctype html>
<html>
<head>
  <title>Login Disini</title>
</head>
<body>
<?php echo $pesan; ?>
<h1>Login Disini</h1>

<form method="post">
Username : <input type="text" name="username">
Password : <input type="password" name="password">
<input type="submit" name="submit" value="LOGIN">
</form>

  </html>
</body>
