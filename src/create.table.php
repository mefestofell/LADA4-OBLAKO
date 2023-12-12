<?php
//Подключится к базе данных
require_once "connect.pg.inc.php";
//Если такая таблица есть, удалить ее
$sql = "DROP TABLE IF EXISTS games CASCADE";
$pdo->query($sql);

//Создание таблицы
$sql = "
CREATE TABLE games (
    id SERIAL PRIMARY KEY,
    janr TEXT NOT NULL,
    title TEXT NOT NULL,
    reiting float NOT NULL,
    prise float NOT NULL
)";

$pdo->query($sql);
//Занесение данных
$sql = "
INSERT INTO games VALUES (1, 'Хоррор', 'Оутласт', 3, 1100), (2, 'Приключения', 'Детроит', 5, 2500),
(3, 'Романтика', 'Клуб романтики', 10, 0), (4, 'Выживание', 'Террария', 7, 150), (5, 'Песочница', 'Майнкрафт', 9, 242)
";
$pdo->query($sql);
//Закрыть подключение к базе данных
$pdo = null;
?>