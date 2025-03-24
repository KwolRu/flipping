<section class="tabs-section">
    <div class="container">
        <div class="fp-container">
            <!-- Tab switcher -->
            <div class="tabs-section-switcher">
                <button class="tabs-section-switcher-button tabs-section-switcher-button--active" id="repair-tab">РЕМОНТ</button>
                <button class="tabs-section-switcher-button tabs-section-switcher-button--inactive" id="furniture-tab">МЕБЕЛЬ</button>
            </div>

            <?php
            // Define products for repair tab
            $repairProducts = [
                [
                    'title' => 'Паркетная доска',
                    'code' => '26-002-00807',
                    'oldPrice' => '4 080 ₽ за 1 м²',
                    'newPrice' => '27 992 ₽',
                    'discount' => '21%',
                    'image' => 'assets/img/shop/1.png',
                    'alt' => 'Паркетная доска'
                ],
                [
                    'title' => 'Штукатурка гипс.',
                    'code' => '1027838',
                    'oldPrice' => '346 ₽',
                    'newPrice' => '462 ₽',
                    'discount' => '15%',
                    'image' => 'assets/img/shop/2.png',
                    'alt' => 'Штукатурка гипс'
                ],
                [
                    'title' => 'Смеситель',
                    'code' => '1027838',
                    'oldPrice' => '15850 ₽',
                    'newPrice' => '18 648 ₽',
                    'discount' => '15%',
                    'image' => 'assets/img/shop/3.png',
                    'alt' => 'Смеситель'
                ]
            ];

            // Define products for furniture tab
            $furnitureProducts = [
                [
                    'title' => 'Диван (Амалия 90)',
                    'code' => '470962',
                    'oldPrice' => '50 915 ₽',
                    'newPrice' => '59 900 ₽',
                    'discount' => '21%',
                    'image' => 'assets/img/shop/4.png',
                    'alt' => 'Диван'
                ],
                [
                    'title' => 'Ванна',
                    'code' => 'КА-00021305',
                    'oldPrice' => '69 819 ₽',
                    'newPrice' => '82 140 ₽',
                    'discount' => 'без скидки',
                    'image' => 'assets/img/shop/5.png',
                    'alt' => 'Ванна'
                ],
                [
                    'title' => 'Духовой шкаф',
                    'code' => '',
                    'oldPrice' => '34 990 ₽',
                    'newPrice' => '34 990 ₽',
                    'discount' => 'без скидки',
                    'image' => 'assets/img/shop/6.png',
                    'alt' => 'Духовой шкаф'
                ]
            ];

            // Function to render product cards
            function renderProductCards($products)
            {
                $output = '';
                foreach ($products as $product) {
                    $output .= '
                    <div class="tabs-section-products-card">
                        <div class="tabs-section-products-header">
                            <h3 class="tabs-section-products-title">' . $product['title'] . '</h3>
                            <div class="tabs-section-products-subtitle">' . ($product['code'] ? 'Код товара: ' . $product['code'] : '') . '</div>
                        </div>
                        <div class="tabs-section-products-pricing">
                               <div class="flex-center"><div class="tabs-section-products-price-old">' . $product['oldPrice'] . '</div><div>цена Flipping Point</div> </div>
                                <div class="flex-center"><div class="tabs-section-products-price-new">' . $product['newPrice'] . '</div><div class="tabs-section-products-price-note">по скидке ' . $product['discount'] . '</div></div>
                                
                            
                        </div>
                        <img src="' . $product['image'] . '" alt="' . $product['alt'] . '" class="tabs-section-products-image">
                    </div>';
                }
                return $output;
            }
            ?>

            <!-- Repair Tab Content -->
            <div class="tabs-section-content tabs-section-content--repair" id="repair-content">
                <!-- Main banner -->
                <div class="tabs-section-banner">
                    <div class="tabs-section-banner-logo">
                    <div class="franchise-quote-icon"><img src="/assets/img/mini-logo.svg" alt=""></div>
                    </div>
                    <h2 class="tabs-section-banner-title">РЕМОНТ<br>С ОПТИМИЗАЦИЕЙ<br>ЗАТРАТ</h2>
                    <p class="tabs-section-banner-content">Используя экспертизу в реализации более 900 + объектов по Флиппингу, вы получите ремонт который выглядит на 120 тыс. ₽ м² за 80 тыс. ₽ м²</p>
                </div>

                <!-- Info panel -->
                <div class="tabs-section-info">
                    <h3 class="tabs-section-info-title">Мы развеяли стереотип, что «Флиппинговые квартиры – это некачественный ремонт»</h3>
                    <ul class="tabs-section-info-list">
                        <li class="tabs-section-info-item">Экономим на материалах до 30% без потери качества</li>
                        <li class="tabs-section-info-item">Понижение требований по качеству материала</li>
                        <li class="tabs-section-info-item">Оптимизация закупочной сметы. Со сметой нашей компании готовность этого объекта вы достигнете достаточно отлично и точно в чек</li>
                        <li class="tabs-section-info-item">Договор с подрядчиком который защитит вас от срыва сроков</li>
                        <li class="tabs-section-info-item">Инструкция как правильно выбрать подрядчиков</li>
                    </ul>
                </div>

                <!-- Products grid -->
                <div class="tabs-section-products">
                    <!-- Preview card -->
                    <div class="tabs-section-products-card ">
                        <div class="tabs-section-products-preview tabs-section-products-card-unit">
                            <h3 class="tabs-section-products-preview-title">Посмотреть примеры строительных материалов</h3>
                            <div class="tabs-section-products-preview-arrow"><img src="assets/img/arrow-right.svg" alt=""></div>
                        </div>
                    </div>

                    <!-- PHP generated products -->
                    <?php echo renderProductCards($repairProducts); ?>
                </div>
            </div>

            <!-- Furniture Tab Content (hidden by default) -->
            <div class="tabs-section-content tabs-section-content--furniture" id="furniture-content" style="display: none;">
                <!-- Main banner -->
                <div class="tabs-section-banner">
                    <div class="tabs-section-banner-logo">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#3949ab" stroke-width="2">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z" />
                        </svg>
                    </div>
                    <h2 class="tabs-section-banner-title">МЕБЕЛЬ И ДЕКОР</h2>
                    <p class="tabs-section-banner-content">С франшизой Flipping Point вы получаете оптимальные позиции более чем у 30+ поставщиков</p>
                </div>

                <!-- Info panel -->
                <div class="tabs-section-info">
                    <h3 class="tabs-section-info-title">С франшизой Flipping Point вы получаете оптимальные позиции более чем у 40+ поставщиков</h3>
                    <ul class="tabs-section-info-list">
                        <li class="tabs-section-info-item">Мебель и бытовая техника для квартиры 82 м²</li>
                        <li class="tabs-section-info-item">Комплектация под ключ мебель, техника, декор</li>
                    </ul>
                </div>

                <!-- Products grid -->
                <div class="tabs-section-products">
                    <!-- Preview card -->
                    <div class="tabs-section-products-card "> 
                        <div class="tabs-section-products-preview ">
                            <h3 class="tabs-section-products-preview-title">Посмотреть примеры мебели и декора</h3>
                            <div class="tabs-section-products-preview-arrow">→</div>
                        </div>
                    </div>

                    <!-- PHP generated products -->
                    <?php echo renderProductCards($furnitureProducts); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Tab switching functionality
    const repairTab = document.getElementById('repair-tab');
    const furnitureTab = document.getElementById('furniture-tab');
    const repairContent = document.getElementById('repair-content');
    const furnitureContent = document.getElementById('furniture-content');

    repairTab.addEventListener('click', function() {
        repairTab.classList.add('tabs-section-switcher-button--active');
        repairTab.classList.remove('tabs-section-switcher-button--inactive');
        furnitureTab.classList.add('tabs-section-switcher-button--inactive');
        furnitureTab.classList.remove('tabs-section-switcher-button--active');
        repairContent.style.display = 'flex';
        furnitureContent.style.display = 'none';
    });

    furnitureTab.addEventListener('click', function() {
        furnitureTab.classList.add('tabs-section-switcher-button--active');
        furnitureTab.classList.remove('tabs-section-switcher-button--inactive');
        repairTab.classList.add('tabs-section-switcher-button--inactive');
        repairTab.classList.remove('tabs-section-switcher-button--active');
        furnitureContent.style.display = 'flex';
        repairContent.style.display = 'none';
    });
</script>