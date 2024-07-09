<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require('connect.php');
$dataPerPage = 20;
$totalData = count(query("SELECT * FROM esp32_record WHERE sensor = 'esp32_1'"));
$totalPage = ceil($totalData / $dataPerPage);
$activePage = (isset($_GET["page"])) ? $_GET["page"] :1;
$begin =($dataPerPage * $activePage) - $dataPerPage;

$data1 = mysqli_query($connect, "SELECT kelembapan, suhu, gas, waktu, time(waktu) as jam FROM esp32_record WHERE sensor = 'esp32_1' ORDER BY jam DESC LIMIT $begin, $dataPerPage ") or die(mysqli_error($connect));
$data2 = mysqli_query($connect, "SELECT kelembapan, suhu, gas, waktu, time(waktu) as jam FROM esp32_record WHERE sensor = 'esp32_2' ORDER BY jam DESC LIMIT $begin, $dataPerPage ") or die(mysqli_error($connect));
$data3 = mysqli_query($connect, "SELECT kelembapan, suhu, gas, waktu, time(waktu) as jam FROM esp32_record WHERE sensor = 'esp32_3' ORDER BY jam DESC LIMIT $begin, $dataPerPage ") or die(mysqli_error($connect));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensor Data</title>
    <link href="./src/output.css" rel="stylesheet">
</head>
<body class="bg-blue-100">

<?php include('nav.php') ?>

<div class="container mx-auto p-4 pt-24 bg">
  <div class="bg-white rounded-md p-5 ">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
      <!-- Sensor 1 -->
      <div class="border rounded-lg p-4">
        <h2 class="text-lg font-bold mb-2 text-center">Sensor 1</h2>
        <table class="w-full">
          <thead>
            <tr>
              <th class="text-center">Date / Time</th>
              <th class="text-center">Humility</th>
              <th class="text-center">Temperature</th>
              <th class="text-center">Ammonia level</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data1 as $row): ?>
              <tr>
            <td class="text-center sm:text-sm border-2 border-primarybg py-2"><?php echo $row['waktu'] ?></td>
            <td class="text-center sm:text-sm border-2 border-primarybg py-2"><?php echo $row['kelembapan'] ?></td>
            <td class="text-center sm:text-sm border-2 border-primarybg py-2"><?php echo $row['suhu'] ?></td>
            <td class="text-center sm:text-sm border-2 border-primarybg py-2"><?php echo $row['gas'] ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    
    <!-- Sensor 2 -->
    <div class="border rounded-lg p-4">
      <h2 class="text-lg font-bold mb-2 text-center">Sensor 2</h2>
      <table class="w-full">
        <thead>
          <tr>
            <th class="text-center">Date / Time</th>
            <th class="text-center">Humility</th>
            <th class="text-center">Temperature</th>
            <th class="text-center">Ammonia level</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data2 as $row): ?>
          <tr>
          <td class="text-center sm:text-sm border-2 border-primarybg py-2 "><?php echo $row['waktu'] ?></td>
          <td class="text-center sm:text-sm border-2 border-primarybg py-2"><?php echo $row['kelembapan'] ?></td>
          <td class="text-center sm:text-sm border-2 border-primarybg py-2"><?php echo $row['suhu'] ?></td>
          <td class="text-center sm:text-sm border-2 border-primarybg py-2"><?php echo $row['gas'] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  
  <!-- Sensor 3 -->
    <div class="border rounded-lg p-4">
      <h2 class="text-lg font-bold mb-2 text-center">Sensor 3</h2>
      <table class="w-full">
        <thead>
          <tr>
            <th class="text-center">Date / Time</th>
            <th class="text-center">Humility</th>
            <th class="text-center">Temperature</th>
            <th class="text-center">Ammonia level</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data3 as $row): ?>
            <tr>
              <td class="text-center sm:text-sm border-2 border-primarybg py-2 "><?php echo $row['waktu'] ?></td>
              <td class="text-center sm:text-sm border-2 border-primarybg py-2"><?php echo $row['kelembapan'] ?></td>
              <td class="text-center sm:text-sm border-2 border-primarybg py-2"><?php echo $row['suhu'] ?></td>
              <td class="text-center sm:text-sm border-2 border-primarybg py-2"><?php echo $row['gas'] ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
  </div>
  <div class="w-full text-center">
    <?php for($i = 1 ; $i <= $totalPage; $i++): ?>
      <?php if($i == $activePage) :?>
        <a href="?page=<?php echo $i; ?>" class="font-bold text-lg"><?php echo $i; ?></a>
      <?php else :?>
      <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
<?php endif; ?>
<?php endfor; ?>
</div>
</div>
</div>
<div class="w-full flex flex-wrap p-10">
  <div class="mx-auto justify-center">
    <button type="button" class="text-gray-900 bg-primaryText border border-gray-300 
    focus:outline-none hover:bg-primarybg hover:text-primaryText focus:ring-4 focus:ring-gray-100 font-medium rounded-full 
                    text-sm px-10 py-2.5 me-2 mb-2 self-center"><a href="index.php">Real-Time</a></button>
                  </div>
                  <div class="mx-auto justify-center">
                    <button type="button" class="text-gray-900 bg-primaryText border border-gray-300 
                    focus:outline-none hover:bg-primarybg hover:text-primaryText focus:ring-4 focus:ring-gray-100 font-medium rounded-full 
                    text-sm px-10 py-2.5 me-2 mb-2 self-center"><a href="graphic.php">Graphic Record</a></button>
                  </div>
                </div>  
                
                <?php include('footer.php') ?>

<script src="src/script.js"></script>

</body>
</html>
