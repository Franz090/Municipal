<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>

<?php
// including the database connection file
include_once("connection.php");

if(isset($_POST['update']))
{	
    $id = $_POST['id'];

$dvno = $_POST['dvno'];
$obrno = $_POST['obrno'];
$checkno = $_POST['checkno'];
$particulars = $_POST['particulars'];
$dates = $_POST['dates'];
$deduction = $_POST['deduction'];
$total = $_POST['total'];

    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];	
	
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
    } else {	
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE viewmooe SET name=
        obrno='$obrno', dvno='$dvno', checkno='$checkno', particulars='$particulars', dates='$dates',
        deduction='$deduction', total='$total'
         WHERE id=$id");
		
        //redirectig to the display page. In our case, it is view.php
        header("Location: viewmooe.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM viewmooe WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $qty = $res['qty'];
    $price = $res['price'];
    $dvno = $res['dvno'];
$obrno = $res['obrno'];
$checkno = $res['checkno'];
$particulars = $res['particulars'];
$dates = $res['dates'];
$deduction = $res['deduction'];
$total = $res['total'];
   
}
?>
<html>
<head>	
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a> | <a href="viewmooe.php">View Products</a> | <a href="logout.php">Logout</a>
    <br/><br/>
	
    <form name="form1" method="post" action="editmooe.php">
        <table border="0">
          
                <td>DV no.</td>
                <td><input type="text" name="dvno" value="<?php echo $dvno;?>"></td>
            </tr>
            <tr> 
                <td>OBR No.</td>
                <td><input type="text" name="obrno" value="<?php echo $obrno;?>"></td>
            </tr>
            <tr> 
                <td>Check no.</td>
                <td><input type="text" name="checkno" value="<?php echo $checkno;?>"></td>
            </tr>
            <tr> 
                <td>Particulars</td>
                <td><input type="text" name="particulars" value="<?php echo $particulars;?>"></td>
            </tr>
            <tr> 
                <td>Date</td>
                <td><input type="text" name="dates" value="<?php echo $dates;?>"></td>
            </tr>
            <tr> 
                <td>Deduction</td>
                <td><input type="text" name="deduction" value="<?php echo $deduction;?>"></td>
            </tr>
            <tr> 
                <td>Total</td>
                <td><input type="text" name="total" value="<?php echo $total;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>