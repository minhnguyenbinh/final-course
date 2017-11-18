<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
<title>tao users</title>
<link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
</head>
<body>
<div class="wrapper">
<form method="post" action="create.php">
<div class="row">
<i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
</div>
<div>
<h1>tao moi nguoi dung</h1>
</div>
<div class="row">
<label>Ten nguoi dung:</label>
<input type="text" name="name" class="form-control">
</div>
<div class="row">
<label>Email:</label>
<input type="text" name="email" class="form-control">
</div>
<div class="row">
<label>Mat khau:</label>
<input type="password" name="password" class="form-control">
</div>
<div class="row">
<label>Nhap lai mat khau:</label>
<input type="password" name="repassword" class="form-control">
</div>
<div class="row">
<label>Quyen:</label>
<select class="form-control" name="role">
<option value="0">User</option>
<option value="1">Editer</option>
<option value="2">Admin</option>
</select>
</div>
<br>
<div class="row">
<button class="btn ntm =primary">Submit</button>
</div>
</form>
</div>
</body>
</html>
<?php unset($_SESSION["flash"]); ?>
<? Php phiên _ khởi động ()?>
<! Doctype html>
<Html>
<Head>
<Title>Tao users< / title>
<Link Rel= " kiểu dáng " type= " Văn bản / CSS " href= "../../../ công khai / CSS / bootstrap. Của Tôi. Css " >
<Link Rel= " kiểu dáng " type= " Văn bản / CSS " href= "../../../ công khai / CSS / custom. Css " >
< / head>
<Body>
<Div class= "Wrapper" >
<Form " dang " post " Action= " tạo. PHP " >
<Div class= "hàng" >
<I class= "Flash" không? Php nếu (isset ($ _ Session [" Flash "])) echo $ _ Session [" Flash "];?>< / nop-i>
< / div>
<Div>
<h1>tao moi nguoi dung</h1>
< / div>
<Div class= "hàng" >
<label>Ten nguoi dung:</label>
<Input " type= " Văn bản " Name= " name " class= " Form-Control " >
< / div>
<Div class= "hàng" >
<Label>Email: < / label>
<Input " type= " Văn bản " Name= " Email " class= " hình "
< / div>
<Div class= "hàng" >
<Label>Mat khau: < / label>
<Input " type= " mật khẩu " Name= " khẩu " class= " hình thức kiểm soát " >
< / div>
<Div class= "hàng" >
<label>Nhap lai mat khau:</label>
<Input " type= " mật khẩu " Name= " Repassword " class= " hình thức kiểm soát " >
< / div>
<Div class= "hàng" >
<Label>Quyen: < / label>
<Select = " " hình " Name= " vai trò " >
<Option value="0">user< / option>
<Option value="1">editer< / option>
<Option value="2">admin< / option>
< / select>
< / div>
<Br>
<Div class= "hàng" >
<Button class= "BTN =PRIMARY" >submit< / button> /
< / div>
< / form>
< / div>
< / body>
< / html>
<? Php bỏ ($ _ Session ["Flash"]);?>
