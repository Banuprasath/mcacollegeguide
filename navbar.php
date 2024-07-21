<?php
?>
<!-- <nav class="bg-gray-800 text-white py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <a href="#" class="text-2xl font-semibold">TANCET Info</a>
        <div class="space-x-4">
            <a href="#" class="hover:text-gray-300">Home</a>
            <a href="#" class="hover:text-gray-300">About</a>
            <a href="#" class="hover:text-gray-300">Contact</a>
        </div>
    </div>
</nav> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gray Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-gray-800 {
            background-color: #303c4f;
            /* Tailwind's bg-gray-800 color #2d3748 */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-gray-800">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">MCA Guide</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="check_previous_data.php">College</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="findCollege.php">Rank</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="checkMyCollege.php">My College</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>