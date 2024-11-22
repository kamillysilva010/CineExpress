const containerslides = document.querySelector('.slides-container');
const imagens = document.querySelectorAll('.slides-container .slide');

let cont = 0;

function slider(){
    cont++;
    
    if (cont > imagens.length -1) {
        cont = 0;   

    }
    containerslides.style.transform = `translateX(${-cont * 100}%)`; 
}


setInterval(slider , 5000);