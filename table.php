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
{height:300px; width:1200px; color:black; padding-left:-200px; margin-left:70px;margin-top:10px;}
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
<br><br>
	
<a href="form.php" ><button type="button" class="a">New Add</button></a>
<hr><br>
<div id="c1">
<table class="table">
<thead class="thead-dark">
<tr>
<th>E.ID</th>
<th>Name</th>
<th>Designation</th>
<th>Manager</th>
<th>Data View</th>
</thead></tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "karan");
$sql = "SELECT * FROM emp_details";
$result=mysqli_query($conn, $sql);
//die(mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)) {
		//echo $row['emp_id'];
		
        echo '<tr>
        <td>'.$row['emp_id'].'</td> 
         <td>' .$row["employee_Name"].'</td> 
         <td>' .$row["employee_Designation"].'</td>  
         <td>' .$row["reporting_Manager"].'</td>  
		 <td><a href="view.php?id='.$row['emp_id'].'"> view </a></td>
         </tr>' ;
    }
   
?>
</table> 
</div></div></div>
</body>   
</html>


