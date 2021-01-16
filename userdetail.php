<?php 
session_start();
$con=mysqli_connect('localhost','root','','company');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=shadow-multiple">
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
    h1{
    font-family:"sofia",sans-serif;
    font-size:50px;
    color:slateblue;
    margin-top:130px;
    }
    body
    {
    margin:0;
    background-image:url("str.jpg");
    background-size:cover;
    }
    table, td, th {  
  border: 5px solid white;
  text-align: center;
  color:white;
  font-size:20px;
  background-color:teal;
}

table {
margin-top:50px;
  border-collapse: collapse;
  width: 50%;
  height:10%;
}

th, td {
  padding: 15px;
}
a:link, a:visited
{
color:white;
font-size:20px;
padding:14px 25px;
text-align:center;
border-radius:5px 5px;
text-decoration:none;
display:inline-block;}

    </style>

</head>
    <body>
    <center>
    <ul>
  <li><a href = "index.php">Home</a></li>
  <li><a  href="getdetail.php">View Users</a></li>
  <li><a class = "active" href="selectuser.php">Transfer</a></li>
  <li><a href="transaction.php">Transaction History</a></li>
</ul>
        <h1 class="font-effect-shadow-multiple">USER INFORMATION</h1>
       <table>
          
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


        </table>
                 <a  class = "active"href="viewuser.php" >Transfer To</a>
                 <a class = "active" href="selectuser.php" >Back</a>
               </center>
    </body>
</html>
