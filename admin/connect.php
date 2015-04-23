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


//    $query = "SELECT * FROM `new-article`";
//    $result = $mysqli->query($query);
//
//    if ($row = $result->fetch_assoc()){
//        $title = $row['title'];
//        var_dump($title);
//        $text = $row['text'];
//        var_dump($text);
//
//    }
    $query = "INSERT INTO new_article (title, text) VALUES ('$title', '$text')";
    if($mysqli->query($query) === TRUE){
        echo "Great work!";
    } else {
        echo $mysqli->error;
        echo "Error";
    }
}
//else {
//    header('Location: admin-index.php');
//}


