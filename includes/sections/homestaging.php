<section class="homestaging">
   <div class="container">
     <!-- Header -->
     <div class="homestaging-header">
      <h2 class="homestaging-title">ХОУМСТЕЙДЖИНГ</h2>
      <p class="homestaging-subtitle">Залог привлекательности вашей квартиры с минимальными вложениями.</p>
    </div>

    <!-- Franchise benefits -->
    <div class="homestaging-franchise">
      <p class="homestaging-franchise-text">ПРИОБРЕТАЯ ФРАНШИЗУ FLIPPING POINT ВЫ ПОЛУЧАЕТЕ :</p>
      <div class="homestaging-franchise-logo">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="#3f51b5">
          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/>
        </svg>
      </div>
    </div>

    <!-- Benefits grid -->
    <div class="homestaging-benefits">
      <div class="homestaging-benefit">
        <h3 class="homestaging-benefit-title">Варианты готовых шаблонов которые мы успешно используем в каждом объекте</h3>
      </div>
      <div class="homestaging-benefit">
        <h3 class="homestaging-benefit-title">Список что важно учесть в хоумстейджинге</h3>
      </div>
      <div class="homestaging-benefit">
        <h3 class="homestaging-benefit-title">Варианты готовых спецификаций</h3>
      </div>
      <div class="homestaging-benefit">
        <h3 class="homestaging-benefit-title">Список стратегических партнеров по выгодным ценам закупок</h3>
      </div>
    </div>

    <!-- Equation section -->
    <div class="homestaging-equation">
      <div class="homestaging-equation-left">
        <p class="math">Простая инструкция которая сокращает сроки реализации объекта на 2-2,5 месяца</p>
      </div>
      <div class="homestaging-equation-equals">=</div>
      <div class="homestaging-equation-right">
        <p class="math">быстрая оборачиваемость ваших средств</p>
      </div>
    </div>

    <!-- Flip cards -->
    <div class="homestaging-features">
      <div class="homestaging-feature">
        <div class="homestaging-feature-inner">
          <div class="homestaging-feature-front">
            <div class="homestaging-feature-icon">+</div>
            <h4 class="homestaging-feature-title">АКТУАЛЬНОСТЬ ИНТЕРЬЕРА</h4>
          </div>
          <div class="homestaging-feature-back">
            <p class="homestaging-feature-description">Вы получаете доступ
к библиотеке актуальных дизайн концепций<br>
/эконом<br>
/комфорт<br>
/бизнес класса квартирам </p>
          </div>
        </div>
      </div>
      <div class="homestaging-feature">
        <div class="homestaging-feature-inner">
          <div class="homestaging-feature-front">
            <div class="homestaging-feature-icon">+</div>
            <h4 class="homestaging-feature-title">УВЕЛИЧИВАЕМ ПРИБЫЛЬ</h4>
          </div>
          <div class="homestaging-feature-back">
            <p class="homestaging-feature-description">Просчитываем доходность выбранного дизайна
            и привлекательность</p>
          </div>
        </div>
      </div>
      <div class="homestaging-feature">
        <div class="homestaging-feature-inner">
          <div class="homestaging-feature-front">
            <div class="homestaging-feature-icon">+</div>
            <h4 class="homestaging-feature-title">БЫСТРЫЙ СРОК ПРОИЗВОДСТВА</h4>
          </div>
          <div class="homestaging-feature-back">
            <p class="homestaging-feature-description">Вы получаете готовые чертежи и спецификацию материала, декора, меблировки вашего объекта от ведущих дизайнеров франшизы всего за 5-8 рабочих дней.</p>
          </div>
        </div>
      </div>
      <div class="homestaging-feature">
        <div class="homestaging-feature-inner">
          <div class="homestaging-feature-front">
            <div class="homestaging-feature-icon">+</div>
            <h4 class="homestaging-feature-title">ДИЗАЙНЕРСКАЯ ПОДДЕРЖКА</h4>
          </div>
          <div class="homestaging-feature-back">
            <p class="homestaging-feature-description">Мы на связи для обсуждения всех вопросов от выбора качества текстиля до замены отсутствующих позиций
            у поставщика</p>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA section -->
    <div class="homestaging-cta">
      <div class="homestaging-cta-wrapper">
        <p class="homestaging-cta-text"><span>Получить детальную</span> <span>спецификацию дизайн проекта</span></p>
        <button class="st-bt violet" onclick="openExcursionModal()">Получить</button>

      </div>
    </div>
   </div>
  </section>

<script>
  // Function to equalize the heights of flip cards
  function equalizeHeights() {
    // Get all feature elements
    const features = document.querySelectorAll('.homestaging-feature');
    
    // Reset heights to auto first
    features.forEach(feature => {
      feature.style.height = 'auto';
    });
    
    // Find the tallest element
    let maxHeight = 0;
    features.forEach(feature => {
      // Get the content height by measuring the title and description
      const frontContent = feature.querySelector('.homestaging-feature-title');
      const backContent = feature.querySelector('.homestaging-feature-description');
      
      // Add padding to account for spacing
      const frontHeight = frontContent.offsetHeight + 100; // adding padding
      const backHeight = backContent.offsetHeight + 60; // adding padding
      
      const tallestContent = Math.max(frontHeight, backHeight);
      
      if (tallestContent > maxHeight) {
        maxHeight = tallestContent;
      }
    });
    
    // Set all features to the tallest height
    features.forEach(feature => {
      feature.style.height = `${maxHeight}px`;
    });
  }
  
  // Run the function when the page loads and when it resizes
  window.addEventListener('load', equalizeHeights);
  window.addEventListener('resize', equalizeHeights);
</script>