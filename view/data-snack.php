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
    <title>Data Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA SISWA
            </div>
            <div class="card-body">
              <a href="tambah-snack.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Barcode</th>
                    <th scope="col">NAMA Snack</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('../koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM tbl_snack");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['barcode'] ?></td>
                      <td><?php echo $row['nama_snack'] ?></td>
                      <td><?php echo $row['jenis'] ?></td>
                      <td><img src="../img/<?= $row["gambar"]; ?>" width="10%"></td>
                      <td><?php echo $row['harga'] ?></td>
                      <td class="text-center">
                        <a href="edit-snack.php?id=<?php echo $row['id_snack'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="../logic/hapus-snack.php?id=<?php echo $row['id_snack'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
      <a href="branch.php">Branch</a>
    </div>
    <footer>
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