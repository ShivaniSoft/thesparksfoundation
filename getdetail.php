<?php 
session_start();
$con=mysqli_connect('localhost','root','','company');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   viewUser
    </title>
    
	<style>
	#grad {
  	background-image: linear-gradient(lime,aqua, khaki);
	}
	h3{
	text-align:center;
	font-size:20px;}
	h1{
	margin-top:50px;
	text-align:center;
	font-family:"times new roman";
	text-shadow:2px 2px gray;
	font-size:50px;
	color:black;
	
	}
	table {
  	border-collapse: collapse;
  	width: 80%;
  	height: 80%;
		}

	th,td {
 	 padding: 15px;
  	text-align: center;
  	border-bottom: 1px solid #ddd;
		}
	tr:hover {background-color:lightblue;}
	th {
  background-color: indigo;
  color: white;
		}
		tr{background-color:rgb(0,0,0,0.3);}
	body{
	margin:0;}
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

	</style>
    </head>
    <body id = "grad">
    <ul>
  <li><a href = "index.php">Home</a></li>
  <li><a  class = "active" href="getdetail.php">View Users</a></li>
  <li><a href="selectuser.php">Transfer</a></li>
  <li><a href="transaction.php">Transaction History</a></li>
</ul>
        <h1>User Information</h1>
        <table align = "center">
		<th>Name</th>
		<th>Email</th>
		<th>Balance</th>
	
		<tr>
        <?php  
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["balance"]; ?></td>
   

		</tr>
		<tr>
        <?php  
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["balance"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["balance"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["balance"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["balance"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["balance"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["balance"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["balance"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["balance"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["balance"]; ?></td>
   

        </tr>
</table>
         

           

        
        
    </body>
</html>
