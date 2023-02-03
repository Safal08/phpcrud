<?php

session_start();

include 'conn.php';

if (isset($_POST['insert'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $q = "INSERT INTO `crudtable`(`username`, `password`) VALUES ('$username','$password')";

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
        <form name="myform" method="POST" id="form" onsubmit="return validation();">
            <div class="card">
                <br>
                <br>
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Insert Operation</h1>
                </div>
                <br>

                <label for="" class="form-control test-start">Username:</label>
                <input type="text" name="username" id="username" required><br>
                <span id="username" class="text-danger font-weight-bold"></span>

                <label for="" class="form-control">Password:</label>
                <input type="password" name="password" id="password" required> <br>

                <!--<input type="submit" name="submit" value="Insert" class="btn btn-success">-->
                <!--<button class="btn btn-success" type="submit" name="insert"> Submit </button>-->
                <button class="btn btn-success" type="submit" name="insert"> Submit </button>
                <br>
            </div>
        </form>
        <br>
        <div>
            <button class="btn btn-primary"><a href="display.php"
                    class="text-white text-decoration-none">Display</a></button>
        </div>
    </div>






</body>

</html>