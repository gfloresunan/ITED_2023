import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const tabs = document.querySelectorAll('.flex li a');
tabs.forEach(tab => {
    tab.addEventListener('click', (e) => {
        e.preventDefault();
        const currentTab = document.querySelector('.active');
        currentTab.classList.remove('active');
        const currentContent = document.querySelector('.tab-content:not(.hidden)');
        currentContent.classList.add('hidden');
        const newTab = e.target;
        const newContent = document.querySelector(newTab.getAttribute('href'));
        newTab.classList.add('active');
        newContent.classList.remove('hidden');
    });
});
