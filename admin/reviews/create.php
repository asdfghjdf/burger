<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
</head>
<body>

    <form action="/admin/reviews/actions/store.php" method="post">
        <input type="text" name="text" placeholder="Текст">
        <textarea type="text" name="author" placeholder="Автор"></textarea>
        <input type="number" name="estimation" placeholder="Оценка" min='1' max='5'>
        <input type="submit">
        <a href="/admin/reviews/" class="button-style">Назад</a>
    </form>
</body>
</html>