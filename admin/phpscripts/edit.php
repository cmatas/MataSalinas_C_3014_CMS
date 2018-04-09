<?php

include('connect.php');

$tbl = $_POST['tbl'];
$col = $_POST['col'];
$id = $_POST['id'];
$img = $_FILES['movie_poster'];
if(empty($_FILES['movie_poster']['name'])){
  $img = $_POST['movie_poster'];
}


unset($_POST['tbl']);
unset($_POST['col']);
unset($_POST['id']);
unset($_POST['movie_thumb']);
unset($_POST['submit']);

if($img['type'] == "image/jpg" || $img['type'] == "image/jpeg"){ // important, the first thing says what it is, it is not the folder
    $targetpath = "../../images/{$img['name']}";

    if (move_uploaded_file($img['tmp_name'], $targetpath)) {
      // echo "file transfer complete";
      $th_copy = "../../images/th_{$img['name']}";
      if(!copy($targetpath, $th_copy)){
        $message = "It didn't work";
        return $message;
      }
      list( $width,$height ) = getimagesize($targetpath);
      $newwidth = 350;
      $newheight = 600;

      $thumb = imagecreatetruecolor( $newwidth, $newheight );
      $source = imagecreatefromjpeg($th_copy);

      imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
      imagejpeg( $thumb, $th_copy, 100 );

      $out_image=addslashes(file_get_contents($th_copy));

  }

}


$imgup = $img['name'];
$count = 0;
$num = count($_POST);

$qstring = "UPDATE {$tbl} SET "; //without the space it will break

foreach ($_POST as $key => $value) {
  $count++;
  if ($count != $num) {
    $qstring .= $key." = '".htmlspecialchars($value, ENT_QUOTES)."' , ";
  }else{
    $qstring .= $key." = '".htmlspecialchars($value, ENT_QUOTES)."' ";
  }
}
if (isset($img['name'])) {
  $qstring .= " , movie_poster = '".$imgup."', movie_thumb = 'th_".$imgup."' ";
}

$qstring .= "WHERE {$col}={$id}";

// echo $qstring;
$updatequery = mysqli_query($link, $qstring);

if($updatequery) {
  header("Location:../admin_index.php");
}else{
  echo "A problem has been found, try again lattteee";
}

mysqli_close($link);

 ?>
