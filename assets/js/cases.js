document.addEventListener('DOMContentLoaded', function() {
    // Get elements
    const slider = document.querySelector('.cases-slider');
    const prevBtn = document.querySelector('.cases-prev');
    const nextBtn = document.querySelector('.cases-next');
    const dots = document.querySelectorAll('.cases-dot');
    const items = document.querySelectorAll('.cases-item');
    
    if (!slider || !prevBtn || !nextBtn || !dots.length || !items.length) return;
    
    let currentIndex = 0;
    const itemWidth = items[0].offsetWidth + 30; // item width + gap
    
    // Update active dot
    function updateDots() {
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }
    
    // Scroll to specific item
    function scrollToItem(index) {
        if (index < 0) index = 0;
        if (index > items.length - 1) index = items.length - 1;
        
        currentIndex = index;
        slider.scrollTo({
            left: itemWidth * index,
            behavior: 'smooth'
        });
        
        updateDots();
    }
    
    // Event listeners for buttons
    prevBtn.addEventListener('click', () => {
        scrollToItem(currentIndex - 1);
    });
    
    nextBtn.addEventListener('click', () => {
        scrollToItem(currentIndex + 1);
    });
    
    // Event listeners for dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            scrollToItem(index);
        });
    });
    
    // Handle slider scroll events to update active dot
    slider.addEventListener('scroll', () => {
        const scrollPosition = slider.scrollLeft;
        const newIndex = Math.round(scrollPosition / itemWidth);
        
        if (newIndex !== currentIndex) {
            currentIndex = newIndex;
            updateDots();
        }
    });
});
