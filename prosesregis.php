<?php 



	$server		= "localhost";

	$user		= "root";

	$password	= "";

	$db_name	= "daftar";



	$koneksi = mysqli_connect($server, $user, $password, $db_name);
	if(isset($_POST['submit'])){

		include("koneksi.php");

		$nim = $_POST['nim'];

		$nama = $_POST['nama'];

		$password = $_POST['password']

		$kelas = $_POST['kelas'];

		$jeniskelamin = $_POST['jk'];

		$hobi = $_POST['hobi'];

		$fakultas = $_POST['fakultas'];

		$alamat = $_POST['alamat'];

		$status=true;



		if (!is_int($nim) and (strlen($nim)<10) or (strlen($nim)>10)) {

			echo("NIM harus angka dan 10 karakter");

			$status=false;

		}



		if (!preg_match('/^[a-z A-Z]$/i', $nama) and strlen($nama)>25) {

			echo("Nama harus huruf dengan maksimal 35 karakter");

			$status=false;

		}



		

		if($status){

			$sql=mysqli_query($koneksi,"INSERT INTO daftar

				VALUES ($nim, '$nama', '$password', '$kelas', '$jeniskelamin', '$hobi', '$fakultas' , '$alamat')");

		}