<?php 
//require_once("query.php");
$db = require_once 'dbYetiCave.php';
/*
 * Создание подключения к базе данных
 */ 
$link = mysqli_connect($db['host'], $db['user'], $db['password'], $db['database']); 
mysqli_set_charset($link, $db['charset']); 
/*
 * Инициализация массивов категорий и объявлений
*/ 
$categories = [];
$lots = [];
/*
 * Проверка правильности подключения к БД
 */
if(!$link)
{
	echo 'Ошибка соединения: ' . mysqli_connect_error() . '<br>';
	echo 'Код ошибки: ' . mysqli_connect_errno();
}else{ // Соединение успешно установленно, выполняем запрос к БД
	$query = "SELECT id_categories, title_categories, character_code FROM categories";
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
$query = "SELECT title_categories, title_lot, starting_price, validity_lot, id_lots, image_lot
	FROM categories 
	INNER JOIN lots ON categories_id = id_categories ";
$result = mysqli_query($link, $query);
if(!$result) // Проверка запроса
{
	echo 'Ошибка запроса ЛОТЫ: ' . mysqli_error($link);
	echo 'Код ошибки:' . mysqli_errno($link);	
}else{
	$lots = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
/*
 * Вывод лота
 */
$lotId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$lotId = (int)$lotId;
//echo $lotId;

/* 	$query = "SELECT id_lots, title_lot 
			FROM lots 
			WHERE id_lots = $lotId"; */
			
$query = "SELECT title_lot, title_categories, image_lot  
		FROM  categories 
		INNER JOIN lots ON categories_id = id_categories
		WHERE id_lots = $lotId";

$result = mysqli_query($link, $query);
if(!$result) // Проверка запроса
{
	echo 'Ошибка запроса ЛОТ: ' . mysqli_error($link);
	echo 'Код ошибки:' . mysqli_errno($link);	
}else{
	$lot = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//print_r($lot);
	//var_dump($lot);
}
