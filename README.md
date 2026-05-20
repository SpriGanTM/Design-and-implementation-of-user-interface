# Bike Repair Booking System

Система онлайн-записи для мастерской велоремонта.

## Функциональность

- управление клиентами
- создание клиентов
- редактирование клиентов
- удаление клиентов
- валидация данных
- защита от SQL-инъекций
- CSRF-защита
- flash-сообщения
- Bootstrap-интерфейс

## Используемые технологии

- PHP 8
- MySQL
- PDO
- Bootstrap 5

## Структура проекта

```text
project/
│
├── config.php
├── database.sql
├── index.php
│
└── src/
    ├── Database.php
    └── Repositories/
        └── ClientRepository.php
```

## Установка

### 1. Клонировать репозиторий

```bash
git clone YOUR_REPOSITORY_URL
```

### 2. Создать базу данных

Импортировать файл:

```text
database.sql
```

### 3. Настроить config.php

```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'bike_repair');
define('DB_USER', 'root');
define('DB_PASS', '');
```

### 4. Запустить OpenServer/XAMPP

Открыть в браузере:

```text
http://localhost/project/
```

## Реализованные возможности

- CRUD для клиентов
- PDO prepared statements
- MVC-подход
- серверная валидация
- HTML5 validation
- Bootstrap UI
- защита от XSS
- защита от CSRF

## Автор

Студент: Тихоньких Макар Дмитриевич 454 группа
