function meuSanduiche(ingrediente1, ingrediente2, callback) {

    console.log('estou comendo um sanduíche de: ', ingrediente1, ingrediente2);

    setTimeout( function(){
        callback();
    }, 3000 );
}

function callback(){
    console.log( 'terminei de comer meu sanduíche');
}

console.log(meuSanduiche('Hamburguer', 'Queijo', callback));
