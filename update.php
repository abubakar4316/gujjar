<?php
include 'connect.php';
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
$id = $_GET['updateid'];
$sql = "Select * from `crud` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "update successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>crud operation</title>

</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group my-3">
                <label class="my-2">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name; ?>>
            </div>
            <div class="form-group my-3">
                <label class="my-2">Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email; ?>>
            </div>
            <div class="form-group my-3">
                <label class="my-2">Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
            </div>
            <div class="form-group my-3">
                <label class="my-2">Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password; ?>>
            </div>
            <button type="submit" class="btn btn-primary my-3" name="submit">update</button>
        </form>
    </div>
</body>

</html>