<?php
  function is_empty($name, $description){
    if(strlen(trim($name)) ==0){
      $_SESSION["flash"] = $description;
      return true;
    }
    return false;
  }
  function is_exist_name($name){
    $sql = "select * from catalog where name='$name'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if ($result->num_row >0){
      return true;
    }
    return false;
  }
?>
