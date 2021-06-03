<?php 
//cek apakah tombol submit sudah di cek atau belum
if ( isset($_POST["submit"]) ) {
//cek username & password
if ( $_POST["username"] == "fazri1805" && $_POST["password"] =="fazri180502"){
//jika benar, redirect tampilkan pesan kesalahan
header("Location: admin.php");
exit;
 }else {
 	//jika salah,tampilkan pesan kesalahan
 	$error = true;
 }
 }
 ?>
	<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
</head>
<body>
	<?php if( isset($error)):?>
		<p style="color: red; font-style: italic;">Username/Password Salah</p>
<?php endif; ?>
<h1>Login Admin</h1>
<ul>
<form action="" method="post">
	<li>
		<label for="username">Username :</label>
		<input type="text" name="username" id="username">
		</li>
		<br>
	<li>
		<label for="password">Password : </label>
		<input type="password" name="password" id="password">
	</li>
	<button type="submit" name="submit">Login</button>


</form></ul>
</body>
</html>
