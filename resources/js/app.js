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
        currentTab.parentElement.classList.add('border-b-2', 'border-blue', 'rounded-t'); // agregar la clase en la pestaña deseleccionada
        const currentContent = document.querySelector('.tab-content:not(.hidden)');
        currentContent.classList.add('hidden', 'animate__animated', 'animate__fadeOut'); // agregar la animación a la sección de contenido actual
        currentContent.classList.remove('animate__fadeIn'); // asegurarse de que se elimine cualquier clase de animación anterior
        const newTab = e.target;
        const newContent = document.querySelector(newTab.getAttribute('href'));
        newTab.classList.add('active');
        newTab.parentElement.classList.remove('border-b-2', 'border-blue', 'rounded-t'); // eliminar la clase en la pestaña seleccionada
        newContent.classList.remove('hidden');
        newContent.classList.add('animate__animated', 'animate__fadeIn'); // agregar la animación a la nueva sección de contenido
        newContent.classList.remove('animate__fadeOut'); // asegurarse de que se elimine cualquier clase de animación anterior
    });
});

document.addEventListener("DOMContentLoaded", function(event) {
    const activeTab = document.querySelector('.flex li a.active');
    if (activeTab) {
        activeTab.click();
    }
});
