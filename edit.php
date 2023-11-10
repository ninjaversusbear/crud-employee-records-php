<?php

    if(isset($_POST['update_employee'])){

        include "config.php";

        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $department = $_POST['department'];
        $phone = $_POST['phone'];

        $sql1 = "UPDATE `student_data` SET `full_name`='{$full_name}',`department`='{$department}',`phone`='{$phone}' WHERE id = '{$id}'";
        $result1 = mysqli_query($conn, $sql1);

        if($result1){
            header('location:http://localhost/students_records/index.php');
        }else{
            echo "<script>alert('Employee Update Failed!!');</script>";
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
                <?php 
                    include "config.php";

                    $student_id = $_GET['id'];

                    $sql = "SELECT * FROM `student_data` WHERE id = '{$student_id}'";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0){
                ?>
                <form action="edit.php" method="post">
                    <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <h4 class="mb-5">Update Student</h4>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">ID</label>
                        <input type="text" name="id" class="form-control" aria-describedby="TextHelp" value="<?php echo $row['id']; ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Employee Full Name</label>
                        <input type="text" name="full_name" class="form-control" aria-describedby="TextHelp" value="<?php echo $row['full_name']; ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputText2">Department</label>
                        <input type="text" name="department" class="form-control" value="<?php echo $row['department']; ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="number" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" required>
                    </div>
                    <button type="submit" name="update_employee" class="btn btn-success">Update</button>
                    <a style="background-color: blue; padding:8px; color:white; border-radius:5px; text-decoration:none;" href="index.php">Records</a>
                    <?php }?>
                </form>
                <?php }?>
            </div>
            <div class="col">

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>