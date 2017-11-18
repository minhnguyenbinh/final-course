 <?php require_once "../../../db/mysql.php" ;?>
<?php require_once "../../helper/user-helper.php" ;?>
<?php session_start(); ?>
<?php
if(isset($_POST["name"]) && isset($_POST["description"])){
  $name = $_POST["name"];
  $description = $_POST["description"];

  if(checkEmailExist($name)){
    $_SESSION["flash"] = "Name was existted.";
  }else{
    $sql = "insert into catalogs(name,description) values('$name','$description')";
    $result = $conn->query($sql);
  if ($result) {
    $_SESSION["flash"] = "new record add success";
  }else{
    $_SESSION["flash"] = "error : ".sql."<br>".$conn->error;
  }
}

header("location: new.php");
}
?>
