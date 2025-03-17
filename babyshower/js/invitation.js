$(document).ready(function(){     
    $('#mdl_adivinaste').modal('show'); 
    const canvas = document.getElementById('confetti-canvas');
    const confetti = window.confetti;
    confetti({
        particleCount: 200, 
        spread: 80, 
        origin: { y: 0.6 } 
    });


    setTimeout(() => {
        confetti.reset();
    }, 10000); 
});

document.querySelectorAll('.offcanvas-body .nav-link').forEach(link => {
    link.addEventListener('click', () => {
    const offcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('offcanvasNavbar'));
    offcanvas.hide();
    });
});


const clouds = document.querySelectorAll('.cloud1, .cloud2, .cloud3, .cloud4, .cloud5, .cloud6, .cloud');

clouds.forEach(cloud => {
cloud.addEventListener('animationend', () => {
    cloud.remove();
});
});