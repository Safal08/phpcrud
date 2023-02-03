<?php

session_start();
include 'conn.php';


//$username = $_POST['username'];
//$password = $_POST['password'];

$q = "select * from crudtable";

$query = mysqli_query($con, $q);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Display</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="col-lg-12 m-auto">
            <br>
            <h1 class="text-primary text-center">Display Table Data</h1>
            <table class="table table-striped table-hover table-bodered  ">
                <thead class="table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Usename</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <?php
                include 'conn.php';

                $q = "select * from crudtable ";

                $query = mysqli_query($con, $q);

                while ($result = mysqli_fetch_array($query)) {
                ?>


                <tbody class="text-center">
                    <tr>
                        <td><?php echo $result['id'] ?></td>
                        <td><?php echo $result['username'] ?></td>
                        <td><?php echo $result['password'] ?></td>

                        <td><button class="btn btn-primary"> <a href="update.php?id=<?php echo $result['id']; ?>"
                                    class="text-white text-decoration-none">Update
                                </a></button> </td>

                        <td><button class="btn btn-danger"> <a href="delete.php?id=<?php echo $result['id']; ?>"
                                    class="text-white text-decoration-none">Delete
                                </a></button> </td>

                        </button></td>

                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
            <div>
                <button class="btn btn-primary"><a href="insert.php"
                        class="text-white text-decoration-none">Insert</a></button>
            </div>
        </div>
    </div>

</body>

</html>