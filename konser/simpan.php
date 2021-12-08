<?php
	include 'koneksi.php';

	$id_event = $_POST['id_event'];
	$nama_konser = $_POST['nama_konser'];
	$promotor = $_POST['promotor'];
	$tanggal = $_POST['tanggal'];
	$waktu = $_POST['waktu'];    
	$tempat = $_POST['tempat'];
	$kategori = $_POST['kategori'];
	$kelas = $_POST['kelas'];
	$kuota = $_POST['kuota'];
	$harga_tiket = $_POST['harga_tiket'];

	$query = mysqli_query($conn, "INSERT INTO events VALUES ('', '$nama_konser', '$promotor', '$tanggal', '$waktu', '$tempat', '$kategori', '$kelas', '$kuota', '$harga_tiket')") or die(mysqli_error($conn));

	if($query) {
		echo
        "
            <script type='text/javascript'>
                alert('Data telah ditambah');
                window.location='data-event.php';
            </script>
        ";
	}
	else
		echo "
            <script type='text/javascript'>
                alert('Proses input gagal!');
                window.location='data-event.php';
            </script>
        	";
?>