document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.tabs button');
    const panels = document.querySelectorAll('.tab-panel');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Quitar active de todos los botones y paneles
            buttons.forEach(btn => btn.classList.remove('active'));
            panels.forEach(panel => panel.classList.remove('active'));

            // Activar el botón clicado y su panel
            button.classList.add('active');
            const target = document.getElementById(button.dataset.target);
            if(target) target.classList.add('active');
        });
    });
});
