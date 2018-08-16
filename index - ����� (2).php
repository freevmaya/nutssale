<?
  $key1 = 'Арахис в глазури оптом';
  $key2 = 'Арахис в хрустящей корочке оптом';
  $key3 = 'Снеки к пиву оптом';
  $key4 = 'Арахис глазированный';

  $key1_1 = 'Арахис с корочкой';
  $key1_2 = 'Закуски к пиву';
  $key1_3 = 'Снеки купить';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=1200">
    <meta charset="utf-8">
    <title>АРАХИС оптом в хрустящей корочке, глазированный|Уральский лидер</title>
    <meta name="description" content="<?=$key2?>, <?=$key3?> от производителя">
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" sizes="57x57" href="fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
    <link rel="manifest" href="fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <style type="text/css">
      .social {
      }

      .social a {
        display: inline-block !important;
        vertical-align: top;
      }

      .social .ig, .social .vk {
        width: 32px;
        height: 32px;
        margin-left: 2px;
      }

      .social .ig {
        background: url(images/ig32.png) 0 0 no-repeat;
      }

      .social .vk {
        background: url(images/vk32.png) 0 0 no-repeat;
      }

    </style>
  </head>
  <body ng-app="app" ng-controller="appController">
    <header>
      <div class="container"><a class="logo" href=""><img src="images/logo.png" alt="<?=$key1?>"><span><?=$key1?></span></a><a class="btn-border btn" data-fancybox data-src="#zapros-kp" href="javascript:;"><span>Запросить КП</span></a>
        <div class="contact">
          <div class="social"><a class="phone" href="tel:+78005113623">+7 (800) 511-36-23</a><a href="https://Instagram.com/ural_lider_opt" class="ig"></a><a href="https://vk.com/arahis_optom" class="vk"></a></div>
          <a class="mail" href="mailto:zakaz-arahis@yandex.ru">zakaz-arahis@yandex.ru</a>
        </div>
      </div>
    </header>
    <div id="homescreen">
      <div class="bg1"><img class="n1 spin-it" src="images/01-bg-02-1.png" alt="<?=$key2?>"><img class="n2 spin-it" src="images/01-bg-02-2.png" alt="<?=$key3?>"></div>
      <div class="container">
        <div class="pic"><img class="n1" src="images/01-pic.png" alt="<?=$key4?>"><img class="n2 spin-it" src="images/01-pic-1.png" alt="<?=$key1?>"><img class="n3 spin-it" src="images/01-pic-2.png" alt="<?=$key2?>"><img class="n4 spin-it" src="images/01-pic-3.png" alt="<?=$key3?>"><img class="n5 spin-it" src="images/01-pic-4.png" alt="<?=$key4?>"></div>
        <div class="text">
          <h1 style="text-shadow: 1px 1px 10px white;">Арахис оптом<span>в хрустящей корочке</span></h1>
          <h2>напрямую от производителя <br>с гарантией качества продукта</h2>
          <ul class="clear">
            <li>Доставка по всей России  </li>
            <li>Система скидок</li>
            <li>Сертификаты качества</li>
            <li>От 100 килограмм </li>
          </ul><a class="btn btn-green" data-fancybox data-src="#order" href="javascript:;"><span>Заказать</span></a>
        </div>
      </div>
    </div>
    <div id="calc">
      <div class="container"><img class="top" src="images/01-after.png" alt="Лист арахиса"><img class="n1 spin-it" src="images/02-bg-1.png" alt="<?=$key1_1?>"><img class="n2 spin-it" src="images/02-bg-2.png" alt="<?=$key1_2?>"><img class="n3 spin-it" src="images/02-bg-3.png" alt="<?=$key1_3?>">
        <h2>Рассчитайте точную стоимость <br>Вашего заказа</h2>
        <form method="post">
          <div class="clear">
            <div class="bx"> 
              <label for="">Выберите брэнд</label>
              <select id="itemBrand">
                <option>ХрустNut</option>
                <option>ХрустОК</option>
                <option>Свой брэнд</option>
              </select>
            </div>
            <div class="bx">
              <label for="">Выберите вкус</label>
              <select id="itemFlavour">
                <option>Васаби</option>
                <option>Сыр</option>
                <option>Креветка</option>
                <option>Аджика</option>
                <option>Барбекю</option>
                <option>Бекон</option>
                <option>Пикантный</option>
                <option>Салями</option>
                <option>Сметана и лук</option>
                <option>Холодец с хреном</option>
                <option>Шашлык</option>
                <option>Свой вкус</option>
              </select>
            </div>
            <div class="bx last">
              <label for="">Выберите объем</label>
              <select id="itemAmount">
                <option>100 кг</option>
                <option>от 100 до 150 кг</option>
                <option>от 150 до 200 кг</option>
                <option>от 200 до 250 кг</option>
                <option>от 250 до 300 кг</option>
                <option>от 300 до 350 кг</option>
                <option>от 350 до 400 кг</option>
                <option>от 400 до 450 кг</option>
                <option>от 450 до 500 кг</option>
                <option>больше 500 кг</option>
              </select>
            </div>
          </div>
          <textarea name="calc-comment" ng-model="form.info" placeholder="Укажите точный адрес доставки и добавьте свой комментарий к заказу"></textarea>
          <div class="btn-box">
            <button class="btn btn-green" data-fancybox data-src="#calcpop" href="javascript:;"><span>Рассчитать стоимость</span></button>
          </div>
        </form>
      </div>
    </div>
    <div id="cooperation">
      <div class="container">
        <h2>Сотрудничать с компанией «Уральский лидер» <br>удобно и выгодно</h2>
        <div class="bx n1">
          <div class="pic"></div>
          <p>Свое производство</p><span>Высокое качество и низкие цены: <br>Вы покупаете арахис напрямую <br>у производителя, без посредников </span>
        </div>
        <div class="bx n2">
          <div class="pic"></div>
          <p>Богатый ассортимент</p><span>Премиум и эконом линейки продукции, <br>12 различных вкусов, возможность выпуска <br>арахиса под Вашей маркой</span>
        </div>
        <div class="bx n3">
          <div class="pic"></div>
          <p>Доставка по всей России</p><span>Вы сами можете выбрать способ доставки, <br>а при заказе большой партии <br>мы компенсируем часть ее стоимости</span>
        </div>
        <div class="bx n4">
          <div class="pic"></div>
          <p>Система скидок </p><span>Специальные условия в зависимости <br>от объема заказа, сроков сотрудничества <br>и формы оплаты</span>
        </div>
        <div class="bx n5">
          <div class="pic"></div>
          <p>Любые объемы партии</p><span>Мы готовы отправить Вам партию <br>любого объема, начиная от 100 килограмм. <br>В день производим 6 тонн арахиса</span>
        </div>
        <div class="bx n6">
          <div class="pic"></div>
          <p>Высокое качество</p><span>Сырье и продукция проходят <br>тщательный контроль качества, <br>вся продукция сертифицирована</span>
        </div>
      </div>
    </div>
    <div id="types">
      <div class="bg"></div>
      <div class="container">
        <h2>Мы предлагаем Вам на выбор <br>3 вида нашей продукции</h2>
        <div class="bx n1"><img src="images/04-box-1.png" alt="арахис в корочке">
          <p>Премиум-арахис в корочке <br>ХрустNut - продукт наивысшего качества, <br>изговленный без применения пальмового масла</p>
        </div>
        <div class="bx n2"><img src="images/04-box-2.png" alt="жареный арахис">
          <p>Арахис в корочке и жареный арахис <br>под Вашим брендом</p>
        </div>
        <div class="bx n3"><img src="images/04-box-3.png" alt="Арахис с различными вкусами">
          <p>Арахис в корочке и арахис <br>с различными вкусами ХрустОК - лучший выбор <br>по соотношению цена/качество</p>
        </div>
      </div>
    </div>
    <div id="flavours">
      <div class="container">
        <h2>Самые популярные вкусы арахиса <br>для Вас и Ваших клиентов</h2>
        <div class="bx n1">
          <div class="pic"><img class="pic-1" src="images/05-flavours/01.jpg" alt="Арахис со вкусом васаби оптом"><img class="pic-2" src="images/05-flavours/01-1.jpg" alt="Васаби"></div><span class="text">Васаби</span>
        </div>
        <div class="bx n2">
          <div class="pic"><img class="pic-1" src="images/05-flavours/02.jpg" alt="Арахис со вкусом сыра оптом"><img class="pic-2" src="images/05-flavours/02-1.jpg" alt="Сыр"></div><span class="text">Сыр</span>
        </div>
        <div class="bx n3">
          <div class="pic"><img class="pic-1" src="images/05-flavours/03.jpg" alt="Арахис со вкусом креветки оптом"><img class="pic-2" src="images/05-flavours/03-1.jpg" alt="Креветка"></div><span class="text">Креветка</span>
        </div>
        <div class="bx n4">
          <div class="pic"><img class="pic-1" src="images/05-flavours/04.jpg" alt="Арахис со вкусом аджики оптом"><img class="pic-2" src="images/05-flavours/04-1.jpg" alt="Аджика"></div><span class="text">Аджика</span>
        </div>
        <div class="bx n5">
          <div class="pic"><img class="pic-1" src="images/05-flavours/05.jpg" alt="Арахис со вкусом барбекю оптом"><img class="pic-2" src="images/05-flavours/05-1.jpg" alt="Барбекю"></div><span class="text">Барбекю</span>
        </div>
        <div class="bx n6">
          <div class="pic"><img class="pic-1" src="images/05-flavours/06.jpg" alt="Арахис со вкусом бекона оптом"><img class="pic-2" src="images/05-flavours/06-1.jpg" alt="Бекон"></div><span class="text">Бекон</span>
        </div>
        <div class="bx n7">
          <div class="pic"><img class="pic-1" src="images/05-flavours/07.jpg" alt="Арахис пикантный оптом"><img class="pic-2" src="images/05-flavours/07-1.jpg" alt="Пикантный"></div><span class="text">ПИКАНТНЫЙ</span>
        </div>
        <div class="bx n8">
          <div class="pic"><img class="pic-1" src="images/05-flavours/08.jpg" alt="Арахис со вкусом салями оптом"><img class="pic-2" src="images/05-flavours/08-1.jpg" alt="Салями"></div><span class="text">Салями</span>
        </div>
        <div class="bx n9">
          <div class="pic"><img class="pic-1" src="images/05-flavours/09.jpg" alt="Арахис со вкусом сметаны и лука оптом"><img class="pic-2" src="images/05-flavours/09-1.jpg" alt="Сметана и лук"></div><span class="text">Сметана и лук</span>
        </div>
        <div class="bx n10">
          <div class="pic"><img class="pic-1" src="images/05-flavours/10.jpg" alt="Арахис со вкусом холодеца с хреном оптом"><img class="pic-2" src="images/05-flavours/10-1.jpg" alt="Холодец с хреном"></div><span class="text">Холодец с хреном</span>
        </div>
        <div class="bx n11">
          <div class="pic"><img class="pic-1" src="images/05-flavours/11.jpg" alt="Арахис со вкусом шашлыка оптом"><img class="pic-2" src="images/05-flavours/11-1.jpg" alt="Шашлык"></div><span class="text">Шашлык</span>
        </div>
        <div class="bx n12">
          <div class="pic"><img class="pic-1" src="images/05-flavours/13.jpg" alt="Арахис со вкусом грибы сметаны оптом"><img class="pic-2" src="images/05-flavours/13-1.jpg" alt="Грибы Сметана"></div><span class="text">Грибы Сметана</span>
        </div>
        <div class="bx blank"></div>
        <div class="bx n12">
          <div class="pic"><img class="pic-1" src="images/05-flavours/14.jpg" alt="Арахис MIX 3 оптом"><img class="pic-2" src="images/05-flavours/14-1.jpg" alt="MIX 3 вкус"></div><span class="text">MIX 3 вкуса</span>
        </div>
        <div class="bx n12">
          <div class="pic"><img class="pic-1" src="images/05-flavours/12.jpg" alt="Арахис с вашим вкусом оптом"><img class="pic-2" src="images/05-flavours/12-1.jpg" alt="Ваш вкус"></div><span class="text">Ваш вкус</span>
        </div>
        <div class="clear mb15"></div>
        <div class="form">
          <h2>Хотите самостоятельно рассчитать стоимость заказа?<br>Скачайте подробный прайс-лист с перечнем скидок</h2><a class="btn-green btn" data-fancybox data-src="#download" href="javascript:;"><span>Скачать прайс-лист</span></a>
        </div>
      </div>
    </div>
    <div id="activity-field">
      <div class="container">
        <h2>Если Вы работаете в одной из этих сфер...</h2>
        <div class="spot n1"><span>рыбные магазины</span></div>
        <div class="spot n2"><span>магазины пива</span></div>
        <div class="spot n3"><span>кафе и рестораны</span></div>
        <div class="spot n4"><span>оптовые компании</span></div>
        <div class="spot n5"><span>продуктовые магазины</span></div>
        <div class="spot n6"><span>пивные бары</span></div>
        <div class="spot n7"><span>клубы</span></div>
        <div class="spot n8"><span>бани</span></div>
      </div>
    </div>
    <div id="get-kp">
      <div class="container">
        <h2>...у нас есть для Вас особое предложение! <br>Укажите свой номер телефона и запросите наше КП</h2>
        <form method="post" ng-submit="sendForm(&quot;Запрос КП 2&quot;,&quot;normal&quot;,&quot;thanx1&quot;)">
          <div class="bx n1">
            <p>Выберите сферу деятельности</p>
            <select id="itemField">
              <option>Оптовая компания</option>
              <option>Пивной бар</option>
              <option>Кафе</option>
              <option>Ресторан</option>
              <option>Продуктовый магазин</option>
              <option>Рыбный магазин</option>
              <option>Магазин пива</option>
              <option>Клуб</option>
              <option>Баня</option>
              <option>Другая сфера</option>
            </select>
          </div>
          <div class="bx n2">
            <p>&nbsp;</p>
            <input class="phone-field" type="text" name="phone" placeholder="+7 (___) ___-__-__" ng-model="form.phone">
          </div>
          <div class="bx n3">
            <p>&nbsp;</p>
            <button class="btn btn-orange" type="submit" ng-disabled="!accept"><span>Запросить КП</span></button>
          </div>
          <div class="clear"></div>
          <div class="confirm">
            <input type="checkbox" name="confirm" id="confirm5" checked ng-model="accept">
            <label for="confirm5">нажимая на кнопку, вы даете согласие на обработку своих персональных данных</label>
          </div>
        </form>
      </div>
    </div>
    <div id="terms">
      <div class="container">
        <h2>Мы предлагаем Вам выгодные условия сотрудничества - <br>вся продукция изготавливается на нашем собственном производстве</h2>
        <div class="clear">
          <div class="slider-for"><img src="images/08-slider/01.jpg" alt=""><img src="images/08-slider/02.jpg" alt=""><img src="images/08-slider/03.jpg" alt=""><img src="images/08-slider/04.jpg" alt=""><img src="images/08-slider/05.jpg" alt=""><img src="images/08-slider/06.jpg" alt=""></div>
          <div class="text">
            <p class="n1">Наша основная задача - выпускать продукцию стабильно высокого качества и постоянно делать ее лучше и разнообразнее.</p>
            <p class="n2">Наши сотрудники - настоящие профессионалы, ведь мы не берем их со стороны. На руководящих должностях у нас работают люди, прошедшие в нашей компании все ступени производства.</p>
            <p class="n3">На сегодняшний день в компании "Уральский лидер"</p>
            <p class="n4">работает <span>62</span> человека.</p>
            <p class="n5">Средний возраст сотрудников - <span>32</span> года.</p>
          </div>
        </div>
        <div class="slider-nav"><img src="images/08-slider/01.jpg" alt=""><img src="images/08-slider/02.jpg" alt=""><img src="images/08-slider/03.jpg" alt=""><img src="images/08-slider/04.jpg" alt=""><img src="images/08-slider/05.jpg" alt=""><img src="images/08-slider/06.jpg" alt=""></div>
      </div>
    </div>
    <div id="quality">
      <div class="container">
        <h2>Вы получаете только лучшее - <br>вся продукция проходит тщательный контроль качества</h2>
        <div class="inn">
          <div class="txt">
            <p class="n1 wow slideInRight" data-wow-delay="0.5s">Тщательный отбор поставщиков сырья</p>
            <p class="n2 wow slideInRight" data-wow-delay="1s">Лабораторный контроль продукции при <br>поступлении на склад</p>
            <p class="n3 wow slideInRight" data-wow-delay="1.5s">Многоэтапный лабораторный контроль готовой <br>продукции</p>
            <p class="n4 wow slideInRight" data-wow-delay="2s">Образцы продукции из каждой партии хранятся в течение года, <br>чтобы при необходимости убедиться в их качестве</p>
          </div><a class="pic" href="images/09-pic.jpg" data-fancybox><img src="images/09-bg-2.jpg" alt=""></a>
        </div>
      </div>
    </div>
    <div id="special-conditions">
      <div class="bg"></div>
      <div class="container">
        <h2>Постоянным партнерам мы предлагаем <br>обсобые условия сотрудничества</h2>
        <div class="bx n1">
          <p>Специальные условия <br>при оплате наличными</p>
        </div>
        <div class="bx n2">
          <p>Частичная компенсация <br>стоимости доставки</p>
        </div>
        <div class="bx n3">
          <p>Разнообразные <br>маркетинговые акции</p>
        </div>
      </div>
      <div class="form">
        <div class="container">
          <h2>Узнайте больше о наших специальных предложениях</h2>
          <form method="post" ng-submit="sendForm(&quot;Узнать&quot;,&quot;normal&quot;,&quot;thanx1&quot;)">
            <input class="phone-field" type="text" name="phone" placeholder="+7 (___) ___-__-__" ng-model="form.phone">
            <button class="btn btn-green" type="submit" ng-disabled="!accept"><span>Узнать больше</span></button>
            <div class="confirm">
              <input type="checkbox" name="confirm" id="confirm6" checked ng-model="accept">
              <label for="confirm6">нажимая на кнопку, вы даете согласие на обработку своих персональных данных</label>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="partners">
      <div class="container">
        <h2>Эти компании уже зарабатывают вместе с нами:</h2>
        <div class="clear">
          <div class="logo n1"></div>
          <div class="logo n2"></div>
          <div class="logo n3"></div>
          <div class="logo n4"></div>
          <div class="logo n5"></div>
          <div class="logo n6"></div>
          <div class="logo n7"></div>
          <div class="logo n8"></div>
          <div class="logo n9"></div>
        </div>
        <div class="link"><a data-fancybox="thanx" href="images/11-thanx/01.jpg">Посмотреть благодарности клиентов</a><a data-fancybox="thanx" href="images/11-thanx/02.jpg"></a></div>
      </div>
    </div>
    <div id="checkout">
      <div class="container">
        <h2>Проверьте, есть ли у нас партнеры <br>в Вашем регионе</h2>
        <form class="clear" method="post" ng-submit="sendForm(&quot;Проверить&quot;,&quot;region&quot;,&quot;thanx1&quot;)">
          <div class="clear">
            <input class="n1" type="text" name="region" placeholder="Ваш регион" ng-model="form.region">
            <input class="n2 phone-field" type="text" name="phone" placeholder="Ваш телефон" ng-model="form.phone">
            <button class="btn btn-green" type="submit" ng-disabled="!accept"><span>ПРОВЕРИТЬ</span></button>
          </div>
          <div class="confirm">
            <input type="checkbox" name="confirm" id="confirm" checked ng-model="accept">
            <label for="confirm">нажимая на кнопку, вы даете согласие <br>на обработку своих персональных данных</label>
          </div>
        </form>
        <h2 class="n2">Нет? Тогда предлагаем Вам <br>особые условия сотрудничества:</h2><img class="pic1" src="images/12-pic.png" alt="<?=$key1?>">
        <div class="txt">
          <div class="clear"><img class="pic2 spin-it" src="images/12-1.png" alt="<?=$key2?>"><span>Бесплатная доставка <br>до Вашего склада</span></div>
          <div class="clear"><img class="pic3 spin-it" src="images/12-2.png" alt="<?=$key3?>"><span>Программа мотивации для торговых <br>точек и менеджеров по продажам</span></div>
          <div class="clear"><img class="pic4 spin-it" src="images/12-3.png" alt="<?=$key4?>"><span>Выкуп нераспроданных остатков <br>нашей продукции</span></div>
        </div>
      </div>
    </div>
    <div id="boss">
      <div class="container">
        <h2>Обращение директора компании</h2><img class="photo" src="images/13-pic.jpg" alt="">
        <div class="text clear">
          <p>"Уральский лидер" - это не просто качественная продукция, которую мы выпускаем под своими брендами.</p>
          <p>Это еще и возможность для Вас запустить на наших мощностях производство продукции под собственным брендом, выйти на новые рынки и получить дополнительную прибыль.</p>
          <p>При этом для нас очень важно сохранять высокое качество продукции. Поэтому мы используем только качественные компоненты и постоянно совершенствуем нашу технологию производства.</p>
          <p>Я буду очень признателен, если Вы напишете мне свои впечатления от нашего продукта и от сотрудничества с нами на мой личный электронный адрес: evgeniy-asabin@ullider.ru </p>
          <p>Я обязательно отвечу на Ваше письмо!</p>
          <div class="author"><span class="n1">Директор ООО «Уральский лидер»</span><span class="n2">Асабин Евгений Владимирович</span></div>
        </div>
      </div>
    </div>
    <div id="documents">
      <div class="container">
        <h2>Документы ООО «Уральский лидер»</h2>
        <div class="documents-slider">
          <div class="slide"><a class="main n1" data-fancybox="doc1" href="images/14-documents/1-1.jpg"><img src="images/14-1.jpg" alt="Устав ООО Уральский лидер"></a><a data-fancybox="doc1" href="images/14-documents/1-2.jpg"></a><a data-fancybox="doc1" href="images/14-documents/1-3.jpg"></a><a data-fancybox="doc1" href="images/14-documents/1-4.jpg"></a><a data-fancybox="doc1" href="images/14-documents/1-5.jpg"></a><a data-fancybox="doc1" href="images/14-documents/1-6.jpg"></a><a data-fancybox="doc1" href="images/14-documents/1-7.jpg"></a><a data-fancybox="doc1" href="images/14-documents/1-8.jpg"></a><a data-fancybox="doc1" href="images/14-documents/1-9.jpg"></a><a data-fancybox="doc1" href="images/14-documents/1-10.jpg"></a><a data-fancybox="doc1" href="images/14-documents/1-11.jpg"></a></div>
          <div class="slide"><a class="main n2" data-fancybox="doc2" href="images/14-documents/2.jpg"><img src="images/14-2.jpg" alt="ООО Уральский лидер"></a></div>
          <div class="slide"><a class="main n3" data-fancybox="doc2" href="images/14-documents/3.jpg"><img src="images/14-3.jpg" alt="ООО Уральский лидер"></a></div>
          <div class="slide"><a class="main n4" data-fancybox="doc2" href="images/14-documents/4.jpg"><img src="images/14-4.jpg" alt="ООО Уральский лидер"></a></div>
          <div class="slide"><a class="main n4" data-fancybox="doc2" href="images/14-documents/5.jpg"><img src="images/14-5.jpg" alt=""></a></div>
          <div class="slide"><a class="main n4" data-fancybox="doc2" href="images/14-documents/6.jpg"><img src="images/14-6.jpg" alt=""></a></div>
          <div class="slide"><a class="main n4" data-fancybox="doc2" href="images/14-documents/7.jpg"><img src="images/14-7.jpg" alt=""></a></div>
          <div class="slide"><a class="main n4" data-fancybox="doc2" href="images/14-documents/8.jpg"><img src="images/14-8.jpg" alt=""></a></div>
          <div class="slide"><a class="main n4" data-fancybox="doc2" href="images/14-documents/9.jpg"><img src="images/14-9.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <h2>Остались вопросы? <br>Получите консультацию наших специалистов</h2>
        <form method="post" ng-submit="sendForm(&quot;Консультация&quot;,&quot;normal&quot;,&quot;thanx1&quot;)">
          <input class="phone-field" type="text" name="phone" placeholder="+7 (___) ___-__-__" ng-model="form.phone">
          <button class="btn btn-green" type="submit"><span>Получить консультацию</span></button>
          <div class="confirm">
            <input type="checkbox" name="confirm" id="confirm6" checked>
            <label for="confirm6">нажимая на кнопку, вы даете согласие на обработку своих персональных данных</label>
          </div>
        </form>
        <div class="footer clear">
          <div class="left">
            <p>Общество с ограниченной ответственностью «Уральский лидер»<br>454047, г. Челябинск, ул. 2-ая Павелецкая, д.36, корп.13, пом. 68<br>ОГРН 1157460002457 ИНН 7460021387 КПП 746001001<br>р/сч 40702810490530002947 ОАО «ЧЕЛЯБИНВЕСТБАНК»</p><a class="link" data-fancybox data-src="#privacy-policy" href="javascript:;">Политика конфиденциальности</a>
          </div>
          <div class="contact"><a class="phone" href="tel:+78007771528">+7 (800) 777-15-28</a><a class="mail" href="mailto:zakaz-arahis@yandex.ru">zakaz-arahis@yandex.ru</a>
          </div><a class="logo" href=""><img src="images/logo-1.png" alt="Арахис глазированный"><span>Арахис глазированный</span></a>
        </div>
      </div>
    </footer>
    <div class="popup-form" id="zapros-kp" style="display: none;">
      <div class="inn">
        <h2>Введите номер телефона - мы обсудим <br>с Вами особенности Вашего коммерческого предложения</h2>
        <form method="post" ng-submit="sendForm(&quot;Запрос КП 1&quot;,&quot;normal&quot;,&quot;thanx1&quot;)">
          <div class="row">
            <input class="phone-field" type="text" name="phone" placeholder="+7 (___) ___-__-__" ng-model="form.phone">
            <button class="btn btn-green" type="submit" ng-disabled="!accept"><span>Запросить КП</span></button>
          </div>
          <div class="confirm">
            <input type="checkbox" name="confirm" id="confirm1" checked ng-model="accept">
            <label for="confirm1">нажимая на кнопку, вы даете согласие на обработку своих персональных данных</label>
          </div>
        </form>
      </div>
    </div>
    <div class="popup-form" id="order" style="display: none;">
      <div class="inn">
        <h2>Введите номер телефона - мы обсудим <br>с Вами детали Вашего заказа</h2>
        <form method="post" ng-submit="sendForm(&quot;Заказать&quot;,&quot;normal&quot;,&quot;thanx1&quot;)">
          <div class="row">
            <input class="phone-field" type="text" name="phone" placeholder="+7 (___) ___-__-__" ng-model="form.phone">
            <button class="btn btn-green" type="submit" ng-disabled="!accept"><span>Заказать</span></button>
          </div>
          <div class="confirm">
            <input type="checkbox" name="confirm" id="confirm2" checked ng-model="accept">
            <label for="confirm2">нажимая на кнопку, вы даете согласие на обработку своих персональных данных</label>
          </div>
        </form>
      </div>
    </div>
    <div class="popup-form" id="calcpop" style="display: none;">
      <div class="inn">
        <h2>Укажите Ваш контактный телефон - <br>получите расчет стоимости Вашего заказа в течение 2 минут</h2>
        <form method="post" ng-submit="sendForm(&quot;Рассчитать&quot;,&quot;calc&quot;,&quot;thanx1&quot;)">
          <div class="row">
            <input class="phone-field" type="text" name="phone" placeholder="+7 (___) ___-__-__" ng-model="form.phone">
            <button class="btn btn-green" type="submit" ng-disabled="!accept"><span>Рассчитать стоимость</span></button>
          </div>
          <div class="confirm">
            <input type="checkbox" name="confirm" id="confirm3" checked ng-model="accept">
            <label for="confirm3">нажимая на кнопку, вы даете согласие на обработку своих персональных данных</label>
          </div>
        </form>
      </div>
    </div>
    <div class="popup-form" id="download" style="display: none;">
      <div class="inn">
        <h2>Введите Ваш номер телефона, и загрузка начнется <br>через 7 секунд. Мы перезвоним Вам, если загрузка прервется.</h2>
        <form method="post" ng-submit="sendForm(&quot;Прайс-лист&quot;,&quot;download&quot;,&quot;thanx2&quot;)">
          <div class="row">
            <input class="phone-field" type="text" name="phone" placeholder="+7 (___) ___-__-__" ng-model="form.phone">
            <button class="btn btn-green" type="submit" ng-disabled="!accept"><span>Скачать прайс-лист</span></button>
          </div>
          <div class="confirm">
            <input type="checkbox" name="confirm" id="confirm4" checked ng-model="accept">
            <label for="confirm4">нажимая на кнопку, вы даете согласие на обработку своих персональных данных</label>
          </div>
        </form>
      </div>
    </div>
    <div class="popup-form thanx" id="thanx1" style="display: none;">
      <div class="inn">
        <h2>Ваша заявка принята! <br>С Вами свяжется первый освободившийся оператор.</h2>
      </div>
    </div>
    <div class="popup-form thanx" id="thanx2" style="display: none;">
      <div class="inn">
        <h2>Спасибо Вам <br>за проявленный интерес!</h2>
      </div>
    </div>
    <div class="popup-text" id="privacy-policy" style="display: none;">
      <h4>Политика конфиденциальности</h4>
      <p>Ваша конфиденциальность очень важна для нас. Мы хотим, чтобы Ваша работа в Интернет по возможности была максимально приятной и полезной, и Вы совершенно спокойно использовали широчайший спектр информации, инструментов и возможностей, которые предлагает Интернет. <br>Мы создали Политику конфиденциальности, чтобы продемонстрировать свою верность принципам конфиденциальности и безопасности. В Политике конфиденциальности описано, как наша компания собирает информацию ото всех конечных пользователей своих Интернет-услуг («Услуг»), включая людей, имеющих доступ к некоторым нашим услугам без регистрационной записи («Гостей»), а также клиентов, которые купили Продукты и/или вносят ежемесячную оплату за услуги, чтобы подписаться на Услугу («Члены»). Политика также включает объяснение о том, что мы делаем с собранной информацией, и какие возможности по сбору и использованию такой информации есть у Гостей и Членов. Мы просим Вас тщательно ознакомиться с Политикой конфиденциальности. </p>
      <h4>Личная информация, которую собирает наша компания, и пути ее использования</h4>
      <p><em>Введение</em></p>
      <p>Членов могут попросить предоставить определенную личную информацию при подписке на наши Продукты или Услуги, в частности, имя, адрес, номер телефона, информацию для выставления счетов (например, номер кредитной карточки) и тип персонального компьютера, который будет использоваться для доступа к Услугам. Личная информация Членов, собранная при регистрации (или в любое другое время) преимущественно используется для подготовки Продуктов или Услуг в соответствии с Вашими потребностями. Ваша информация не будет передана или продана третьим сторонам. Однако мы можем частично раскрывать личную информацию в особых случаях, описанных в нижеприведенном разделе «Разглашение». </p>
      <p><em>Разглашение</em></p>
      <p>Мы оставляем за собой право раскрывать информацию Членов и Гостей следующим третьим сторонам в следующих ситуациях: </p>
      <p><b>Компаниям, работающим от нашего лица: </b>Мы сотрудничаем с другими компаниями, выполняющими от нашего лица функции бизнес поддержки, в связи с чем Ваша личная информация может быть частично раскрыта. Мы требуем, чтобы такие компании использовали информацию только в целях предоставления услуг по договору; им запрещается передавать данную информацию другим сторонам в ситуациях, отличных от случаев, когда это вызвано необходимостью предоставления оговоренных услуг. Примеры функций бизнес поддержки: выполнение заказов, реализация заявок, выдача призов и бонусов, проведение опросов среди клиентов и управление информационными системами. Мы также раскрываем обобщенную неперсонифицированную информацию при выборе поставщиков услуг. </p>
      <p><b>Дочерним и совместным предприятиям: </b>Под дочерним или совместным предприятием понимается организация, не менее 50% долевого участия которой принадлежит Компании. При передаче Вашей информации партнеру по дочернему или совместному предприятию наша Компания требует не разглашать данную информацию другим сторонам в маркетинговых целях и не использовать Вашу информацию каким-либо путем, противоречащим Вашему выбору. Если Вы указали, что не хотите получать от нашей Компании какие-либо маркетинговые материалы, то мы не будем передавать Вашу информацию своим партнерам по дочерним и совместным предприятиям для маркетинговых целей.</p>
      <p><b>На совместно позиционируемых или партнерских страницах:</b> Наша Компания может делиться информацией с компаниями-партнерами, вместе с которыми реализует специальные предложения и мероприятия по продвижению товара на совместно позиционируемых страницах нашего сайта. При запросе анкетных данных на таких страницах Вы получите предупреждение о передаче информации. Партнер использует любую предоставленную Вами информацию согласно собственному уведомлению о конфиденциальности, с которым Вы можете ознакомиться перед предоставлением информации о себе. </p>
      <p><b>При передаче контроля над предприятием:</b> Наша Компания оставляет за собой право передавать Ваши анкетные данные в связи с полной или частичной продажей или трансфертом нашего предприятия или его активов. При продаже или трансферте бизнеса наша Компания предоставит Вам возможность отказаться от передачи информации о себе. В некоторых случаях это может означать, что новая организация не сможет далее предоставлять Вам услуги или продукты, ранее предоставляемые нашей Компанией. </p>
      <p><b>Правоохранительным органам:</b> Наша Компания может без Вашего на то согласия раскрывать персональную информацию третьим сторонам по любой из следующих причин: во избежание нарушений закона, нормативных правовых актов или постановлений суда; участие в правительственных расследованиях; помощь в предотвращении мошенничества; а также укрепление или защита прав Компании или ее дочерних предприятий. </p>
      <p><b>С Вашего согласия:</b> Во всех остальных случаях перед передачей информации о Вас третьим сторонам наша Компания обязуется получить Ваше явное согласие. Например, наша Компания может реализовывать совместное предложение или конкурс с третьей стороной, тогда мы попросим у Вас разрешение на совместное использование Вашей личной информации с третьей стороной. </p>
      <h4>Интернет-покупки</h4>
      <p>При заказе услуг или продуктов непосредственно в нашей Компании предоставленная Вами персональная информация используется для обработки данного заказа. Мы не передаем эту информацию сторонним организациям за исключением случаев, когда это необходимо для выполнения такого заказа. При подаче заказа через другие компании, которые могут давать ссылки на наш сайт, например, предлагая подарок через Интернет, который напрямую отправляется получателю, Вас могут попросить предоставить информацию о получателе, в частности, имя, адрес и номер телефона. Наша компания никак не контролирует пути использования третьими сторонами персональной информации, предоставленной Вами при размещении таких заказов. Пожалуйста, в таких случаях будьте осторожны. Рекомендуем ознакомиться с Политикой конфиденциальности и Условиями пользования любых других компаний, на чьи веб-сайты можно перейти с нашего сайта. </p>
      <h4>Реклама в интернете</h4>
      <p>Наша компания может размещать рекламу в Интернет. В таких случаях мы предоставляем своим рекламодателям сгруппированную и неперсонифицированную информацию о своих Гостях и Членах, собранную при регистрации, а также с помощью Интернет-опросов и мероприятий по продвижению. Кроме того, в некоторых случаях мы используем эту сгруппированную и неперсонифицированную информацию для целевой рекламы и совместных предприятий. Например, рекламодатель или совместное предприятие говорит, до какой аудитории нужно достучаться, и предоставляет соответствующую ей рекламу. Позднее на основании собранной и сгруппированной неперсонифицированной информации мы размещаем или рассылаем рекламу целевой аудитории. Наша компания не раскрывает таким рекламодателям или совместным предприятиям персональную информацию о своих Гостях и Членах. Информация о том, как отказаться от Интернет-рекламы нашей Компании, включается непосредственно в рекламные материалы.</p>
      <h4>Ответы на электронные запросы </h4>
      <p>Когда Гости или Члены отправляют нашей компании электронные запросы, для ответа на них используется электронный адрес, с которого пришел запрос. Наша компания не использует обратные адреса в каких-либо других целях и не передает их каким-либо третьим сторонам. </p>
      <h4>Добровольные опросы клиентов</h4>
      <p>Мы периодически проводим как коммерческие, так и частные опросы среди пользователей. Мы рекомендуем своим клиентам участвовать в этих опросах, поскольку они дают нам важную информацию, с помощью которой мы можем улучшить различные свои продукты и услуги, а также усовершенствовать пути их предоставления. Ваша личная информация и ответы останутся строго конфиденциальными даже при проведении опроса третьей стороной. Участие в наших клиентских опросах необязательно. Информация о том, как отказаться от участия в опросе, включается в сообщения об опросах. Мы можем взять информацию, полученную от отдельных лиц, участвующих в наших клиентских опросах и объединить (сгруппировать) с ответами других наших клиентов для создания более широких и обобщенных ответов на вопросы опроса (в частности, пол, возраст, местожительства, увлечения, образование, место работы, сектор промышленности и др. демографическая информация). После этого сгруппированная информация используется для улучшения качества предоставляемых Вам услуг и разработки новых услуг и продуктов. Такая сгруппированная и неперсонифицированная информация может передаваться третьим сторонам. </p>
      <h4>Автоматический сбор информации </h4>
      <p><b>Cookies:</b> Для сбора информации наша Компания может пользоваться маркерами Cookies; это маленькие информационные файлы, которые сохраняются Вашим браузером на жестком диске Вашего компьютера по запросу веб-сайта. Маркеры Cookies нашей Компании не содержат какой-либо персональной информации и преимущественно используются следующим образом: </p>
      <ul>
        <li>Для отслеживания временной информации. Например, маркеры Cookies позволяют нам отслеживать, какие картинки Вы загружаете и скачиваете; </li>
        <li>Чтобы регистрировать Вас в специальных программах. Cookies позволяют нам запоминать Вас при входе в зоны нашего сайта, для которых необходимо быть Членом; </li>
        <li>Чтобы запомнить Ваши предпочтения относительно страны и языка; </li>
        <li>Чтобы помочь нам понять масштабы своей аудитории и распределение трафика; </li>
        <li>Для сбора и записи информации о том, что Вы просмотрели на нашем сайте и что просмотрели в нашем электронном письме; </li>
        <li>Для управления и информацией сайта и ее презентации, а также чтобы понять, какие изображения могут отображаться на Вашем компьютере;</li>
        <li>Подавать информацию в соответствии с Вашими интересами. </li>
      </ul>
      <p><b>Веб-маяки:</b> Мы также можем размещать на своем веб-сайте, в Интернет-рекламе с участием третьих сторон и своих электронных письмах небольшие «следящие изображения» или «маяки». Такие маяки применяются вместе с маркерами Cookies для сбора неличной информации об использовании нашего сайта, в том числе, включая время и дату посещения, просмотренные страницы, страницу перехода, тип браузера (например, Internet Explorer, NetScape), тип операционной системы (например, Windows, Linux или Mac), а также имя домена провайдера Интернет-услуг посетителя (например,AOL). Мы собираем такую информацию о посещениях сайта тысячами и анализируем в целом. Данная информация важна, в частности, для определения эффективности нашей Интернент-рекламы, например, баннеров и выбора места для будущей рекламы на других веб-ресурсах. </p>
      <p><b>Отключение Cookies и маяков:</b> Если сбор такой информации через маркеры Cookies и маяки Вам неприятен, рекомендуем отключить эти функции в настройках своего браузера, но, пожалуйста, помните, что это ограничит эффективность и функциональность веб-сайта нашей Компании. О том, как отключить поддержку cookie и маяков, как правило, говорится в инструкции к браузеру. </p>
      <h4>Информационная защита детей </h4>
      <p>Защита детей от Интернет-информации особенно важна, дети младше 13 лет находятся под защитой федерального закона. По этой причине наша Компания намеренно не позволяет детям до 13 лет становиться зарегистрированными членами наших сайтов или приобретать товары и услуги на наших сайтах без подтвержденного разрешения от родителей. Наша компания намеренно не собирает и не запрашивает личную информацию у детей до 13 лет без явного на то согласия их родителей. Если мы когда-либо включим детей до 13 лет в число целевой аудитории нашего сайта, то эти специальные страницы будут выделены отдельно и будут содержать развернутое уведомление о конфиденциальности, в соответствии с положениями Акта о защите частной жизни ребенка в Интернете (COPPA); мы также обеспечим механизмы получения разрешения родителей, их доступ к информации и дадим родителям возможность требовать удаления личной информации своих детей. Наша Компания приветствует родителей и попечителей, которые проводят время в сети вместе со своими детьми и принимают участие в их интерактивных занятиях и увлечениях. </p>
      <h4>Общественные форумы </h4>
      <p>Определенная часть нашего сайта может давать доступ к общественным услугам, в частности, доскам обсуждения, чатам и мероприятиям в режиме реального времени. Пользуясь такими услугами, пожалуйста, будьте осторожны, когда публикуете информацию о себе. Учтите, что личная информация, раскрытая на таких сайтах, например, Ваше имя, имя пользователя, адрес электронной почты и т.п., может собираться и использоваться для несанкционированных рассылок. Такие услуги открыты для общественного пользования, и то, что Вы публикуете там, может просматривать любой – информация незащищена. Мы не в состоянии контролировать комментарии, которые Вы можете получить, участвуя в таких услугах. Комментарии других людей могут показаться Вам оскорбительными, опасными или некорректными. </p>
      <h4>Приверженность нашей компании принципам конфиденциальности </h4>
      <p>Для защиты Вашей личной информации мы используем разнообразные административные, управленческие и технические меры безопасности. Наша Компания придерживается различных международных стандартов контроля, направленных на операции с личной информацией, которые включают определенные меры контроля по защите информации, собранной в Интернет. Наших сотрудников обучают понимать и выполнять эти меры контроля, они ознакомлены с нашим Уведомлением о конфиденциальности, нормами и инструкциями. Тем не менее, несмотря на то, что мы стремимся обезопасить Вашу личную информацию, Вы тоже должны принимать меры, чтобы защитить ее. Мы настоятельно рекомендуем Вам принимать все возможные меры предосторожности во время пребывания в Интернете. Организованные нами услуги и веб-сайты предусматривают меры по защите от утечки, несанкционированного использования и изменения информации, которую мы контролируем. Несмотря на то, что мы делаем все возможное, чтобы обеспечить целостность и безопасность своей сети и систем, мы не можем гарантировать, что наши меры безопасности предотвратят незаконный доступ к этой информации хакеров сторонних организаций. </p>
      <h4>Изменение и удаление личной информации пользователей</h4>
      <p>Вся личная информация, которая передана Вами для регистрации на нашем сайте, может быть в любой момент изменена либо полностью удалена из нашей базы по Вашему запросу. Для этого Вам необходимо связаться с нами любым удобным для Вас способом, использую контактную информацию, размещенную в специальном разделе нашего сайта. </p>
      <p>Если Вы захотите отказаться от получения писем нашей регулярной рассылки, вы можете это сделать в любой момент с помощью специальной ссылки, которая размещается в конце каждого письма. </p>
      <h4>Куда направлять вопросы о нашей Политике конфиденциальности</h4>
      <p>Если у Вас возникли вопросы относительно данной Политики конфиденциальности или описанных выше практических методик, с нами можно связаться с помощью контактной информации нашего сайта. </p>
      <h4>Изменения настоящей Политики</h4>
      <p>Наша Компания оставляет за собой право в любое время и любым образом редактировать, дополнять или изменять настоящую политику, Правила пользования и Договор об оказании услуг, а также другие политики и договоры нашей Компании, обновив при этом настоящую страницу. </p>
    </div>
  </body>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/angular.min.js"></script>
  <script src="js/plugins/jquery.maskedinput.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script src="js/plugins/slick.min.js"></script>
  <script src="js/plugins/jquery.fancybox.min.js"></script>
  <script src="js/plugins/ScrollMagic.min.js"></script>
  <script src="js/plugins/TweenMax.min.js"></script>
  <script src="js/plugins/wow.min.js"></script>
  <script src="//api-maps.yandex.ru/2.0.46/?load=package.full&amp;mode=debug&amp;lang=ru-RU" type="text/javascript"></script>
  <script src="external/callbacks.js"></script>
  <script src="js/app.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(()=>{
      setsize();
      
      $(window).resize(function(event) {
          setsize();
      });
      function setsize() {
          vW = $(window).width();
          vH = $(window).height();
          $('.fullheight').css('height',vH);
          z = 1;maxw = 1200
          if(vW<maxw) {
            z = (vW*100/maxw)/100;
          }
          $("body").css({"zoom":z});
      }
    });
  </script>
  <!--include ../../external/closer.html-->
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
      var ya;
      (function (d, w, c) {
          (w[c] = w[c] || []).push(function() {
              try {
                  ya = w.yaCounter49401661 = new Ya.Metrika2({
                      id:49401661,
                      clickmap:true,
                      trackLinks:true,
                      accurateTrackBounce:true,
                      webvisor:true
                  });
              } catch(e) { }
          });

          var n = d.getElementsByTagName("script")[0],
              s = d.createElement("script"),
              f = function () { n.parentNode.insertBefore(s, n); };
          s.type = "text/javascript";
          s.async = true;
          s.src = "https://mc.yandex.ru/metrika/tag.js";

          if (w.opera == "[object Opera]") {
              d.addEventListener("DOMContentLoaded", f, false);
          } else { f(); }
      })(document, window, "yandex_metrika_callbacks2");
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/49401661" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
</html>