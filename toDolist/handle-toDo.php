<?php
session_start();

if(isset($_POST['submit'])){
    extract($_POST);

    $conn = mysqli_connect("localhost","root" , "" , "php_projects_todolist");
    $query = "INSERT INTO toDo(`title` , `date` , `desc`) VALUES ('$title' , '$date' , '$desc')";
    $result = mysqli_query($conn , $query);
    if($resul){
        $_SESSION['msg'] = "Inserted successfully";
    } else{
        $_SESSION['fal'] = "Inserted failed";
    }
    header('location: ./home.php');
}else if(isset($_GET)) {

    if(isset($_GET['doing'])){
        $id = $_GET['doing'];
        $conn = mysqli_connect("localhost","root" , "" , "php_projects_todolist");
        $query = "select * from todo where id= $id";
        $result = mysqli_query($conn , $query);
        $task = mysqli_fetch_assoc($result);
        
        $query = "delete from todo where id= $id";
        $result = mysqli_query($conn , $query);
        
        $title = $task['title'];
        $date = $task['date'];
        $desc = $task['desc'];
        
        $query = "INSERT INTO doing(`title` , `date` , `desc`) VALUES ('$title' , '$date' , '$desc')";
        $result = mysqli_query($conn , $query);
        
        header('location: ./home.php');
    } else if(isset($_GET['done'])) {
        $id = $_GET['done'];
        $conn = mysqli_connect("localhost","root" , "" , "php_projects_todolist");
        $query = "select * from doing where id= $id";
        $result = mysqli_query($conn , $query);
        $task = mysqli_fetch_assoc($result);
        
        $query = "delete from doing where id= $id";
        $result = mysqli_query($conn , $query);
        
        $title = $task['title'];
        $date = $task['date'];
        $desc = $task['desc'];
        
        $query = "INSERT INTO dones(`title` , `date` , `desc`) VALUES ('$title' , '$date' , '$desc')";
        $result = mysqli_query($conn , $query);
        
        header('location: ./home.php');
    } else if(isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $conn = mysqli_connect("localhost","root" , "" , "php_projects_todolist");

        $query = "delete from dones where id= $id";
        $result = mysqli_query($conn , $query);
        
        header('location: ./home.php');
    }

}else {
    header('location: ./home.php');
}