<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM viewmooe WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="index.php">Home</a> | <a href="addmooe.html">Add New Data</a> | <a href="logout.php">Logout</a>
<br/><br/>
	
<strong><h1>MOOE</h1></strong>
<table width='80%' border=0>
    <tr bgcolor='#CCCCCC'>
        
        <td>DV No.</td>
        <td>OBR No.</td>
        <td>Check no.</td>
        <td>Particulars</td>
        <td>Date</td>
        <td>Deduction</td>
        <td>Total</td>
        <td>Final Amount</td>
        <td>Action</td>
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
       
        echo "<td><a href=\"editmooe.php?id=$res[id]\">Edit</a> | <a href=\"deletemooe.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        
    }


    
    echo"<tr></tr><td></td> <td></td><td></td><td></td><td></td>";
    $results1 = mysqli_query($mysqli, "SELECT sum(deduction) FROM viewmooe");
    while($rows = mysqli_fetch_array($results1)){
    echo "<td>".$rows['sum(deduction)']."</td>";
}

    $results = mysqli_query($mysqli, "SELECT sum(total) FROM viewmooe");
    while($rows = mysqli_fetch_array($results)){
    echo "<td>".$rows['sum(total)']."</td>";
  
}
$results = mysqli_query($mysqli, "SELECT  (SUM(total)-SUM(deduction)) AS Total1
FROM viewmooe   ");
    while($rows = mysqli_fetch_array($results)){
    echo "<td>".$rows['Total1']."</td>";
  
}

    ?>
    
</table>	
</body>
</html>