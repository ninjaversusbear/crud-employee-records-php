<?php 
    if(isset($_POST['register'])){

        include 'config.php';

        $full_name = $_POST['full_name'];
        $department = $_POST['department'];
        $phone = $_POST['phone'];

        $sql = "INSERT INTO `student_data`(`full_name`, `department`, `phone`) VALUES ('{$full_name}','{$department}','{$phone}')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>alert('Student Registered!!');</script>";
        }else{
            echo "<script>alert('Student Registration Failed!!');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container" style="margin-top:200px;">
        <div class="row">
            <div class="col">

            </div>
            <div class="col-7">
                <form action="add.php" method="post">
                    <h4 class="mb-5">Add Student</h4>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Employee Full Name</label>
                        <input type="text" name="full_name" class="form-control" aria-describedby="TextHelp" placeholder="Enter Employee Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputText2">Department</label>
                        <input type="text" name="department" class="form-control" placeholder="Enter Department" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="number" name="phone" class="form-control" placeholder="98-765-432-1" required>
                    </div>
                    <button type="submit" name="register" class="btn btn-success">Submit</button>
                    <a style="background-color: blue; padding:8px; color:white; border-radius:5px; text-decoration:none;" href="index.php">Records</a>
                </form>
            </div>
            <div class="col">

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>