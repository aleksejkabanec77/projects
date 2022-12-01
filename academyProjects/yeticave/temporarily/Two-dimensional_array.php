<?php
/*
 * Двумерный массив для вывода объявлений
 */
$adsOld = [
            "Название" => [
                            "2014 Rossignol District Snowboard", 
                            "DC Ply Mens 2016/2017 Snowboard", 
                            "Крепления Union Contact Pro 2015 года размер L/XL", 
                            "Ботинки для сноуборда DC Mutiny Charocal", 
                            "Куртка для сноуборда DC Mutiny Charocal", 
                            "Маска Oakley Canopy"
            ], 
            
            "Проект" => [
                            "Доски и лыжи",
                            "Доски и лыжи", 
                            "Крепления", 
                            "Ботинки", 
                            "Одежда", 
                            "Разное"
            ], 
            
            "Цена" => [
                            10999,
                            159999, 
                            8000, 
                            10999, 
                            7500, 
                            5400
            ], 
            
            "URL картинки" => [
                                "img/lot-1.jpg", 
                                "img/lot-2.jpg", 
                                "img/lot-3.jpg", 
                                "img/lot-4.jpg", 
                                "img/lot-5.jpg", 
                                "img/lot-6.jpg"
            ]
        
];

foreach($adsOld as $key => $value){
    if($key == "Цена") continue;
    echo $key;
    echo "<br>";
}

$number = 10999;

$numberFormat = number_format($number, 2, ",", " ");
echo $numberFormat;


                        //foreach($tasks as $keyTasks => $valueTasks){
                            //$show_complete_tasks = 1;
                            //if($show_complete_tasks == 0){
                                //if($valueTasks['implementation']) continue;
                            //}                             
                            //if($valueTasks["implementation"]){
                                //echo"<tr class='tasks__item task task--completed'>";
                            //}else{
                                //echo"<tr class='tasks__item task'>";                         
                            //}
                        ////if($show_complete_tasks == 0) continue;
                        //echo"<td class='task__select'>";
                                    //echo"<label class='checkbox task__checkbox'>";
                                        //echo"<input class='checkbox__input visually-hidden task__checkbox' type='checkbox' value='1'>";
                                        //echo"<span class='checkbox__text'>{$valueTasks['title']}</span>";
                                    //echo"</label>";
                                //echo"</td>";
                                //echo"<td class='task__file'>";
                                    //echo"<a class='download-link' href='#'>Home.psd</a>";
                                //echo"</td>";                        
                            //echo"<td class='task__date'>{$valueTasks['dateCompletion']}</td>";                    
                            //echo"</tr>";
                           //} 

                        foreach($tasks as $keyTasks => $valueTasks){
                            $show_complete_tasks = 1;
                            if($show_complete_tasks == 0){
                                if($valueTasks['implementation']) continue;
                            }                             
                            if($valueTasks["implementation"]){
                                echo"<tr class='tasks__item task task--completed'>";
                            }else{
                                echo"<tr class='tasks__item task'>";                         
                            }
                        //if($show_complete_tasks == 0) continue;
                        echo <<<CON
<td class='task__select'>
<label class='checkbox task__checkbox'>
<input class='checkbox__input visually-hidden task__checkbox' type='checkbox' value='1'>
<span class='checkbox__text'>{$valueTasks['title']}</span>
</label>
</td>
<td class='task__file'>
<a class='download-link' href='#'>Home.psd</a>
</td>                        
<td class='task__date'>{$valueTasks['dateCompletion']}</td>                    
</tr>
CON;
} 

?>
<ul>
<?php
foreach($adsOld as $key => $value) :?>
    <?php
    if($key == "Цена"): 
        continue; ?>
    <li><?= $key ?></li>
    <?php endif ?>
<?php endforeach ?>
</ul>
    
<ul>
<?php
foreach($adsOld as $key => $value){
    if($key == "URL картинки") continue;
echo <<<EOT
<li>"$key"</li>
EOT;
}
?>
</ul>
<?php
$categories = [
                "boardsAndSkis" => "Доски и лыжи", 
                "mounts" => "Крепления", 
                "boots" => "Ботинки", 
                "garments" => "Одежда", 
                "tools" => "Инструменты", 
                "sundries" => "Разное"
];
/*
 * Двумерный массив для вывода объявлений
 */
$ads = [
    [
        "title" => "2014 Rossignol District Snowboard",
        "category" => $categories["boardsAndSkis"],
        "prise" => 10999,
        "image" => "img/lot-1.jpg"
    ],
    [
        "title" => "DC Ply Mens 2016/2017 Snowboard",
        "category" => $categories["boardsAndSkis"],
        "prise" => 159999,
        "image" => "img/lot-2.jpg"
    ],
    [
        "title" => "Крепления Union Contact Pro 2015 года размер L/XL",
        "category" => $categories["mounts"],
        "prise" => 8000,
        "image" => "img/lot-3.jpg"
    ],
        [
        "title" => "Ботинки для сноуборда DC Mutiny Charocal",
        "category" => $categories["boots"],
        "prise" => 10999,
        "image" => "img/lot-4.jpg"
    ],
    [
        "title" => "Куртка для сноуборда DC Mutiny Charocal",
        "category" => $categories["garments"],
        "prise" => 7500,
        "image" => "img/lot-5.jpg"
    ],
    [
        "title" => "Маска Oakley Canopy",
        "category" => $categories["sundries"],
        "prise" => 5400,
        "image" => "img/lot-6.jpg"
    ]        
];

/**
 * Функция для форматирования строки вывода цены
 * @param namber $prise - $valueAds["prise"] для форматирования и добавления знака рубля
 * @return string $valueAdsFormat - форматированая строка цены
 */
function formatPrise($prise){
    $valueAdsFormat = number_format($prise, 2, ",", " ");
    $valueAdsFormat = $valueAdsFormat . " &#8381";
    return $valueAdsFormat;
}

//echo strtotime("2022-12-22");
$dateEnd = "2022-12-02";
//(int)$dateEnd = strtotime($dateEnd) . "\n";
//(int)$datetime = time();
//echo $datetime . "\n";
//(int)$end = $dateEnd - $datetime;
////echo min($dateEnd, $datetime);
//echo $end . "\n";
//$endHour = $end / 3600;
//$endMinute = ($end % 3600) / 60;
//echo (int)$endHour . " ч. \n";
//echo (int)$endMinute . " мин. \n";

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

echo residueTime($dateEnd);





