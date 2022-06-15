<?php

include "connection.php";
if(isset($_POST['submit']))
{				
$username	= $_POST['username'];
	$a	= $_POST['a'];
	$b	= $_POST['b'];
	$c	= $_POST['c'];
	$d	= $_POST['d'];
	$e	= $_POST['e'];
	$update	= $_POST['update'];
    $id_tugas	= $_POST['id_tugas'];

		mysqli_query($connection, "UPDATE `5tugas` SET `username` = '$username',`a` = '$a', `b` = '$b', `c` = '$c', `d` = '$d', `e` = '$e', `update` = '$update' WHERE `5tugas`.`id_tugas` = $id_tugas");
}
?>