<?php
	include 'koneksi.php';

	$id_organizer = $_POST['id_organizer'];
	$nama_organizer = $_POST['nama_organizer'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$kategori = $_POST['kategori'];

	$query = mysqli_query($conn, "INSERT INTO organizer VALUES ('', '$nama_organizer', '$email', '$alamat', '$kategori')") or die(mysqli_error($conn));

	if($query) {
		echo
        "
            <script type='text/javascript'>
                alert('Data telah ditambah');
                window.location='data-organizer.php';
            </script>
        ";
	}
	else
		echo "
            <script type='text/javascript'>
                alert('Proses input gagal!');
                window.location='data-organizer.php';
            </script>
        ";
?>