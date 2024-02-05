<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <!--заполните этот список из массива категорий-->
        <?php
        foreach($categories as $keyCategories => $valueCategories): ?>            

			<li class="promo__item promo__item--boards">
                <a class="promo__link" href="pages/all-lots.html"><?= $valueCategories['title']; ?></a>
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
        <?php
        foreach($ads as $keyAds => $valueAds): ?>  
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?= htmlspecialchars($valueAds["image"], ENT_QUOTES) ?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">                           
                    <span class="lot__category"> Название категории<?=" " . htmlspecialchars($valueAds['title'], ENT_QUOTES) ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html">Название товара</a><?= " " . htmlspecialchars($valueAds['title_lot']) ?></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost">цена<?= " " . formatPrise($valueAds['starting_price']) ?></span>
                        </div> 
<!--
                        <div class="lot__timer timer">
                            12:23
                        </div>
-->
                        <?= residueTime($valueAds["dateEnd"]); ?>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>            
    </ul>
</section>
