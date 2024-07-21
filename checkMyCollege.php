<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TANCET Eligibility Check</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <style>
        body {
            background: #f1f5f8;
            font-family: 'Inter', sans-serif;
        }

        .container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .result {
            text-align: center;
            margin-top: 20px;
        }

        .result p {
            font-size: 18px;
            font-weight: bold;
            color: #10b981;
        }

        .result p.negative {
            color: #ef4444;
        }

        .how-it-works {
            text-align: justify;
            margin-bottom: 40px;
        }

        .how-it-works h2 {
            font-size: 24px;
            color: #1f2937;
            text-align: center;
        }

        .how-it-works p {
            color: #6b7280;
        }

        .flex {
            display: flow;
        }
    </style>
    <script>
        function validateForm() {
            var rank = document.forms["getmycollege"]["rank"].value;
            var collegeCode = document.forms["getmycollege"]["college_code"].value;
            var community = document.forms["getmycollege"]["community"].value;

            if (rank == "" || collegeCode == "" || community == "") {
                alert("All fields must be filled out");
                return false;
            }
            return true;
        }

        function showConfetti() {
            let duration = 15 * 1000;
            let animationEnd = Date.now() + duration;
            let defaults = {
                startVelocity: 30,
                spread: 360,
                ticks: 60,
                zIndex: 0
            };

            function randomInRange(min, max) {
                return Math.random() * (max - min) + min;
            }

            let interval = setInterval(function() {
                let timeLeft = animationEnd - Date.now();

                if (timeLeft <= 0) {
                    return clearInterval(interval);
                }

                let particleCount = 50 * (timeLeft / duration);
                confetti(Object.assign({}, defaults, {
                    particleCount,
                    origin: {
                        x: randomInRange(0.1, 0.3),
                        y: Math.random() - 0.2
                    }
                }));
                confetti(Object.assign({}, defaults, {
                    particleCount,
                    origin: {
                        x: randomInRange(0.7, 0.9),
                        y: Math.random() - 0.2
                    }
                }));
            }, 250);
        }

        $(document).ready(function() {
            $('#collegeCodeSelect').select2({
                placeholder: 'Select College Code',
                width: '100%' // Adjust width to fit your design
            });
            $('#communitySelect').select2({
                placeholder: 'Select Community',
                width: '100%' // Adjust width to fit your design
            });
        });
    </script>
</head>

<?php
include("navbar.php");
?>

<body class="flex flex-col items-center justify-center min-h-screen">

    <!-- Navbar -->

    <div class="how-it-works p-4 mt-8">
        <h2 class="text-2xl font-semibold">How It Works</h2>
        <p class="text-gray-600 mt-2">
            TANCET, the Tamil Nadu Common Entrance Test, is an entrance exam for various postgraduate programs, designed to assess candidates' eligibility for admission to higher education institutions in Tamil Nadu. This test evaluates candidates based on their performance in subjects related to their chosen field of study and plays a crucial role in the college admission process.

            Please note that this page is intended for testing purposes only. The results provided here are not guaranteed to be accurate and should not be relied upon as definitive. The data used for evaluation is based on historical records and may not fully reflect current admission criteria. The result will be approximately 90% accurate and is meant to give a general idea of your chances of getting into a particular college. For a precise assessment, please refer to official sources and consult with relevant authorities.
        </p>
    </div>

    <div class="container p-8 max-w-md mx-auto">
        <form name='getmycollege' method='post' onsubmit="return validateForm()">
            <div class="mb-4">
                <label for="rankInput" class="block text-gray-700 font-semibold mb-2">Rank</label>
                <input type="text" name="rank" class="form-input w-full border rounded px-3 py-2" id="rankInput" placeholder="Enter your Rank">
            </div>
            <div class="mb-4">
                <label for="collegeCodeSelect" class="block text-gray-700 font-semibold mb-2">College Code</label>
                <select class="form-select w-full border rounded px-3 py-2" name="college_code" id="collegeCodeSelect">
                    <option value="">Select College Code</option>
                    <?php
                    include 'conn.php';
                    $sql = "SELECT * FROM `college_code`";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['c-code']}'>{$row['c-name']}</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="mb-4">
                <label for="communitySelect" class="block text-gray-700 font-semibold mb-2">Community</label>
                <select class="form-select w-full border rounded px-3 py-2" name="community" id="communitySelect">
                    <option value="">Select Community</option>
                    <?php
                    $sql = "SELECT DISTINCT category FROM `d2021`";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='{$row['category']}'>{$row['category']}</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <input type="submit" value="Check" name="submit" class="w-full bg-green-500 text-white font-semibold py-2 rounded cursor-pointer hover:bg-green-600">
        </form>

        <div class="result mt-6">
            <?php
            if (isset($_POST['submit'])) {
                $rank = $_POST['rank'];
                $college_code = $_POST['college_code'];
                $community = $_POST['community'];

                // Sanitize user input
                $rank = $con->real_escape_string($rank);
                $college_code = $con->real_escape_string($college_code);
                $community = $con->real_escape_string($community);

                // SQL query
                $sql = "
    SELECT CASE
        WHEN EXISTS (
            SELECT 1 FROM `d2023` 
            WHERE `college-code` = '$college_code' 
            AND `category` = '$community' 
            AND `RANK` >= '$rank'
        )
        OR EXISTS (
            SELECT 1 FROM `d2022` 
            WHERE `college-code` = '$college_code' 
            AND `category` = '$community' 
            AND `RANK` >= '$rank'
        )
        OR EXISTS (
            SELECT 1 FROM `d2021` 


            WHERE `college-code` = '$college_code' 
            AND `category` = '$community' 
            AND `RANK` >= '$rank'
        )
        THEN 'You have a chance to get this college'
        ELSE 'You have less chance to get this college'
    END AS chance;
    ";

                $result = $con->query($sql);

                if (!$result) {
                    die("Error executing query: " . $con->error);
                }

                if ($result->num_rows > 0) {
                    // Output the result
                    while ($row = $result->fetch_assoc()) {
                        $message = $row["chance"];
                        if ($message == 'You have a chance to get this college') {
                            echo "<p>$message</p>";
                            echo "<script>showConfetti();</script>";
                        } else {
                            echo "<p class='negative'>$message</p>";
                        }
                    }
                } else {
                    echo "<p class='negative'>No result found</p>";
                }

                $con->close();
            }
            ?>
        </div>
    </div>

</body>

</html>