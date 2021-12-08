<?php

include 'koneksi.php';
 
$id = $_GET['id'];
 
// menghapus data dari database
$query = mysqli_query($conn, "DELETE FROM organizer WHERE id_organizer='$id'");

// mengalihkan halaman kembali ke data-event
if($query) {
	echo
        "
            <script type='text/javascript'>
                alert('Data berhasil dihapus');
                window.location='data-organizer.php';
            </script>
        ";
}
else {
	echo "
            <script type='text/javascript'>
                alert('Proses hapus gagal!');
                window.location='data-organizer.php';
            </script>
        ";
}

?>