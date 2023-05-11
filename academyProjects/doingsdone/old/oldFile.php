<?php
                        //$tasksCategory = array_column($tasks, 'category');
                        //var_dump($tasksCategory);
                        //$tasksCategoryCount = array_count_values($tasksCategory);
                        //var_dump($tasksCategoryCount);
                        //array_values($tasksCategory);
                        //print_r($tasksCategory);
                        //foreach($tasks as $keyTasks => ){
                            //$show_complete_tasks = 1;
                            //if($show_complete_tasks == 0){
                                //if(['implementation']) continue;
                            //}                             
                            //if(["implementation"]){
                                //echo"<tr class='tasks__item task task--completed'>";
                            //}else{
                                //echo"<tr class='tasks__item task'>";                         
                            //}
                        ////if($show_complete_tasks == 0) continue;
                        //echo"<td class='task__select'>";
                                    //echo"<label class='checkbox task__checkbox'>";
                                        //echo"<input class='checkbox__input visually-hidden task__checkbox' type='checkbox' value='1'>";
                                        //echo"<span class='checkbox__text'>{['title']}</span>";
                                    //echo"</label>";
                                //echo"</td>";
                                //echo"<td class='task__file'>";
                                    //echo"<a class='download-link' href='#'>Home.psd</a>";
                                //echo"</td>";                        
                            //echo"<td class='task__date'>{['dateCompletion']}</td>";                    
                            //echo"</tr>";
                           //} 

                        //if($show_complete_tasks == 0) continue;
                        //var_dump($keyTasks);
                        //var_dump();
                        //["category"] = $category;
                        //echo $category;
                        //var_dump($category);
                        //echo count($housework);
            $categorieNew = [
                            "входящие", 
                            "учеба", 
                            "работа", 
                            "домашние дела", 
                            "авто"
            ]; 
function counterCase($tasks, $categorieNew){
    $tasksCategoryCount = array_count_values(array_column($tasks, 'category'));
    $newCategorie = array_flip($categorieNew);
    if($newCategorie['входящие']){
        return $tasksCategoryCount['входящие'];
    }elseif($newCategorie['учеба']){
        return $tasksCategoryCount['учеба'];    
    }elseif($newCategorie['работа']){
        return $tasksCategoryCount['работа'];    
    }elseif($newCategorie['домашние дела']){
        return $tasksCategoryCount['домашние дела'];    
    }elseif($newCategorie['авто']){
        return $tasksCategoryCount['авто'];    
    }else{
        return $tasksCategoryCount = 0; 
    }    
} 

$dateEnd = "02.12.2022";
//(int)$dateEnd = strtotime($dateEnd) . "\n";
//(int)$datetime = time();
//echo $datetime . "\n";
//(int)$end = $dateEnd - $datetime;
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
function residueTime(string $dateEnd) : string
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

function residueTime1(string $dateEnd) : string
{
    $dateEnd = strtotime($dateEnd);
    $dateEnd = (int)$dateEnd;
    $datetime = time();
    $datetime = (int)$datetime;
    $end = $dateEnd - $datetime;
    $endHour = $end / 3600;
    if($endHour <= 24){
        $timeLeft = <<<OUT
<td class='task__date task--important'>
OUT;
        return $timeLeft;
    }
    $timeLeft = <<<OUT1
<td class='task__date'>
OUT1;
}

echo residueTime1($dateEnd);


//"<td class='task__date'>"







                                 
