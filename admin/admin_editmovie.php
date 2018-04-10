<?php
  require_once('phpscripts/config.php');
  confirm_logged_in();

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
  textarea {
    color: black;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="row formDiv">
      <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 header"> -->
      <div class="row">
        <h2>Edit a movie</h2>
        <?php
        // if(isset($_POST['submit'])){
        //         $tbl = $_POST['tbl'];
        //         $col = $_POST['col'];
        //         $id = $_POST['id'];
        //         // $img = $_FILE[$tbl.'_img'];
        //         echo "<h2 class=\"sectionTitle\">Edit</h2>";
        //         $redult = single_edit($tbl, $col, $id);
        //         // $imgadded = addimg($img);
        //       }
        ?>

      </div>
        <div class="row">
      <?php
      while ($row = mysqli_fetch_array($getMovies)) {
        echo "<div class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3\">

            <img class=\"img-responsive\" src=\"../images/{$row['movie_poster']}\" alt=\"{$row['movie_name']}\"><br>
            <a href=\"admin_editmovie_form.php?id={$row['movie_id']}\">Edit</a><br><br>
          </div>";
         }
       ?>
      </div>



      <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> -->
        <!-- <a href="admin_index">Back</a> -->
      <!-- </div> -->
  </div>
</div>

</body>
</html>
