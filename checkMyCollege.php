<?php
include 'conn.php';




?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>

<body>
    <form name='getmycollege' method='post'>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Rank</label>
            <input type="text" name="rank" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Rank">
        </div>
        <select class="form-select" name="college_code" aria-label="Default select example">
            <?php
            $sql = "SELECT * FROM `college_code`";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
            ?>

                    <option value=<?php echo $row['c-code'] ?>><?php echo $row['c-name'] ?></option>
            <?php
                }
            }
            ?>
        </select>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">community</label>
            <input type="text" name="community" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Rank">
        </div>
        <br>
        <input type="submit" value="submit" name="submit" class="btn btn-success" />

    </form>
</body>

<?php
if (isset($_POST['submit'])) {
    print_r($_POST);

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
        SELECT 1 FROM `D2023` 
        WHERE `college-code` = '$college_code' 
        AND `community` = '$community' 
        AND `RANK` >= '$rank'
    )
    OR EXISTS (
        SELECT 1 FROM `D2022` 
        WHERE `college-code` = '$college_code' 
        AND `community` = '$community' 
        AND `RANK` >= '$rank'
    )
    OR EXISTS (
        SELECT 1 FROM `D2021` 
        WHERE `college-code` = '$college_code' 
        AND `community` = '$community' 
        AND `RANK` >= '$rank'
    )
    THEN 'You have a chance to get this college'
    ELSE 'You have less chance to get this college'
END AS chance;
";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Output the result
        while ($row = $result->fetch_assoc()) {
            echo $row["chance"];
        }
    } else {
        echo "No result found";
    }

    $con->close();
}
?>