<?php
  function checkEmailExist($email){
    $sql = "select * from users where email='$email'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if ($result->num_row >0)
      return true;
    return false;
  }
?>
