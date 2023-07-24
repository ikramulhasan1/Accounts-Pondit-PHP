<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Name: <input type="text" name="name" id=""> <br><br>
        Email: <input type="text" name="email" id=""> <br><br>
        Password: <input type="text" name="password" id=""> <br><br>
        <input type="submit" name="submit" id="">
    </form>


    <?php
    if (isset($_GET['submit'])) {

        echo $_GET['name'] . "<br>";
        echo $_GET['email'] . "<br>";
        echo $_GET['password'] . "<br>";
    }

    ?>
</body>

</html>