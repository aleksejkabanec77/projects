<?php
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);
//$categories = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто', 'Курсы', 'Институт', 
	//'Огород', 'Стройка', 'Медицина'];
$tasks = [
	['Задача' => 'Собеседование в IT компании', 'Дата выполнения' => '01.12.2023', 
	'Категория' => 'Работа', 'Выполнено' => 0], //1
	
	['Задача' => 'Выполнить тестовое задание', 'Дата выполнения' => '25.12.2025', 
	'Категория' => 'Работа', 'Выполнено' => 0], //1
	
	['Задача' => 'Сделать задание первого раздела', 'Дата выполнения' => '21.12.2025', 
	'Категория' => 'Учеба', 'Выполнено' => 1], //1
	
	['Задача' => 'Встреча с другом', 'Дата выполнения' => '22.12.2025', 
	'Категория' => 'Входящие', 'Выполнено' => 0], //1
	
	['Задача' => 'Купить корм для кота', 'Дата выполнения' => 'null', 
	'Категория' => 'Домашние дела', 'Выполнено' => 0], //1
	
	['Задача' => 'Заказать пиццу', 'Дата выполнения' => 'null', 
	'Категория' => 'Домашние дела', 'Выполнено' => 0], //2
	
	['Задача' => 'Закончить курс SQL', 'Дата выполнения' => '22.10.2025', 
	'Категория' => 'Курсы', 'Выполнено' => 0],  //2
	
	['Задача' => 'Купить мясо', 'Дата выполнения' => 'null', 
	'Категория' => 'Домашние дела', 'Выполнено' => 1],  //2
	
	['Задача' => 'Поменять коробку', 'Дата выполнения' => '22.12.2025', 
	'Категория' => 'Авто', 'Выполнено' => 0],  //3
	
	['Задача' => 'Сдать анализы', 'Дата выполнения' => '22.01.2024', 
	'Категория' => 'Медицина', 'Выполнено' => 1],  //2
	
	['Задача' => 'Убрать двор', 'Дата выполнения' => '0', 
	'Категория' => 'Домашние дела', 'Выполнено' => 0], //3
	
	['Задача' => 'Сдать зачет', 'Дата выполнения' => '22.11.2024', 
	'Категория' => 'Институт', 'Выполнено' => 0], //3
	
	['Задача' => 'Написать эссе', 'Дата выполнения' => '22.01.2024', 
	'Категория' => 'Институт', 'Выполнено' => 0], //3
	
	['Задача' => 'Сделать БД', 'Дата выполнения' => '22.11.2024', 
	'Категория' => 'Работа', 'Выполнено' => 0], //3
	
	['Задача' => 'Сделать сайт', 'Дата выполнения' => '02.11.2024', 
	'Категория' => 'Работа', 'Выполнено' => 0], //3
	
	['Задача' => 'Сделать пангинацию', 'Дата выполнения' => '02.11.2025', 
	'Категория' => 'Работа', 'Выполнено' => 0], //3
	
	['Задача' => 'Залить фундамент', 'Дата выполнения' => '02.11.2025', 
	'Категория' => 'Стройка', 'Выполнено' => 0], //2
	
	['Задача' => 'Отрегулировать клапана', 'Дата выполнения' => '02.11.2025', 
	'Категория' => 'Авто', 'Выполнено' => 0 ]	//2 					
];
/* 
 * Каждый пользователь создает себе список категорий проекта (сделать это по аналогии с 
 * задачами). Проекты не должны повторяться у одного юзера.
*/
/*
 * Список категорий и счетчик
 * 
SELECT title AS Название, COUNT(task_title) AS Счетчик_дел 
FROM project 
LEFT JOIN task ON id_project = project_id 
WHERE project.id_user = 2 
GROUP BY title;
/*


