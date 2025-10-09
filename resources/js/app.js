import './bootstrap';

import Alpine from 'alpinejs';
import mask from '@alpinejs/mask'

Alpine.plugin(mask)

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', function () {

    const themeBtn = document.getElementById("themeBtn");
    const htmlEl = document.documentElement;

    // Função para alternar o tema
    function toggleTheme() {
        htmlEl.classList.toggle('dark');
        const isDarkMode = htmlEl.classList.contains('dark');

        if (themeBtn) {
            themeBtn.textContent = isDarkMode ? "☀️" : "🌙";
        }

        localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
    }

    // Adiciona o evento de clique ao botão
    if (themeBtn) {
        themeBtn.addEventListener('click', toggleTheme);
    }

    // Função para carregar o tema salvo ao iniciar a página
    function loadTheme() {
        if (localStorage.getItem('theme') === 'dark') {
            htmlEl.classList.add('dark');
            if (themeBtn) {
                themeBtn.textContent = "☀️";
            }
        } else {
            htmlEl.classList.remove('dark');
             if (themeBtn) {
                themeBtn.textContent = "🌙";
            }
        }
    }

    loadTheme();

});

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);
