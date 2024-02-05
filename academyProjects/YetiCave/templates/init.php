<?php
$db = require_once 'YetiCaveDB.php';
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
 * Проверка правильности подключения к БД и вывод меню
 */
if(!$link)
{
	echo 'Ошибка соединения: ' . mysqli_connect_error() . '<br>';
	echo 'Код ошибки: ' . mysqli_connect_errno();
}else{ // Соединение успешно установленно, выполняем запрос к БД
	$query = "SELECT catalog_id, title, character_code FROM catalog";
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
$query = "SELECT title, lot_title, starting_price, completion_date, lot_id, image_addr
	FROM catalog 
	INNER JOIN lot ON id_catalog = catalog_id 
	WHERE completion_date > NOW()
	ORDER BY creation_date DESC";
$result = mysqli_query($link, $query);
if(!$result) // Проверка запроса
{
	echo 'Ошибка запроса ЛОТЫ: ' . mysqli_error($link);
	echo 'Код ошибки:' . mysqli_errno($link);	
}else{
	$lots = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
