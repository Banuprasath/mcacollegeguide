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

</html>
<?php
include 'conn.php';
$sql = "SELECT * FROM `college_code`";
$result = mysqli_query($con, $sql);

?>


<form name='test' method='POST'>
  <input type='test' name='rank' value="" />


  <input type='submit' name='submit' value='submit' />
</form>


<?php
if (isset($_POST['submit'])) {


  $G_RANK = $_POST['rank'];






  // echo $val;
  $sql = "(
    SELECT `RANK`, `COLLEGE-CODE`,'2023' AS `YEAR`
    FROM `D2023`
    WHERE `RANK` < $G_RANK
    ORDER BY `RANK` DESC
    LIMIT 5
)
UNION ALL
(
    SELECT `RANK`, `COLLEGE-CODE`,'2023' AS `YEAR`
    FROM `D2023`
    WHERE `RANK` >= $G_RANK
    ORDER BY `RANK` ASC
    LIMIT 6
)
UNION ALL
(
    SELECT `RANK`, `COLLEGE-CODE`,'2022' AS `YEAR`
    FROM `D2022`
    WHERE `RANK` < $G_RANK
    ORDER BY `RANK` DESC
    LIMIT 5
)
UNION ALL
(
    SELECT `RANK`, `COLLEGE-CODE`,'2022' AS `YEAR`
    FROM `D2022`
    WHERE `RANK` >= $G_RANK
    ORDER BY `RANK` ASC
    LIMIT 6
)
UNION ALL
(
    SELECT `RANK`, `COLLEGE-CODE`,'2021' AS `YEAR`
    FROM `D2021`
    WHERE `RANK` < $G_RANK
    ORDER BY `RANK` DESC
    LIMIT 5
)
UNION ALL
(
    SELECT `RANK`, `COLLEGE-CODE`,'2021' AS `YEAR`
    FROM `D2021`
    WHERE `RANK` >= $G_RANK
    ORDER BY `RANK` ASC
    LIMIT 6
)
ORDER BY `RANK`
LIMIT 25;
";

  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {

    while ($rank_row = mysqli_fetch_assoc($result)) {

      $col_code = $rank_row['COLLEGE-CODE'];

      $sql = "SELECT DISTINCT  * FROM `college_code` WHERE `c-code` =  '$col_code' ";
      $result1 = mysqli_query($con, $sql);

      if (mysqli_num_rows($result1) > 0) {

        while ($row = mysqli_fetch_assoc($result1)) {
          print_r($row);
          echo  $rank_row['YEAR'];

          //echo $row['c-name'];
          echo "<br>";
        }
      } else {
        echo "Sorry we don't have data for your Rank for year: ";
      }
    }
  } else {
    echo "Sorry we don't have data for your Rank";
  }


  //show c-code of selected college

}
?>