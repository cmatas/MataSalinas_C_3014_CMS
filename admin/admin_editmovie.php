<?php
  require_once('phpscripts/config.php');

    $tbl = "tbl_movie";
    $getMovies = getAll($tbl);

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
    <div class="row formDiv">
      <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 header"> -->
      <div class="row">
        <h2>Edit a movie</h2>
      </div>
        <div class="row">
      <?php
      while ($row = mysqli_fetch_array($getMovies)) {
        echo "<div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\">
        <form class=\"factImg\" style=\"display: inline-block;\" action=\"editall.php\" method=\"post\">
            <img class=\"img-responsive\" src=\"../images/{$row['movie_poster']}\" alt=\"{$row['movie_name']}\"><br>
            <input hidden type=\"hidden\" name=\"tbl\" value=\"{$tbl}\">
            <input hidden type=\"hidden\" name=\"col\" value=\"movie_id\">
            <input hidden type=\"hidden\" name=\"id\" value=\"{$row['movie_id']}\">
            <input class=\"button\" type=\"submit\" name=\"submito\" value=\"EDIT\">
          </form>
          </div>";
         }
       ?>
      </div>

      <?php
  if(isset($_POST['submit'])){
    $tbl = $_POST['tbl'];
    $col = $_POST['col'];
    $id = $_POST['id'];
    // $img = $_FILE[$tbl.'_img'];
    // echo "<h1 class=\"sectionTitle\">Edit</h1>";
    $redult = single_edit($tbl, $col, $id);
    $imgadded = addimg($img);
//     $tbl = "tbl_movie";
// $col = "movie_id";
// $id = 1;
// echo single_edit($tbl, $col, $id);

  }
  ?>


      <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> -->
        <!-- <a href="admin_index">Back</a> -->
      <!-- </div> -->
  </div>
</div>

</body>
</html>
