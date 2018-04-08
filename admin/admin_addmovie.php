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
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<title>Add movie / CMS</title>
<style media="screen">
  .formDiv {
    margin-top: 7%;
  }
  a {
    float: right;
  }
  h2 {
    float: left;
    margin-bottom: 40px;
  }
  .header {
    clear: both;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 formDiv">
      <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 header"> -->
        <h2>Add a movie</h2>
      <!-- </div> -->
      <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> -->
        <!-- <a href="admin_index">Back</a> -->
      <!-- </div> -->
  <?php if(!empty($message)){ echo $message; } ?>
    <form action="admin_addmovie.php" method="post" enctype="multipart/form-data"> <!-- expects other than just text -->
      <label for="">Title</label>
      <input type="text" name="title" value=""><br><br>
      <label for="">Year</label>
      <input type="text" name="year" value=""><br><br>
      <label for="">Runtime</label>
      <input type="text" name="runtime" value=""><br><br>
      <label for="">Synopsis</label>
      <input type="text" name="storyline" value=""><br><br>
      <label for="">Trailer</label>
      <input type="text" name="trailer" value=""><br><br>
      <label for="">Release date</label>
      <input type="text" name="release" value=""><br><br>
      <label for="">Poster</label>
      <input type="file" name="cover" value=""><br>

      <select name="genList">
        <option value="">Genre</option>
        <?php
        while($row = mysqli_fetch_array($genQuery)){
          echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
        }
         ?>
      </select>
      <input type="submit" name="submit" id="submit" value="ADD">
    </form>
  </div>
</div>

</body>
</html>
