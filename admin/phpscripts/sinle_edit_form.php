<?php
  function single_edit($tbl, $col, $id) {

    $result = getSingle($tbl, $col, $id);
    $getResult = mysqli_fetch_array($result);

    echo "<form action=\"phpscripts/edit.php\" method=\"post\" enctype=\"multipart/form-data\">";

    echo "<input hidden name=\"tbl\" value=\"{$tbl}\">";
    echo "<input hidden name=\"col\" value=\"{$col}\">";
    echo "<input hidden name=\"id\" value=\"{$id}\">";

    // echo mysqli_num_fields($result);
    for($i=0; $i<mysqli_num_fields($result); $i++) {
      $dataType = mysqli_fetch_field_direct($result, $i);
      $fieldName = $dataType->name; // kinda like something inside of an array
      $fieldType = $dataType->type;

      if($fieldName != $col){
        echo "<label>{$fieldName}</label><br>";

        if($fieldName == "movie_poster"){
          echo "<img style=\"width: 250px;\" src=\"../images/{$getResult[$i]}\">";
          echo "<input type=\"file\" name=\"{$fieldName}\" value=\"{$getResult[$i]}\"><br><br>";
          // echo "<input hidden name=\"{$fieldName}\" value=\"{$getResult[$i]}\"><br><br>";

        }elseif($fieldName == "movie_thumb"){
          echo "<input hidden name=\"{$fieldName}\" value=\"{$getResult[$i]}\"><br><br>";
      }elseif($fieldType != "252"){
          echo "<input type=\"text\" name=\"{$fieldName}\" value=\"{$getResult[$i]}\"><br><br>";
        }else {
          echo "<textarea name=\"{$fieldName}\">{$getResult[$i]}</textarea><br><br>";
        }
      }

      // echo $fieldName."<br>";
      // echo $fieldType."<br>";
    }
    echo "<input id=\"submit\" style=\"padding-right:100px;\" type=\"submit\" name=\"submit\" value=\"Save Content\">";
		echo "</form>";
  }
 ?>
