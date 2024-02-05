<?php
/**
 * Подключает шаблон, передает туда данные и возвращает итоговый HTML контент
 * @param string $name Путь к файлу шаблона относительно папки templates
 * @param array $data Ассоциативный массив с данными для шаблона
 * @return string Итоговый HTML
 */
function include_template($name, array $data = []) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}
/**
 * считает время до даты выполнения задачи
 * @param string $datetime функция ожидает строку с датой на английском языке 
 * (см. Форматы даты и времени)('d.m.Y H:i:s')
 * @return string количество часов до даты выполнения задачи и показывает "горящие задачи"
 */
function data_x ($datetime){
	date_default_timezone_set('Europe/Moscow');
	$dt3 = strtotime($datetime) - time();
	$dt3 = $dt3/3600;
	$dt3 = (int)$dt3;
	if($dt3 < 24 AND $dt3 >= 1){
		echo "\n меньше суток до времени ч: " . "$dt3 часов";
	}elseif($dt3 < 1 AND $dt3 > 0){
		echo "\n меньше часа до времени ч: " . "$dt3 часов";
	}elseif($dt3 < 0){
		$dt3 = abs($dt3);
		echo "\n задача просрочена!	" . "$dt3 часов назад!";
	}else{
		echo "\n до времени ч: " . "$dt3 часов";	
	}
}
/**
 * считает время до даты выполнения задачи
 * @param string $datetime функция ожидает строку с датой на английском языке 
 * (см. Форматы даты и времени)('d.m.Y H:i:s')
 * @return string показывает "горящие задачи" через класс "task--important", а если 
 * задача просрочена то добавляет "task--important expired"
 */
function data_24 ($datetime){
	date_default_timezone_set('Europe/Moscow');
	$dt3 = strtotime($datetime) - time();
	$dt3 = intdiv($dt3, 3600);
	if($dt3 <= 24 AND $dt3 >= 0):
		$dt3 = "task--important";
		return $dt3;
	elseif($dt3 < 0):
		$dt3 = "task--important expired";
		return $dt3;
	else:
		$dt3 = "";
		return $dt3;
	endif;
}
