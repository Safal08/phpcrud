<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!—Post vs Get-->

        <form action="rachita.php" method="GET">
            Name: <input type="text" name="name"><br>
            Password: <input type="password" name="pass"><br>
            <input type="submit">
        </form>
        <br>
        <br>

        <?php
        echo $_GET["name"];
        echo "<br>";
        echo $_GET["pass"];
        ?>

</body>

</html>