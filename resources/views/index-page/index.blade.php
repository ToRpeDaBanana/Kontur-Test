<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form id="contactForm">
        @csrf
        <label for="name">Имя:</label>
        <input type="text" name="name" required>
        
        <label for="phone">Телефон:</label>
        <input type="text" name="phone" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <button type="submit">Отправить</button>
    </form>
</body>
</html>