
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list ">
            <!--заполните этот список из массива категорий-->
            <?php foreach($categories as $keyCategories => $valueCategories): ?>
            <li class="promo__item promo__item--<?=$valueCategories[character_code]; ?>">
				<?php // print_r($valueCategories); ?>
                <a class="promo__link" href="pages/all-lots.html"><?=$valueCategories[title]; ?></a>
            </li>
            <?php endforeach; ?>            
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <!--заполните этот список из массива с товарами-->
            <?php foreach($lots as $keyLots => $valueLots): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?=$valueLots['image_addr']; ?>" width="350" height="260" alt="фото">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?=$valueLots['title']; ?></span>
                    <h3 class="lot__title"><a class="text-link" href="templates/lot.php?id=<?//=intval($valueLots['id_lots']); ?>"><?=$valueLots['lot_title']; ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена: <?=$valueLots['starting_price']; ?></span>
                            <span class="lot__cost">цена: <?= formatPrise($valueLots['starting_price']) ?></span>
                        </div>
                        <?php $dt = data_24($valueLots['completion_date']); ?>
                        <div class="lot__timer timer <?=$dt['класс']; ?>">
                        <?=$dt['часы'], $dt['минуты']; ?> // время до конца лота
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
