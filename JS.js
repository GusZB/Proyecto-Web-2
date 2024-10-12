function crearParticulas(numParticulas) {
    const particlesContainer = document.querySelector(".particles-container");

    for (let i = 0; i < numParticulas; i++) {
        let particula = document.createElement("div");
        particula.classList.add("particula");
        particlesContainer.appendChild(particula);
    }
}

function createParticleStyles() {
    let styles = '';
    const containerWidth = document.querySelector('.particles-container').offsetWidth;
    const containerHeight = document.querySelector('.particles-container').offsetHeight;

    for (let i = 1; i <= 58; i++) {
        const opacity = (Math.random() * 0.5 + 0.5).toFixed(2);
        const startX = Math.floor(Math.random() * containerWidth);  // Posición inicial X dentro del contenedor
        const startY = containerHeight + Math.floor(Math.random() * 20); // Iniciar justo debajo del contenedor
        const endX = Math.floor(Math.random() * containerWidth);    // Posición final X
        const endY = -20; // Terminan justo fuera del contenedor hacia arriba
        const duration = Math.random() * 8 + 12; // Duración entre 12s y 20s (más rápida)
        const scale = (Math.random() * 0.5 + 1.9).toFixed(2); // Escala entre 1.2 y 1.7 (más grande)

        styles += `
        .particula:nth-child(${i}) {
            opacity: ${opacity};
            transform: translate(${startX}px, ${startY}px) scale(${scale});
            animation: subir-${i} ${duration}s linear infinite;
        }
        
        @keyframes subir-${i} {
            60% {
                opacity: 1; /* Totalmente visible */
            }
            100% {
                transform: translate(${endX}px, ${endY}px) scale(${scale});
                opacity: 0; /* Desaparece al final */
            }
        }
        `;
    }
    const styleElement = document.createElement('style');
    styleElement.innerHTML = styles;
    document.head.appendChild(styleElement);
}

crearParticulas(58);
createParticleStyles();



