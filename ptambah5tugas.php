<?php

include "connection.php";
if(isset($_POST['submit']))
{
$username = $_POST['username'];				
$a = $_POST['a'];				
$b = $_POST['b'];
$c = $_POST['c'];				
$d = $_POST['d'];				
$e = $_POST['e'];
$update = $_POST['update'];
		mysqli_query($connection, "INSERT INTO `5tugas` (`id_tugas`, `username`, `a`, `b`, `c`, `d`, `e`, `update`) VALUES (NULL, '$username', '$a', '$b', '$c', '$d', '$e', '$update');");
}
?>