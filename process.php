<?php
$username=$_POST['user'];
$reg=$_POST['reg'];
echo $username;


		
		//echo $_SESSION['name'];
		
 


/*
mysql_connect("localhost","root","");
mysql_select_db("login_detail");
$query="Select * from user_detail where user='".$username."' and pass='".$password."'";
$rs = mysql_query($query);

$raarray = mysql_fetch_array($rs);
echo $raarray["user"];
exit;
*/
/*$username=stripcslashes($username);
$password=stripcslashes($password);
*/
$con=mysqli_connect("localhost","root","","detail");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{

//$username=mysqli_real_escape_string($con,$username);
//$password=mysqli_real_escape_string($con,$password);


$result=mysqli_query($con,"select * from detail where name='".$username."' and reg.='".$reg."'");


$row=mysqli_fetch_array($result);
echo $row['name'];
    
if($row['name']==$username && $row['reg.']==$reg)
{
    session_start();
        $_SESSION ["s_1"]=$name;
    
    //echo $username;
    header('Location:recruit.html');   
}
else{
    header('Location:log.html'); 
	echo "failed to connect";
}
}
?>