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
$department = $_POST['department'];
 	
	
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
        $result = mysqli_query($mysqli, "UPDATE products SET name=
        obrno='$obrno', dvno='$dvno', checkno='$checkno', particulars='$particulars', dates='$dates',
        deduction='$deduction', total='$total', department='$department' WHERE id=$id");
		
        //redirectig to the display page. In our case, it is view.php
        header("Location: view.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM products WHERE id=$id");

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
$department = $res['department'];

}
?>
<html>
<head>	
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a> | <a href="products.php">View Products</a> | <a href="logout.php">Logout</a>
    <br/><br/>
	
    <form name="form1" method="post" action="edit.php">
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
                <td>Total</td>
                <td>    <select name="department" style="float:left" required>
                    <option value='' selected>Department</option>   
                 <option value='Office Of the Mayor'>Office Of the Mayor</option>  
                 <option value="Business Permit and Licensing Office">Business Permit and Licensing Office</option>     
                 <option value="Office of the Vice Mayor">Office of the Vice Mayor</option>    
                 <option value="Sanggunian Bayan">Sanggunian Bayan</option>    
                 <option value="Human Resource Management Office">Human Resource Management Office</option>  
                 <option value="Office of the Planning and Development Coordinator">Office of the Planning and Development Coordinator</option>  
                 <option value="Office of the Civil Registry">Office of the Civil Registry</option>  
                 <option value=">Municipal General Services Office">Municipal General Services Office</option>  
                 <option value="Municipal Budget Office">Municipal Budget Office</option>
                 <option value="Municipal Accountant Office">Municipal Accountant Office</option>  
                 <option value="Municipal Treasurer's Office">Municipal Treasurer's Office</option>  
                 <option value="Municipal Assesor's Office">Municipal Assesor's Office</option>    
                 <option value="Municipal Info Office">Municipal Info Office</option>  
                 <option value="Local Development Fund-Continuing Capital Outlay">Local Development Fund-Continuing Capital Outlay</option>  
                 <option value="Calamity Fund">Calamity Fund</option>  
                 <option value="Rural Health Unit I">Rural Health Unit I</option>  
                 <option value="Rural Health Unit II">Rural Health Unit II</option>  
                 <option value="Municipal Social Welfare and Developemnt Officer">Municipal Social Welfare and Developemnt Officer</option>  
                 <option value="Municipal Agriculturist">Municipal Agriculturist</option>  
                 <option value="Senior Citizen">Senior Citizen</option>  
                 <option value="Municipal Engineer">Municipal Engineer</option>  
                 <option value="Person with Disabilty">Person with Disabilty</option>  
                 <option value="Economic Enterprise (Market)">Economic Enterprise (Market)</option>  
                 <option value="Municipal Disaster Risk Reduction Management">Municipal Disaster Risk Reduction Management</option>  
                 <option value="Economic Enterprise (Slaughterhouse)">Economic Enterprise (Slaughterhouse)</option>  
                 <option value="Child Protection">Child Protection</option>  
                 <option value="Economic Enterprise (Cemeteries)">Economic Enterprise (Cemeteries)</option>  
                 <option value="Special Education Fund">Special Education Fund</option>  
                 <option value="Non-Office">Non-Office</option>  
                 <option value="Gender and Development">Gender and Development</option>  
                 <option value="Local Youth Dev">Local Youth Dev</option>  
                 <option value="Peace and Order and Anti-Drugs">Peace and Order and Anti-Drugs</option>  
                 <option value="Poverty Reduction">Poverty Reduction</option>  
                 <option value="Information and Command Tech">Information and Command Tech</option>  
                 <option value="Urban Development & Housing Office">Urban Development & Housing Office</option>  
                
                </select></td>
            </tr>
         
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>