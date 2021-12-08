<?php
	include 'koneksi.php';

	$id_organizer = $_POST['id_organizer'];
	$nama_organizer = $_POST['nama_organizer'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$kategori = $_POST['kategori'];

	$query = mysqli_query ($conn, "UPDATE organizer
			SET nama_organizer='$nama_organizer',
				email='$email',
				alamat='$alamat',
				kategori='$kategori'
			WHERE id_organizer='$id_organizer'") or die(mysqli_error($conn));

	if($query){
		echo
        "
            <script type='text/javascript'>
                alert('Data telah diubah');
                window.location='data-organizer.php';
            </script>
        ";
	} else {
		echo "
            <script type='text/javascript'>
                alert('Proses update gagal!');
                window.location='data-organizer.php';
            </script>
        	";
	}

	mysqli_close($conn);


?>