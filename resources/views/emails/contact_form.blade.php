<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новое сообщение</title>
</head>
<body>
    <h1>Вы получили новое сообщение</h1>
    <p><strong>Имя:</strong> {{ $contact->name }}</p>
    <p><strong>Телефон:</strong> {{ $contact->phone }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
</body>
</html>
