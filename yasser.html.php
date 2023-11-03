<!DOCTYPE html>
<html lan="en">
<head>
 <meta charset="UTF-8">
       <meta name="author" content="yasser">
       <meta name="descreiption" content="my first html course">
        <link rel="icon" href="nothing.png" type="image/x-icon">
        <link rel="stylesheet" href="stylereg.css" type="text/css">

<title> <? $title ?></title>
</head>
<body>
<section class="login">
<fieldset>

<form action="" method="post">
<legend>login </legend>
<p>
<label for="username" >username</label>
<input type="text" name="username" id="username" placeholder="username" autofocus>
</p>
<p>
<label for="pass" >password</label>
<input type="password" name="pass" id="pass" placeholder="password">
</p>
<input type="submit" name="login" value="login">

</form>
</fieldset>
</section>
</body>
</html>
<?php

require_once("dbconn.php");
require_once("func.php");
if(isset($_POST["login"])){
 $username = $_POST["username"];
 $pass = $_POST["pass"];

//  if(emptylog($username,$pass)){
//      exit();
//  }
  logyasser($conn,$username,$pass);




}