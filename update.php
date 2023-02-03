<?php
include 'conn.php';

if (isset($_POST['update'])) {

    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $q = " UPDATE `crudtable` set id = $id , username='$username', password = '$password'  where id =$id";

    $query = mysqli_query($con, $q);

    header('location:display.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Insert</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="col-lg-6 m-auto">
        <form method="POST">
            <div class="card">
                <br>
                <br>
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Update Operation</h1>
                </div>
                <br>

                <label for="" class="form-control test-start">Username:</label>
                <input type="text" name="username" required><br>

                <label for="" class="form-control">Password:</label>
                <input type="text" name="password" id="" required> <br>

                <button class="btn btn-primary" type="submit" name="update"> Update </button>
                <br>
            </div>
        </form>
    </div>

</body>

</html>