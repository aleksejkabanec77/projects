<?php
require_once("functions.php");
$db = require_once 'dbYeticave.php';
/*
 * Создание подключения к базе данных
 */ 
$link = mysqli_connect($db['host'], $db['user'], $db['password'], $db['database']); 
mysqli_set_charset($link, $db['charset']); 
/*
 * Инициализация массивов категорий и объявлений
 */ 
$categories = [];
$ads = [];
/*
 * Проверка правильности подключения к БД
 */
if(!$link)
{
	echo 'Ошибка соединения: ' . mysqli_connect_error() . '<br>';
	echo 'Код ошибки: ' . mysqli_connect_errno();
}else{ // Соединение успешно установленно, выполняем запрос к БД
	$query = "SELECT id, title, character_code FROM categories";
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
 * Вывод лотов
 */
$query = "SELECT categories.title, title_lot, starting_price, date_completion_lot 
	FROM categories 
	INNER JOIN lots ON categories_id = categories.id";
$result = mysqli_query($link, $query);
if(!$result) // Проверка запроса
{
	echo 'Ошибка запроса: ' . mysqli_error($link);
	echo 'Код ошибки:' . mysqli_errno($link);	
}else{
	$ads = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//print_r($ads);
}

