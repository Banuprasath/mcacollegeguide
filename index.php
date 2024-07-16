<?php

$con = new mysqli("localhost","root","","TANCET");

if($con->connect_error){
    echo $con->connect_error;
    die("Database connection failed");
}
else{
    echo "DB Connected";
    //echo "Db connected Succesfully";
    
    //SELECT * FROM `college_code` WHERE `c-code` = "1D"
}


$sql = "SELECT * FROM `college_code`";
$result = mysqli_query($con, $sql);




?>


<form name='test' method='POST'>
<input type='test' name='rank' value="10" />
  <select name='clgname'>
    <?php 
                if (mysqli_num_rows($result) > 0) {
                
                while($row = mysqli_fetch_assoc($result)) {
                ?>
    <option value="" >Select College</option>
    <option  value=<?php echo $row['c-code'] ?>><?php echo $row['c-name'] ?></option>
    <?php  
                }
                }
                ?>
  </select>

  <input type='submit' name='submit' value='submit' />
</form>


<?php
if(isset($_POST['submit'])){

    $G_RANK=$_POST['rank'];

    
   // echo $val;
   $sql = "SELECT `COLLEGE-CODE` FROM `D2023` WHERE `RANK` = '$G_RANK'
                UNION
           SELECT `COLLEGE-CODE` FROM `D2022` WHERE `RANK` = '$G_RANK'
                UNION
           SELECT `COLLEGE-CODE` FROM `D2021` WHERE `RANK` = '$G_RANK'
                LIMIT 25;";
    $result = mysqli_query($con, $sql);
    if ( mysqli_num_rows($result) > 0) {
                
        while($row = mysqli_fetch_assoc($result)) {
            
            $col_code=$row['COLLEGE-CODE'];

            $sql = "SELECT * FROM `college_code` WHERE `c-code` =  '$col_code' " ;
            $result1 = mysqli_query($con, $sql);
           
            if ( mysqli_num_rows($result1)> 0) {
                 
                    while($row = mysqli_fetch_assoc($result1)) {
                    print_r($row);
                   // echo $row['c-name'];
                    echo "<br>";
                  }
        
          
             }
                else{
                    echo "Sorry we don't have data for your Rank";
                }


        }
        
    }
    else{
        echo "Sorry we don't have data for your Rank";
    }
   

}
?>

<?php
// $sql = 'SELECT * FROM `college_code` WHERE `c-code` = $row["COLLEGE-CODE"] ';
//             $result = mysqli_query($con, $sql);
//             if (mysqli_num_rows($result) > 0) {
                        
//                 while($row = mysqli_fetch_assoc($result)) {
//                     print_r($row);

                    

                    
                    

//                 }
//             }

            

//         }
//     }
?>