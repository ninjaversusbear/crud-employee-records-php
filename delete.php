<?php 

    include "config.php";

    $emp_id = $_GET['id'];

    $sql = "DELETE FROM `student_data` WHERE id = '{$emp_id}'";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location:http://localhost/students_records/index.php");
    }else{
        echo "<script>alert('Employee Not Deleted!!');</script>";
    }