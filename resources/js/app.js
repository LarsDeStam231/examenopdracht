import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.item-container').forEach(item => {
        item.addEventListener('click', () => {
            // Voeg hier de logica toe om het item te selecteren
            item.classList.toggle('selected');
        });
    });
});
