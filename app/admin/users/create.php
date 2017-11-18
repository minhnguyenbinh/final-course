 <?php require_once "../../../db/mysql.php" ;?>
<?php require_once "../../helper/user-helper.php" ;?>
<?php session_start(); ?>
<?php
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["role"])){
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$role = $_POST["role"];

if(checkEmailExist($email)){
$_SESSION["flash"] = "Email was existted.";
}else{
$sql = "insert into users(name,email,password,role) values('$name','$email','$password','$role')";
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
