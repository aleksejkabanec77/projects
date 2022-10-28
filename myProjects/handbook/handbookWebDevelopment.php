<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>конспект по веб разработке</title>
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
        <h2>предметы:</h2>
        <?php
            $theme = [
                'HTML_basics.php' => 'основы HTML', 
                'CSS_basics.php' => 'основы CSS', 
                'JS_basics.php' => 'основы JS', 
                'PHP_basics.php' => 'основы PHP', 
                'PHP1.php' => 'PHP1',
                'importantExamples.php' => 'Важные примеры'
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
