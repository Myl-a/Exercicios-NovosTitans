const mode = document.getElementById('mode_icon');
    const container = document.getElementById('container');
        mode.addEventListener('click', () => {
            const form = document.getElementById('night_form');
            if (mode.classList.contains('fa-moon')) {
                mode.classList.remove('fa-moon');
                mode.classList.add('fa-sun');
                form.classList.add('dark');
                container.style.background = 'var(--color-dark-100)';
                return;
            }
            mode.classList.remove('fa-sun');
            mode.classList.add('fa-moon');
            form.classList.remove('dark');
            container.style.background = 'var(--color-gradient)';
});
