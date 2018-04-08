<?php
function single_edit($tbl, $col, $id) {

  $result = getSingle($tbl, $col, $id);
  // $getResult = mysqli_fetch_array($result);

  echo "<form action=\"phpscripts/edit.php\" method=\"post\" enctype=\"multipart/form-data\">";

    echo "<input hidden name=\"tbl\" value=\"{$tbl}\">";
    echo "<input hidden name=\"col\" value=\"{$col}\">";
    echo "<input hidden name=\"id\" value=\"{$id}\">";

    // for($i=0; $i<mysqli_num_fields($result); $i++) {
      $dataType = mysqli_fetch_field_direct($result, $i);
      $fieldName = $dataType->name; // kinda like something inside of an array
      $fieldType = $dataType->type;

    echo "<label for=\"\">Title</label>
          <input type=\"text\" name=\"title\" value=\"{$getResult['movie_name']}\"><br><br>
          <label for=\"\">Year</label>
          <input type=\"text\" name=\"year\" value=\"{$getResult['movie_year']}\"><br><br>
          <label for=\"\">Runtime</label>
          <input type=\"text\" name=\"runtime\" value=\"{$getResult['movie_runtime']}\"><br><br>
          <label for=\"\">Synopsis</label>
          <input type=\"text\" name=\"storyline\" value=\"{$getResult['movie_synopsis']}\"><br><br>
          <label for=\"\">Trailer</label>
          <input type=\"text\" name=\"trailer\" value=\"{$getResult['movie_trailer']}\"><br><br>
          <label for=\"\">Release date</label>
          <input type=\"text\" name=\"release\" value=\"{$getResult['movie_release']}\"><br><br>
          <label for=\"\">Poster</label>
          <img class=\"img-responsive\" src=\"../images/{$getResult['movie_poster']}\" alt=\"{$getResult[$i]}\">
          <input type=\"file\" name=\"cover\" value=\"\"><br>

          <select name=\"genList\">
            <option value=\"\">Genre</option>";

            while($row = mysqli_fetch_array($genQuery)){
              echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
            }
          // }

        echo"</select>";
    echo "<input type=\"submit\" name=\"submit\" id=\"submit\" value=\"Save changes\">";
		echo "</form>";
  }
 ?>
