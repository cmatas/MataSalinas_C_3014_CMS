<?php
  require_once('phpscripts/config.php');

  $tbl = "tbl_genre";
  $genQuery = getAll($tbl);
  // echo $genQuery;

  if(isset($_POST['submit'])){
    $cover = $_FILES['cover']; //because its a file
    $title = $_POST['title'];
    $runtime = $_POST['runtime'];
    $storyline = $_POST['storyline'];
    $trailer = $_POST['trailer'];
    $release = $_POST['release'];
    $year = $_POST['year'];
    $genre = $_POST['genList'];
    $result = addMovie($cover, $title, $runtime, $storyline, $trailer, $release, $year, $genre);
    $message = $result;
    // echo $cover['type'];
    // echo $cover['name'];
    // echo $cover['tmp_name'];
    // echo $cover['size'];
    }
  // }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>welcome to the admin panel login</title>
</head>
<body>
  <?php if(!empty($message)){ echo $message; } ?>
    <form action="admin_addmovie.php" method="post" enctype="multipart/form-data"> <!-- expects other than just text -->
      <label>cover image</label>
      <input type="file" name="cover" value=""><br><br>
      <label for="">movie title</label>
      <input type="text" name="title" value=""><br>
      <label for="">movie year</label>
      <input type="text" name="year" value=""><br>
      <label for="">movie runtime</label>
      <input type="text" name="runtime" value=""><br>
      <label for="">movie storyline</label>
      <input type="text" name="storyline" value=""><br>
      <label for="">movie trailer</label>
      <input type="text" name="trailer" value=""><br>
      <label for="">movie release</label>
      <input type="text" name="release" value=""><br>
      <select name="genList">
        <option value="">select a genre</option>
        <?php
        while($row = mysqli_fetch_array($genQuery)){
          echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
        }
         ?>
      </select>
      <input type="submit" name="submit" value="add movie">
    </form>

</body>
</html>
