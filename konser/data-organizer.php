<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Data Organizer</title>
  </head>
  <body>
  
      	<nav class="navbar navbar-expand-lg navbar-warning bg-warning fixed-top">
            <a class="navbar-brand" href="#">WELCOME TO ADMIN |<b> CONCERTIX</b></a>
            <ul class="navbar-nav ml-6">
              <li class="nav-item active">
                <a class="nav-link mr-2" href="index.php">Home</a>
              </li>
            </ul>
              <div class="icon ml-4 ml-auto">
                  <h4>
                    <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Message"></i>
                    <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notification"></i>
                    <span><a href="logout.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i></a></span>
                  </h4>
              </div>
         </nav>

          <div class="content">
            <center>
              <div class="btn-group" role="group" aria-label="Basic example">
                <a href="organizer.php"><input type="submit" class="btn btn-light" value="Add Organizer"></a>
                <a href="data-organizer.php"><input type="submit" class="btn btn-warning" value="Data Organizer"></a>
              </div>
           </center>
        </div>

    <table class="table">
   		<thead class="thead-warning">
	        <tr>
	          <th scope="col">ID Organizer</th>
	          <th scope="col">Nama Organizer</th>
	          <th scope="col">Email</th>
	          <th scope="col">Alamat</th>
	          <th scope="col">Kategori</th>
	          <th colspan="2" align="center">Aksi</th>
	        </tr>
   		</thead>

	     <?php
			include 'koneksi.php';
		
		 $query = mysqli_query($conn, "SELECT * FROM organizer");

 		 while ($data = mysqli_fetch_array($query)) { ?>
			<tr> 
				<td> <?php echo $data['id_organizer']; ?> </td>
				<td> <?php echo $data['nama_organizer']; ?> </td>
				<td> <?php echo $data['email']; ?> </td>
				<td> <?php echo $data['alamat']; ?> </td>
				<td> <?php echo $data['kategori']; ?> </td>
				<td> 
					<a href="edit-organizer.php?id=<?php echo $data['id_organizer'];?>" class="btn btn-warning">Edit</a>
					<a href="delete-organizer.php?id=<?php echo $data['id_organizer'];?>" class="btn btn-danger">Hapus</a>
					
				</td>
			</tr>

		<?php } ?>
	
		</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="admin.js">
  </body>
</html>