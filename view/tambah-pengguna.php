<!-- <?php

//include koneksi database
include('../koneksi.php');

//get data dari form

//query insert data ke dalam database

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if(isset($submit)) {
  global $connection;
  $nama           = $_POST['nama'];
  $email = $_POST['email'];
  $password       = $_POST['password'];
  $submit = $_POST['submit'];
  $query = "INSERT INTO tbl_pengguna (nama, email, password) VALUES ('$nama', '$email', '$password')";
  return $connection->query($query);

    //redirect ke halaman index.php 
    // header("location: index.php");

} elseif($query = null) {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <?= require "../style/style.php"; ?>
    <title>Tambah Pengguna</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH pengguna
            </div>
            <div class="card-body">
              <form action="../logic/simpan-pengguna.php" method="POST">
                
                <div class="form-group">
                  <label>nama</label>
                  <input type="text" name="nama" placeholder="Masukkan nama pengguna" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="Masukkan Nama pengguna" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>password</label>
                  <input type="password" class="form-control" name="password" placeholder="Masukkan password pengguna" required></input>
                </div>
                
                <button type="submit" class="btn btn-success" name="submit">SIMPAN</button>
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


