<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_article";
$mysqli = new mysqli($servername, $username, $password, $dbname);
$mysqli->set_charset("UTF8");

if ($mysqli->connect_error) {
    die ("Failed to connect (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $text = $_POST['file'];
    $category = $_POST['products'];

    $file = $_FILES['image']['tmp_name'];
    $image = addslashes(file_get_contents($file));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    $query = "INSERT INTO new_article (title, text, category, name, image)
              VALUES ('$title', '$text', '$category', '$image_name', '$image')";
    if($mysqli->query($query) === TRUE){
        header("Location: ../index/index.php");
    } else {
        echo $mysqli->error;
        echo "Error";
    }
}


