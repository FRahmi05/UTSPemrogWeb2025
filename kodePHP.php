<form method="GET" action="">
  <input type="text" name="nama" placeholder="Masukkan nama">
  <input type="submit" value="Kirim">
</form>

<?php
if (isset($_GET['nama'])) {
    $nama = htmlspecialchars($_GET['nama']);
    echo "Halo, " . $nama . "!";
}
?>