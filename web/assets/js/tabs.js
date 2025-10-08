document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.tabs button');
    const panels = document.querySelectorAll('.tab-panel');

    buttons.forEach( (button, index) => {
        button.addEventListener('click', () => {
            // Quitar active de todos los paneles
            panels.forEach(panel => panel.classList.remove('active'));
            panels[index].classList.add('active');
        });
    });
});
