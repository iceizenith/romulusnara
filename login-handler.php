<?php
require 'connection.php';
?>

<?php
// session_start();

/////////////////connect via mysqli_connect___________________
// $conn = mysqli_connect("localhost","root","still4822","romulus");


$username=$_POST['username'];
$pwd=$_POST['pwd'];

// $username = "poom";
// $pwd = "1234";


$query = "SELECT * FROM customer WHERE username = '$username' AND pwd = '$pwd'";

$result=mysqli_query($conn, $query);

// if(isset($result)){
// 	echo "YAYYYY";
// }
// $numofrecord = mysqli_num_rows($result);
// echo "<br> hahaha $numofrecord";

if($list=mysqli_fetch_array($result))
{
   $_SESSION['username']=$list['username'];
   header("refresh: 0; url=index.php");

}

else
{
	header("refresh: 0; url=register.php");
}

?>
<!--DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> New Document </TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
</HEAD>

<BODY>
<FORM METHOD=POST ACTION="login_handler.php">
username<INPUT TYPE="text" NAME="staff_id">
staff_password <INPUT TYPE="text" NAME="staff_password">
</FORM>
</BODY>
</HTML-->
