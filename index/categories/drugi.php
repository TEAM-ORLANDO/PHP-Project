<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Електроника за всеки любител</title>
    <link rel="stylesheet" href="../index.css"/>
</head>
<body>
<div id="container">
    <header>
        <?php
        //logged in or not field

        echo "<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
            <div id='userPass'>
                    <div >
                        <label for='username'>Потребител:</label>
                        <div>
                            <input type='text' name='username' id='username' maxlength='50'/>
                        </div>
                    </div>

                    <div>
                        <label for='password'>Парола:</label>
                        <div>
                            <input type='password' name='password' id='password' maxlength='50'/>
                        </div>
                     </div>
            </div>

            <div id='submit'>
                <div>
                    <input type='submit' name='register' value='Регистрация'/>
                </div>

                <div>
                <input type='submit' name='submit' value='Вход'/>
                </div>

            </div>


        </form>";

        ?>
        <div id="logo"><img src="../img/logo.png" alt="logo" width="200px"></div>
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
                <li id="category1"><a href="poluprovodnitsi.php">Полупроводници</a></li>
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
                <li id="category17" style="background-color: gold;
                border-radius: 10px 0 10px 0;"><a href="drugi.php">Други</a></li>
            </ul>
            <img src="../img/aside.png" alt="aside" width="160"/>

        </nav>
    </aside>
    <main>
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

            $query = "SELECT title, text, category FROM `new_article`";
            $result = $mysqli->query($query);
            while ($article = $result->fetch_assoc()){
                $title = $article['title'];
                $text = $article['text'];
                $category = $article['category'];
                if($category === 'Други'){ ?>
                    <article>
                        <h2><?php echo $title ?></h2>
                        <p><?php echo $text ?></p>
                    </article>
                <?php
                }
                ?>

            <?php
            }
            ?>

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