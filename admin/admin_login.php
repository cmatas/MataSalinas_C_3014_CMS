<?php
  require_once('phpscripts/config.php');
  $ip = $_SERVER['REMOTE_ADDR'];// if asked, you can make sure that the only place where you can access the info is IN THE OFFICE
  // echo $ip;
  if(isset($_POST['submit'])){
    // echo "works";
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if($username !== "" && $password !== ""){ // == not identical to
      $result = logIn($username, $password, $ip);
      $message = $result;
    }else{
      $message = "Please fill out the required (ALL) fields";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>welcome to the admin panel login</title>
</head>
<body>
  <?php if(!empty($message)){ echo $message; } ?>
    <form action="admin_login.php" method="post">
      <label for="">User:</label>
      <input type="text" name="username" value=""><br><br>
      <label for="">Password:</label>
      <input type="password" name="password" value=""><br>
      <input type="submit" name="submit" value="SHOW THE MONEY">
    </form>
    <a href="admin_create_user.php">create user</a>

</body>
</html>
