<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Team Orlando</title>
    <link rel="stylesheet" href="index.css"/>
</head>
<body>
<div id="container">
    <header>
        <div id="logo"><img src="#" alt="logo"></div>
        <h1>Електроника за всеки любител</h1>
        <nav id="main-nav">
            <a class="table" href="#">Начало</a>
            <a href="#">Каталог</a>
            <a href="#">Форум</a>
            <a href="#">Контакти</a>
        </nav>
        <?php
        //logged in or not field

        echo "<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
            <label for='username'>Потребител:</label>
            <input type='text' name='username' id='username' maxlength='50'/>

            <label for='password'>Парола:</label>
            <input type='password' name='password' id='password' maxlength='50'/>
            <input type='submit' name='register' value='Регистрация'/>
            <input type='submit' name='submit' value='Вход'/>
        </form>";

        ?>

    </header>
    <aside id="left-side">
        <nav>
            <p>Каталог</p>
            <ul>
                <li><a href="#">Полупроводници</a></li>
                <li><a href="#">Оптоелектроника</a></li>
                <li><a href="#">Пасивни елементи</a></li>
                <li><a href="#">Конектори</a></li>
                <li><a href="#">Предпазители</a></li>
                <li><a href="#">Превключватели</a></li>
                <li><a href="#">Източници на звук</a></li>
                <li><a href="#">Релета</a></li>
                <li><a href="#">Трансформатори</a></li>
                <li><a href="#">Охлаждане, отопление</a></li>
                <li><a href="#">Проводници</a></li>
                <li><a href="#">Механични елементи</a></li>
                <li><a href="#">Кутии</a></li>
                <li><a href="#">Автоматика</a></li>
                <li><a href="#">Оборудване</a></li>
                <li><a href="#">Роботика</a></li>
                <li><a href="#">Други</a></li>
            </ul>
        </nav>
    </aside>
    <main>
        <article>
            <h2>Поле за промоция</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet delectus laboriosam modi quasi quo
                quod ratione tempora. Eligendi, quia.
            </p>
        </article>
        <article>
            <h2>Поле за новина</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet delectus laboriosam modi quasi quo
                quod ratione tempora. Eligendi, quia.
            </p>
        </article>
        <article>
            <h2>Поле за промоция</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet delectus laboriosam modi quasi quo
                quod ratione tempora. Eligendi, quia.
            </p>
        </article>
        <article>
            <h2>Поле за новина</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet delectus laboriosam modi quasi quo
                quod ratione tempora. Eligendi, quia.
            </p>
        </article>
        <article>
            <h2>Поле за промоция</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet delectus laboriosam modi quasi quo
                quod ratione tempora. Eligendi, quia.
            </p>
        </article>
    </main>

    <footer class="sectionFooter"></footer>

</div>
</body>
</html>