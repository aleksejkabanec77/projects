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
/**
 * Функция для вывода цвета при оставшемся времени < 24 ч.
 * @param string - $dateEnd дата выполнения дела
 * @return string - $timeLeft вывод цвета для дела
 */
function residueTime(string $dateEnd) : string
{
    $dateEnd = strtotime($dateEnd);
    $dateEnd = (int)$dateEnd;
    $datetime = time();
    $datetime = (int)$datetime;
    $end = $dateEnd - $datetime;
    $endHour = $end / 3600;
    $endHour = (int)$endHour;
    if($endHour <= 24){
        $timeLeft = <<<OUT
<td class='task__date task--important'>
OUT;
        return $timeLeft;
    }
    $timeLeft = <<<OUT1
<td class='task__date'>
OUT1;
    return $timeLeft;
}
