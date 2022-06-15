<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <script src="assets/sweetalert2.all.min.js"></script>
</body>

</html>
<?php
include "connection.php";
$id = $_GET['id'];
mysqli_query($connection, "delete from odgj where nik='$id'");


echo "
  <script>
      Swal.fire(
          'Berhasil',
          'Data berhasil dihapus.',
          'success'
      ).then((result) => {
          window.location='data_odjg_kader.php';
      })
  </script>
    ";
