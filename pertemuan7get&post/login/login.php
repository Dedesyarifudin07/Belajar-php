<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
   <?php 
//    cek apakah tombol submit sudah di tekan atau bellum
if(isset($_POST["submit"])){
    // cek username dan password
    if($_POST["username"] == "admin" && $_POST["password"] =="gorengcaungenah" ){
        //jika benar redirect ke halaman admin
        header("Location: admin.php");
            exit;
    }else{
        $error =true;
    }
   
}
//jika salah tampilkan pesan kesalahan
   
   ?>
<ul>

<?php if(isset($error)) :?>
    <h1 style="color:red; background-color:black; width:700px; font-style:italic; text-align:center;"> Password nya salah bangg</h1>
<?php endif ;?>
<form action="" method="post">
    login admin
	<li>
		<label for="username">username :</label>
		<input type="text" name="username" id="username">
	</li>
	<li>
		<label for="password">password :</label>
		<input type="password" name="password" id="password">
	</li>
	<li>
		<button type="submit" name="submit">Login</button>
	</li>
	
</form>
</ul>
</body>
</html>