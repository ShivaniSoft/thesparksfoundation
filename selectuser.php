<!DOCTYPE html>
<html lang="en">
<head>
	<title>Select User</title>
	<style>
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
h1{
font-size:40px;
margin-top:100px;
}
	body{
	background-color:lightgray;
	background-position:cover;
	}
	h3{
	text-align:center;
	font-size:20px;}
	h1{
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
	tr:nth-child(even) {background-color: rgb(0,0,0,0.2);}
	tr:hover {background-color: rgb(0,0,0,0.3);}
	th {
  background-color: dodgerblue;
  color: white;
		}
	</style>
</head>
<body>

<ul>
  <li><a href = "index.php">Home</a></li>
  <li><a  href="getdetail.php">View Users</a></li>
  <li><a class = "active" href="selectuser.php">Transfer</a></li>
  <li><a href="transaction.php">Transaction History</a></li>
</ul>
      
<form  action="userdetail.php" method="post">
    <h1> SELECT USER FROM LIST</h1>
    <table align = "center">


    <?php 
session_start();
$con=mysqli_connect('localhost','root','','company');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>



	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Balance</th>
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
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["balance"]; ?></td>
   

        </tr>
        
	
</table>



       <h3>Select User<h3>

<?php
$con=mysqli_connect('localhost','root','','company');

$q="select name from user";
$result=mysqli_query($con,$q);
?>


  <h3><select name="name" onchange="this.form.submit()"></h3>
      <option>--Select--</option>
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>
  
        </select>    
    </form> 
</body>
</html>
