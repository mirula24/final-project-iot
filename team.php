<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
    <link href="./src/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100 p-6">
    <?php
    include("nav.php");
    ?>

    <div class="container mx-auto pt-24">
        <h1 class="text-3xl font-bold text-center mb-8">Our Team</h1>
        <div class="flex flex-wrap justify-center">
            <!-- Person 1 -->
            <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/150" alt="Person 1">
                    <div class="p-4">
                        <h2 class="text-xl font-bold">Person 1</h2>
                        <p class="text-gray-700">Description for person 1 goes here. They are a great team member with amazing skills.</p>
                    </div>
                </div>
            </div>
            <!-- Person 2 -->
            <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/150" alt="Person 2">
                    <div class="p-4">
                        <h2 class="text-xl font-bold">Person 2</h2>
                        <p class="text-gray-700">Description for person 2 goes here. They bring a lot of experience to the team.</p>
                    </div>
                </div>
            </div>
            <!-- Person 3 -->
            <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/150" alt="Person 3">
                    <div class="p-4">
                        <h2 class="text-xl font-bold">Person 3</h2>
                        <p class="text-gray-700">Description for person 3 goes here. They are known for their creativity and innovation.</p>
                    </div>
                </div>
            </div>
            <!-- Person 4 -->
            <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/150" alt="Person 4">
                    <div class="p-4">
                        <h2 class="text-xl font-bold">Person 4</h2>
                        <p class="text-gray-700">Description for person 4 goes here. They excel in leadership and team management.</p>
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