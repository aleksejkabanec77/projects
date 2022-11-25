<?php
/*
 * Массив дел
 */
$tasks = [
    [
        "title" => "Собеседование в IT компании",
        "dateCompletion" => "01.12.2019",        
        "category" => 'Работа',
        "implementation" => false
    ],
    [
        "title" => "Выполнить тестовое задание",
        "dateCompletion" => "25.12.2019",
        "category" => 'Работа',
        "implementation" => false
    ],
    [
        "title" => "Сделать задание первого раздела",
        "dateCompletion" => "21.12.2019",        
        "category" => 'Учеба',
        "implementation" => true
    ],
    [
        "title" => "Встреча с другом",
        "dateCompletion" => "22.12.2019",        
        "category" => 'Входящие',
        "implementation" => false
    ],
    [
        "title" => "Купить корм для кота",
        "dateCompletion" => "null",        
        "category" => 'Домашние дела',
        "implementation" => false
    ],
    [
        "title" => "Заказать пиццу",
        "dateCompletion" => "null",        
        "category" => 'Домашние дела',
        "implementation" => false
    ]        
];
/*
 * Массив для меню
 */
$categories = [
                "Входящие", 
                "Учеба", 
                "Работа", 
                "Домашние дела", 
                "Авто"
];
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
?>
<ul>      
<?php
foreach(arrayMenuCounter($tasks, $categories) as $keyTasksCategorys => $valueTasksCategorys)
{
echo <<<CON
<li>$keyTasksCategorys  :  $valueTasksCategorys\n</li>
CON;
}
?>
</ul>      
<?php
$ads = [
    [
        "title" => "2014 Rossignol District Snowboard",
        "category" => "Доски и лыжи",
        "prise" => (float)10999,
        "image" => "img/lot-1.jpg"
    ],
    [
        "title" => "DC Ply Mens 2016/2017 Snowboard",
        "category" => "Доски и лыжи",
        "prise" => (float)159999,
        "image" => "img/lot-2.jpg"
    ],
    [
        "title" => "Крепления Union Contact Pro 2015 года размер L/XL",
        "category" => "Крепления",
        "prise" => (float)8000,
        "image" => "img/lot-3.jpg"
    ],
        [
        "title" => "Ботинки для сноуборда DC Mutiny Charocal",
        "category" => "Ботинки",
        "prise" => (float)10999,
        "image" => "img/lot-4.jpg"
    ],
    [
        "title" => "Куртка для сноуборда DC Mutiny Charocal",
        "category" => "Одежда",
        "prise" => (float)7500,
        "image" => "img/lot-5.jpg"
    ],
    [
        "title" => "Маска Oakley Canopy",
        "category" => "Разное",
        "prise" => (float)5400,
        "image" => "img/lot-6.jpg"
    ]        
];

$categories = [
                "Доски и лыжи", 
                "Крепления", 
                "Ботинки", 
                "Одежда", 
                "Инструменты", 
                "Разное"
];
/**
 * Функция для форматирования строки вывода цены
 * @param float $prise - $valueAds["prise"] для форматирования и добавления знака рубля
 * @return string $valueAdsFormat - форматированая строка цены
 */
function formatPrise($prise){
    $valueAdsFormat = number_format($prise, 2, ",", " ");
    $valueAdsFormat = $valueAdsFormat . " &#8381";
    return $valueAdsFormat;
}

$a = 10000;
echo "(int)$a \n";
echo "(float)$a \n";
number_format($a, 2, ",", " ");
echo $a;
?>
        <ul class="lots__list">
            <!--заполните этот список из массива с товарами--> 
            <?php
            foreach($ads as $keyAds => $valueAds): ?>  
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="<?=$valueAds["image"]?>" width="350" height="260" alt="">
                    </div>
                    <div class="lot__info">                           
                        <span class="lot__category"> Название категории<?=" " . $valueAds["category"]?></span>
                        <h3 class="lot__title"><a class="text-link" href="pages/lot.html">Название товара</a><?=" " . $valueAds["title"]?></h3>
                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost">цена<?=" " . formatPrise($valueAds["prise"]) ?></span>
                            </div> 
                            <div class="lot__timer timer">
                                12:23
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>            
        </ul>
