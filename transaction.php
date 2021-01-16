<?php
session_start();
$con=mysqli_connect('localhost','root','','company');

//$id = $_GET['id'];
?>

<html>
<head>
<title>transaction</title>
<style>
 ul {
  position:fixed;
  width:100%;
  top:0;
  list-style-type: none;
  overflow: hidden;
  background-color: #333;
  margin:0;
  padding:0;
}
li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
body{margin:0;}
h1{ font-size: 40px;
color:teal;
font-family:abril fatface;
text-decoration:none;
margin-top:50px;}
#grad {
  background-image: linear-gradient(180deg, pink,mediumseagreen);
}
table
{	text-align:center;
	font-family: Arial, Helvetica, sans-serif;
  	border-collapse: collapse;
  	width: 70%;
  	height: 70%;
 }
 th,td{
 border: 1px solid gray;
  padding: 8px;
  }
  tr:nth-child(even){background-color: lightgray;}
   tr:hover {background-color: orange;}
th {
  background-color: slateblue;
  color: white;
		}
</style>
</head>
<body id = "grad">
<center>
<h1>TRANSACTION DETAILS OF USERS</h1>
<ul>
  <li><a  href = "index.php">Home</a></li>
  <li><a  href="getdetail.php">View Users</a></li>
  <li><a href="selectuser.php">Transfer</a></li>
  <li><a class = "active"href="transaction.php">Transaction History</a></li>
</ul>

<table>
<tr>
<th>S_NO</th>
<th>Sender</th>
<th>Recevier</th>
<th>Amount Transfered</th>
<th>Date</th>
</tr>
</center>
 <?php
  $sql2 = "SELECT * from transactiontable";
  $result2 = mysqli_query($con, $sql2);
  while($row = mysqli_fetch_array($result2))
  {
  $id = $row['id'];
  
  for($var = $id ;$var<=$id ;$var++)
 {
	$sql = "SELECT * from transactiontable where id =".$var."";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	
	echo "<tr>
	<td>" .$row['id']. "</td>
	<td>" .$row['sender']. "</td>
	<td>" .$row['recevier']. "</td>
	<td>" .$row['transfer']. "</td>
	<td>" .$row['date']. "</td>
	</tr>";
 }
}
?>
</table>
</body>
</html>
 
