<?php
  require_once('phpscripts/config.php');
  // confirm_logged_in();
  if(isset($_POST['submit'])) {
    $fname = trim($_POST['fname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $lvlist = trim($_POST['lvlist']);
    if(empty($lvlist)) {
      $message = "please select user leverl";

    }else{
      $result = createUser($fname, $username, $email, $password, $lvlist);
      $message= $result;
    }
  }
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>create user</title>
</head>
<body>
  <?php if (!empty($message)){echo $message; } ?>
  <form action="admin_create_user.php" method="post">
    <label>First name: </label>
    <input type="text" name="fname" value="">
    <label>Username: </label>
    <input type="text" name="username" value="">
    <label>Password</label>
    <input type="text" name="password" value="">
    <label>Email: </label>
    <input type="text" name="email" value="">
    <select  name="lvlist">
      <option value="">select user level</option>
      <option value="2">web admin</option>
      <option value="1">web master</option>
    </select>

    <input type="submit" name="submit" value="create user">

  </form>
</body>
</html>
