<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>

<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
   

    $dvno = $_POST['dvno'];
    $obrno = $_POST['obrno'];
    $checkno = $_POST['checkno'];
    $particulars = $_POST['particulars'];
    $dates = $_POST['dates'];
    $deduction = $_POST['deduction'];
    $total = $_POST['total'];
    $department = $_POST['department'];

    $loginId = $_SESSION['id'];
		
    // checking empty fields
    if(empty($obrno) || empty($dvno) || empty($checkno)) {				
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
		
        if(empty($qty)) {
            echo "<font color='red'>Quantity field is empty.</font><br/>";
        }
		
        if(empty($price)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }
		
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty) 
			
        //insert data to database	
        $result = mysqli_query($mysqli, "INSERT INTO products(dvno,
        obrno,
        checkno,
        particulars,
        dates,
        deduction,
        total,
        department,
        login_id
        ) VALUES( '$dvno',
'$obrno',
'$checkno',
'$particulars',
'$dates',
'$deduction',
'$total',
'$department',
 '$loginId')");
		
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='view.php'>View Result</a>";
    }
}
?>
</body>
</html>