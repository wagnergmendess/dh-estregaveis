//Seletores

// ex1
window.onload = function(){
    document.getElementById("titular").style.display = 'none';

//ex2
document.querySelector("#lechuza").style.filter = "grayscale(100%)";

//ex3
document.querySelectorAll("input").forEach(
    function(elemento){
        elemento.style.background = "red";

}); 
    

//DOM - Seletores e atributos

//ex1
let atributos = document.querySelector("#copyright");
atributos.attributes;

console.log(atributos.attributes);

//ex2
let twitter = document.querySelector(".fa-twitter");

console.log(twitter.getAttribute('href'));

//ex3
let facebook = document.querySelector(".fa-facebook");

console.log(facebook.getAttribute('href'));

//ex4
let youtube = document.querySelector(".fa-youtube");
youtube.setAttribute("href","https://www.youtube.com/channel/UCRQdwmWMhTcqDFjPT4UPZYA");

console.log(youtube.getAttribute('href'));

//ex5
let verificar = document.querySelector("form");
console.log(verificar.getAttribute('action')); 
//está null no console pq o action (submit) n funciona, p aparecer um link, descomentar a linha acima

//ex6
let apagar = document.querySelector("form");
apagar.removeAttribute("url");

console.log(apagar.getAttribute('url')); 

let action = document.querySelector("form");
action.setAttribute("action","http://www.digitalhouse.com");

console.log(action.getAttribute('action')); 

//ex7
document.querySelector("h2").style.color = 'red';

//ex8
document.querySelectorAll(".icon").forEach(
    function(elemento){
        elemento.style.background = "green";

}); 


//Elementos

//ex1
let entrarNaDiv = document.querySelector(".u8");
let btn = document.createElement("button");
btn.setAttribute("type","button");
btn.onclick = function(){
    let entrar2NaDiv = document.querySelector("#lechuza");
    entrar2NaDiv.style.display = "none";
}
let btnText = document.createTextNode("Apagar Coruja");
btn.appendChild(btnText);

entrarNaDiv.appendChild(btn);

//ex2
let entrarNaDivTop = document.querySelector("#top");
entrarNaDivTop.textContent = "Home";

let entrarNaDivWork = document.querySelector("#work");
entrarNaDivWork.textContent = "Empresa";

let entrarNaDivPortfolio = document.querySelector("#portfolio");
entrarNaDivPortfolio.textContent = "Trabalhos";

let entrarNaDivContact = document.querySelector("#contact");
entrarNaDivContact.textContent = "Contato";

//ex3
let entrarClasseSocial = document.querySelector('.social');
let entrarFourSquare = document.querySelector('.seila');

entrarClasseSocial.removeChild(entrarFourSquare);


}