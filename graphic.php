<?php
require('connect.php');
$data1 = mysqli_query($connect,"SELECT kelembapan,suhu,gas, time(waktu) as jam FROM esp32_record Where sensor = 'esp32_1'limit 10");
$data2 = mysqli_query($connect,"SELECT kelembapan,suhu,gas, time(waktu) as jam FROM esp32_record Where sensor = 'esp32_2'limit 10");

$data3 = mysqli_query($connect,"SELECT kelembapan,suhu,gas, time(waktu) as jam  FROM esp32_record Where sensor = 'esp32_3' limit 10");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphic of Record</title>
    <link href="./src/output.css" rel="stylesheet">
</head>
<body>
    <?php
    include('nav.php');    
    ?>

    <section>
        <div class="container bg-blue-100">
            
            <div class="w-full pt-24 flex flex-wrap">
            <div class="w-full mx-auto">
                <h2 class="text-center mb-10 pt-10 font-bold text-2xl">
                    Graphic of Record
                </h2>
            </div>
                <div class="w-full lg:w-1/3 px-4  self-center py-10">
                    <h3 class="font-bold text-center text- md:text-2xl pb-4">Humidity</h3>
                    <canvas id="myChart1" class="w-full self-center mx-auto bg-white rounded"></canvas>
                </div>
                <div class="w-full lg:w-1/3 px-4  self-center pb-10">
                    <h3 class="font-bold text-center text- md:text-2xl pb-4">Temperature</h3>
                    <canvas id="myChart2" class="w-full self-center mx-auto bg-white rounded"></canvas>
                </div>
                <div class="w-full lg:w-1/3 px-4  self-center pb-10">
                    <h3 class="font-bold text-center text- md:text-2xl pb-4">Amonia Level</h3>
                    <canvas id="myChart3" class="w-full self-center mx-auto bg-white rounded"></canvas>
                </div>
            </div>
        </div>
    </section>


<?php
include('footer.php');
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
 var ctx = document.getElementById('myChart1').getContext('2d');
 var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
            <?php foreach($data1 as $row): ?>
                '<?= $row['jam'] ?>',
            <?php endforeach; ?>
        ],
        datasets: [{
            label: 'sensor 1',
            data: [
                <?php foreach($data1 as $row): ?>
                    <?= $row['kelembapan'] ?>,
                <?php endforeach; ?>
            ],
            backgroundColor: 'rgba(24,42,58, 1)',
            borderColor: 'rgba(24,42,58, 1)',
            borderWidth: 4
        },{
          label: 'sensor 2',
            data: [
                <?php foreach($data2 as $row): ?>
                    <?= $row['kelembapan'] ?>,
                <?php endforeach; ?>
            ],
            backgroundColor: 'rgba(0,192,139, 1)',
            borderColor: 'rgba(0,192,139, 1)',
            borderWidth: 4
        },{
          label: 'sensor 3',
            data: [
                <?php foreach($data3 as $row): ?>
                    <?= $row['kelembapan'] ?>,
                <?php endforeach; ?>
            ],
            backgroundColor: 'rgba(124,142,58, 1)',
            borderColor: 'rgba(124,142,58, 1)',
            borderWidth: 4
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: false
            }
        }
    }
});
var ctx2 = document.getElementById('myChart2').getContext('2d');
 var myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: [
            <?php foreach($data1 as $row): ?>
                '<?= $row['jam'] ?>',
            <?php endforeach; ?>
        ],
        datasets: [{
            label: 'sensor 1',
            data: [
                <?php foreach($data1 as $row): ?>
                    <?= $row['suhu'] ?>,
                <?php endforeach; ?>
            ],
            backgroundColor: 'rgba(24,42,58, 1)',
            borderColor: 'rgba(24,42,58, 1)',
            borderWidth: 4
        },{
          label: 'sensor 2',
            data: [
                <?php foreach($data2 as $row): ?>
                    <?= $row['suhu'] ?>,
                <?php endforeach; ?>
            ],
            backgroundColor: 'rgba(0,192,139, 1)',
            borderColor: 'rgba(0,192,139, 1)',
            borderWidth: 4
        },{
          label: 'sensor 3',
            data: [
                <?php foreach($data3 as $row): ?>
                    <?= $row['suhu'] ?>,
                <?php endforeach; ?>
            ],
            backgroundColor: 'rgba(124,142,58, 1)',
            borderColor: 'rgba(124,142,58, 1)',
            borderWidth: 4
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: false
            }
        }
    }
});
var ctx3 = document.getElementById('myChart3').getContext('2d');
 var myChart3 = new Chart(ctx3, {
    type: 'line',
    data: {
        labels: [
            <?php foreach($data1 as $row): ?>
                '<?= $row['jam'] ?>',
            <?php endforeach; ?>
        ],
        datasets: [{
            label: 'sensor 1',
            data: [
                <?php foreach($data1 as $row): ?>
                    <?= $row['gas'] ?>,
                <?php endforeach; ?>
            ],
            backgroundColor: 'rgba(24,42,58, 1)',
            borderColor: 'rgba(24,42,58, 1)',
            borderWidth: 4
        },{
          label: 'sensor 2',
            data: [
                <?php foreach($data2 as $row): ?>
                    <?= $row['gas'] ?>,
                <?php endforeach; ?>
            ],
            backgroundColor: 'rgba(0,192,139, 1)',
            borderColor: 'rgba(0,192,139, 1)',
            borderWidth: 4
        },{
          label: 'sensor 3',
            data: [
                <?php foreach($data3 as $row): ?>
                    <?= $row['gas'] ?>,
                <?php endforeach; ?>
            ],
            backgroundColor: 'rgba(124,142,58, 1)',
            borderColor: 'rgba(124,142,58, 1)',
            borderWidth: 4
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: false
            }
        }
    }
});
</script>
<script src="src/script.js"></script>
</body>
</html>