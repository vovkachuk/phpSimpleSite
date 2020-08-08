phpSimpleSite

Блог на php, БД - mysql

В папке XSS код с уязвимостью XSS + скриншоты, показывающую уязвимость

Для запуска необходим apache + mysql(я использовал xammp)


Функционал:
1. Регистрация и авторизация
2. Добавление постов
3. Просмотр постов
4. Удаление постов через минуту



НАСТРОЙКА БД

В mysql необходимо создать БД с именем blog( CREATE DATABASE blog CHARACTER SET utf8 COLLATE utf8_general_ci; ),
создать пользователя командой (GRANT ALL ON blog.* TO 'user'@'localhost' IDENTIFIED BY 'password';), (user и password можно указать свои)
создать 2 таблицы командами ( 

CREATE TABLE users(
id INT UNSIGNED NOT NULL AUTO_INCREMENT, 
login VARCHAR(20) NOT NULL, 
password VARCHAR(400) NOT NULL,
PRIMARY KEY(id)
);
)

и (

CREATE TABLE posts(
id INT UNSIGNED NOT NULL AUTO_INCREMENT, 
title VARCHAR(400) NOT NULL, 
text LONGTEXT NOT NULL, 
time DATETIME DEFAULT NOW(),
login VARCHAR(20) NOT NULL,
op INT DEFAULT 1,
PRIMARY KEY(id)
); 
)

НАСТРОКА БД в php

В файле /logic/db.php есть строчки

$db_user = 'user';
$db_pass = 'password';

если при создании пользователя в БД вы указали другие значения user и password, нужно изменить их и здесь



=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

Для изменения времени, через которые удаляются посты необходимо найти в файле /logic/print_posts.php

строчку 	if(($UNIXtime - $post->time) > 60){
и изменить 60 на необходимое количество секунд  

=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
