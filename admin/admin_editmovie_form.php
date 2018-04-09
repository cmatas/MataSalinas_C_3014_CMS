<?php
  require_once('phpscripts/config.php');
  $tbl = "tbl_genre";
  $genQuery = getAll($tbl);


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
      </div>
      <div class="row">
        <?php
        if(isset( $_GET['id'])) {
      		//get the movie
      		$tbl = "tbl_movie";
      		$col = "movie_id";
      		$id = $_GET['id'];
      		$getMovie = single_edit($tbl, $col, $id);
      	}
    	 ?>
     </div>
      <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> -->
        <!-- <a href="admin_index">Back</a> -->
  </div>
</div>

</body>
</html>
