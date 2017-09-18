<?php
 $id=$_GET['id'];
 mysql_connect('localhost','root','');
 mysql_query('use data');
 mysql_query('set names utf8');
$sql="delete from leavewords where id=$id";
if(mysql_query($sql))
	header('location:manage.php');
else
	echo mysql_error();
?>