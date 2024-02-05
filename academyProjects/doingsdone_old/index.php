<?php
require_once("templates/functions.php");
require_once("templates/data.php");

$contentPage = include_template("main.php", [
   "categories" => $categories,
   "tasks" => $tasks
]);
$layoutContent = include_template("layout.php", [
   "content" => $contentPage,
   "title" => "Дела в порядке"
]);
print($layoutContent);
