<?php 
  
  include('../koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_snack WHERE id_snack = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <?= require "../style/style.php"; ?>
    <title>Edit snack</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
            Edit snack
            </div>
            <div class="card-body">
              <form action="../logic/update-snack.php" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                  <label>barcode</label>
                  <input type="text" name="barcode" placeholder="Masukkan barcode snack" class="form-control" value="<?php echo $row['barcode'] ?>">
                  <input type="hidden" name="id_snack" value="<?= $row["id_snack"] ?>" class="form-control">
                  <input type="hidden" name="gambarLama" value="<?= $row["gambar"] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>nama snack</label>
                  <input type="text" name="nama_snack" class="form-control"
                  value="<?php echo $row['nama_snack'] ?>" placeholder="Masukkan Nama Snack">
                </div>

                <div class="form-group mt-2 mb-2">
                  <label>jenis</label>
                  <select name="jenis">
                    <option value="makanan">makanan</option>
                    <option value="minuman">minuman</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>harga</label>
                  <input type="number" name="harga" class="form-control"
                  value="<?php echo $row['harga'] ?>" placeholder="Masukkan harga snack">
                </div>

                <div class="form-group mt-2 mb-2">
                  <label>Gambar</label><br>
                  <img src="../img/<?= $row['gambar'] ; ?>" width ="20%" ><br>
                  <input type="file" name="gambar">
                  
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>