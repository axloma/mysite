<!DOCTYPE html5>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="yasser">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="style.css">


</head>
<body>
    <?php //echo "<h1>hi my again again first website  again </h1>"; ?>


    <div class="nav-bar" id="nav-bar">
    <a  class="myname">  yasser</a>
   <nav class="nav-bar-i">

       <a href="#about" > about me </a>
       <a href="#education" > PROJECT </a>
       <a href="#skills" > skills </a>
       <a href="#contactme"  > contact me </a>
       <a href="#home" class="active"> home </a>

   </nav>
</div>


<section class="home" id="home">
    <div class="home-content" id="home-content">

    <div class="image-me">
    <h2 id='not'> Still learning </h2>

        <img src="me.jpg" alt="me" width="100px">
  
        <!-- <br/>           <br/> 

        <p id='a'> hi every day I Learn something new <br/>
        <br/>           <br/> 
         now i'm studing html , css ,javascrip php </P> -->
    </div>   
   


    </div>
    <!-- <button id="still">change item</button> -->





</section >

<section class="about" id="about">

    <div class="me3">
        <img src="me6.png" alt="me">
        <span class="tran"></span>
    </div><?php
    echo  password_hash("yasser13695",PASSWORD_DEFAULT);

?>
</section>


<section class="education" id="education">
    Education
    <div class="meedu">
        <img src="me6.png" alt="me" width="200" height="150px">
        <span class="tran"></span>
    </div>

</section>

<section class="skills" id="skills">
<div class="frontend">
<div class="javascript">
<p>j<span class="dot">.</span><span class='s' id='s'>s</span></p>
</div>
<div class="css">
<p>css</p> 
</div>

    <div class="html">
    <p >html</p>
    </div>




    </div>


    <div class="backend">

    <div class="mysql">
mysql
</div>
<div class="python">
python 

</div>

    <div class="php">
    php
    </div>



    </div>
</section>

<section class="contactme" id="contactme">
  
<div class="snd">
   
<form method="POST" action="index.html.php#contactme">
    <?php
    
    // $error = $_GET["error"];
if(isset($_GET["error"])){
    if($_GET["error"]=="invalidusername")
    {
        echo "<h2>make sure it's right email</h2>" ;
    }
    if($_GET["error"]=="failed r empty")
    {
        echo "<h2>make sure u dnt missing field plz </h2>" ;
    }
    
}
else{
    echo  '<h2>send msg</h2> '  ;
}
?>

   

<input type="text" name="sub" id="sub" placeholder="subject" required>
<input type="text" name='email' id="email" placeholder=" Enter your Email" autocomplete='off' required >
<input type="text"  name="phone" id="phone" placeholder="YOUR PHONE" autocomplete="off" required>
<textarea name="msg" id="msg" cols="30" rows="10"  placeholder="your msg" required></textarea >
<input type="submit" value="submit" id="submit" name="submit">


</form>
<!-- 
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo  $_SERVER['REMOTE_ADDR'];
?> -->
<?php
$sub;
$email;
$phone;
$msg;
$date = date('m-d-Y h:i:s a');
$ip_address ;
// echo $date;
if(isset($_POST["submit"])){
    $sub=$_POST["sub"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $msg=$_POST["msg"];
    $date_x = $date ;
    $ip_address = $_SERVER['REMOTE_ADDR'];
   
    require_once("dbconn.php");
    require_once("func.php");
   if (isempty($sub,$email,$phone,$msg,$date,$ip_address,)!== false ){ 
   header ("location:index.html.php?error=failed r empty");
   #echo "u forget some field make sure u fill all idiot";
    exit();
  }
    if(notemail($email)){
        #echo "this is not valid email";
        header("location:index.html.php?error=invalidusername");
        exit();
    }

   
   sndmsg($conn,$sub,$email,$phone,$msg,$date_x,$ip_address);

}
  
?>


</div>
</section>


<footer class="footer">

<div class="connetion ">

<a class="facebook" href="#"><i class='bx bxl-facebook-circle'></i></a>
<a class="twitter" href="#"><i class='bx bxl-twitter'></i></a>
<a class="gmail" href="https://wwww.gmail.com/yasseremad556" target="_blank"><i class='bx bxl-gmail'></i></a>
<a class="github" href="https://github.com/axloma" target="_blank"><i class='bx bxl-github' ></i></a>
<a class="linkedin" href="https://www.linkedin.com/in/yasser-emad-07b886234/" target="_blank"><i class='bx bxl-linkedin'></i></a>
</div>
</footer>
<script src="js.js"></script>
</body>
</html>
