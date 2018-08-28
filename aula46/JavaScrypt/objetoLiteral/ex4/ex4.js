let pessoa ={
  nome: "Wagner",
  sobrenome: "Gonçalves",
  idade: 20,
  sexo: "Masculino",
  estado_civil: "Solteiro",
  filmes_preferidos: ["Vingadores", "Velozes e Furiosos", "Sei la"],

  cumprimento: function(){
    console.log('Olá,' + this.nome + ' ' + this.sobrenome)
  }
}

pessoa.cumprimento()
