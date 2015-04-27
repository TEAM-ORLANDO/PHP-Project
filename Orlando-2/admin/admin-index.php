<?php require('connect.php');?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Администратор</title>
    <link rel="stylesheet" href="admin.css"/>
</head>
    <body>
    <header>
        <a href="../index/index.php">Електроника за всеки любител</a>
    </header>

    <div id="container">
        <form action="connect.php" method="post">
            <main>
                <header>
                    <input type="text" name="title" id="title"/>
                </header>
                <nav class="upload">
                    <input type="file" name="upload" id="upload">
                </nav>
                <article>
                    <textarea name="file" id="text" ></textarea>
                </article>
                <div id="buttons">
                    <input type="reset" name="reset" value="Отмени" id="cancel">
                    <input type="submit" name="submit" value="Публикувай" id="publish">
                </div>
            </main>

            <aside id="categories">
                <h2>Категории</h2>
                <div>
                    <p><input type="radio" name="products" value="Други" checked/>Други</p>
                    <p><input type="radio" name="products" value="Полупроводници"/>Полупроводници</p>
                    <p><input type="radio" name="products" value="Оптоелектроника"/>Оптоелектроника</p>
                    <p><input type="radio" name="products" value="Пасивни елементи"/>Пасивни елементи</p>
                    <p><input type="radio" name="products" value="Конектори"/>Конектори</p>
                    <p><input type="radio" name="products" value="Предпазители"/>Предпазители</p>
                    <p><input type="radio" name="products" value="Превключватели"/>Превключватели</p>
                    <p><input type="radio" name="products" value="Източници на звук"/>Източници на звук</p>
                    <p><input type="radio" name="products" value="Релета"/>Релета</p>
                    <p><input type="radio" name="products" value="Охлаждане, отопление"/>Охлаждане, отопление</p>
                    <p><input type="radio" name="products" value="Механични елементи"/>Механични елементи</p>
                    <p><input type="radio" name="products" value="Кутии"/>Кутии</p>
                    <p><input type="radio" name="products" value="Автоматика"/>Автоматика</p>
                    <p><input type="radio" name="products" value="Оборудване"/>Оборудване</p>
                    <p><input type="radio" name="products" value="Роботика"/>Роботика</p>
                </div>
            </aside>
        </form>
    </div>
</body>
</html>