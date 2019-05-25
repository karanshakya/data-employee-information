<html>
    <title>Nineleaps - Sample App</title>
    <head>
     <link rel="stylesheet" type="text/css" href="tbl.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="css1/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css1/bootstrap.css">
           
<style>

h1{  
color:white;    
}
body{
color:black;
}
#c1
{height:325px; width:900px; color:black; padding-left:-200px;margin-left:250px;}
#tech1
{height:120px; width:900px; background-color:black;padding-left:50px;opacity:.9;margin-left:0px;margin-top:41px;}
#nav
{
color:black;	
padding-top:7px;
padding-left:150px;	
font-size:20px;
margin:auto;
}
#nav input
{
margin-left:70px;
margin-top:20px;
width:200px;
height:30px;
font-size:15px;
	
}
#nav input[name="name"]
{	
margin-left:40px;
margin-bottom:10px;	
padding-left:20px;		
color:black;	
width:350px;
height:30px;
}
#nav input[name="Designation"]
{
margin-left:40px;
margin-bottom:10px;		
padding-left:20px;		
height:30px;	
width:350px;
}
#nav select[name="manager"]
{
margin-left:40px;
margin-bottom:10px;
margin-top:18px;		
padding-left:25px;		
height:33px;	
width:350px;
}

#nav input[type="submit"]
{
margin-top:10px;
width:100px;
margin-left:120px;
height:40px;
color:black;
font-weight:bold;
cursor:pointer;
display: inline-block;
border: none;	
-webkit-transition-duration: 0.2s;
    transition-duration: 0.2s;
}
#nav input[type="submit"]:hover
{
background:#555555;
color:white;	
}
#test1
{	
padding-top:6px;
font-size:20px;
width:350px;
height:40px;
border-radius:5px;
margin:auto;
opacity:.9;
background-color:white;
color:2288cc;	
border: 2px solid #4CAF50;
}
</style>
<script>
function validateForm() {
    var x = document.getElementById("nm").value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	var x = document.getElementById("dsg").value;
    if (x == "") {
        alert("Designation must be filled out");
        return false;
	}
	var x = document.getElementById("mgr").value;
    if (x == "") {
        alert("Select Manager");
        return false;
	}
}
</script>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karan";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());;
// Check connection
/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}*/
?>
</head>

    <body data-spy="scroll" data-target=".navbar" data-offset="100">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
<div class="menu-wrap">
<nav class="menu">
<ul class="clearfix">
<li><a href="index.html">Home</a></li>
<li><a href="table.php">Table</a></li>
<li><a href="list.php">List</a></li>
<li><a href="#">Tree</a></li>
</ul>
</nav>
</div>
          </div> 
            </nav>       
 <br>
 <h5 align="center" align=center id="test1">ADD A EMPLOYEE</h5>
 <hr>
<div id="c1">
<div id="nav">
<form name="myForm" action="" onsubmit="return validateForm()" method="post">
 <table border=1 height=80% width=80%><tr><td> <table align=center><tr>
  <td>Name</td><td><input type="text" placeholder="Full Name" name="name" id="nm" onkeypress="return( event.charCode >64 && event.charCode < 91 || event.charCode > 96 && event.charCode < 123)"></td></tr>
  <tr><td>Designation</td><td><input list="browsers" placeholder="-- Designation --" name="Designation" id="dsg"></td><tr>
  <datalist id="browsers">
  <option value="COO">
  <option value="Accounts Manager">
  <option value="Business Analyst">
  <option value="Scrum Master">
  <option value="Quality Manager">
  <option value="Tester">
  <option value="Mobile Tester">
  <option value="Developer">
  <option value="VP Sales">
  <option value="Head (Development)">
</datalist>
  <tr><td>Manager </td> <td>
  <select required="required" id="mgr" name="manager">
                        <option value="">-- Select Reporting Manager --</option>
						 <?php
$sql = "SELECT * FROM emp_details";
$result=mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo '<option value='.$row['employee_Name'].'>'.$row["employee_Name"].'</option>';
    }   
?>
	</select>
 </td></tr>
  <tr><td align=left colspan=2><input type="submit" value="Submit" name="login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All fields are required</td></tr></table></td></tr></table>
  </form></div> 
<div id="tech1">   
<table height=100% width=100%><tr>
<td width=20%><IMG SRC=nineleaps1.png WIDTH=280px HEIGHT=100px /></td>
<td align=center><h1>We build high performance solutions</td> 
</tr></table>  </div></div></div></div></div><br>
</body>   
</html>
<?php
if(isset($_POST['login']))
{
$Name = $_POST['name'];
$Designation = $_POST['Designation'];
$Manager = $_POST['manager'];
$sql = "INSERT INTO emp_details VALUES ('','$Name','$Designation','$Manager')";
if (mysqli_query($conn, $sql)) {
    echo "<script> alert('New record created successfully')</script>";
	return ;
} else {
    echo "<script> alert(Error: " . $sql . "<br>')</script> " . mysqli_error($conn);
}
}
?>