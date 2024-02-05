<?php

// Массивы пересены в data.php
// Функции пересены в functions.php
require_once("templates/init.php");
//require_once("templates/data.php");
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


