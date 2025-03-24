document.addEventListener('DOMContentLoaded', function() {
    const beforeAfterWrappers = document.querySelectorAll('.before-after-wrapper');
    
    beforeAfterWrappers.forEach(wrapper => {
        const handle = wrapper.querySelector('.before-after-handle');
        const afterDiv = wrapper.querySelector('.before-after-after');
        const beforeInfo = wrapper.querySelector('.before-after-info-before');
        const afterInfo = wrapper.querySelector('.before-after-info-after');
        let isDragging = false;
        
        // Set initial position
        positionHandle(wrapper, 50);
        
        // Handle mouse events
        handle.addEventListener('mousedown', (e) => {
            isDragging = true;
            e.preventDefault(); // Prevent text selection during drag
        });
        
        document.addEventListener('mouseup', () => {
            isDragging = false;
        });
        
        document.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            const rect = wrapper.getBoundingClientRect();
            const x = Math.min(Math.max(0, e.clientX - rect.left), rect.width);
            const percent = (x / rect.width) * 100;
            positionHandle(wrapper, percent);
        });
        
        // Handle touch events for mobile
        handle.addEventListener('touchstart', (e) => {
            isDragging = true;
        }, { passive: true });
        
        document.addEventListener('touchend', () => {
            isDragging = false;
        });
        
        document.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            const touch = e.touches[0];
            const rect = wrapper.getBoundingClientRect();
            const x = Math.min(Math.max(0, touch.clientX - rect.left), rect.width);
            const percent = (x / rect.width) * 100;
            positionHandle(wrapper, percent);
        }, { passive: true });
        
        // Handle click on the wrapper
        wrapper.addEventListener('click', (e) => {
            const rect = wrapper.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const percent = (x / rect.width) * 100;
            positionHandle(wrapper, percent);
        });
    });
    
    function positionHandle(wrapper, percent) {
        // Ensure the percent is within bounds
        percent = Math.max(0, Math.min(100, percent));
        
        const handle = wrapper.querySelector('.before-after-handle');
        const afterDiv = wrapper.querySelector('.before-after-after');
        const beforeInfo = wrapper.querySelector('.before-after-info-before');
        const afterInfo = wrapper.querySelector('.before-after-info-after');
        
        handle.style.left = `${percent}%`;
        
        // Use clip-path instead of width for smoother effect
        afterDiv.style.clipPath = `polygon(0% 0%, ${percent}% 0%, ${percent}% 100%, 0% 100%)`;
        
        // Determine which side is active based on slider position
        const isBeforeSideActive = percent < 50;
        
        // Style the before info panel
        if (isBeforeSideActive) {
            // Active side - white background, black text
            beforeInfo.style.backgroundColor = '#FFFFFF';
            beforeInfo.style.color = '#000000';
        } else {
            // Inactive side - transparent background, white text
            beforeInfo.style.backgroundColor = 'transparent';
            beforeInfo.style.color = '#FFFFFF';
        }
        
        // Style the after info panel
        if (!isBeforeSideActive) {
            // Active side - white background, black text
            afterInfo.style.backgroundColor = '#FFFFFF';
            afterInfo.style.color = '#000000';
        } else {
            // Inactive side - transparent background, white text
            afterInfo.style.backgroundColor = 'transparent';
            afterInfo.style.color = '#FFFFFF';
        }
        
        // Remove any borders
        beforeInfo.style.border = 'none';
        afterInfo.style.border = 'none';
    }
});
