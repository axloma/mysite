<?php
session_start();

if (empty($_SESSION["username"])) {
   header("Location:index.html.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>msg<?php echo $_SESSION['username'] ?></title>
</head>
<body>
<table class="table style" width: 32rem>
<thead>
<tr> 
  <th scope="col">id</td>
  <th scope="col">sub</td> 
  <th scope="col">email</td> 
  <th scope="col">phone</td>
  <th scope="col">msg</td>
  <th scope="col">date</td> 
  <th scope="col">ip_address</td> 
</tr>
</thead>
<tbody>
<?php 
$conn;
$result;
$data=0;
$x = 0;
   //TODO CONNECT TO DATABASE AND GRAPE ALL DATA OF USERS 
    $db_server="localhost";
    $db_username="root";
    $db_pass="";
    $db_name="mywebd";
    $result="";
    //TODO creat a connection to database and store the connection in $variable
    $conn = mysqli_connect($db_server,$db_username,$db_pass,$db_name);
   
$sql = "SELECT * FROM messages";
$data = mysqli_query($conn,$sql); 

while($result=mysqli_fetch_assoc($data)) { ?>
<tr> 
  <!--<th scope="row"></th>-->
  <td><?=$result["id"] ; ?></td> 
  <td><?=$result["sub"]?></td> 
  <td><?=$result["email"]?></td> 
  <td><?=$result["phone"]?></td>
  <td><?=$result["msg"]?></td>
  <td><?=$result["date"]?></td> 
  <td><?=$result["ip_address"]?></td>

</tr>
<?php }?>
</tbody>
</table>
</div>
<br/><br/>
<form action="" method="POST">
<input type="submit" name="logout" value="logout">
</form>
<?php 

if(isset($_POST['logout'])){

    session_destroy();
    session_unset();
header("location:index.html.php");
}

?>

</body>
</html>