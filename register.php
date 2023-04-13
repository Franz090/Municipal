<html>
<head>
    <title>Register</title>
</head>

<body>
   
    <?php
    include("connection.php");

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if($user == "" || $pass == "" || $name == "" || $email == "") {
            echo "All fields should be filled. Either one or many fields are empty.";
            echo "<br/>";
            echo "<a href='register.php'>Go back</a>";
        } else {
            mysqli_query($mysqli, "INSERT INTO login(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
            or die("Could not execute the insert query.");
			
            echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='view.php';  </SCRIPT>");
        }
    } else {
?>
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
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<!-- <h1>Creative SignUp Form</h1> -->
		<div class="main-agileinfo">
			<div class="agileits-top">
                <img style="float:left;" src="Images/logo.png" width="100"  height="100" alt="" srcset="">
                <div class=""><h1><center>Municipal Treasury</center></h5>
                <br>
				<form action="#" method="post">
					<input style="width: 100%;" class="text" type="text" name="name" placeholder="Full Name" required=""><br>
					<input style="width: 100%;" class="text" type="email" name="email" placeholder="Email" required=""><br>
					<input style="width: 100%;" class="text" type="text" name="username" placeholder="Username" required="">
					<input style="width: 100%;" class="text w3lpass" type="text" name="password" placeholder="Password" required="">
					<div class="wthree-text">
					
						<div class="clear"> </div>
					</div>
					<input   type="submit" name="submit" value="Register">
				</form>
    </div>
				<p>I already have an account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<!-- <div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div> -->
		<!-- //copyright -->
	
	</div>
	<!-- //main -->

    <?php
    }
    ?>

