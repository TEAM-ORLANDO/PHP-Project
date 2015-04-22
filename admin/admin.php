<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Администратор</title>
    <link rel="stylesheet" href="admin.css"/>
</head>
<body>
<form action="#" method="post">
    <main id="info">
        <div>
            <input type="text" name="title" id="title"/>
        </div>
        <div class="upload">
            <input type="file" name="img" accept="image/*" id="img">

        </div>
        <div>
            <textarea name="file" id="text" ></textarea>
        </div>
        <div id="buttons">
            <input type="submit" name="submit" value="Cancel" id="cancel">
            <input type="submit" name="submit" value="Publish" id="publish">
        </div>
    </main>

    <aside id="categories">
        <select name="products" multiple="multiple" >
            <option value="category1">Полупроводници</option>
            <option value="category2">Оптоелектроника</option>
            <option value="category3">Пасивни елементи</option>
            <option value="category4">Конектори</option>
            <option value="category5">...</option>
        </select>
    </aside>

</form>
</body>
</html>