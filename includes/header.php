<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Недвижимость Флиппинг | Инвестиции в недвижимость</title>
    <meta name="description" content="Профессиональный флиппинг недвижимости. Узнайте о франшизе, доходах и возможностях в области инвестиций в недвижимость.">
    <meta name="keywords" content="флиппинг, недвижимость, инвестиции, франшиза, доход, homestaging">
    <meta name="author" content="Флиппинг">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/hero.css">
    <link rel="stylesheet" href="assets/css/flipping.css">
    <link rel="stylesheet" href="assets/css/stats.css">
    <link rel="stylesheet" href="assets/css/marquee.css">
    <link rel="stylesheet" href="assets/css/comparison.css">
    <link rel="stylesheet" href="assets/css/before-after.css">
    <link rel="stylesheet" href="assets/css/founder.css">
    <link rel="stylesheet" href="assets/css/saler.css">
    <link rel="stylesheet" href="assets/css/cases.css">
    <link rel="stylesheet" href="assets/css/franchise.css">
    <link rel="stylesheet" href="assets/css/key-stages.css">
    <link rel="stylesheet" href="assets/css/income.css">
    <link rel="stylesheet" href="assets/css/showroom.css">
    <link rel="stylesheet" href="assets/css/homestaging.css">
    <link rel="stylesheet" href="assets/css/tabs-section.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

</head>

<body>
    <!-- Sidebar Toggle Button -->


    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar__logo">
            <img src="assets/img/logo.svg" alt="Logo">
        </div>
        <nav class="sidebar__nav">
            <ul class="sidebar__nav-list">
                <li class="sidebar__nav-item"><a href="#flipping" class="sidebar__nav-link">Что такое флиппинг</a></li>
                <li class="sidebar__nav-item"><a href="#founder" class="sidebar__nav-link">Об основателе</a></li>
                <li class="sidebar__nav-item"><a href="#franchise" class="sidebar__nav-link">Франшиза</a></li>
                <li class="sidebar__nav-item"><a href="#cases" class="sidebar__nav-link">Кейсы</a></li>
                <li class="sidebar__nav-item"><a href="#form" class="sidebar__nav-link">Контакты</a></li>
            </ul>
        </nav>
        <button class="violet st-bt   " onclick="openPartnerModal()">Стать партнёром</button>
    </div>

    <header class="header">
        <div class="header__inner">
            <img src="assets/img/logo.svg" alt="Logo">
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#flipping" class="nav__link">Что такое флиппинг</a></li>
                    <li class="nav__item"><a href="#founder" class="nav__link">Об основателе</a></li>
                    <li class="nav__item"><a href="#franchise" class="nav__link">Франшиза</a></li>
                    <li class="nav__item"><a href="#cases" class="nav__link">Кейсы</a></li>
                    <li class="nav__item"><a href="#form" class="nav__link">Контакты</a></li>
                </ul>
            </nav>
            <button class="sidebar-toggle" id="sidebarToggle">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 12H21M3 6H21M3 18H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>
            <div class="header__contact">
                <button class="st-bt violet" onclick="openPartnerModal()">Стать партнёром</button>

            </div>
        </div>
    </header>

    <!-- Add JavaScript for sidebar functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');

            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('active');
                document.body.classList.toggle('sidebar-open');
            });

            // Close sidebar when clicking sidebar links
            const sidebarLinks = document.querySelectorAll('.sidebar__nav-link');
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function() {
                    sidebar.classList.remove('active');
                    document.body.classList.remove('sidebar-open');
                });
            });

            // Close sidebar when clicking outside of it
            document.addEventListener('click', function(event) {
                if (!sidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
                    sidebar.classList.remove('active');
                    document.body.classList.remove('sidebar-open');
                }
            });
        });

        // Handle scroll to make header compact
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>