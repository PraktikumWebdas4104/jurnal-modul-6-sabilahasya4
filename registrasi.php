<body bgcolor="white" align="center">


	<h1>FORMULIR REGISTRASI</h1>

<form method="POST">

<table>

	<tr>

		<td>Nim :</td>

		<td><input type="text" name="nim"></td>

	</tr>

	<tr>

		<td>Nama :</td>

		<td><input type="text" name="nama"></td>

	</tr>

	<tr>

		<td>Kelas : </td>

		<td><input type="text" name="kelas"></td>

	</tr>

	<tr>
		<td>Password :</td>
		<td><input type="password" name="password"></td>

	</tr>

	<tr>

		<td>Kelas:</td>

		<td><input type="text" name="kelas"></td>

	</tr>

	<tr>
		<td>Jenis Kelamin </td>

      

		<td><input type="radio" name="jk" value="laki-laki" >Laki-laki<br></td>

  		<td><input type="radio" name="jk" value="perempuan">Perempuan<br></td>

	</tr>

	<tr>
		<td>Hobi </td>
		<p><input type='checkbox' name='hobi' value='Berenang' ></p>
      <p><input type='checkbox' name='hobi' value='Bersepeda' ></p>
      <p><input type='checkbox' name='hobi' value='Memanah' ></p>
      <p><input type=checkbox name='hobi' value='Berkuda'></p>
	<tr>
		<td>Fakultas</td>

		<td><select name="fakultas" required>

 			<option value="fte">Fakultas Teknik Elektro</option>

  			<option value="fri">Fakultas Rekayasa Industri</option>

  			<option value="feb">Fakultas Ekonomi Bisnis</option>

  			<option value="fkb">Fakultas Komunikasi Bisnis</option>

  			<option value="fit">Fakultas Ilmu Terapan</option>

  			<option value="fik">Fakultas Industri Kreatif</option>

  		
			</select>

		</td>

	</tr>

	<tr>
		<td>Alamat </td>

		<td><select name="alamat" >

 			<input type="textarea" name="alamat">
		</td>

	</tr>

	
	<tr>

		<td></td>

		<td></td>

		<td><input type="submit" name="submit" value="DAFTAR"></td>

	</tr>

</table>

</form>

</body>





