<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Results</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <?php
            // Example data array (replace this with your actual query results)
            $results = [
                ["RANK" => 203, "COLLEGE-CODE" => "710", "COMMUNITY" => "BC", "NAME" => "N BHARATHI"],
                ["RANK" => 204, "COLLEGE-CODE" => "2712", "COMMUNITY" => "BC", "NAME" => "Asha Mercy R"],
                ["RANK" => 206, "COLLEGE-CODE" => "2006SS", "COMMUNITY" => "MBC", "NAME" => "VEERAMAHALAKSHMI M"],
                // Add more results as needed
            ];

            foreach ($results as $result) {
                echo '
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Rank: ' . htmlspecialchars($result["RANK"]) . '</h5>
                            <p class="card-text">College Code: ' . htmlspecialchars($result["COLLEGE-CODE"]) . '</p>
                            <p class="card-text">Community: ' . htmlspecialchars($result["COMMUNITY"]) . '</p>
                            <p class="card-text">Name: ' . htmlspecialchars($result["NAME"]) . '</p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>