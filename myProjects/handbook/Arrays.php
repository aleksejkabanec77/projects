<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>массивы</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <p class="page-title">Массивы</p>
      <nav class="blog-navigation">
        <a href="index.html">На главную</a>
      </nav>
    </header>
      <article>
        <h1>Массивы</h1>
        <p>Эту главу мы начнём с изучения нового типа данных — массива. Массив является комплексным типом данных. Он позволяет хранить в одной переменной несколько значений. Мы разберёмся, как устроены массивы, зачем используются и в каких задачах пригодятся.</p>
        <h2>Определение массива</h2>
        <p class="rule"><em><b>Массив</b></em> — тип данных для представления множества значений. Переменная-массив может хранить список из обычных значений разных типов.</p> 
        <p>Массив не такой примитивный тип данных, как строка или число, так как позволяет хранить в себе множество типов данных. Он может состоять из строк, чисел, булевых типов данных или содержать смешанные значения. Если объявить переменную массивом, то в неё можно будет положить разные значения и все они будут храниться в рамках одной переменной.</p>
        <img src="picture/folder.png" alt="массив" width="400"> 
        <p class="signature">Рисунок 1. Папка для бумаг как представление массива</p> 
        <p>Если взять папку с документами за аналогию, то одно значение —  это файл или документ, а массив станет папкой, в которой эти документы лежат. И если мы хотим посмотреть все документы, то нужно открыть эту папку и пролистать её от первого до последнего листочка. Папка — массив, файлы — значения такого массива.</p>
        <h2>Хранение информации в массиве</h2>
        <p>Каждое значение сохраняется в массиве под своим адресом — <b>индексом</b></p>
        <p class="rule"><em><b>Индекс</b></em> — порядковый номер с нумерацией от нуля</p>
        <p>Индекс — это число, порядковый номер. Когда в пустой массив добавляется новый элемент, у этого элемента индекс становится равным нулю. Добавляем другой элемент и индекс этого элемента становится единицей.</p>
        <p class="rule">Правило: каждый новый индекс увеличивается на единицу.</p>
        <p>Если представить массив, как некую структуру данных, то это проще всего сделать как бесконечную последовательность от нуля до бесконечности. Помещая каждый элемент в этот массив, он будет присваиваться очередному индексу.</p>
        <img src="picture/array.png" alt="массив" width="400">
        <p class="signature">Рисунок 2. Индексы в массиве</p> 
        <h2>Простые массивы</h2>
        <p>В простых массивах элементы хранятся под числовым индексом и этот числовой индекс присваивается автоматически. Простым массивом называется список значений, где каждый элемент хранится под своим <em><b>числовым</b></em> числовым индексом.</p>
        <h2>Что такое список значений</h2>
        <p>Давайте разберёмся для чего нужны простые массивы. Чаще всего мы их используем, чтобы сохранить какой-то однородный список значений. Имеется некоторая последовательность значений. Само содержание элементов может быть разным, но они все объединены каким-то общим критерием.</p>
        <p>Пример: у нас может быть массив, в котором сохранён список покупок или список гостей. То есть списки, которые вы составляете самостоятельно в своей жизни, пишите в блокноте или где-то ещё. Список покупок также однородный в том смысле, что состоит из отдельных элементов, но все эти элементы являются общим списком, который можно использовать, чтобы пойти в магазин.</p>
        <p>Такой список покупок можно представить в виде массива, где каждая покупка будет отдельным элементом массива.</p>
        <h2>Пример простого массива</h2>
        <p>Посмотрим, как массивы находят применение в учебном проекте — в giftube. На каждой странице этого сайта есть меню — список категорий.</p>
        <img src="picture/menu.png" alt="массив" width="400">
        <p class="signature">Рисунок 3. Меню на сайте giftube</p>
        <p>Этот список находится в одном простом массиве. В PHP-коде этот массив представлен в следующем виде:</p>
        <pre><code>
            &lt;?php
                $categories = [
                        "Видеоигры", "Животные", "Люди", "Наука", "Приколы",
                        "Спорт", "Фейлы", "Фильмы и анимация"
            ];
        </code></pre>        
        <p>Отдельные элементы массива разделяются запятой. Затем этот массив используется, чтобы показать его внутри вёрстки в виде меню.</p>
        <h2>Где понадобятся массивы</h2>
        <img src="picture/array_giftube.png" alt="массив" width="1200">
        <p class="signature">Рисунок 4. Применение массивов в учебном проекте</p>
        <p>При публикации гифки есть выпадающий список, где нужно выбрать категорию. Элементы этого списка представлены в виде массива. Также у нас есть постраничная навигация со списком страниц. Этот список также находится в массиве.</p>
        <h2>Работа с простыми массивами</h2>
        <p>Перейдём к синтаксису языка PHP и посмотрим, как в нём устроена работа с массивами.</p>
        <p>Чтобы сделать новый пустой массив, мы определяем переменную и присваиваем ей с помощью синтаксиса «две квадратных скобки» пустой массив: &nbsp <span class="codeLine">  &nbsp $my_friends = []  &nbsp </span> &nbsp Теперь эта переменная является пустым массивом.</p>
        <p>Можно сделать массив сразу заполненным, то есть в нём могут лежать какие-то элементы сразу после создания. В этом массиве есть три элемента — строки, они отделяются друг от друга запятой: &nbsp <span class="codeLine">$cats = ["Игры","Приколы","Фейлы”];</span> &nbsp </p>
        <p>Когда у нас есть массив, не важно, пустой он или нет, его можно модифицировать. Например, мы можем добавить туда элемент, поместив его в конец. Синтаксис, чтобы добавить в массив новый элемент: &nbsp <span class="codeLine">$my_friends[] = "Winnie Pooh”;</span> &nbsp </p>
        <p>За удаление из массива элементов отвечает функция &nbsp <span class="codeLine">unset</span>. Указываем имя переменной, квадратные скобки, внутри них индекс элемента, который мы хотим удалить. Такая запись удаляет первый элемент массива: &nbsp <span class="codeLine">unset($my_friends[0]);</span> &nbsp </p>
        <p>По индексу можно элемент заменить на другой:  &nbsp <span class="codeLine"> $cats[0] = "Офис";</span></p>
        <p>В процессе разработки иногда полезно узнать, что лежит в массиве, особенно если вы получили этот массив из базы данных, а в будущем вы часто будете этим заниматься. Чтобы узнать, что находится в массиве, используйте функцию &nbsp <span class="codeLine">var_dump</span>. В таком виде она покажет вам элементы, лежащие в этом массиве: их значения, индексы, тип, а также общее число элементов в нём: &nbsp <span class="codeLine">var_dump($cats);</span></p>
        <p class="signature">Результат работы функции:</p>
        <pre><code class=>
            array(3) {
            [0]=> string(10) "Игры"
            [1]=> string(14) "Приколы"
            [2]=> string(10) "Фейлы"
        }
        </code></pre>
        <h2>Пример применения массива в реальной задаче</h2>
        <p>Предположим, мы хотим сделать на сайте в углу страницы показ случайной цитаты, чтобы когда пользователь заходит на сайт, каждый раз он видел какую-то случайную цитату из вашего списка.</p>
        <pre><code>
              &lt;?php
                $cites = [
                    'Меня трудно найти, легко потерять и невозможно забыть',
                    'Подошёл, взял за руку, уверенно сказал "моя" и увёл',
                    'Я ангел. Но когда мне обрезают крылья приходится летать на метле',
                    'Когда меня спрашивают, что важнее, еда или любовь, я молчу, потому что ем.'
                ];
                
                $rand_key = array_rand($cites);
                $random_cite = $cites[$rand_key];
                ?>

            &lt;h1>Случайная цитата&lt;/h1>
            &lt;cite>&lt;?=$random_cite;?>&lt;/cite>
        </code></pre>
        <p>Каким будет алгоритм: сначала определим массив и поместим в него отдельные цитаты. Не важно, сколько их будет. В данном случае в массиве лежит четыре цитаты. Затем нужно получить случайную. Для этого есть специальная функция &nbsp <span class="codeLine">array_rand</span>. Функция вернёт случайный индекс из всех, что есть в массиве. Мы можем обратиться к массиву, получить случайное значение по этому индексу и показать его на сайте.</p>
        <p>Таким способом мы сделали показ случайной цитаты. Поместили их в массив и с помощью одной простой функции можем взять случайный элемент этого массива. Теперь подумайте, как бы вы это делали без массива. Какие бы у вас были способы сделать то же самое без массива? Это, в целом, возможно, но это было бы гораздо сложнее и не так коротко, как получилось в этом примере.</p>
        <h2>Ассоциативные массивы</h2>
        <p class="rule"><em><b>Ассоциативный массив</em></b> — массив, где каждый элемент сохраняется с указанием ключа. Ключ — это произвольная строка.</p>
        <p>Ранее вы узнали про простые массивы, где есть список значений и у каждого значения есть числовой индекс. Но в PHP есть ассоциативные массивы и они отличаются от простых. В ассоциативных массивах нет индексов, но есть ключи, которые создаются программистом вручную. То есть, когда вы хотите добавить элемент в ассоциативный массив, вы сначала придумываете имя ключа и потом добавляете в массив с этим ключом.</p>
        <h2>Описание сложных объектов</h2>
        <p>Чтобы в коде описывать сложные  объекты, нужна структура данных  для хранения пар вида <em><b>&nbsp«ключ — значение»&nbsp</em></b></p>
        <img src="picture/cat.png" alt="массив" width="600">
        <p class="signature">Рисунок 5. Сложный объект со множеством характеристик</p>
        <table>
            <tr><th>Ключ</th><th> &nbsp &nbsp &nbsp &nbsp &nbsp </th><th>Значение</th></tr> <!--ряд с ячейками заголовков-->
            <tr><td>Имя</td><td> &nbsp &nbsp => &nbsp &nbsp </td> <td>Барсик</td></tr> <!--ряд с ячейками тела таблицы-->
            <tr><td>Цвет</td><td> &nbsp &nbsp => &nbsp &nbsp </td><td>Рыжий</td></tr> <!--ряд с ячейками тела таблицы-->
            <tr><td>Пушистость</td><td> &nbsp &nbsp => &nbsp &nbsp </td><td>Умеренная</td></tr> <!--ряд с ячейками тела таблицы-->
            <tr><td>Вес</td><td> &nbsp &nbsp => &nbsp &nbsp </td><td>3 кг</td></tr> <!--ряд с ячейками тела таблицы-->
            <tr><td>Пол</td><td> &nbsp &nbsp => &nbsp &nbsp </td><td>Мужской</td></tr> <!--ряд с ячейками тела таблицы-->
        </table>
        <p>Зачем нужны ассоциативные массивы? Они являются коллекцией, структурой данных, которая позволяет хранить пары ключ-значение, где ключ — это некое название, а значение — содержимое.</p>
        <p>С помощью ассоциативного массива можно описать любой объект реального мира. Если мы хотим описать кота, то можем дать ему несколько характеристик, у каждой из которых будет ключ. Допустим, имя, цвет, пушистость, вес и т. д. И у каждого из них будет значение, т. е. имя — Барсик, цвет — рыжий и так далее.</p>
        <p>Получается, что все эти пары «ключ-значение» хранятся в массиве и сам массив является описанием этого кота.</p>
        <h2>Пример ассоциативного массива</h2>
        <p>На сайте giftube есть ключевая сущность — гифка. И у каждой гифки есть набор характеристик. Это сама гифка, название, автор, число лайков и что-то еще. Каждая гифка, по-сути, совокупность этих характеристик. И их все удобно хранить в виде ассоциативного массива.</p>
        <img src="picture/cat_gif.png" alt="массив" width="400">
        <p class="signature">Рисунок 6. Гифка на сайте</p>
        <p>В PHP-коде массив для представления этой гифки выглядит так:</p>
        <pre><code>
            $gif = [
                'gif' => '/img/cat.gif',
                'title' => 'Типичный юзер',
                'author' => 'frexin',
                'likes_count' => 1
            ];
        </code></pre>        
        <p>Ключи и значение разделяются стрелкой &nbsp <span class="codeLine">&nbsp => </span>. &nbsp Отличие простого массива от ассоциативного в том, что мы должны указывать ключ элемента. При этом порядок добавленных значений всё равно сохранится. Ассоциативные массивы подходят для описания таких данных, как гифки, то есть каждая гифка содержит определённый набор характеристик.</p>
        <h2>Ассоциативные массивы — резюме</h2>
        <ul>
            <li>Вместо индекса произвольный ключ;</li>
            <li>Порядок добавленных значений всё равно сохраняется;</li>
            <li>Подходят для описания сложных структур данных.</li>
        </ul>
        <h2>Операции с ассоциативными массивами</h2>
        <p>Ассоциативный массив можно сразу создать заполненным. Пары «ключ-значение» отделяются запятыми. Ключ от значения отделяется стрелкой =>. Таким образом, мы сразу создаём новый массив с 4 элементами и сразу даём ему ключи и значения:</p>
        <pre><code>
            $cat = [
                'gender' => 'male',
                'name' => 'keks',
                'color' => 'yellow',
                'age' => 2
            ];
        </code></pre>
        <p>После создания массива, не важно, был ли он пустым или заполненным, мы всегда можем добавить или заменить значения по ключу. В этом случае надо указать ключ в кавычках. Если ключа не было, то значение с этим ключом добавится. Если такой ключ был — обновится: &nbsp <span class="codeLine">&nbsp $cat[ 'weight' ] = 2; </span>. &nbsp  </p>
        <p>Как с обычными массивами, мы используем квадратные скобки для получения значения по ключу, опять же, не забывая о кавычках:  &nbsp <span class="codeLine">&nbsp print($cat[ 'name' ]); </span>. &nbsp </p>
        <h2>Этикет работы с массивами</h2>
        <ul>
            <li>Всегда проверяйте существования ключа в массиве перед чтением значения по этому ключу;</li>
            <li>Строковый ключ в массиве всегда указывается в кавычках;</li>
            <li>Использовать в качестве ключей только скалярные типы;</li>
            <li>Не обращаться к строке как к массиву.</li>
        </ul>
        <p>Самая распространённая ошибка при работе с массивами связана с тем, что при чтении элементов из массива не проверяется существования ключа, по которому к нему обращаются. Если этого не сделать, то при обращении к элементу по несуществующему ключу вы получите ошибку. Если вы работаете с отдельными элементами массива, например, читаете элементы по индексам или ключам, то обязательно перед чтением элемента надо проверять его существование в массиве. Используйте для этого функцию &nbsp <span class="codeLine">&nbsp isset: </span>. &nbsp </p>
        <pre><code>
            if (isset($arr['age'])) {
                print($arr['age']);
            }
        </code></pre>        
        <p>При работе с ассоциативными массивами ключи должны быть в кавычках. Можно в качестве ключей использовать строки и числа, но не используйте другие массивы в качестве ключей, а также типы &nbsp <span class="codeLine">&nbsp null, bool (true, false) &nbsp </span> &nbsp  и объекты.</p>
        <p>Нельзя обращаться к строке, как к массиву. В старых версиях PHP это было допустимо, когда есть обычная строка из символов, и можно было получить второй символ, если вы обращались к ней, как к массиву. В современных версиях языка это запрещено.</p>
        <h2>Функции для работы с массивами</h2>
        <p>Давайте разберём несколько стандартных функций PHP, которые вы чаще всего будете использовать при работе с массивами.</p>
        <h3>Подсчёт элементов в массиве</h3
        <p>&nbsp <span class="codeLine">&nbsp count($arr) </span>. &nbsp Используется если необходимо узнать число элементов в массиве.</p>
        <h3>Пример:</h3>
        <pre><code>
            $cats = ["Животные", "Люди", "Наука", "Приколы", "Спорт", "Видеоигры"];
            $num_items = count($cats);
        </code></pre>
        <h3>Проверка существования ключа в массиве</h3>
        <p>&nbsp <span class="codeLine"> &nbsp isset($arr[ 'key' ]) </span>. &nbsp Используется если необходимо проверить, есть ли в массиве элемент с определённым ключом/индексом. Функция принимает массив и его ключ/индекс и возвращает true или false.</p>
        <h3>Пример:</h3>
        <pre><code>
            $cats = ["Животные", "Люди", "Наука", "Приколы", "Спорт", "Видеоигры"];
            $is_val_exist = isset($cats[4]);
        </code></pre>
        <h3>Проверка существования  элемента в массиве</h3>                                
        <p>&nbsp <span class="codeLine"> &nbsp in_array("value", $arr) </span>. &nbsp Используется если необходимо убедиться в существовании элемента не по ключу, а по значению. Если в массиве есть искомый элемент, она вернёт true, если нет — false.</p>
        <pre><code>
            $cats = ["Животные", "Люди", "Наука", "Приколы", "Спорт", "Видеоигры"];
            $is_val_exist = in_array("Наука", $cats);
        </code></pre>
        <h2>Двумерные массивы</h2>        
        <p>Часто в PHP-сценариях надо работать с массивами, которые, по своей сути, являются простыми, но каждый их элемент — это ассоциативный массив. Когда в массиве содержатся другие массивы, это называется <b>двумерным массивом</b>. Потому что массивы могут хранить значения любых типов, включая другие массивы. То есть массив с массивами — это двухмерный массив.</p>
        <img src="picture/gifs_grid.png" alt="массив" width="600">
        <p class="signature">Рисунок 7. Список гифок, представленный в виде двумерного массива</p>
        <p>В учебном проекте giftube есть список гифок. Каждая гифка — ассоциативный массив, но все эти гифки, также, находятся в массиве. Этот массив простой, но каждый элемент этого простого массива — ассоциативный массив с содержимым гифки. Все его индексы числовые, то есть под индексом 0 — первая гифка, под индексом 1 — второй и так далее.</p>
        <p>Чаще двумерные массивы используются для хранения данных, когда каждый элемент списка — это сложная структура.</p>
        <p>Так можно представить в виде ассоциативного массива список из двух гифок:</p>
        <pre><code>
            $gifs = [
                [
                'gif' => '/img/cat.gif',
                'title' => 'Типичный юзер',
                'author' => 'frexin',
                'likes_count' => 1
                ],
                [
                'gif' => '/img/falldown.gif',
                'title' => 'В конце рабочего дня',
                'author' => 'antoXa',
                'likes_count' => 14
                ]
            ];
        </code></pre> 
        <h2>Практика работы с двумерными массивами</h2>               
        <p>Имея такой двумерный массив, его можно использовать в HTML-коде, чтобы вывести на экран один из его элементов. Возьмём переменную из этого списка — первый элемент массива, и теперь в этой переменной находится массив ассоциативный и мы можем обращаться по ключам и подставлять значения массива в нужных местах HTML-кода. То есть показать название, id гифки и тому подобное:</p>
        <img src="picture/2dim.png" alt="массив" width="800">
      </article>
    <footer>
      <nav class="blog-navigation">
        <a href="index.html">На главную</a>
      </nav>
    </footer>
  </body>
</html>
