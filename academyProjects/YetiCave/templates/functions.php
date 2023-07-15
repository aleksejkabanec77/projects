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
function include_template(string $name, array $data = []) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        $result = "Файл недоступен для чтения";
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}
/**
 * Функция для запроса на показ лотов ????
 */
