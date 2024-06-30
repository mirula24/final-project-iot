<?php 
$connect = mysqli_connect('localhost','root','','esp32');
if(isset($connect)){
    echo "<script>console.log('Connecting to database is SUCCESS')</script>";

}else{
    echo '<script>Connecting to database is FAILED</script>';
}


// function update($data){
//     global $connect;
//     $klp = $_POST['humidity'];
//     $sh = $_POST['temperature'];
//     $gas = $_POST['gas'];
//     $waktu = date("Y-m-d H:i:s");

//     $insert = "INSERT INTO esp32_record VAlUEs ('','esp32_1',$klp,$sh,$gas,'$waktu')";
//     mysqli_query($connect,$insert);
//     return mysqli_affected_rows($connect);
    
// }

// if ($_POST){
//     update($_POST);
//     echo "<script>
//     console.log('succues update');
//     </script>";
// }else{
//     echo "<script>
//     console.log('failed update');
//     </script>";
    
// }


?>