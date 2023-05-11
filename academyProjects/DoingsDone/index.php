<?php
// показывать или нет выполненные задачи
//$show_complete_tasks = rand(0, 1);
//$show_complete_tasks = 1;

require_once("templates/init.php");
require_once("templates/functions.php");

$contentPage = include_template("main.php", [
    "projects" => $projects,
    "tasks" => $tasks
 ]);
 $layoutContent = include_template("layout.php", [
    "content" => $contentPage,
    "title" => "Дела в порядке"
 ]);
 print($layoutContent);

