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
                <select name="products" multiple="multiple" >
                    <option value="Други" selected>Други</option>
                    <option value="Полупроводници">Полупроводници</option>
                    <option value="Оптоелектроника">Оптоелектроника</option>
                    <option value="Пасивни_елементи">Пасивни елементи</option>
                    <option value="Конектори">Конектори</option>
                    <option value="category5">...</option>
                </select>
            </aside>
        </form>
    </div>
</body>
</html>