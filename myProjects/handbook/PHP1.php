<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>конспект по PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1 class="page-title">Конспект по веб разработке</h1>
    </header>
    <main>
      <section>
        <p>Всем привет! Добро пожаловать в мой конспект по веб разработке. </p>
      </section>      
      <nav class="blog-navigation">
        <h2>темы:</h2>
        <?php
            //echo $_SERVER['PHP_SELF'];
            $theme = [
                'Arrays.php' => 'Массивы', 
                'Cycles.php' => 'Циклы', 
                'Functions.php' => 'Функции', 
                'Debugging.php' => 'Отладка', 
                'Additional_materials.php' => 'Дополнительные материалы'
            ];
        ?>
        <ul>
        <?php
        foreach($theme as $key => $value): ?>
            <li><a href="<?= $key; ?>"><?=$value;?></a></li>
        <?php endforeach; ?>
        </ul>
      </nav>
<!--
    <footer>
      Подвал сайта
    </footer>
-->
  </body>
</html>
