<?php
$db = require_once 'DoingsDoneDB.php';
/*
 * Создание подключения к базе данных
 */ 
$link = mysqli_connect($db['host'], $db['user'], $db['password'], $db['database']); 
mysqli_set_charset($link, $db['charset']);
/*
 * Инициализация массивов категорий и объявлений
*/ 
$categories = [];
$tasks = [];
/*
 * Проверка правильности подключения к БД, вывод меню и счетчик дел
 */
if(!$link)
{
	echo 'Ошибка соединения: ' . mysqli_connect_error() . '<br>';
	echo 'Код ошибки: ' . mysqli_connect_errno();
}else{ // Соединение успешно установленно, выполняем запрос к БД
	$query = "SELECT title AS Название, COUNT(task_title) AS Счетчик_дел 
	FROM project 
	LEFT JOIN task ON id_project = project_id 
	WHERE project.id_user = 2 
	GROUP BY title;";
	$result = mysqli_query($link, $query);
	if(!$result) // Проверка запроса
	{
		echo 'Ошибка запроса  меню: ' . mysqli_error($link);
		echo 'Код ошибки: меню' . mysqli_errno($link);
	}else{ // Запрос успешен
		$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
	}
}
/*
 * Вывод списка задач
 */
$query = "SELECT task_title AS Задача, file, completion_date AS Дата_выполнения, 
	status AS Выполнено
	FROM task 
	WHERE id_user = 2";
$result = mysqli_query($link, $query); 
/*
 * Проверка запроса
*/
if(!$result) 
{
	echo 'Ошибка запроса ЗАДАЧИ: ' . mysqli_error($link);
	echo 'Код ошибки:' . mysqli_errno($link);	
}else{
	$tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

