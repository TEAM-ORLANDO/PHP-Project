<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_article";
$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die ("Failed to connect (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$id = mysql_real_escape_string($_GET['id']);
if(isset($_GET['id'])){
    $query = "SELECT * FROM `new_article` WHERE id = $id";
    $result = $mysqli->query($query);
    while ($row = $result->fetch_assoc()) {
        $image = $row['image'];
    }
    header("content-type: image/jpeg");
    echo $image;
} else {
    echo "Error!";
}