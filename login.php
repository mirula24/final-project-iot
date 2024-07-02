<?php
session_start();
require ('connect.php');

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($connect, "SELECT username FROM users WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if( $key === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}


}

if( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}


if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if( isset($_POST['remember']) ) {
				// buat cookie
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			}

			header("Location: index.php");
			exit;
		}
	}

	$error = true;

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="./src/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
</head>
<body>
     
<div class="mx-auto md:h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0">
    <!-- content will go here -->
    <div class="mx-auto md:h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0">
    <a href="#" class="text-2xl font-semibold flex justify-center items-center mb-8 lg:mb-10">
      <img src="./src/pnp.png" class="h-11 mr-4" alt="">
      <span>Amonia Level Monitor</span>
    </a>
    <div class="bg-white shadow rounded-lg lg:flex items-center justify-center md:mt-0 w-full lg:max-w-screen-lg 2xl:max:max-w-screen-lg xl:p-0">
	<div class="hidden lg:flex w-2/3">
		<img class="rounded-l-lg" src="./src/IoT.jpeg" alt="login image">
	</div>
	<div class="w-full p-6 sm:p-8 lg:p-16 lg:py-0 space-y-8">
		<!-- Authentication form goes here -->
        <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">
   Sign in to platform
</h2>
<form class="mt-8 space-y-6" action="" method="post">
   <div>
   <?php if( isset($error) ) : ?>
	<p style="color: red; font-style: italic;">username / password salah</p>
<?php endif; ?>
      <label for="username" class="text-sm font-medium text-gray-900 block mb-2">Username</label>
      <input type="text" name="username" id="username"
         class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
         placeholder="admin" required>
   </div>
   <div>
      <label for="password" class="text-sm font-medium text-gray-900 block mb-2">Your password</label>
      <input type="password" name="password" id="password" placeholder=""
         class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
         required>
   </div>
   <div class="flex items-start">
      <div class="flex items-center h-5">
         <input id="remember" aria-describedby="remember" name="remember" type="checkbox"
            class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
      </div>
      <div class="text-sm ml-3">
         <label for="remember" class="font-medium text-gray-900">Remember me</label>
      </div>
      <a href="#" class="text-sm text-blue-700 hover:underline ml-auto">Lost Password?</a>
   </div>
   <button type="submit" name="login"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center">Login</button>
      <div class="text-sm font-medium text-gray-500">
      Not registered? <a class="text-blue-700 hover:underline" href="register.php">Create account</a>
   </div>
</form>
	</div>
</div>



</div>

</div>
</div>
    
</body>
</html>