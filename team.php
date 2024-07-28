<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
    <link href="./src/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100 py-6">
    <?php
    include("nav.php");
    ?>

    <div class="container mx-auto pt-24">
        <h1 class="text-3xl font-bold text-center mb-8">Our Team</h1>
        <div class="flex flex-wrap justify-center">
            <!-- Person 1 -->
            <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-48 object-cover" src="https:src/Mr. Firdaus.png" alt="Person 1">
                    <div class="p-4">
                        <h2 class="text-xl font-bold">Mentor 1</h2>
                        <p class="text-gray-700">Firdaus, ST., MT.</p>
                    </div>
                </div>
            </div>
            <!-- Person 2 -->
            <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img class="sw-full h-48 object-cover" src="src/Mrs. Vera.jpg" alt="Person 2">
                    <div class="p-4">
                        <h2 class="text-xl font-bold">Mentor 2</h2>
                        <p class="text-gray-700">Vera Veronica, ST., MT.</p>
                    </div>
                </div>
            </div>
            <!-- Person 3 -->
            <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-48 object-cover" img src="src/falhan.jpg" alt="Person 3">
                    <div class="p-4">
                        <h2 class="text-xl font-bold">Partner 1</h2>
                        <p class="text-gray-700">Falhan Febrian Rizaldi.</p>
                    </div>
                </div>
            </div>
            <!-- Person 4 -->
            <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-48 object-cover" img src="src/sukma.jpg" alt="Person 4">
                    <div class="p-4">
                        <h2 class="text-xl font-bold">Partner 2</h2>
                        <p class="text-gray-700">Sukma Adillah Nelfiza.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");

    ?>
</body>

</html>