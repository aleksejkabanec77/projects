<?php
//$is_auth = rand(0, 1);
//$user_name = 'guest'; // укажите здесь ваше имя
/* 
 * Создаем каталог для меню
 */
$categories = [
                "Доски и лыжи", 
                "Крепления", 
                "Ботинки", 
                "Одежда", 
                "Инструменты", 
                "Разное"
];
/* 
 * Создаем каталог для объявлений
 */
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

