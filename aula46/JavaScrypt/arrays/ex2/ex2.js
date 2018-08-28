let meuArray = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

let resultado = meuArray.map(function(value, index){
    return 'A raiz quadrada de ' + value + ' é: ' + Math.sqrt(value);
});

console.log(resultado);
