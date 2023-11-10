<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="index.css">
</head>
<body>
    <h5 class="text-center mt-5">CRUD - Employee Records</h5>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Employee <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <a href="add.php"><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button></a>
                    </div>
                </div>
            </div>
            <?php 
                include "config.php";

                $sql = "SELECT * FROM `student_data` ORDER BY id DESC";

                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
            ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['full_name']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                        <?php }?>
                    </tr>     
                </tbody>
            </table>
            <?php }else{
                echo "<p style='text-align:center;'>No Records Found!!</p>";
                }?>
        </div>
    </div>
</div>     
<p class="text-center">Made By <a href="https://portfolio-ashish213.000webhostapp.com/index.php" target="_blank">Ashish Regmi</a></p>
<!-- 1998-12-28 -->
</body>
</html>