﻿# Kontur-Test

Инструкция по установке проекта
### 1. Клонирование репозитория
Сначала клонируйте репозиторий на свой локальный компьютер. Откройте терминал и выполните команду: 
```bash
git clone https://github.com/ToRpeDaBanana/Kontur-Test.git
```

### 2. Установка зависимостей
Установите зависимости проекта с помощью Composer. Убедитесь, что у вас установлен Composer. Выполните команду: 
```bash
composer install
```
### 3.Установка npm
В терминале выполните комманду
```bash
npm install
```
после чего выполните комманду
```bash
npm run dev
```

### 4.Откройте файл .env в текстовом редакторе и настройте его в соответствии с вашими параметрами, особенно:
База данных: Убедитесь, что вы указали правильные параметры подключения к вашей базе данных.
Почта: Убедитесь, что настройки почты соответствуют вашему почтовому провайдеру.

### 5.Миграция базы данных
Выполните комманду в терминале 
```bash
php artisan migrate
```
### 6.Запуск сервера
Выполните комманду в терминале 
```bash
php artisan serve
```
