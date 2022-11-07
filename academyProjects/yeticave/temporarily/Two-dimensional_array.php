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
