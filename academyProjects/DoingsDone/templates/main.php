<?php
$show_complete_tasks = rand(0, 1);
?>
<section class="content__side">
	<h2 class="content__side-heading">Проекты</h2>

	<nav class="main-navigation">
		<ul class="main-navigation__list">
		<?php foreach($categories as $keyCategory => $valueCategory): ?>
			<li class="main-navigation__list-item">
				<a class="main-navigation__list-item-link" href="#"><?= $valueCategory['Название'] ?></a>
				<span class="main-navigation__list-item-count"><?= $valueCategory['Счетчик_дел'] ?></span>
			</li>
		<?php endforeach; ?>
		</ul>
	</nav>

	<a class="button button--transparent button--plus content__side-button"
	   href="pages/form-project.html" target="project_add">Добавить проект</a>
</section>

<main class="content__main">
	<h2 class="content__main-heading">Список задач</h2>

	<form class="search-form" action="index.php" method="post" autocomplete="off">
		<input class="search-form__input" type="text" name="" value="" placeholder="Поиск по задачам">

		<input class="search-form__submit" type="submit" name="" value="Искать">
	</form>

	<div class="tasks-controls">
		<nav class="tasks-switch">
			<a href="/" class="tasks-switch__item tasks-switch__item--active">Все задачи</a>
			<a href="/" class="tasks-switch__item">Повестка дня</a>
			<a href="/" class="tasks-switch__item">Завтра</a>
			<a href="/" class="tasks-switch__item">Просроченные</a>
		</nav>

		<label class="checkbox">
			<!--добавить сюда атрибут "checked", если переменная $show_complete_tasks равна единице-->
			<input class="checkbox__input visually-hidden show_completed" type="checkbox"
			<?php if($show_complete_tasks) :?> checked <?php endif ?>>
			<span class="checkbox__text">Показывать выполненные</span>
		</label>
	</div>

	<table class="tasks">
		<?php foreach($tasks as $keyTask => $valueTask): ?>
			<?php if($valueTask['Выполнено'] AND $show_complete_tasks):?>
				<tr class="tasks__item task task--completed">
			<?php elseif($valueTask['Выполнено'] AND !$show_complete_tasks): ?>	
				<?php continue; ?>
			<?php else: ?>
				<tr class="tasks__item task <?= data_24($valueTask['Дата_выполнения']) ?>">
			<?php endif; ?>
				<td class="task__select">
				<label class="checkbox task__checkbox">
				  <input class="checkbox__input visually-hidden" type="checkbox" checked>
				  <span class="checkbox__text"><?= $valueTask['Задача'] ?></span>
				</label>
			  </td>
              <td class="task__file">
				<a class="download-link" href="#">Home.psd</a>
              </td>			  
			  <td class="task__date"><?= $valueTask['Дата_выполнения'] ?></td>
<!--
			  <td class="task__controls">
			  </td>
-->
			</tr>
			<?php endforeach; ?>

		<!--показывать следующий тег <tr/>, если переменная $show_complete_tasks равна единице-->
	</table>
</main>
