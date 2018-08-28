let meuArray = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

let resultado = meuArray.forEach(function(value, index){
  if(value % 7 === 0){
    console.log('Os múltiplos de 7 são: ' + value);
  }
});
