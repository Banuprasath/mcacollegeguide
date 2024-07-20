<?php
include 'conn.php';
include 'bt.php';




?>


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
            <select class="form-select" name="college_code" aria-label="Default select example">
                <?php
                $sql = "SELECT DISTINCT community FROM `d2021`";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>

                        <option value=<?php echo $row['community'] ?>><?php echo $row['community'] ?></option>
                <?php
                    }
                }
                ?>
            </select>
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