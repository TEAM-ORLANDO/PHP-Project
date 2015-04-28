<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистирайте се</title>
    <style>

        a {
            text-decoration: none;
            color: #808080;
            font-size: 20px;

        }
        main{
            width: 500px;
            margin: 100px auto;
        }
        form {
            border: 1px solid lightgray;
            padding: 20px;
        }
        label {
            display: block;
        }
    </style>

</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "useracount";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn -> connect_error) {
        die("Connection failed: " . $conn -> connect_error);
    }
    ?>

<main>
    <form action='login.php' method='post' enctype='multipart/form-data' accept-charset='UTF-8'>
        <a href="../index/index.php">Електроника за всеки любител</a>
        <h3>Регистрация на нов потребител</h3>
        Изберете снимка:
        <input type='file' name='fileToUpload' id='fileToUpload'><br><br>
        <div>

        </div>
        <label for='name'>Име:</label>
        <input type='text' name='name' id='name' required/>
        <br><br>
        <label for='family-name'>Фамилия:</label>
        <input type='text' name='family-name' id='family-name' required/>
        <br><br>
        <label for='username'>Потребителско име:</label>
        <input type='text' name='username' id='username' maxlength='50' required/>
        <br><br>
        <label for='password'>Парола:</label>
        <input type='password' name='password' id='password' maxlength='50' required/>
        <br><br>
        <label for='password2'>Повтори паролата:</label>
        <input type='password' name='password2' id='password2' maxlength='50' required/>
        <br><br>
        <label for='email' >e-mail:</label>
        <input type='email' name='email' id='email' maxlength='50' required/>
        <br><br>
        <input type='submit' name='register' value='Регистрация'/>
    </form>
</main>
<?php

if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['family-name']) && isset($_POST['password']) && isset($_POST['register'])) {
    $firstname = $_POST['name'];
    $familyname = $_POST['family-name'];
    $uname = $_POST['username'];
    $pword = $_POST['password'];
    $pword2 = $_POST['password2'];
    $email = $_POST['email'];
    $uLength = strlen($uname);

    //validate first name
    if (preg_match('/[A-Za-z]+/', $firstname)) {
        $validName = TRUE;
    } else {
        echo "Вашето име трябва да съдържа поне един символ!<BR>";
        echo "<br>";
    }
    //validate family name
    if (preg_match('/[A-Za-z]+/', $familyname)) {
        $validFamilyName = TRUE;
    } else {
        echo "Вашата фамилия трябва да съдържа поне един символ!<BR>";
    }
    //validate user name' length
    if ($uLength >= 2 && $uLength <= 20) {
        $validUserName = TRUE;
    } else {
        echo "Дължината на Вашето поребителско име трябва да е между 2 и 20 символа!<BR>";
    }
    //validate password
    if ($pword == $pword2) {
        if (preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w+]).{8,}$/', $pword)) {
            $validPassword = TRUE;
        } else {
            echo "Вашата парола трябва да е с дължина поне 8 символа и да съдържа поне една главна буква, една малка буква, една цифра и един символ!<BR>";
        }
    } else {
        echo "Невалидна парола. Моля опитайте отново!<BR>";

    }
    //validate email
    if (preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $email)) {
        $validMail = TRUE;
    } else {
        echo " Невалиден email адрес. Моля опитайте отново!<br>";
    }

    $pic=($_FILES['fileToUpload']['name']);
    $currentdir = getcwd();
    $target_dir = $currentdir . '/uploads/';
    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.<br>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    if ($validName && $validFamilyName && $validUserName && $validPassword && $validMail) {
$user_get = mysqli_query($conn, "SELECT username FROM userprofiles WHERE username='$uname'");
        $name = mysqli_fetch_array($user_get);
        $name = array_filter($name);        
        if (!empty($name)) {
            echo "Потребителското име е заето. Моля опитайте пак!<br>";
        }else{
        $uname = htmlspecialchars($uname);
        $familyname = htmlspecialchars($familyname);
        $pword = md5($pword);
        $email = mysql_real_escape_string($email);
        $sql = "INSERT INTO userprofiles (fname, lname, username, password, email, picture)
        VALUES ('$firstname', '$familyname', '$uname', '$pword', '$email', '$pic')";

        if ($conn -> query($sql) === TRUE) {
            echo "New record created successfully";
            echo "<script> window.location.assign('index.php'); </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn -> error;
            header('Location: http://index.php/');
        }

        $conn -> close();
    }
}
}
?>
</body>
</html>


