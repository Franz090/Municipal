<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order 
$result = mysqli_query($mysqli, "SELECT * FROM products WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>

<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Homepage</title>
</head>

<body>
<a href="index.php">Home</a> | <a href="add.html">Add New Data</a> | <a href="logout.php">Logout</a>
<br/><br/>
	
<strong><h1>PS</h1></strong>
<table class="table table-bordered">
    <tr bgcolor='#CCCCCC'>
        
        <td>DV No.</td>
        <td>OBR No.</td>
        <td>Check no.</td>
        <td>Particulars</td>
        <td>Date</td>
        <td>Deduction</td>
        <td>Total</td>
        <td>Final Amount</td>
        <td>Department</td>
        <td style="width: 10%">Action</td>
    </tr>
    <?php
    while($res = mysqli_fetch_array($result)) {	
        $total;	
        echo "<tr>";
        echo "<td>".$res['dvno']."</td>";
        echo "<td>".$res['obrno']."</td>";
        echo "<td>".$res['checkno']."</td>";	
        echo "<td>".$res['particulars']."</td>";
        echo "<td>".$res['dates']."</td>";
        echo "<td>".$res['deduction']."</td>";
        echo "<td>".$res['total']."</td>";
        echo "<td>".$res['total'] - $res['deduction']."</td>";
        echo "<td>".$res['department']."</td>";
        
       
        echo "<td><a href=\"edit.php?id=$res[id]\" data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a> | <a href=\"delete.php?id=$res[id]\" data-toggle='tooltip' onClick=\"return confirm('Are you sure you want to delete?')\">  <i class='material-icons'>&#xE872;</i></a></td>";
        
    }


    
    echo"<tr></tr><td></td> <td></td><td></td><td></td><td></td>";
    $results1 = mysqli_query($mysqli, "SELECT sum(deduction) FROM products");
    while($rows = mysqli_fetch_array($results1)){
    echo "<td>".$rows['sum(deduction)']."</td>";
}

    $results = mysqli_query($mysqli, "SELECT sum(total) FROM products");
    while($rows = mysqli_fetch_array($results)){
    echo "<td>".$rows['sum(total)']."</td>";
  
}
$results = mysqli_query($mysqli, "SELECT  (SUM(total)-SUM(deduction)) AS Total1
FROM products   ");
    while($rows = mysqli_fetch_array($results)){
    echo "<td>".$rows['Total1']."</td>";
  
}

    ?>
    
</table>	
</body>
</html>