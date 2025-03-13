let noCount = 0;

// Agregar el audio de celebración
const celebrationSound = new Audio('celebration.mp3');

document.getElementById('noButton').addEventListener('click', function() {
    noCount++;

    // Teletransportar el botón "No" a una posición aleatoria
    const noButton = document.getElementById('noButton');
    const x = Math.random() * (window.innerWidth - noButton.offsetWidth);
    const y = Math.random() * (window.innerHeight - noButton.offsetHeight);
    
    noButton.style.position = 'absolute';
    noButton.style.left = `${x}px`;
    noButton.style.top = `${y}px`;
    
    // Aumentar tamaño del botón "Sí"
    const yesButton = document.getElementById('yesButton');
    yesButton.style.fontSize = `${16 + noCount * 4}px`;
});

document.getElementById('yesButton').addEventListener('click', function() {
    const message = document.getElementById('message');
    message.classList.remove('hidden');

    // Reproducir sonido de celebración
    celebrationSound.play();

    // Crear serpentinas
    for (let i = 0; i < 100; i++) { // Cambia el número para más o menos serpentinas
        createSerpentina();
    }
});

function createSerpentina() {
    const serpentina = document.createElement('div');
    serpentina.className = 'serpentina';
    
    // Asignar un color aleatorio
    const colors = ['#ff5733', '#33ff57', '#3357ff', '#ff33a1', '#ffcc33', '#33ffc4', '#ff33d4', '#ffdb33'];
    serpentina.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
    
    // Posición horizontal aleatoria
    serpentina.style.left = `${Math.random() * 100}vw`; // Posición horizontal aleatoria
    serpentina.style.animationDelay = `${Math.random() * 2}s`; // Retraso aleatorio para el inicio de la caída
    document.body.appendChild(serpentina);
    
    // Eliminar la serpentina después de la animación
    serpentina.addEventListener('animationend', function() {
        serpentina.remove();
    });
}
