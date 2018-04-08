<?php

function createUser($fname, $username, $email, $password, $lvlist) {
  include('connect.php');
  $uperstring = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$password}', '{$email}', NULL, '{$lvlist}', 'no')";
  // echo $uperstring;
  $userquery = mysqli_query($link, $uperstring);
  if($userquery) {
    redirect_to('admin_index.php');
  }else{
    $message = "you goofed mens";
    return $message;
  }

  mysqli_close($link);
}

function edituser($id, $fname, $username, $password, $email) {
  include('connect.php');

  $updatestring = "UPDATE tbl_user SET user_fname = '{$fname}' AND user_pass = '{$password}' AND user_name = '{$username}' AND user_email = '{$email}' WHERE user_id={$id}";
  // echo $updatestring;
  $updatequery = mysqli_query($link, $updatestring);

  if($updatequery) {
    redirect_to("admin_index.php");
  } else {
    $message = "guess you got canned";
    return $message;
  }

  mysqli_close($link);
}

function deleteuser($id) {
  include('connect.php');
  $delstring = "DELETE FROM tbl_user WHERE user_id = {$id}";
  $delquery = mysqli_query($link, $delstring);
  if ($delquery) {
    redirect_to("../admin_index.php");

  }else{
    $message = "bye";
    return $message;
  }

  mysqli_close($link);
}
?>
