<?php
session_start();
$con=mysqli_connect('localhost','root','','company');
//mysqli_select_db($con,'id8930489_spark');
$name1=$_SESSION['name'];
$q="select balance from user where name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['balance'];
$from=$_SESSION['name'];
//echo $var;
//echo $_POST["transfer"];
//echo $_SESSION['to'];
$to=$_SESSION['to'];
//echo $_SESSION['name'];
$q1="select balance from user where name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['balance'];
$amount = $_POST["transfer"];
if ( $var > $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update user set balance='$sub' where name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update user set balance='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);
    
    $sql = "INSERT INTO transactiontable(sender, recevier, transfer , date) VALUES('$from', '$to', '$amount',now())";
    $result=mysqli_query($con,$sql);

	if($result)
	{
   	$message="Transaction Successful";
   	echo"<script type='text/javascript'>alert('$message');
   	</script>";
   	include 'transaction.php';
   	}
    	else 
	{
	$message="Failure";
   	echo"<script type='text/javascript'>alert('$message');
   	</script>";
   	include 'index.php';
	}
}
else
{
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    include 'index.php';

}
?>
<html>
<head>
<title>checkcredit</title>
</head>
<body>
<form action = "transaction.php" method = "POST">
</form>
</body>
</html>
