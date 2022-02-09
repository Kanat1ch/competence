<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
session_start();
$a = "Проведение проверок в целях аттестации";
// $_SESSION['title'] = $a;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/css/service.min.css">
  <script src="./scripts/index.js" defer></script>
  <script src="./scripts/spoiler.js" defer></script>
  <script src="https://unpkg.com/imask"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://unpkg.com/tippy.js@6"></script>
  <script src="./scripts/tooltip.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <title>Компетенс — Оценка уязвимости ТБ</title>
</head>

<body class="loading">
  <header class="header">
    <div class="header__container container">
      <a class="header__logo logo" href="index.php">
        <img class="logo__image" src="./images/logo.png" alt="logo">
        <div class="logo__text">Компетенс</div>
      </a>
      <div class="header__content">
        <nav class="header__nav">
          <a class="header__link" href="index.php">Главная</a>
          <a class="header__link" href="about.php">О компании</a>
          <a class="header__link active" href="services.php">Наши услуги</a>
          <a class="header__link" href="contacts.php">Контакты</a>
        </nav>
        <div class="header__contacts">
          <a class="header__tel" href="tel:+79852107774">+7 (985) 210 777 4</a>
          <a class="header__mail" href="mailto:info@compe10ce.ru">info@compe10ce.ru</a>
          <button class="header__contact-btn order">Задать вопрос</button>
        </div>
        <div class="close-btn"><img src="./images/close.png" alt="close"></div>
      </div>
      <div class="menu-btn"><img src="./images/menu.png" alt="menu"></div>
    </div>
  </header>
  <main>
    <div class="container banner__container">
      <div class="banner banner-right" id="banner">
        <div class="banner__content">
          <h2 class="title banner__text"><?php echo $a; ?></h2>
          <div class="banner__btn btn btn-white order">Заказать</div>
        </div>
        <div class="banner__image">
          <img src="./images/services/attest.jpg" alt="banner-image">
        </div>
      </div>
    </div>

    <div class="steps container">
      <h2 class="steps__title title">Проведение проверок в целях аттестации сил обеспечения транспортной безопасности (СОТБ) <span class="tooltip" data-tooltip="Часть 2 статьи 12.1 Федерального закона от 09.02.2007 № 16-ФЗ «О Транспортной безопасности», силы обеспечения транспортной безопасности подлежат обязательной аттестации, проводимой органами аттестации в порядке, установленном Правительством Российской Федерации. Для целей аттестации сил обеспечения транспортной безопасности компетентные органы в области обеспечения транспортной безопасности имеет право привлекать аттестующие организации в порядке, установленном Правительством Российской Федерации "> осуществляется в </span> соответствии с постановление Правительства Российской Федерации от 26.02.2015 № 172 в отношении следующих работников:</h2>
      <div class="steps__items">
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">работники, ответственные за обеспечение транспортной безопасности в субъекте транспортной инфраструктуры <br> (категория 1);</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">работники, ответственные за обеспечение транспортной безопасности на объекте транспортной инфраструктуры и/или транспортном средстве (категория 2);</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">работники субъекта транспортной инфраструктуры, подразделения транспортной безопасности, руководящие выполнением работ, непосредственно связанных с обеспечением транспортной безопасности на объектах транспортной инфраструктуры и/или транспортных средствах (категория 3);</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">работники  подразделения  транспортной  безопасности, включенные в состав группы быстрого реагирования (категория 4);</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">работники, осуществляющие досмотр, дополнительный и повторный досмотр в целях обеспечения транспортной безопасности (категория 5);</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">работники, осуществляющие наблюдение и (или) собеседование в целях обеспечения транспортной безопасности (категория 6);</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">работники, осуществляющие управление техническими средствами обеспечения транспортной безопасности (категория 7);</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">работники субъекта транспортной инфраструктуры, подразделения транспортной безопасности, выполняющие работы, непосредственно связанные с обеспечением транспортной безопасности на объектах транспортной инфраструктуры или транспортных средствах (категория 8)</div>
        </div>
      </div>
    </div>

    <div class="cards container">
      <h2 class="cards__title title">
      Для целей аттестации СОТБ проводится:
</h2>
      <div class="cards__items">
        <div class="cards__item card">Проверка знаний, умений и навыков для всех категорий СОТБ. <br> Данная проверка включает в себя теоретические и практические вопросы по обеспечению транспортной безопасности.</div>
        <div class="cards__item card">Проверка личностных (психофизиологических) качеств. Проводится для категорий 3, 4, 5, 6, 7. <br> Данная проверка включает в себя психофизиологическое обследование, проводимое специалистом с использованием технических средств.</div>
        <div class="cards__item card">Проверка уровня физической подготовки. Проводится для категории 4 (работников подразделения транспортной безопасности, включенных в состав группы быстрого реагирования). <br> Данная проверка состоит из сдачи нормативов в различных физических упражнениях.</div>
      </div>
      <div class="card"><span class="info"> ООО «Компетенс» проводит все виды проверок, с возможностью выезда специалистов к Заказчику в любой регион Российской Федерации.</span></div>
    </div>

    <div class="steps container">
      <h2 class="steps__title title">Алгоритм взаимодействия:</h2>
      <div class="steps__items">
        <div class="steps__item step">
          <div class="step__number">1</div>
          <div class="step__card card">Организация (далее – Заказчик) заключает с ООО «Компетенс» договор на проведение проверки в целях аттестации (далее – Договор).</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">2</div>
          <div class="step__card card">Заказчик направляет в ООО «Компетенс» заполненное Заявление по форме, установленной Договором, с приложением списка аттестуемых лиц.</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">3</div>
          <div class="step__card card">ООО «Компетенс» консультирует Заказчика по порядку сбора и заполнения документов, необходимых для подачи в орган аттестации.</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">4</div>
          <div class="step__card card">На основании консультации Заказчик готовит комплект документов и отправляет их в орган аттестации.</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">5</div>
          <div class="step__card card">Орган аттестации выдает заключение о допуске аттестуемого лица к проверкам, присваивает ему УИН и выкладывает данные в ЕГИС ОТБ.</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">6</div>
          <div class="step__card card">Согласовывается и назначается точная дата и время проведения проверки.</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">7</div>
          <div class="step__card card">ООО «Компетенс» проводит надлежащую проверку и выкладывает данные о результатах в ЕГИС ОТБ. На основании полученных от
ООО «Компетенс» данных орган аттестации выдает свидетельства об аттестации.
</div>
        </div>
      </div>
    </div>

  </main>
<?php 
  require_once 'form.php';
  ?>
<footer class="footer">© 2015 «Компетенс» ООО.</footer>
<div class="overlay"></div>
</body>

</html>