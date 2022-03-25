<?php
$link=@mysql_connect('localhost','root','');
if (!$link) {
echo"Connection destroy by network, Try Again". mysql_error();	
}
$select_db=mysql_select_db('prime',$link);
if (!$select_db) {
	echo"Data file destroy by network,Try Again". mysql_error();
}
?>

