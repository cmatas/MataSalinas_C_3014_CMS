<?php

	function getAll($tbl) {
		include('connect.php');
		$queryAll = "SELECT * FROM {$tbl}";
		$runAll = mysqli_query($link, $queryAll);
		// echo $queryAll;
		if($runAll){
				return $runAll;
		}else{
			$error = "Something has broken!";
			return $error;
		}

		mysqli_close($link);
	}

	function getSingle($tbl, $col, $id) {
		include('connect.php');
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
		// echo $querySingle;
		$runSingle = mysqli_query($link, $querySingle);

		if($runSingle){
			return $runSingle;
		}else{
			$error = "Would you try again later? Site's broken now..";
			return $error;
		}

		mysqli_close($link);
	}

	function filterResults($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter) {
			include('connect.php');
			// $tbl = "tbl_movies";
			// $tbl2 = "tbl_genre";
			// $tbl3 = "tbl_mov_genre";
			// $col = "movies_id";
			// $col2 = "genre_id";
			// $col3 = "genre_name";
			// $filter = "action";
			$filterQuery = "SELECT * FROM {$tbl}, {$tbl2}, {$tbl3} WHERE {$tbl}.{$col} = {$tbl3}.{$col} AND {$tbl2}.{$col2} = {$tbl3}.{$col2} AND {$tbl2}.{$col3} = '{$filter}'";
			// echo $filterQuery;
			$runQuery = mysqli_query($link, $filterQuery);
			if($runQuery){
				return $runQuery;
			}else{
				$error = "There was a problem accessing this information. So sorry";
 			return $error;
		}
		mysqli_close($link);
	}

	function deletemovie($id) {
	  include('connect.php');
	  $delstring = "DELETE FROM tbl_movie WHERE movie_id = {$id}";
	  $delquery = mysqli_query($link, $delstring);
	  if ($delquery) {
	    redirect_to("../admin_index.php");
	  }else{
	    $message = "Bye";
	    return $message;
	  }
	  mysqli_close($link);
	}


?>
