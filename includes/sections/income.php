<style>
    .new-card, .income-card {
        transition: opacity 0.5s;
    }
    .new-card {
        opacity: 0;
        pointer-events: none;
    }
    .fade-in {
        opacity: 1 !important;
        pointer-events: auto;
    }
    .fade-out {
        opacity: 0 !important;
        pointer-events: none;
    }
</style>
<section class="income">
    <h2 class="income-title">Подбор и аналитика доходных объектов</h2>

    <div class="income-flex">
        <div class="income-column">
            <div class="income-card" id="income-card-analysis">
                <div class="card-content primary-content">
                    <p class="income-card-text">Анализ ЖК в вашем городе <br> на основании закономерных данных</p>
                    <p class="income-card-subtext">*96% прибыльных квартир <br> с доходностью от 32% годовых</p>
                </div>
                <div class="card-content alternate-content">
                    <p class="alternate-content-text">аналитика</p>
                    <img src="assets/img/nos-1.png" alt="">
                </div>
            </div>

            <div class="income-card" id="income-card-investment">
                <p class="income-card-text">Детально разберем вложения, <br> чтобы квартира была привлекательной</p>

                <div class="income-tags">
                    <button class="income-tag">Стандарт</button>
                    <button class="income-tag">Комфорт</button>
                    <button class="income-tag">Бизнес</button>
                </div>
            </div>
            <!-- Новый карточка для инвестиций -->
            <div class="income-card new-card" id="income-card-investment-new">
                <!-- Новый инвестиционный контент -->
                <p class="income-card-text">Новый инвестиционный контент</p>
            </div>
        </div>

        <div class="income-column">
            <div class="income-card" id="income-card-strategy">
                <div class="card-content primary-content">
                    <p class="income-card-text">Разработаем несколько стратегий <br> для быстрой продажи объекта</p>
                </div>
                <div class="card-content alternate-content">
                    <p class="alternate-content-text">аналитика</p>
                    <img src="assets/img/nos-1.png" alt="">
                </div>
            </div>

            <div class="income-card" id="income-card-legal">
                <p class="income-card-text">Произведем юридическое <br> сопровождение для покупки объекта</p>
            </div>
            <!-- Новый карточка для юридического сопровождения -->
            <div class="income-card new-card" id="income-card-legal-new">
                <!-- Новый юридический контент -->
                <p class="income-card-text">Новый юридический контент</p>
            </div>
        </div>

        <div class="income-column income-column--image">
            <div class="income-card income-card--full" id="income-card-example">
                <img src="/assets/img/objects.png" alt="Пример аналитики" />
                <button class="income-card-btn">← Посмотреть пример аналитики</button>
            </div>
        </div>
    </div>
</section>

<script>
    const imageColumn = document.querySelector('.income-column--image');
    const investmentOld = document.getElementById('income-card-investment');
    const legalOld = document.getElementById('income-card-legal');
    const investmentNew = document.getElementById('income-card-investment-new');
    const legalNew = document.getElementById('income-card-legal-new');

    imageColumn.addEventListener('mouseenter', () => {
        investmentOld.classList.add('fade-out');
        legalOld.classList.add('fade-out');
        investmentNew.classList.add('fade-in');
        legalNew.classList.add('fade-in');
    });

    imageColumn.addEventListener('mouseleave', () => {
        investmentOld.classList.remove('fade-out');
        legalOld.classList.remove('fade-out');
        investmentNew.classList.remove('fade-in');
        legalNew.classList.remove('fade-in');
    });
</script>

