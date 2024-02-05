<?php
/**
 * Функция для форматирования строки вывода цены
 * @param float $prise - $valueAds["prise"] для форматирования и добавления знака рубля
 * @return string $valueAdsFormat - форматированая строка цены
 */
function formatPrise($prise){
    $valueLotsFormat = number_format($prise, 2, ",", " ");
    $valueLotsFormat = htmlspecialchars($valueLotsFormat, ENT_QUOTES) . " &#8381";
    return $valueLotsFormat;
}
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
 * считает время до даты окончания лота
 * @param string $datetime функция ожидает строку с датой (ГГГГ-ММ-ДД) 
 * (см. Форматы даты и времени)(YYYY-MM-DD)
 * @return string показывает полученное время в виде "ЧЧ: ММ", если оставшееся время 
 * меньше часа то блоку div.lot__timer добавляется класс "timer--finishing", а если лот 
 * просрочен, то класс "timer--finishing delete".
 */
function data_24 ($datetime){
	date_default_timezone_set('Europe/Moscow');
	$dt = [];	
	$dt1 = strtotime($datetime) - time();
	$dt2 = intdiv($dt1, 3600);
	$dt3 = intdiv($dt1, 60) - $dt2 * 60;
	$dt = ['часы' => $dt2, 'минуты' => $dt3, 'класс' => ""];
	if($dt2 <= 0 AND $dt3 >= 0):
		$dt['класс'] = "timer--finishing";
	elseif($dt3 < 0):
		$dt['класс'] = "timer--finishing delete";
	else:
		$dt['класс'] = "";
	endif;
	$dt['часы'] = $dt['часы'] . ": " ;
	return $dt;
}

//$datetime = '07.01.2024';
//$datetime = '2024-01-07';
//$dt = data_24($datetime);
//var_dump($dt);

