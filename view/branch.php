<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("location:../index.php");
    exit;
  }else
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
    <?= require "../style/style.php"; ?>
    <!-- <script>
      require('bootstrap')
    </script> -->
    <title>Branch</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row text-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Branch
            </div>
            <div class="card-body row justify-content-between ">
                <div class="row ms-auto">
                    <div class="col">
                        <a href="data-pengguna.php" class="btn btn-sm  btn-success" style="margin-bottom: 10px">TAMBAH DATA Pengguna</a>
                    </div>
                    <div class="col">
                        <a href="data-snack.php" class="btn btn-sm btn-success" style="margin-bottom: 10px">TAMBAH DATA Snack</a>
                    </div>
                </div>
            </div>
          </div>
      </div>
    </div>
    <footer class="row text-center">
      <a href="../logic/logout.php">Log Out</a>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>