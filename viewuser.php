<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$name1=$_SESSION['name'];
$q="select name from user where not name='$name1'";
$result=mysqli_query($con,$q);
//$var=$_POST['name'];

//echo $_SESSION['name'];
?>


<html>
<head>
   <title>
   viewUser
    </title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
    input[type=submit]
    {
     background-color: red;
  border: 1px ;
  color: white;
  font-size:20px;
  padding: 8px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  }
    body
    {
    background-image:url("image.jpg");
    background-size:cover;}
    h1{
    font-size: 40px;
    font-family: times new roman;
    color: mediumseagreen;
    text-decoration:underline;
    }
    h2{ font-size: 30px;
    	color:white;}
    table th,tr,td{
  	border-collapse: collapse;
  	color:white;
  	font-size:20px;
		}
    a{
    font-size:30px;
    color:lightblue;
    text-decoration:none;}
   
    </style>
    
        </head>
    <body>
    <i class="fas fa-home" style="font-size:40px;color:lightblue;"></i>
    <a href = "index.php">Home</a>
    <center>
           <b> <h1>CHOOSE NAME FOR CREDIT TRANSFER</h1><b>
        <form action="transfer.php" method="post" >
       <table cellpadding = "5px">
           <th><h2>Name</h2></th>
           
           <?php           
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
      
   </tr>
<?php }
  ?>
        </table>
         <input type="submit" value="Transfer">
        </form>
        <center>
    </body>
</html>

