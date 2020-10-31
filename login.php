
<?php
session_start();
include('config.php');
if(isset($_POST['LOGIN']))
{

$email=$_POST['user'];
$password=$_POST['password'];
$sql ="SELECT * FROM userlogin WHERE useremail=:email and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['user'];
echo "<script type='text/javascript'> document.location = 'index/index.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details'); document.location = 'login.php'; </script>";

}

}


?> 



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> ISTE- Beat The Game</title>
	<link rel="stylesheet" a href="css\style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="css/logo.jpg" style="border-radius: 10%">
		<form method="POST" >
			<div class="form-input">
				<input type="text" id="email" name="user" placeholder="TKMCE Mail-id"/>	
			</div>
			<div class="form-input">
                <input type="password" name="password" placeholder="Password" id="myInput"/>

			</div>
			<input onclick= "checkid()" id="subbt" type="submit" name="LOGIN" class="btn-login"/>
		</form>
    </div>

    <script>


        function checkid(){
          var at = document.getElementById("email").value.indexOf("@tkmce.ac.in");
          console.log(at)
          submitOK = "true";

          if (at == -1) {
    alert("Not a valid e-mail!");
    document.getElementById("subbt").name="";
    location.reload()
    submitOK = "false";
  }

  if (submitOK == "false") {
    return false;
  }
        }
      </script>
</body>
</html>