<?php
require('connect.php');
$data1 = mysqli_query($connect,"SELECT * FROM esp32_record Where sensor = 'esp32_1'limit 10");
$data2 = mysqli_query($connect,"SELECT * FROM esp32_record Where sensor = 'esp32_2'limit 10");

$data3 = mysqli_query($connect,"SELECT * FROM esp32_record Where sensor = 'esp32_3' limit 10");
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
            <div class="w-full pt-24">
            <div class="w-full lg:w-1/3 px-4  self-center pb-10">
                <h3 class="font-bold text-center text- md:text-2xl pb-4">Humidity</h3>
                <canvas id="myChart1" class="w-full self-center mx-auto bg-white rounded"></canvas>
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
                '<?= $row['waktu'] ?>',
            <?php endforeach; ?>
        ],
        datasets: [{
            label: 'sensor 1',
            data: [
                <?php foreach($data1 as $row): ?>
                    <?= $row['kelembapan'] ?>,
                <?php endforeach; ?>
            ],
            backgroundColor: 'rgba(227, 14, 24, 1)',
            borderColor: 'rgba(227, 14, 24, 1)',
            borderWidth: 4
        },{
          label: 'sensor 2',
            data: [
                <?php foreach($data2 as $row): ?>
                    <?= $row['kelembapan'] ?>,
                <?php endforeach; ?>
            ],
            backgroundColor: 'rgba(15, 14, 24, 1)',
            borderColor: 'rgba(15, 14, 24, 1)',
            borderWidth: 4
        },{
          label: 'sensor 3',
            data: [
                <?php foreach($data3 as $row): ?>
                    <?= $row['kelembapan'] ?>,
                <?php endforeach; ?>
            ],
            backgroundColor: 'rgba(227, 255, 250, 1)',
            borderColor: 'rgba(227, 25, 250, 1)',
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
</body>
</html>