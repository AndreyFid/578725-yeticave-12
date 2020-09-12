

<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
            <?php 
                $categor = [ "Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
             ?>
        <ul class="promo__list">

            <!--заполните этот список из массива категорий-->
            <?php  foreach ($categor as $key => $value): ?>
                
                    <li class="promo__item promo__item--boards">
                     <a class="promo__link" href="pages/all-lots.html"> <?=$value;?></a> 
                    </li>
              
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <?php
             $product = [
                [ 
                    'name' => '2014 Rossignol District Snowboard',
                    'catecories' => 'Доски и лыжи',
                    'price' => '10999',
                    'url' => 'img/lot-1.jpg',
                    'date_end' => '2020-09-12',
                ],
                [ 
                    'name' => 'DC Ply Mens 2016/2017 Snowboard',
                    'catecories' => 'Доски и лыжи',
                    'price' => '159999',
                    'url' => 'img/lot-2.jpg',
                    'date_end' => '2020-09-18',
                ],
                [ 
                    'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
                    'catecories' => 'Крепления',
                    'price' => '8000',
                    'url' => 'img/lot-3.jpg',
                    'date_end' => '2020-09-09',
                ],
                [ 
                    'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
                    'catecories' => 'Ботинки',
                    'price' => '10999',
                    'url' => 'img/lot-4.jpg',
                    'date_end' => '2020-09-11',
                ],
                [ 
                    'name' => 'Куртка для сноуборда DC Mutiny Charocal',
                    'catecories' => 'Одежда',
                    'price' => '7500',
                    'url' => 'img/lot-5.jpg',
                    'date_end' => '2020-09-13',
                ],
                [ 
                    'name' => 'Маска Oakley Canopy',
                    'catecories' => 'Разное',
                    'price' => '5400',
                    'url' => 'img/lot-6.jpg',
                    'date_end' => '2020-09-18',
                ],


            ];

             ?>
            <!--заполните этот список из массива с товарами-->                
            <?php foreach ($product as $key => $value): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?=$value["url"]; ?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?=$value['catecories']; ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?=$value['name']; ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?=format_sum($value['price']) ?></span>
                        </div>
                        <div class="lot__timer timer">
                            12:23
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach;?> 

        <?php function format_sum ($input) {
            $cel = ceil($input);
            if ($cel >= 1000) {
                $cel = number_format($cel, 0, ',', ' ');
            } 
            $cel = $cel . " ₽";
             return $cel;
         }

         ?>                                
        </ul>
    </section>
</main>
</div>

