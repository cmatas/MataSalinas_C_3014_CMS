<?php
  require_once('phpscripts/config.php');
  $result = multireturns(17);
  list($add, $multiply) = multireturns(2450);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>welcome to the admin panel login</title>
</head>
<body>
  <?php
  echo "Result 1: {$result[0]} <br>";
  echo "Result 2: {$result[1]} <br>";
  echo "Result 1 from list: {$add} <br>";
  echo "Result 2 from list: {$multiply}";
   ?>
</body>
</html>
