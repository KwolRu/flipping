<?php
// Define locations data in PHP
$locations = [
    [
        'location' => '«Санкт-Петербург»',
        'theme' => 'оттенки серого',
        'desc' => 'Элегантные и сдержанные оттенки серого, создают минималистичные и стильные пространства, где каждый оттенок раскрывает свою уникальность.',
        'imgSrc' => '/assets/img/color/1.png',
        'imgId' => 'img0',
        'themeColors' => ['#636363', '#BABABA', '#F0F0F0']
    ],
    [
        'location' => '«Калининград»',
        'theme' => 'светлые бежевые оттенки',
        'desc' => 'Бежевые оттенки создают атмосферу комфорта и спокойствия, наполняя уютом и гармонией все пространство',
        'imgSrc' => '/assets/img/color/2.png',
        'imgId' => 'img1',
        'themeColors' => ['#77624F', '#BDAB94', '#D9D9D9']
    ],
    [
        'location' => '«Москва»',
        'theme' => 'светлые оттенки бордо',
        'desc' => 'Создавая атмосферу роскоши и элегантности — смелые и выразительные оттенки бордо раскрывают глубину и характер интерьера',
        'imgSrc' => '/assets/img/color/3.png',
        'imgId' => 'img2',
        'themeColors' => ['#F0F0F0', '#BDAB94', '#8B1E1E']
    ],
    [
        'location' => '«Сочи»',
        'theme' => 'светлые оттенки зелёного',
        'desc' => 'Зеленые оттенки — объединение и гармония с природой, свежесть и вдохновение',
        'imgSrc' => '/assets/img/color/4.png',
        'imgId' => 'img3',
        'themeColors' => ['#4F6458', '#A1A09E', '#D9D9D9']
    ]
];

// Get the first location to display initially
$firstLocation = $locations[0];
?>

<section class="showroom">
    <div class="container">
        <div class="showroom-left">
            <div class="showroom-header">
                <div class="showroom-title" id="location">
                    <div><?php echo $firstLocation['location']; ?></div>
                    <div class="theme" id="themeColors">
                        <?php if (isset($firstLocation['themeColors'])): ?>
                            <?php foreach ($firstLocation['themeColors'] as $color): ?>
                                <div class="color-circle" style="background-color: <?php echo $color; ?>"></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="showroom-subtitle" id="theme"><?php echo $firstLocation['theme']; ?></div>
            </div>

            <div class="showroom-bottom">
                <div class="showroom-controls" role="group" aria-label="Управление слайдером">
                    <button class="showroom-arrow" onclick="prevSlide()" aria-label="Предыдущий слайд">‹</button>
                    <button class="showroom-arrow" onclick="nextSlide()" aria-label="Следующий слайд">›</button>
                </div>
                <div class="showroom-description" id="desc">
                    <?php echo $firstLocation['desc']; ?>
                </div>

                <button class="st-bt violet mt-20" onclick="openExcursionModal()">Записаться</button>
            </div>
        </div>

        <div class="showroom-right" aria-live="polite">
            <?php foreach ($locations as $index => $location): ?>
                <img src="<?php echo $location['imgSrc']; ?>" 
                     class="showroom-image <?php echo ($index === 0) ? 'active' : ''; ?>" 
                     id="<?php echo $location['imgId']; ?>" 
                     alt="<?php echo $location['location']; ?>: <?php echo $location['theme']; ?>" />
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    // Convert PHP array to JavaScript
    const data = <?php echo json_encode($locations); ?>;
    
    let current = 0;
    let isAnimating = false;
    let autoRotateInterval;

    function updateSlide() {
        if (isAnimating) return;
        isAnimating = true;

        const locationElem = document.getElementById('location').querySelector('div');
        const themeElem = document.getElementById('theme');
        const descElem = document.getElementById('desc');
        const themeColorsElem = document.getElementById('themeColors');

        // Fade out current content
        locationElem.style.opacity = 0;
        themeElem.style.opacity = 0;
        descElem.style.opacity = 0;
        
        // Update images
        data.forEach((item, index) => {
            const img = document.getElementById(item.imgId);
            if (img) {
                img.classList.toggle('active', index === current);
            }
        });

        // Use requestAnimationFrame for better performance
        requestAnimationFrame(() => {
            setTimeout(() => {
                locationElem.textContent = data[current].location;
                themeElem.textContent = data[current].theme;
                descElem.textContent = data[current].desc;
                
                // Update theme colors
                if (data[current].themeColors) {
                    themeColorsElem.innerHTML = '';
                    data[current].themeColors.forEach(color => {
                        const colorCircle = document.createElement('div');
                        colorCircle.className = 'color-circle';
                        colorCircle.style.backgroundColor = color;
                        themeColorsElem.appendChild(colorCircle);
                    });
                }

                // Fade in new content
                locationElem.style.opacity = 1;
                themeElem.style.opacity = 1;
                descElem.style.opacity = 1;

                isAnimating = false;
            }, 500);
        });
    }

    function nextSlide() {
        if (isAnimating) return;
        current = (current + 1) % data.length;
        updateSlide();
        resetAutoRotate();
    }

    function prevSlide() {
        if (isAnimating) return;
        current = (current - 1 + data.length) % data.length;
        updateSlide();
        resetAutoRotate();
    }

    function openExcursionModal() {
        alert("Открыть popup с формой записи");
    }

    function resetAutoRotate() {
        // Reset the interval when manually changing slides
        clearInterval(autoRotateInterval);
        startAutoRotate();
    }

    function startAutoRotate() {
        // Auto-rotate slides every 5 seconds
        autoRotateInterval = setInterval(() => {
            nextSlide();
        }, 5000);
    }

    // Initialize auto-rotation
    startAutoRotate();

    // Add keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            prevSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
        }
    });
</script>

<style>
    .showroom-title,
    .showroom-subtitle,
    .showroom-description {
        opacity: 1;
    }
    
    .color-circle {
        display: inline-block;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        margin-right: 5px;
    }
</style>