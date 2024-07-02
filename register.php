<?php
require('connect.php');

if( isset($_POST["register"]) ) {

	if( register($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
            window.location.href = 'login.php';
			  </script>";
	} else {
		echo mysqli_error($connect);
	}
  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="./src/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
</head>
<body> 
<div class="mx-auto md:h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0 pb-10">
    <!-- content will go here -->
    <div class="mx-auto md:h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0">
    <a href="#" class="text-2xl font-semibold flex justify-center items-center mb-8 lg:mb-10">
      <img src="./src/pnp.png" class="h-11 mr-4" alt="">
      <span>Amonia Level Monitor</span>
    </a>
    <div class="bg-white shadow rounded-lg lg:flex items-center justify-center md:mt-0 w-full lg:max-w-screen-lg 2xl:max:max-w-screen-lg xl:p-0">
	<div class="hidden lg:flex w-2/3">
		<img class="rounded-l-lg" src="./src/reg.jpg" alt="login image">
	</div>
	<div class="w-full p-6 sm:p-8 lg:p-16 lg:py-0 space-y-8">
		<!-- Authentication form goes here -->
        <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">
   Sign UP to platform
</h2>
<form class="mt-8 space-y-6 pb-10" action="" method="post">
   <div>
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
   <div>
      <label for="password2" class="text-sm font-medium text-gray-900 block mb-2">Confirm Your password</label>
      <input type="password" name="password2" id="password2" placeholder=""
         class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
         required>
   </div>
    
   <button type="submit" name="register"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-10 py-3 w-full sm:w-auto text-center">Register</button>
      <a href="login.php"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-14 py-4 w-full mx-10 sm:w-auto text-center">Back</a>
  
         </form>
	</div>
</div>



</div>

</div>
</div>
    
</body>
</html>