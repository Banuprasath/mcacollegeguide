<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Data</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <?php
    include("navbar.php");
    ?>
    <!-- Main Content -->
    <div class="container my-8">
        <div class="rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-semibold text-gray-800 mb-6">Find suitable college for my Rank</h1>
            <form name='test' method='POST' class="mb-6">
                <div class="mb-4">
                    <label for="rankInput" class="block text-gray-700 text-sm font-bold mb-2">Enter your Rank</label>
                    <input type='number' name='rank' id="rankInput" class="form-input w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Rank" required />
                </div>
                <button type='submit' name='submit' class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">Submit</button>
            </form>

            <?php
            include 'conn.php';

            // Define soft background colors
            $colors = [
                '#e0f7fa', // Light cyan
                '#f1f8e9', // Light green
                '#fff3e0', // Light orange
                '#fce4ec', // Light pink
                '#e8f5e9'  // Light green
            ];

            if (isset($_POST['submit'])) {
                $G_RANK = $_POST['rank'];
                if ($G_RANK > 3200) {
                    echo '<p class="text-red-500">No data found for the given rank.</p>';
                } else {

                    $sql = "(
                        SELECT `RANK`, `COLLEGE-CODE`, '2023' AS `YEAR`
                        FROM `d2023`
                        WHERE `RANK` < $G_RANK
                        ORDER BY `RANK` DESC
                        LIMIT 5
                    )
                    UNION ALL
                    (
                        SELECT `RANK`, `COLLEGE-CODE`, '2023' AS `YEAR`
                        FROM `d2023`
                        WHERE `RANK` >= $G_RANK
                        ORDER BY `RANK` ASC
                        LIMIT 6
                    )
                    UNION ALL
                    (
                        SELECT `RANK`, `COLLEGE-CODE`, '2022' AS `YEAR`
                        FROM `d2022`
                        WHERE `RANK` < $G_RANK
                        ORDER BY `RANK` DESC
                        LIMIT 5
                    )
                    UNION ALL
                    (
                        SELECT `RANK`, `COLLEGE-CODE`, '2022' AS `YEAR`
                        FROM `d2022`
                        WHERE `RANK` >= $G_RANK
                        ORDER BY `RANK` ASC
                        LIMIT 6
                    )
                    UNION ALL
                    (
                        SELECT `RANK`, `COLLEGE-CODE`, '2021' AS `YEAR`
                        FROM `d2021`
                        WHERE `RANK` < $G_RANK
                        ORDER BY `RANK` DESC
                        LIMIT 5
                    )
                    UNION ALL
                    (
                        SELECT `RANK`, `COLLEGE-CODE`, '2021' AS `YEAR`
                        FROM `d2021`
                        WHERE `RANK` >= $G_RANK
                        ORDER BY `RANK` ASC
                        LIMIT 6
                    )
                    ORDER BY `RANK`
                    LIMIT 25;";

                    // Debugging: Print the SQL query
                    //     echo "<pre>" . htmlspecialchars($sql) . "</pre>";

                    $result = mysqli_query($con, $sql);

                    if (!$result) {
                        // Display SQL error
                        echo '<p class="text-red-500">SQL Error: ' . mysqli_error($con) . '</p>';
                    } else {
                        $data = [];
                        if (mysqli_num_rows($result) > 0) {
                            while ($rank_row = mysqli_fetch_assoc($result)) {
                                $col_code = $rank_row['COLLEGE-CODE'];

                                $sql_college = "SELECT DISTINCT * FROM `college_code` WHERE `c-code` = '$col_code'";
                                $result_college = mysqli_query($con, $sql_college);

                                if ($result_college && mysqli_num_rows($result_college) > 0) {
                                    while ($college_row = mysqli_fetch_assoc($result_college)) {
                                        $data[] = [
                                            'name' => $college_row['c-name'],
                                            'year' => $rank_row['YEAR']
                                        ];
                                    }
                                } else {
                                    // Handle case where no college data is found
                                }
                            }
                        } else {
                            // Handle case where no data is found for the given rank
                        }
            ?>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <?php foreach ($data as $item) : ?>
                                <?php
                                // Pick a random color for each card
                                $randomColor = $colors[array_rand($colors)];
                                ?>
                                <div class="rounded-lg shadow-md p-4" style="background-color: <?php echo htmlspecialchars($randomColor); ?>;">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-2"><?php echo htmlspecialchars($item['name']); ?></h3>
                                    <p class="text-gray-600">Year: <?php echo htmlspecialchars($item['year']); ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
            <?php }
                }
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; 2024 College Info. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>