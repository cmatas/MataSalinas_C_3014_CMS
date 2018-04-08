<?php
  require_once('phpscripts/config.php');
  // confirm_logged_in();

  $tbl = "tbl_user";
  $users = getAll($tbl);
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>delete</title>
</head>
<body>
    <h2>le death</h2>
    <?php
      while($row = mysqli_fetch_array($users)) {
        echo "{$row['user_fname']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\"> fired</a><br>";
      }

     ?>
</body>
</html>
