<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
session_start();
$a = "Разработка плана обеспечения транспортной безопасности";
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
          <img src="./images/services/_mEPsVSMYBI.jpg" alt="banner-image">
        </div>
      </div>
    </div>

    <div class="steps container">
      <h2 class="steps__title title">План обеспечения транспортной безопасности содержит сведения:</h2>
      <div class="steps__items">
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О владельце ОТИ (ТС);</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О технических и технологических характеристиках ОТИ (ТС);</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О назначении лиц, ответственных за обеспечение транспортной безопасности на ОТИ или ТС;</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О границах установленной зоны транспортной безопасности;</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О критических элементах объекта транспортной инфраструктуры (транспортного средства)</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О критических элементах объекта транспортной инфраструктуры (транспортного средства)</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О пропускном и внутриобъектовом режиме;</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О пунктах управления безопасностью объекта;</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О местах размещения инженерно-технических средств защиты;</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О порядке досмотра на объекте;</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О размещении КПП на объекте;</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О порядке накопления, обработки и хранения данных;</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О порядке действий при тревогах "угроза захвата", "угроза взрыва"</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">О порядке проведения учений и тренировок. </div>
        </div>
      </div>
      <div class="card"><span class="info">Срок проведения оценки уязвимости не превышает 30 календарных дней</span></div>
    </div>

    <div class="cards container">
      <h2 class="cards__title title">Общая информация:</h2>
      <div class="cards__items">
        <div class="cards__item card"><span class="tooltip" data-tooltip="Часть 1 статьи 9 Федерального закона от 09.02.2007 № 16-ФЗ «О транспортной безопасности»:
На основании результатов проведенной оценки уязвимости объектов транспортной инфраструктуры и (или) судов ледокольного флота, используемых для проводки по морским путям, судов, в отношении которых применяются правила торгового мореплавания и требования в области охраны судов и портовых средств, установленные международными договорами Российской Федерации, субъекты транспортной инфраструктуры разрабатывают планы обеспечения транспортной безопасности объектов транспортной инфраструктуры и (или) судов ледокольного флота, используемых для проводки по морским путям, судов, в отношении которых применяются правила торгового мореплавания и требования в области охраны судов и портовых средств, установленные международными договорами Российской Федерации, и не позднее трех месяцев со дня утверждения результатов оценки уязвимости направляют их на утверждение в компетентные органы в области обеспечения транспортной безопасности (в ред. Федеральных законов от 03.02.2014 N 15-ФЗ, от 02.08.2019 N 270-ФЗ)
">На основании результатов проведенной оценки уязвимости и не позднее трех месяцев со дня их утверждения разрабатывается план обеспечения транспортной безопасности </span> ОТИ и (или) судов ледокольного флота, используемых для проводки по морским путям, судов, в отношении которых применяются правила торгового мореплавания и требования в области охраны судов и портовых средств, установленных международными договорами Российской Федерации</div>
        <div class="cards__item card"><span class="tooltip" data-tooltip="Часть 3 статьи 9 Федерального закона от 09.02.2007 № 16-ФЗ «О транспортной безопасности»:
 Сведения, содержащиеся в планах обеспечения транспортной безопасности объектов транспортной инфраструктуры, судов ледокольного флота, используемых для проводки по морским путям, судов, в отношении которых применяются правила торгового мореплавания и требования в области охраны судов и портовых средств, установленные международными договорами Российской Федерации, паспортах обеспечения транспортной безопасности объектов транспортной инфраструктуры и транспортных средств, являются информацией ограниченного доступа (часть 3 в ред. Федерального закона от 02.08.2019 № 270-ФЗ)
">Сведения, содержащиеся в планах </span>обеспечения транспортной безопасности ОТИ, судов ледокольного флота, используемых для проводки по морским путям, судов, в отношении которых применяются правила торгового мореплавания и требования в области охраны судов и портовых средств, установленные международными договорами Российской Федерации, являются информацией ограниченного доступа.</div>
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