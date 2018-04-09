<?php
require_once('admin/phpscripts/config.php');
  if(isset($_GET['filter'])){
    $tbl = "tbl_movie";
    $tbl2 = "tbl_genre";
    $tbl3 = "tbl_mov_genre";
    $col = "movie_id";
    $col2 = "genre_id";
    $col3 = "genre_name";
    $filter = "action";
    $getMovies = filterResults($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
  }else{
    $tbl = "tbl_movie";
    $getMovies = getAll($tbl);
    //echo $getMovies;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rombus</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="contianer">
		<div class="row">
	<?php
	if(!is_string($getMovies)){
    while($row = mysqli_fetch_array($getMovies)){
      echo "
			<div class=\"col-sm-6 col-md-3 col-lg-3\">
			<img class=\"img-responsive\" src=\"images/{$row['movie_poster']}\" alt=\"{$row['movie_name']}\">
      <h2>{$row['movie_name']}</h2>
      <p>{$row['movie_year']}</p>
      <a href=\"details.php?id={$row['movie_id']}\">More details...</a><br><br>
			</div>";// con el a tag te lleva al details.php
    }
  }else{
    echo "<p class=\"error\">{$getMovies}</p>"; // <-- the \" cancels out the quotation mark
  }
	 ?>

 </div>
</div>

  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>
