  <?php
  function addMovie($cover, $title, $runtime, $storyline, $trailer, $release, $year, $genre) {
    include ('connect.php');
    if($cover['type'] == "image/jpg" || $cover['type'] == "image/jpeg"){ // important, the first thing says what it is, it is not the folder
    $targetpath = "../images/{$cover['name']}";

    if (move_uploaded_file($cover['tmp_name'], $targetpath)) {
      // echo "file transfer complete";
      $th_copy = "../images/th_{$cover['name']}";
      if(!copy($targetpath, $th_copy)){
        $message = "It didn't work";
        return $message;
      }
      // add to database
      $covname = $cover['name'];
      $qstring = "INSERT INTO tbl_movie VALUES(NULL, '{$covname}', '{$title}', '{$year}', '{$runtime}', '{$storyline}', '{$trailer}', '{$release}')";
      $result = mysqli_query($link, $qstring);
      // echo $qstring;
      if($result) {
        $qstring2 = "SELECT * FROM tbl_movie ORDER BY movie_id DESC LIMIT 1";
        $result2 = mysqli_query($link, $qstring2);

        $row = mysqli_fetch_array($result2);
        $lastID = $row['movies_id'];
        // echo $lastID;
        $qstring3 = "INSERT INTO tbl_movie_genre VALUES(NULL, {$lastID}, {$genre})";
        $result3 = mysqli_query($link, $qstring3);
      }
      redirect_to("admin_index.php");
    }
  }else{
    echo "Sorry, no can do";
  }
    // $size = getimagesize($targetpath);
    // echo $size[1]; // check the php.net for getimagesize
    list( $width,$height ) = getimagesize($targetpath);
    $newwidth = 350;
    $newheight = 350;

    $thumb = imagecreatetruecolor( $newwidth, $newheight );
    $source = imagecreatefromjpeg($th_copy);

    imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    imagejpeg( $thumb, $th_copy, 100 );

    $out_image=addslashes(file_get_contents($th_copy));
}
?>
