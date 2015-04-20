<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Електроника за всеки любител</title>
    <link rel="stylesheet" href="index.css"/>
</head>
<body>
<div id="container">
    <header>
        <?php
        //logged in or not field

        echo "<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
            <div class='divLabel'>
                <label for='username'>Потребител:</label>
                    <div>
                        <input type='text' name='username' id='username' maxlength='50'/>
                    </div>
            </div>

            <div class='divLabel'>
                <label for='password'>Парола:</label>
                    <div>
                        <input type='password' name='password' id='password' maxlength='50'/>
                    </div>
            </div>
            <div class='divLabel'>
                <input type='submit' name='register' value='Регистрация'/>
            </div>
            <div>
                <input type='submit' name='submit' value='Вход'/>
            </div>

        </form>";

        ?>
        <div id="logo"><img src="logo.png" alt="logo" width="200px"></div>
        <h1>Електроника за всеки любител</h1>
        <nav id="main-nav">
            <a href="#">Начало</a>
            <a href="#">Каталог</a>
            <a href="#">Контакти</a>
        </nav>
    </header>

    <aside id="left-side">
        <nav>
            <h3>Каталог</h3>
            <ul>
                <li id="category1"><a href="#">Полупроводници</a></li>
                <li id="category2"><a href="#">Оптоелектроника</a></li>
                <li id="category3"><a href="#">Пасивни елементи</a></li>
                <li id="category4"><a href="#">Конектори</a></li>
                <li id="category5"><a href="#">Предпазители</a></li>
                <li id="category6"><a href="#">Превключватели</a></li>
                <li id="category7"><a href="#">Източници на звук</a></li>
                <li id="category8"><a href="#" >Релета</a></li>
                <li id="category9"><a href="#">Трансформатори</a></li>
                <li id="category10"><a href="#">Охлаждане, отопление</a></li>
                <li id="category11"><a href="#">Проводници</a></li>
                <li id="category12"><a href="#">Механични елементи</a></li>
                <li id="category13"><a href="#">Кутии</a></li>
                <li id="category14"><a href="#">Автоматика</a></li>
                <li id="category15"><a href="#">Оборудване</a></li>
                <li id="category16"><a href="#">Роботика</a></li>
                <li id="category17"><a href="#">Други</a></li>
                <li><img src="aside.png" alt="aside" width="160"/></li>
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
    <footer>
        <a href="#">За нас</a>
        <a href="#">Пишете ни</a>
        <a href="#">Условия за ползване</a>
        <a href="#">Нашата политика</a>
        <a href="#">Адрес и телефон</a>
        <a href="#">Харесайте ни във Facebook</a>
    </footer>
</div>

</body>
</html>