<?php
include("conn.php");
include("bt.php");
$sql = "SELECT * FROM `college_code`";
$result = mysqli_query($con, $sql);
?>
<form name='test' method='POST'>

    <select name='clgname'>
        <option value="">Select College</option>
        <?php
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
        ?>

                <option value=<?php echo $row['c-code'] ?>><?php echo $row['c-name'] ?></option>
        <?php
            }
        }
        ?>
    </select>

    <input type='submit' name='submit' value='submit' />
</form>
<?php

if (isset($_POST['submit'])) {
    $choosen_college = $_POST['clgname'];

    echo "college-code :" . $choosen_college;

    $sql2021 = "SELECT `RANK`, `category` FROM `d2021` WHERE `college-code` = '$choosen_college' ORDER BY `RANK` DESC;";
    $result2021 = mysqli_query($con, $sql2021);
    $sql2022 = "SELECT `RANK`, `category` FROM `d2022` WHERE `college-code` = '$choosen_college' ORDER BY `RANK` DESC;";
    $result2022 = mysqli_query($con, $sql2022);
    $sql2023 = "SELECT `RANK`, `category` FROM `d2023` WHERE `college-code` = '$choosen_college' ORDER BY `RANK` DESC;";
    $result2023 = mysqli_query($con, $sql2023);

    //show c-code of selected college



?>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    2021
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr data-toggle="collapse" data-target="#accordion" class="clickable">
                                <td>Rank</td>
                                <td>category</td>

                            </tr>
                            <?php

                            if (mysqli_num_rows($result2021) > 0) {

                                while ($row2021 = mysqli_fetch_assoc($result2021)) {
                                    // print_r($row);
                                    // print_r($result2023);
                            ?>
                                    <tr>
                                        <td><?php echo $row2021['RANK']; ?></td>
                                        <td><?php echo $row2021['category']; ?></td>
                                    </tr>
                                <?php
                                }
                            } else { ?> <tr>
                                    <center>
                                        <td colspan="2">Please choose the college</td>
                                    </center>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    2022
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr data-toggle="collapse" data-target="#accordion" class="clickable">
                                <td>Rank</td>
                                <td>category</td>

                            </tr>
                            <?php

                            if (mysqli_num_rows($result2022) > 0) {

                                while ($row2022 = mysqli_fetch_assoc($result2022)) {
                                    // print_r($row);
                                    //print_r($result2022);
                            ?>
                                    <tr>
                                        <td><?php echo $row2022['RANK']; ?></td>
                                        <td><?php echo $row2022['category']; ?></td>
                                    </tr>
                                <?php
                                }
                            } else { ?> <tr>
                                    <td colspan="2">No one choosed this college</td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    2023 </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr data-toggle="collapse" data-target="#accordion" class="clickable">
                                <b>
                                    <td>RANK</td>
                                    <td> CATEGORY</td>
                                </b>
                            </tr>
                            <?php

                            if (mysqli_num_rows($result2023) > 0) {

                                while ($row2023 = mysqli_fetch_assoc($result2023)) {
                                    // print_r($row);
                                    // print_r($result2023);
                            ?>
                                    <tr>
                                        <td><?php echo $row2023['RANK']; ?></td>
                                        <td><?php echo $row2023['category']; ?></td>
                                    </tr>
                                <?php
                                }
                            } else { ?> <tr>
                                    <td colspan="2">No one choosed this college</td>

                                </tr>
                        <?php
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>