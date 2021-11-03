<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="name" id="">
        <input type="text" name="brand_name" placeholder="brand_name" id="">
        <input type="text" name="description" placeholder="description" id="">
        <select name="type">
            <option value="guitar">Guitar</option>
            <option value="bass">Bass</option>
            <option value="drum">Drum</option>

        </select>
        <input type="number" name="price" placeholder="price" id="">
        <input type="text" name="photo">
        <input type="submit" name="upload" value="upload">
    </form>
</body>

</html>



<?php


// 1. Only when the form is being submitted
if (isset($_POST['upload'])) {
    $error = false;
    if (empty($_POST['name'])) {
        echo ' name is mandatory<br>';
        $error = true;
    }

    if (empty($_POST['brand_name'])) {
        echo 'brand_name is mandatory<br>';
        $error = true;
    }

    if (!is_numeric($_POST['price'])) {
        echo  "<span style = 'color:red'>it has to be a number</span>";
        $error = true;
    }
    if (!$error) {
        $conn = mysqli_connect('localhost', 'root', '', 'music_shop');

        if ($conn) {
            $name = $_POST['name'];
            $brand_name = $_POST['brand_name'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            $photo = $_POST['photo'];
            $description = $_POST['description'];
            $query = "INSERT INTO instruments(name, brand_name, price, photo,type, description) VALUES('$name', '$brand_name', '$price','$photo','$type','$description')";

            $result = mysqli_query($conn, $query);
            echo $query;


            if ($result)
                echo 'User successfully registered';
            else
                echo 'Something went wrong.';
        } else echo "You are not connected";
    }
}
