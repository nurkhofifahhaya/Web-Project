<?php
  session_start();

  include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

   

    <title>The Concertix</title>
  </head>
  <body>

    <div class="start">
      <h1><b>The Concertix</b></h1>
    </div>

    <div class="container">
      <h4 class="text-center">LOGIN</h4>
      <hr>

      <form action="" method="POST">
        <div class="form-group">
          <label>Username</label>

          <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
              </div>
             <input type="text" name="username" class="form-control" placeholder="Input your Username">
          </div>
        </div>
        <div class="form-group">

          <label>Password</label>

          <div class="input-group">
             <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
              </div>
            <input type="password" name="password" class="form-control" placeholder="Input your Password">
          </div>
        </div>

        <button type="submit" class="btn btn-dark" name="login">SUBMIT</button>
        <button type="reset" class="btn btn-dark">RESET</button>
      </form>
    </div>

    <?php
      if(isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $data = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user' AND password='$pass'");
        $sql = mysqli_fetch_array($data);

        $username = $sql['username'];
        $password = $sql['password'];
        $hak_akses = $sql['hak_akses'];
          if($sql['hak_akses'] == "admin") {
            $_SESSION['admin'] == $sql['id'];
            header('location:index.php');
          }
          else if($sql['hak_akses'] == "user") {
            $_SESSION['user'] == $sql['id'];
            header('location:user/index.php');
          }
      }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>