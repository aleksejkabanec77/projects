<?php
//$is_auth = rand(0, 1);
/**
 * Подключает шаблон, передает туда данные и возвращает итоговый HTML контент
 * @param string $name Путь к файлу шаблона относительно папки templates
 * @param array $data Ассоциативный массив с данными для шаблона
 * @return string Итоговый HTML
 */
function include_template($name, array $data = []) {
    $name = 'templates/' . $name;

    if (!is_readable($name)) {
        $result = 'Ошибка пути к файлу';
        return $result;
    }

    ob_start();
    //делает из ключа ассоц. массива $data переменную, в которой значение значения
    extract($data);
    require_once $name;

    $result = ob_get_clean();
    
    return $result;
}
/**
 * Функция для форматирования строки вывода цены
 * @param float $prise - $valueAds["prise"] для форматирования и добавления знака рубля
 * @return string $valueAdsFormat - форматированая строка цены
 */
function formatPrise($prise){
    $valueAdsFormat = number_format($prise, 2, ",", " ");
    $valueAdsFormat = htmlspecialchars($valueAdsFormat, ENT_QUOTES) . " &#8381";
    return $valueAdsFormat;
}
/**
 * Функция для вывода оставшевося времени лота
 * @param string - $dateEnd дата окончания лота
 * @return string - $periodOutput вывод строки количества оставшегося времени
 */
function residueTime($dateEnd) : string
{
    $dateEnd = strtotime($dateEnd);
    $dateEnd = (int)$dateEnd;
    $datetime = time();
    $datetime = (int)$datetime;
    $end = $dateEnd - $datetime;
    $endHour = $end / 3600;
    $endMinute = ($end % 3600) / 60;
    $period = (int)$endHour . " ч. " . (int)$endMinute . " мин.";
    if($endHour < 0){
        $period = "Товар должен быть удален!";
        $periodOutput = <<<OUT
<div class="lot__timer timer timer--finishing">
$period
</div>
OUT;
        return $periodOutput;
    }elseif($endHour = 0){
        $period = (int)$endMinute . " мин. ";
        $periodOutput = <<<OUT
<div class="lot__timer timer timer--finishing">
$period
</div>
OUT;
        return $periodOutput;
    }else{
        $periodOutput = <<<OUT
<div class="lot__timer timer">
$period
</div>
OUT;
        return $periodOutput;        
    }
}
