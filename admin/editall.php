<?php
  require_once('phpscripts/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>control room</title>
</head>
<body>
  <?php
    $tbl = "tbl_movies";
    $col = "movies_id";
    $id = 1;
    echo single_edit($tbl, $col, $id);
   ?>
</body>
</html>
