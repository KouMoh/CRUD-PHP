<?php
include 'dbcon.php';
if(isset($_POST['add_students'])){
    echo "Pressed!";

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];
    $query = "INSERT INTO `students`(`first_name`, `last_name`, `age`) VALUES ('$fname','$lname','$age')";
    
    $result = mysqli_query($conn,$query);
    
    if(!$result){
        die("Query Failed".mysqli_error());
    }
    
    else{
        header('location:index.php?insert_msg = Your data has been added successfully!');
    }
    
} 
    
    else{
        echo "Error!";
    }
?>