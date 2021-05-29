<?php 
if(isset($_post['Login'])) {
	$user =$_post['Username'];
	$pass =$_post['Password'];

	if ($user == 'AhmadFazri' AND $pass == '123Qwer_' ||'ssdga_A7' ||'SUper&&4'){
		echo "Berhasil Login   ";
	}

	else {

		echo "Login Gagal";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class = "formlogin">
		<h1>Silahkan Login</h1>
		<form action ="" method="post">
			<input type="text" placeholder="Username" name="Username">
			<br>
			<input type="text" placeholder="Password" name="Password">
			<button type = "SUBMIT" name="Login">SUBMIT</button>
		</form>
		<div class = "lupa"></div>
		<a href = "#"><span>Lupa Password ?</span></a>
		<a href="#"><span>Belum Punya Akun ?</span></a>
	</div>
</div>
</body>
</html>