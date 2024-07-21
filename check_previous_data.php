<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Data</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <style>
        .form-select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 8px;
            width: 100%;
            font-size: 1rem;
            color: #333;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 24px;
        }
    </style>
</head>

<body class="bg-light font-sans leading-normal tracking-normal">
    <?php
    include("navbar.php");
    ?>
    <!-- Navbar -->


    <!-- Main Content -->
    <div class="container my-5">
        <div class="bg-white rounded shadow-sm p-4">
            <h1 class="text-primary mb-4">Choose the College</h1>
            <form name='test' method='POST' class="mb-4">
                <div class="mb-3">
                    <label for="collegeSelect" class="form-label">College</label>
                    <select name='clgname' id="collegeSelect" class="form-select">
                        <option value="">Select College</option>
                        <?php
                        include("conn.php");
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
                <button type='submit' name='submit' class="btn btn-success">Find Data</button>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $choosen_college = isset($_POST['clgname']) ? $_POST['clgname'] : '';

                if ($choosen_college) {
                    $sql2021 = "SELECT `RANK`, `category` FROM `d2021` WHERE `college-code` = '$choosen_college' ORDER BY `RANK` DESC;";
                    $result2021 = mysqli_query($con, $sql2021);
                    $sql2022 = "SELECT `RANK`, `category` FROM `d2022` WHERE `college-code` = '$choosen_college' ORDER BY `RANK` DESC;";
                    $result2022 = mysqli_query($con, $sql2022);
                    $sql2023 = "SELECT `RANK`, `category` FROM `d2023` WHERE `college-code` = '$choosen_college' ORDER BY `RANK` DESC;";
                    $result2023 = mysqli_query($con, $sql2023);
            ?>

                    <div class="accordion" id="accordionExample">
                        <!-- Accordion Item 2021 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    2021
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Rank</th>
                                                <th>Category</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (mysqli_num_rows($result2021) > 0) {
                                                while ($row2021 = mysqli_fetch_assoc($result2021)) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $row2021['RANK']; ?></td>
                                                        <td><?php echo $row2021['category']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                            } else { ?>
                                                <tr>
                                                    <td colspan="2" class="text-center">No data available</td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 2022 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2022
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Rank</th>
                                                <th>Category</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (mysqli_num_rows($result2022) > 0) {
                                                while ($row2022 = mysqli_fetch_assoc($result2022)) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $row2022['RANK']; ?></td>
                                                        <td><?php echo $row2022['category']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                            } else { ?>
                                                <tr>
                                                    <td colspan="2" class="text-center">No data available</td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 2023 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    2023
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Rank</th>
                                                <th>Category</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (mysqli_num_rows($result2023) > 0) {
                                                while ($row2023 = mysqli_fetch_assoc($result2023)) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $row2023['RANK']; ?></td>
                                                        <td><?php echo $row2023['category']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                            } else { ?>
                                                <tr>
                                                    <td colspan="2" class="text-center">No data available</td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php
                } else {
                    echo "<p class='text-danger'>Please select a college.</p>";
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

    <script>
        $(document).ready(function() {
            $('#collegeSelect').select2({
                placeholder: 'Select College',
                width: '100%' // Adjust width to fit your design
            });
        });
    </script>

</body>

</html>