<?php
include 'connect.php';
// echo "<pre>";
// print_r($_POST);
// print_r($_GET);
// print_r($_REQUEST);
// echo "</pre>";
// die();
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud`(name,email,mobile,password)values('$name','$email','$mobile','$password')";
    // echo $sql . "<br>";
    $result = mysqli_query($con, $sql);
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
    if ($result) {
        // echo "Data inserted successfully";
        header('location:display.php');
        // echo "Success";
    } else {
        die(mysqli_error($con));
    }
}
