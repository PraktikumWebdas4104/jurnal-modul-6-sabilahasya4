

<body bgcolor="white">

 <h1>LOGIN</h1>

 <hr>

<form action="registrasi.php" method="post" enctype="multipart/form-data"> 

<table align="center">

   <tr>

    <td>NAMA :</td>

    <td><input type="text" name="nama"></td>

   </tr>

   <tr>

    <td>NIM :</td>

    <td><input type="password" name="nim"></td>

   </tr>

  </table>

  <table align="center"><tr><td align="center"><input type="submit" name="login" value="Log In"></td></center></tr></table>

 </form>

</body>

</html>



<?php 

if(isset($_POST['login'])){

  $nama=$_POST['nama'];

  $nim=$_POST['nim'];

if($username=="admin"&&$password=="admin"){

  echo "LOGIN BERHASIL";

?>



  <a href="registrasi.php"> MASUK KE LINK REGRISTRASI </a>



<?php 

} 

else{ echo "LOGIN GAGAL";}

}

?>