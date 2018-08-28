let numero1 = prompt('Digite um número')
let numero2 = prompt('Agora, digite outro número')
let confirma = confirm('Tem certeza que quer esses números?')

if(confirma){
  let numeroMaior = parseInt(numero1) > parseInt(numero2)
  ? numero1
  : numero2

  alert('Número maior é: ' + numeroMaior)
}else{
  window.location.reload()
}
