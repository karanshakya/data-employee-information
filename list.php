<html>
    <title>Nineleaps - Sample App</title>
    <head>
    
     <link rel="stylesheet" type="text/css" href="tbl.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="css1/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css1/bootstrap.css">
<style>
a{
color:white;
}
h1{  
color:white;    
}
body{
color:black;
}
#test1
{	
padding-top:6px;
font-size:20px;
width:300px;
height:40px;
border-radius:5px;
margin-left:10px;;
opacity:.9;
background-color:white;
color:2288cc;	
border: 2px solid #4CAF50;
}
ul li {
	font-size:20px;
	color:blue;
	style:bold;
}
ul ul li {
	font-size:18px;
	color:red;
}
</style>
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
	<br><br>
<hr> 
<h4 align=center id="test1">
ALL EMPLOYEES</h4>
  <hr>
  <?php
$conn = mysqli_connect("localhost", "root", "", "karan");
$sql = "SELECT * FROM emp_details";
$result=mysqli_query($conn, $sql);
//die(mysqli_error($conn));
$data=array();
$i=0;
    while($row = mysqli_fetch_assoc($result)) 
	{	$data[$i] = array($row['emp_id'], $row["employee_Name"], $row["employee_Designation"], $row["reporting_Manager"]);
$i++;
	}
	$root=array();
	$i=0;
	foreach($data as $d){
		if($d[3]==="")
			$root[$i++]=$d[1];
	}
	function fun($parent=""){
		if($parent!==""){
		echo '<ul class="inner">';
		echo '<li>'.$parent.'</li>';}
		foreach($GLOBALS['data'] as $d){
			if($d[3]===$parent){
				fun($d[1]);
				echo '</li>';
			}
		}
		if($parent!=="")
		echo '</ul>';
	}
	fun();
?>
  
  
</div>

</body>
</html>
