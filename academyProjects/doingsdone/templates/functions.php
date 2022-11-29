<?php
//$show_complete_tasks = rand(0, 1);
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
 * Функция формирует массив для меню и счетчика
 * @param array $tasks - массив дел
 * @param array $categories - массив категорий
 * @return array $tasksCategorys - массив для итерации и вывода меню и количества дел
 */
function arrayMenuCounter(array $tasks, array $categories) : array
{
    $tasksCategoryCount = array_count_values(array_column($tasks, 'category'));
    $newCategories = array_flip($categories);
    $comparisonResult = array_diff_key($newCategories, $tasksCategoryCount);
    $resultNull = array_fill_keys(array_flip($comparisonResult), 0);
    $tasksCategorys = $tasksCategoryCount + $resultNull;
    return $tasksCategorys;   
}
