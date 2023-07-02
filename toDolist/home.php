<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <?php
    $conn = mysqli_connect("localhost","root" , "" , "php_projects_todolist");
$query = "select * from todo";
$result = mysqli_query($conn , $query);
$toDos = mysqli_fetch_all($result , MYSQLI_ASSOC);

$query = "select * from doing";
$result = mysqli_query($conn , $query);
$doings = mysqli_fetch_all($result , MYSQLI_ASSOC);

$query = "select * from dones";
$result = mysqli_query($conn , $query);
$dones = mysqli_fetch_all($result , MYSQLI_ASSOC);

if(isset($_SESSION['msg'])){
    $msg = $_SESSION['msg'];
}
if(isset($_SESSION['fail'])){
    $msg = $_SESSION['fail'];
}
    ?>
    <div class="w-50 m-auto text-center my-3">
        <p class="mt-3 text-center"><a class="btn fs-3" href="./create-toDo.php">create a new task</a></p>
        <hr class="w-50 m-auto">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php 
                    foreach($toDos as $toDo){ ?>
                        <div class="bg-secondary my-3 text-center text-white fs-3">
                        <p><?php echo $toDo['title'] ?></p>
                        <p><?php echo $toDo['date'] ?></p>
                        <p><?php echo $toDo['desc'] ?></p>
                        <a class="btn btn-warning  m-auto mb-3" href="handle-toDo.php?doing=<?php echo $toDo['id'] ?>">TodO</a>
                        </div>
                    <?php }
                    
                    ?>
            </div>

            <div class="col-md-4">
                <?php 
                    foreach($doings as $doing){ ?>
                        <div class="bg-warning my-3 text-center  text-white fs-3 border rounded-1">
                        <p><?php echo $doing['title'] ?></p>
                        <p><?php echo $doing['date'] ?></p>
                        <p><?php echo $doing['desc'] ?></p>
                        <a class="btn btn-success  m-auto mb-3" href="handle-toDo.php?done=<?php echo $doing['id'] ?>">done</a>
                        </div>
                    <?php }
                    
                    ?>
            </div>


            <div class="col-md-4">
                <?php 
                    foreach($dones as $done){ ?>
                        <div class="bg-success my-3 text-center  text-white fs-3">
                        <p><?php echo $done['title'] ?></p>
                        <p><?php echo $done['date'] ?></p>
                        <p><?php echo $done['desc'] ?></p>
                        <a class="btn btn-danger m-auto mb-3" href="handle-toDo.php?delete=<?php echo $done['id'] ?>">delete</a>
                        </div>
                    <?php }
                    
                    ?>
            </div>
            
        </div>
    </div>




<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>