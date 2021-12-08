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

	$query = mysqli_query ($conn, "UPDATE events
			SET nama_konser='$nama_konser',
				promotor='$promotor',
				tanggal='$tanggal',
				waktu='$waktu',
				tempat='$tempat',
				kategori='$kategori',
				kelas='$kelas',
				kuota='$kuota',
				harga_tiket='$harga_tiket'
			WHERE id_event='$id_event'") or die(mysqli_error($conn));

	if($query){
		echo
        "
            <script type='text/javascript'>
                alert('Data telah diubah');
                window.location='data-event.php';
            </script>
        ";
	} else {
		echo "
            <script type='text/javascript'>
                alert('Proses update gagal!');
                window.location='data-event.php';
            </script>
        	";
	}

	mysqli_close($conn);


?>