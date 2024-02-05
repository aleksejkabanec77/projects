<?php
//$show_complete_tasks = rand(0, 1);
$db = require_once 'dbDoingsDone.php';
/*
 * Создание подключения к базе данных
 */ 
$link = mysqli_connect($db['host'], $db['user'], $db['password'], $db['database']); 
mysqli_set_charset($link, $db['charset']); 
/*
 * Инициализация массивов категорий и объявлений
 */ 
$projects = [];
$tasks = [];
/*
 * Проверка правильности подключения к БД
 */
if(!$link)
{
	echo 'Ошибка соединения: ' . mysqli_connect_error() . '<br>';
	echo 'Код ошибки: ' . mysqli_connect_errno();
}else{ // Соединение успешно установленно, выполняем запрос к БД
	//$query = "SELECT id, title_project, users_id FROM project";
	$query = "SELECT project.id, project.title_project, project.users_id, COUNT(task.project_id) AS count  
			FROM  project 
			LEFT JOIN task ON project.id = task.project_id 
			GROUP BY project.title_project";
	$result = mysqli_query($link, $query);
	if(!$result) // Проверка запроса
	{
		echo 'Ошибка запроса  меню: ' . mysqli_error($link);
		echo 'Код ошибки: меню' . mysqli_errno($link);
	}else{ // Запрос успешен
		$projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
	}
}
/*
 * Вывод задач
 */
$query = "SELECT title_task, date_completion_task, statuses  
	FROM task"; 
$result = mysqli_query($link, $query);
if(!$result) // Проверка запроса
{
	echo 'Ошибка запроса: ' . mysqli_error($link);
	echo 'Код ошибки:' . mysqli_errno($link);	
}else{
	$tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

