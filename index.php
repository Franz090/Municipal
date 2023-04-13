
<?php session_start(); ?>
<html>
<head>
    <title>Homepage</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
    <center>
    <div id="header" style="background-color: darkblue; margin-top:-2%">
       <h1 style="padding-top:1%; color: white"><div style="float: left"><button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: transparent;">
   <img src="Images/profile.png" style="width: 20px; border-radius: 10px">
  </button></div><img src="Images/logo.png" style="width: 50px;"> Municipal Treasury </h1>
       
    <?php
    if(isset($_SESSION['valid'])) {			
        include("connection.php");					
        $result = mysqli_query($mysqli, "SELECT * FROM login"); 
    ?>				
   <a style="float: right; margin-right: 4%; margin-top:-3%" href='logout.php'><button class="btn btn-danger">Logout</button></a><br/>
    </div>
        


        <br/>
      
        <br/><br/>
        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Data Table</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
        color: #566787;
        background: #f5f5f5;
		font-family: 'Roboto', sans-serif;
	}
    .table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px;        
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }
    .search-box {
        position: relative;        
        float: right;
    }
    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }
	.search-box input:focus {
		border-color: #3FBAE4;
	}
    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
	table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }    
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 95%;
        width: 30px;
        height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 30px !important;
        text-align: center;
        padding: 0;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 6px;
        font-size: 95%;
    }    
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
    
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><br><h2><b></b></h2></div>
                        <br>
                        <div class="col-sm-4">
                            <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control" placeholder="Search&hellip;">
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
   function SelectRedirect()
   {
      switch(document.getElementById('s1').value)
      {
         case "Office Of the Mayor":
         <?php $sql = "SELECT FROM * products WHERE department = 'Office Of the Mayor'";?>  
         break;
         default:
         window.location="index.php";
         break;
      }
   }
</script>

                <select name="department" id="s1" onChange="SelectRedirect();" style='float:left'>
                    <option value=''>Department</option>   
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
                
                </select>   
               
            <div  style="margin-left:-90%">
            <h2 > Welcome<b> <?php echo $_SESSION['name'] ?></b> !</h2></div> <button type="submit" onClick="adds();" class="btn btn-success"
                style="float: right; margin-bottom: 2%">+Add Month</button>
                <div id='ins'></div>
               
                <table class="table table-striped table-hover table-bordered">
                    
                    <thead>
                        
                        <tr>
                          
                                <th><a href="view.php">PS</a> </th>
                                <?php 
                            $result = mysqli_query($mysqli, "SELECT * FROM products");
                            while($res = mysqli_fetch_array($result)) {	
                                $total;	 
                                
                               echo"<th>";
                                echo "<tr><th>".$res['total'] - $res['deduction']."  <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>View
                               </button> <a href=\"edit.php?id=$res[id]\" data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a> | <a href=\"delete.php?id=$res[id]\" data-toggle='tooltip' onClick=\"return confirm('Are you sure you want to delete?')\">  <i class='material-icons'>&#xE872;</i></a></td>";  
                                echo "<td></td>";    
                                echo"</th></tr></tr></th>";  
                                  
                            }
                            
                        ?>
                        
                                <th><a href="viewco.php">CO</a> </th>
                           
                          
                        </tr>
                    </thead>
                    <tbody id="tbody">
                    
                           <?php 
                            $result = mysqli_query($mysqli, "SELECT * FROM products");
                            while($res = mysqli_fetch_array($result)) {	
                                $total;	 
                                echo"<tr>" ;
                                echo "<td>".$res['total'] - $res['deduction']."  <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>View
                               </button> <a href=\"edit.php?id=$res[id]\" data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a> | <a href=\"delete.php?id=$res[id]\" data-toggle='tooltip' onClick=\"return confirm('Are you sure you want to delete?')\">  <i class='material-icons'>&#xE872;</i></a></td>";  
                                echo "<td></td>";    
                                echo"</tr>";  
                                  
                            }
                            
                        ?>
                      
                     
                       

<!-- Modal -->
<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        <?php echo "<a href=\"edit.php?id=$res[id]\" data-toggle='tooltip'>"; ?>
    
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        <button type='button' class='btn btn-primary'>Save changes</button>
      </div>
    </div>
  </div>
</div>
                          <tr></tr>
                          <tr></tr>
                      
                    </tbody>
                </table>
               
        </div>        
    </div>     
</body>
</html>
   
        </center>

        <script>
                    var rows = 0;
                function adds()
                {
                    rows++;
                    let but="<button>Save All</button>"
                 let html = "<tr>"
                 html += "<td><input name='getdateps[]' type='date'><button type='submit' class='btn btn-primary' style='margin-left: 2%' name='psdate'>Add PS Date</button></td>"
                 html += "<td><input name='getdatemooe[]' type='date'><button type='submit' class='btn btn-primary' style='margin-left: 2%' name='psdate'>Add MOOE Date</button></td>"
                 html += "<td><input name='getdateco[]' type='date'><button type='submit' class='btn btn-primary' style='margin-left: 2%' name='psdate'>Add CO Date</button></td>"
                 html += "</tr>";
                 document.getElementById('tbody').insertRow().innerHTML = html; 
                }
                 
        
                </script>
                
                
</body>
</html>

<!-- login link -->
    <?php	
    } else {
        include('view.php');
    }
    ?>
  
