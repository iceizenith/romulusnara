<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> New Document </TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
</HEAD>

<BODY>

<?php

$deposit=$_GET["deposit"];
$interest_rate=$_GET["interest_rate"];
$year=$_GET["year"];
$new=$deposit;

?>

<BODY>
<TABLE border=1>
<TR>
	<TD>deposit</TD>
	<TD>year</TD>
	<TD>result</TD>
</TR>


<?php
for($i=0;$i<$year;$i++)
{
	
	$result=$new*(1+$interest_rate/100);
	$new=$result;
echo"
<TR>
	<TD>$deposit</TD>
	<TD>$i</TD>
	<TD>$result</TD>
</TR>
"; 
}
?>



</TABLE>

</BODY>
</HTML>
