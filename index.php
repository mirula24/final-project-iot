<?php
require('connect.php');



?>



<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link href="./src/output.css" rel="stylesheet">
</head>
<body class="bg-blue-100">
    <?php
        include('nav.php');
    ?>


<section>
    <div class="container mx-auto items-center">
        <div class="flex flex-wrap ">
            <div class="w-full lg:pt-36 pt-24">
                <h1 class="text-2xl  text-primarybg bg-green text-center py-5 font-bold rounded-lg lg:mt-5" >
                    Real-Time Monitor
                </h1>
            </div>
            <div class="w-full py-10 md:flex md:flex-wrap text-primarybg bg-primaryText rounded-lg" >
                <h2 class="mx-auto text-2xl text-center my-auto">
                    Sensor 1
                </h2>
                <h3 class="mx-auto text-center my-auto text-lg">
                Humidity
                </h3>
                <h3 class="mx-auto text-center my-auto text-2xl">
                    30 %
                </h3>
                <h3 class="mx-auto text-center my-auto text-lg">
                Temperature
                </h3>
                <h3 class="mx-auto text-center my-auto text-2xl">
                    25 deg
                </h3><h3 class="mx-auto text-center my-auto text-lg">
                Amonia Level
                </h3>
                <h3 class="mx-auto text-center my-auto text-2xl ">
                    15 %
                </h3>
            </div>
            <div class="w-full py-10 md:flex md:flex-wrap bg-primarybg text-primaryText rounded-lg " >
                <h2 class="mx-auto text-2xl text-center my-auto">
                    Sensor 2
                </h2>
                <h3 class="mx-auto text-center my-auto text-lg ">
                Humidity
                </h3>
                <h3 class="mx-auto text-center my-auto text-2xl">
                    30 %
                </h3>
                <h3 class="mx-auto text-center my-auto text-lg">
                Temperature
                </h3>
                <h3 class="mx-auto text-center my-auto text-2xl">
                    25 deg
                </h3><h3 class="mx-auto text-center my-auto text-lg">
                Amonia Level
                </h3>
                <h3 class="mx-auto text-center my-auto text-2xl">
                    15 %
                </h3>
            </div>
            <div class="w-full py-10 md:flex md:flex-wrap text-primarybg bg-primaryText rounded-lg" >
                <h2 class="mx-auto text-2xl text-center my-auto">
                    Sensor 3
                </h2>
                <h3 class="mx-auto text-center my-auto text-lg">
                Humidity
                </h3>
                <h3 class="mx-auto text-center my-auto text-2xl">
                    30 %
                </h3>
                <h3 class="mx-auto text-center my-auto text-lg">
                Temperature
                </h3>
                <h3 class="mx-auto text-center my-auto text-2xl">
                    25 deg
                </h3><h3 class="mx-auto text-center my-auto text-lg">
                Amonia Level
                </h3>
                <h3 class="mx-auto text-center my-auto text-2xl">
                    15 %
                </h3>
            </div>

            <div class="w-full flex flex-wrap p-10">
                <div class="mx-auto justify-center">
                    <button type="button" class="text-gray-900 bg-primaryText border border-gray-300 
                    focus:outline-none hover:bg-primarybg hover:text-primaryText focus:ring-4 focus:ring-gray-100 font-medium rounded-full 
                    text-sm px-10 py-2.5 me-2 mb-2 self-center"><a href="graphic.php">Graphic Record</a></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FOOTER START -->
<?php
include('footer.php');
?>

<!-- FOOTER END -->



<script src="src/script.js"></script>
</body>
</html>