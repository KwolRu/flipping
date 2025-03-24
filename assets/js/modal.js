document.addEventListener('DOMContentLoaded', function() {
    // Modal Manager class to handle multiple modals
    class ModalManager {
        constructor(modalId) {
            this.modal = document.getElementById(modalId);
            if (!this.modal) return;
            
            this.content = this.modal.querySelector('.modal-content');
            this.closeBtn = this.modal.querySelector('.close-btn');
            this.form = this.modal.querySelector('form');
            
            // Initialize modal styles
            this.setInitialStyles();
            this.attachEventListeners();
        }
        
        setInitialStyles() {
            Object.assign(this.modal.style, {
                opacity: 0,
                transition: 'opacity 0.4s ease',
                display: 'none'
            });
            
            Object.assign(this.content.style, {
                transform: 'translateY(50px)',
                transition: 'transform 0.5s cubic-bezier(0.17, 0.85, 0.45, 1)'
            });
        }
        
        attachEventListeners() {
            // Close button click
            this.closeBtn.addEventListener('click', () => this.close());
            
            // Click outside to close
            this.modal.addEventListener('click', (e) => {
                if (e.target === this.modal) this.close();
            });
            
            // Form submission
            if (this.form) {
                this.form.addEventListener('submit', (e) => this.handleFormSubmit(e));
            }
        }
        
        handleFormSubmit(e) {
            e.preventDefault();
            const formData = new FormData(this.form);
            
            fetch(this.form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Create notification
                    this.showNotification(data.message, 'success');
                    
                    // Reset the form
                    this.form.reset();
                    
                    // Close modal immediately
                    this.close();
                } else {
                    this.showNotification(data.message, 'error');
                }
            })
            .catch(error => {
                this.showNotification('Произошла ошибка при отправке формы', 'error');
                console.error('Error:', error);
            });
        }
        
        showNotification(message, type) {
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `notification ${type}-notification`;
            notification.innerHTML = `
                <div class="notification-content">
                    <span class="notification-icon">${type === 'success' ? '✓' : '⚠'}</span>
                    <p>${message}</p>
                </div>
            `;
            
            // Add styles to notification
            Object.assign(notification.style, {
                position: 'fixed',
                top: '20px',
                right: '20px',
                padding: '15px 20px',
                backgroundColor: type === 'success' ? '#4CAF50' : '#f44336',
                color: 'white',
                borderRadius: '25px',
                boxShadow: '0 4px 8px rgba(0,0,0,0.2)',
                zIndex: '99999',
                opacity: '0',
                transform: 'translateY(-20px)',
                transition: 'opacity 0.3s, transform 0.3s'
            });
            
            // Add to body
            document.body.appendChild(notification);
            
            // Trigger animation
            setTimeout(() => {
                notification.style.opacity = '1';
                notification.style.transform = 'translateY(0)';
            }, 10);
            
            // Remove after 5 seconds
            setTimeout(() => {
                notification.style.opacity = '0';
                notification.style.transform = 'translateY(-20px)';
                
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 5000);
        }
        
        open() {
            this.modal.style.display = 'block';
            // Force reflow
            void this.modal.offsetWidth;
            this.modal.style.opacity = 1;
            this.content.style.transform = 'translateY(0)';
        }
        
        close() {
            this.modal.style.opacity = 0;
            this.content.style.transform = 'translateY(50px)';
            setTimeout(() => {
                this.modal.style.display = 'none';
            }, 400);
        }
    }
    
    // Initialize modals
    const excursionModal = new ModalManager('excursionModal');
    const partnerModal = new ModalManager('partnerModal');
    const checklistModal = new ModalManager('checklistModal');
    
    // Expose modal open functions globally
    window.openExcursionModal = () => excursionModal.open();
    window.openPartnerModal = () => partnerModal.open();
    window.openChecklistModal = () => checklistModal.open();
});
