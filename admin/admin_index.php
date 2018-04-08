<?php
  require_once('phpscripts/config.php');
  confirm_logged_in();
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>YOLO</title>
</head>
<body>
    <h2><?php echo $_SESSION['user_name']; ?></h2>
    <a href="admin_create_user.php">create user</a>
    <a href="admin_edituser.php">Edit User</a>
    <a href="admin_deleteuser.php">delete User</a>
    <a href="phpscripts/caller.php?caller_id=logout">sign out</a>
</body>
</html>
