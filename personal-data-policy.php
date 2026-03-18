<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Инновационная IT-школа</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M16 2L26 12L16 22L6 12L16 2Z' fill='%23FFD700'/%3E%3Cpath d='M16 10L22 16L16 22L10 16L16 10Z' fill='%230033FF'/%3E%3Ccircle cx='16' cy='26' r='3' fill='%23FFD700'/%3E%3C/svg%3E">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Montserrat:wght@700;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <canvas id="hero-canvas"></canvas>

    <header class="header" data-aos="fade-down">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#courses" class="nav__link">Курсы</a></li>
                    <li><a href="./#benefits" class="nav__link">Преимущества</a></li>
                    <li><a href="./#mentors" class="nav__link">Менторы</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--primary header__btn">Связаться</a>
            
            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container" data-aos="fade-up">
            <span class="section-tag">Privacy & Security</span>
            <h1>Политика обработки персональных данных</h1>

            <div class="legal-content">
                <div class="policy-intro">
                    <div class="legal-block">
                        <h2>1. Общие положения</h2>
                        <p>
                            Настоящая политика обработки персональных данных (далее —
                            «Политика») определяет порядок и условия обработки персональных
                            данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                            устанавливает меры по обеспечению безопасности этих данных.
                        </p>
                        <p>
                            1.1. Важнейшей целью Оператор считает соблюдение прав и свобод человека при
                            обработке его персональных данных, включая защиту прав на
                            неприкосновенность частной жизни в рамках законодательства ЕС.
                        </p>
                        <p>
                            1.2. Настоящая Политика применяется ко всей информации, которую
                            Оператор может получить о посетителях (далее — «Пользователи»)
                            веб-сайта <strong><?= $fullDomain ?></strong>.
                        </p>
                    </div>
                </div>

                <div class="policy-section legal-block">
                    <h2>2. Основные понятия</h2>
                    <ul class="terminology-list">
                        <li>
                            <span class="term-accent">Веб-сайт</span> — совокупность графических и
                            информационных материалов <strong><?= $fullDomain ?></strong>.
                        </li>
                        <li><span class="term-accent">Пользователь</span> — любой посетитель веб-сайта.</li>
                        <li>
                            <span class="term-accent">Персональные данные</span> — любая информация,
                            относящаяся прямо или косвенно к Пользователю.
                        </li>
                        <li>
                            <span class="term-accent">Обработка данных</span> — любое действие, совершаемое с данными (сбор, запись, хранение).
                        </li>
                    </ul>
                </div>

                <div class="policy-section legal-block">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid">
                        <div class="data-item">
                            <i class="fas fa-user-shield"></i>
                            <div class="data-info">
                                <strong>Личные данные:</strong>
                                <span>ФИО, Email, номер телефона.</span>
                            </div>
                        </div>
                        <div class="data-item">
                            <i class="fas fa-cookie-bite"></i>
                            <div class="data-info">
                                <strong>Технические данные:</strong>
                                <span>Cookies, IP-адрес, данные браузера.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section legal-block">
                    <h2>4. Цели обработки данных</h2>
                    <ul class="legal-list">
                        <li>Идентификация Пользователя для доступа к платформе.</li>
                        <li>Установление обратной связи и обработка заявок.</li>
                        <li>Исполнение договоров на IT-обучение.</li>
                        <li>Улучшение качества работы школы и персонализация контента.</li>
                    </ul>
                </div>

                <div class="policy-section legal-block">
                    <h2>5. Правовые основания</h2>
                    <p>Оператор обрабатывает данные только при наличии добровольного согласия Пользователя, выраженного путем заполнения форм на сайте, или если сохранение файлов «cookie» разрешено в настройках вашего браузера.</p>
                </div>

                <div class="policy-section contact-footer-policy" data-aos="zoom-in">
                    <h2>6. Вопросы и отзывы</h2>
                    <p>Если у вас возникли вопросы или предложения касательно защиты данных, вы можете направить письмо на наш официальный адрес:</p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="policy-mail">support@<?= $fullDomain ?></a>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__desc">Технологии нового поколения для вашего карьерного взлета. Постройте будущее, которое работает на вас.</p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__list">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#courses">Программы</a></li>
                    <li><a href="./#benefits">Почему мы</a></li>
                    <li><a href="./#reviews">Отзывы</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документация</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./terms.php">Terms of Use</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./return.php">Refund Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./personal-data-policy.php">Personal Data</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li><a href="tel:+390697638315">+39 06 9763 8315</a></li>
                    <li><a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                    <li><address>Via del Corso, 418, 00186 Roma RM, Italy</address></li>
                    <li><a href="./contact.php" class="footer__link-special">Форма обратной связи</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom container">
            <p>&copy; 2026 <?= $domainTitle ?>. Все права защищены. Предложение активно в странах ЕС.</p>
        </div>
    </footer>

    <div id="cookie-popup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="cookie-accept" class="btn btn--primary btn--small">Принять</button>
        </div>
    </div>

    <div class="mobile-menu" id="mobile-menu">
        <ul class="mobile-menu__list">
            <li><a href="./#hero" class="mobile-menu__link">Главная</a></li>
            <li><a href="./#courses" class="mobile-menu__link">Курсы</a></li>
            <li><a href="./#benefits" class="mobile-menu__link">Преимущества</a></li>
            <li><a href="./#mentors" class="mobile-menu__link">Менторы</a></li>
            <li><a href="./#reviews" class="mobile-menu__link">Отзывы</a></li>
            <li><a href="./#contact" class="btn btn--primary">Связаться</a></li>
        </ul>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>