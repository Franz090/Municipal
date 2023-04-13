<?php session_start(); ?>
<html>
<head>
    <title>Login</title>
</head>

<body>

<?php
include("connection.php");

if(isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($mysqli, $_POST['username']);
    $pass = mysqli_real_escape_string($mysqli, $_POST['password']);

    if($user == "" || $pass == "") {
        echo "Either username or password field is empty.";
        echo "<br/>";
        echo "<a href='login.php'>Go back</a>";
    } else {
        $result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
        or die("Could not execute the select query.");
		
        $row = mysqli_fetch_assoc($result);
		
        if(is_array($row) && !empty($row)) {
            $validuser = $row['username'];
            $_SESSION['valid'] = $validuser;
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
        } else {
           echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Incorrect Password or Username')
    window.location.href='view.php';  </SCRIPT>");
        }

        if(isset($_SESSION['valid'])) {
            header('Location: index.php');			
        }
    }
} else {
?>
   
<?php
}
?>
</body>
</html>

<!-- LOGIN -->
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />

<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">

<!-- //web font -->
</head>

<body > 
  
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<!-- <h1>Creative SignUp Form</h1> -->
		<div class="main-agileinfo">
			<div class="agileits-top"><img style="float:left;" src="Images/logo.png" width="100"  height="100" alt="" srcset="">
                <div><h1><center>Municipal Treasury</center></h5>
                <br>
				<form action="#" method="post">
					<input style="width: 100%;" class="text" type="text" name="username" placeholder="Username" required=""><br>
					<input style="width: 100%;" class="text" type="password" name="password" placeholder="Password" required="">
				
					<div class="wthree-text">
					
						<div class="clear"> </div>
					</div>
                 
					<input style="width: 100%;" type="submit" name="submit" value="Login">
				</form>
            </div>
				<p>Don't have an Account? <a href="register.php"> Register!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<!-- <div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div> -->
		<!-- //copyright -->
	
	</div>
	<!-- //main -->
</body>
</html>


