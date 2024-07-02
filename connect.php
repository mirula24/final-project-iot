<?php 
$connect = mysqli_connect('localhost','root','','esp32');



function update($data){
    global $connect;
    $sensor = $_POST['name'];
    $klp = $_POST['humidity'];
    $sh = $_POST['temperature'];
    $gas = $_POST['gas'];
    $waktu = date("Y-m-d H:i:s");

    $insert = "INSERT INTO esp32_record VAlUES ('',$sensor,$klp,$sh,$gas,'$waktu')";
    mysqli_query($connect,$insert);
    return mysqli_affected_rows($connect);

    if ($_POST){
        update($_POST);
        echo "<script>
        console.log('succues update');
        </script>";
    }else{
        echo "<script>
        console.log('failed update');
        </script>";
        
    }

    
}


function register($data) {


	global $connect;
 
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($connect, $data["password"]);
	$password2 = mysqli_real_escape_string($connect , $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($connect, "SELECT username FROM users WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) { 
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}


	// cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}
	// encripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);


	// tambahkan userbaru ke database
	mysqli_query($connect, "INSERT INTO users (id,username,password) VALUES(null,'$username', '$password')");

	return mysqli_affected_rows($connect);

} 




?>