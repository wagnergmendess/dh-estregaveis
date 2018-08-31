//Eventos

window.onload = function(){
    //ex2
    let cumprimentar = document.querySelector("#ola");
    cumprimentar.onclick = function () {
        alert('Olá')
    }

    //ex3
    let fundo = document.querySelector("#alterarFundo");
    fundo.onclick = function () {
        document.body.style.background = 'green';
    }

    //ex4
    let imageText = document.querySelector("#imagem");
    imageText.onmouseover = function () {
        texto.innerHTML = "Estou vendo a imagem!";
    }

    //ex5
    function alterandoTexto() {
        texto.innerHTML = "Estou clicando na imagem"
    }
    imageText.addEventListener('click', alterandoTexto);
        
    //ex6
    let corBody = document.querySelector("body");
    
    function mudandoCorBody() {
        this.style.background = 'red';
        // no caso, o this chama o corBody
    }
    corBody.addEventListener('click', mudandoCorBody)

    //ex7
    corBody.removeEventListener('click', mudandoCorBody);

    // ex8
    let inputIdade = document.querySelector("#idadeRestricao")
    document.querySelector("#form").onsubmit = function(event) {
    event.preventDefault();

        if (inputIdade.value < 18) {
            alert('Não Autorizado!')
        } else {
            form.submit()
            alert('Parabéns, vc entrou!')
        }

    }

    //ex9
    let selecionarBody = document.querySelector("body");
    selecionarBody.addEventListener('mousemove', function(event){
        event.clientX;
        event.clientY;

        console.log("X: " + event.clientX);
        console.log("Y: " + event.clientY)
    });



    //Timers

    // ex1
    let primeiroAlerta = setTimeout(function(){ 
        alert("Você está a 4 segundos nesta página!"); 
    }, 10000);

    // ex2
    let segundoAlerta = setInterval(function(){
        alert("Passou 3 segundos"); 
    }, 8000);


    // ex3
    let pararAlertas = setTimeout(function(){ 
        clearTimeout(primeiroAlerta);
        clearInterval(segundoAlerta);
    }, 5000);


}