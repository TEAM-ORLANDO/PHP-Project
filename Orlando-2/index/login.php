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
include 'header.php';
echo "<main><form id='register' action='login.php' method='post' accept-charset='UTF-8'>
    <p>Регистрация на нов потребител</p>

    <label for='name'>Снимка</label>
    <input type='file' name='pic' id='pic'/>
    <div><img src='#' alt='User picture'</div>
<br><br>
    <label for='name'>Име:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type='text' name='name' id='name' required/>
<br><br>
    <label for='family-nameame'>Фамилия:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type='text' name='family-name' id='family-name' required/>
<br><br>
    <label for='username'>Потребителско име:</label>
    <input type='text' name='username' id='username' maxlength='50' required/>
<br><br>
    <label for='password'>Парола:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type='password' name='password' id='password' maxlength='50' required/>
<br><br>
    <label for='password2'>Повтори паролата:&nbsp;</label>
    <input type='password' name='password2' id='password2' maxlength='50' required/>
<br><br>
    <label for='емаил' >e-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type='email' name='email' id='email' maxlength='50' required/>
<br><br>
    <input type='submit' name='register' value='Регистрация'/>
    
</form><br></main>";

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
    if ($validName && $validFamilyName && $validUserName && $validPassword && $validMail) {

        $uname = htmlspecialchars($uname);
        $familyname = htmlspecialchars($familyname);
        $pword = md5($pword);
        $email = mysql_real_escape_string($email);
        $sql = "INSERT INTO userprofiles (fname, lname, username, password, email)
        VALUES ('$firstname', '$familyname', '$uname', '$pword', '$email')";

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
include 'footer.php';
?>