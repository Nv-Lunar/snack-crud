<?php 
  
  include('../koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_pengguna WHERE id_pengguna = $id LIMIT 1";

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
    <title>Edit pengguna</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT pengguna
            </div>
            <div class="card-body">
              <form action="../logic/update-pengguna.php" method="POST">
                
                <div class="form-group">
                  <label>nama</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan nama pengguna" class="form-control">
                  <input type="hidden" name="id_pengguna" value="<?php echo $row['id_pengguna'] ?>">
                </div>

                <div class="form-group">
                  <label>email</label>
                  <input type="text" name="email" value="<?php echo $row['email'] ?>" placeholder="Masukkan Nama pengguna" class="form-control">
                </div>

                <div class="form-group">
                  <label>password</label>
                  <input type="text" class="form-control" name="password" placeholder="Masukkan password pengguna" value="<?php echo $row['password'] ?>"></input type="text">
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