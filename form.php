<?php
echo "<form id='register' action='register.php' method='post' accept-charset='UTF-8'>
    <p>Регистрация на нов потребител</p>

    <label for='name'>Снимка</label>
    <input type='file' name='pic' id='pic'/>
    <div><img src='#' alt='User picture'</div>

    <label for='name'>Име:</label>
    <input type='text' name='name' id='name'/>

    <label for='family-nameame'>Фамилия:</label>
    <input type='text' name='family-name' id='family-name'/>

    <label for='username'>Потребителско име:</label>
    <input type='text' name='username' id='username' maxlength='50'/>

    <label for='password'>Парола:</label>
    <input type='password' name='password' id='password' maxlength='50'/>

    <label for='password2'>Повтори паролата:</label>
    <input type='password' name='password2' id='password2' maxlength='50'/>

    <label for='емаил'>e-mail:</label>
    <input type='email' name='email' id='email' maxlength='50'/>

    <input type='submit' name='register' value='Регистрация'/>
</form>";
?>

