<?php
include "../../connection.php";

$username   = $_GET['username'];
$id_tema    = $_GET['id'];
$id_kuis    = $_GET['id_kuis'];
$id_hasil   = $_GET['id_hasil'];

mysqli_query($connection, "delete from hasil where id_hasil='$id_hasil'");

header("location:tgl3.php?id=" . $id_tema . "&username=" . $username . "&id_kuis=" . $id_kuis);
