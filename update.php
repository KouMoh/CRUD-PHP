<?php
include 'dbcon.php'; ?>

<?php
if(isset($_GET['$count'])){
    $id = $_GET['$count'];

    $query = "SELECT * FROM `students` WHERE `id` = '$id'";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                die("Query failed." . mysqli_query);
            } else {
                $row = mysqli_fetch_row($result);
                print_r($row);
                }
            }


?>

<form>
            <div class="form-group">
                
            
                <label for="f_name">First Name</label>
                <input type="text" name ="f_name" class ="form-control">

                
            
                <label for="l_name">Last Name</label>
                <input type="text" name ="l_name" class ="form-control">

                
            
                <label for="age">Age</label>
                <input type="number" name ="age" class ="form-control">


            </div>
        </div>
        
        </form>