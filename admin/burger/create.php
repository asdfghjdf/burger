<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бургеры</title>
</head>
<body>

    <form action="/admin/burger/actions/store.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Название">
        <textarea name="description" placeholder="Описание"></textarea>
        <input type="number" name="price" placeholder="Цена">
        <input type="file" name="image">
        <input type="checkbox" name="is_display" id="is_display">
        <label for="is_display">Показывать на главной</label>
        <input type="submit">
        <a href="/admin/burger/" class="button-style">Назад</a>
    </form>
</body>
</html>