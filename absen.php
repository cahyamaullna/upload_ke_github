<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<form method="POST">
		<fieldset>
		<legend>Absen Siswa</legend>
		<p>
		<label>Email : </label>
		<input type="text" name="email">
		</p>
		<p>
		<label>NIS   : </label>
		<input type="number" name="nis">
		</p>
		<p>
		<label>Nama  : </label>
		<input type="text" name="nama">
		</p>
		<p>
		<label>Rombel: </label>
		<input type="text" name="rombel" placeholder="contoh: RPL XI-3">
		</p>
		<p>
		<label>Rayon : </label>
		<input type="text" name="rayon" placeholder="contoh: CIB 3">
		</p>
		<button name="kirim">kirim</button>
		</fieldset>
		<br>
	</form>
</body>
</html>

<?php
class Absen{
	public $email, $nis, $nama, $rombel, $rayon;
	public function cetakAbsen(){
		return "$this->nama, $this->rombel, $this->rayon, $this->nis, $this->email";
	}
}
$siswa = new Absen();
$siswa -> email = @$_POST['email'];
$siswa -> nis = @$_POST['nis'];
$siswa -> nama = @$_POST['nama'];
$siswa -> rombel = @$_POST['rombel'];
$siswa -> rayon = @$_POST['rayon'];

echo "Tanggapan";
echo "<br>";
echo $siswa->cetakAbsen();
?>