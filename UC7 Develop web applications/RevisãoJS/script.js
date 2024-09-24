// Revisão JS - Caixa de clicar

/* Versão do Alunos
var itemcardsac = document.querySelector(".card-sac");
var contadorclick = 0;
btncardsac.addEventListener("click", function(){
    contadorclick++;
    itemcardsac.classList.add('ativo');
    if(contadorclick > 1){
        itemcardsac.classList.remove('ativo');
        var contadorclick = 0;
    }
});
*/

/* Versão mais decente, para uma div só
var itemcardsac = document.querySelector(".card-sac");
btncardsac.addEventListener("click", function(){
    itemcardsac.classList.toggle('ativo');
});
*/

// Para mais de uma div 
var itemcardsac = document.querySelectorAll(".card-sac");
itemcardsac.forEach(card => {
    card.querySelector("button").addEventListener("click", function(){
        card.classList.toggle('ativo');
    });
});