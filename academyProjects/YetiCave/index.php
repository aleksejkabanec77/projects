<?php
$is_auth = rand(0, 1);

$user_name = 'Guest'; // укажите здесь ваше имя
require_once("templates/init.php");
require_once("templates/functions.php");

$contentPage = include_template("main.php", [
   "categories" => $categories,
   "lots" => $lots
]);
$layoutContent = include_template("layout.php", [
   "content" => $contentPage,
   "categories" => $categories,
   "title" => "Главная"
]);
print($layoutContent);
