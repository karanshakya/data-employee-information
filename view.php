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
.a
{
height:50px;
width:150px;
background-color:2288cc;
color:white;
font-size:22px;
border: none;
text-align: center;
text-decoration: none;
display: inline-block;
margin: 4px 2px;
cursor: pointer;
border-radius:6px;
padding: 5px 2px;
-webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}
.a:hover
{
background-color: #555555;
    color: white;
}
#c1
{height:300px; width:700px; color:black; margin-left:340px;margin-top:50px;}
#tech1
{height:120px; width:900px; background-color:black; padding-left:50px; margin-left:-90px; opacity:.9;margin-top:157px;}
</style>
</head>
    <body>
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
	<div class="row">
	<div class="col-md-2">
 <?php
 $eid=$_GET['id'];
 echo '<a href="update.php?id='.$eid.'"><button type="button" class="a">Edit</button></a>' ;
 ?>
 </div></div><br>
	<hr>

<div id="c1">
<table class="table">
<thead class="thead-dark">
 <tr>
  <th align=center>E.ID</th>
  <th align=center>Name</th>
  <th align=center>Designation</th>
  <th align=center>Manager</th></thead>
</tr>

<?php
$eid = $_GET['id'];
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
$sql="Select * from emp_details where emp_id=".$eid;
$result=mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo'
<tr>
  <td>' .$row["emp_id"].'</td>
  <td>' .$row["employee_Name"].'</td> 
  <td>' .$row["employee_Designation"].'</td>  
  <td>' .$row["reporting_Manager"].'</td>
</tr>';
echo '<script>getElementById("eid").value='.$row["emp_id"].';</script>';
?>

 </table>
  </form>
<div id="tech1">   
<table height=100% width=100%><tr>
<td width=20%><IMG SRC=nineleaps1.png WIDTH=280px HEIGHT=100px /></td>
<td align=center><h1>We build high performance solutions</td> 
</tr></table>  </div>
</body>   
</html>

