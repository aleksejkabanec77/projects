<?php
require_once("templates/functions.php");
require_once("templates/data.php");

$contentPage = include_template("main.php", [
   "categories" => $categories,
   "ads" => $ads
]);
$layoutContent = include_template("layout.php", [
   "content" => $contentPage,
   "categories" => $categories,
   "title" => "Главная"
]);
print($layoutContent);
