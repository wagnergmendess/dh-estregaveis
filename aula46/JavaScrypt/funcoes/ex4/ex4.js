function trianguloRetangulo(a, b) {

    function quadrado(numero) {
        return numero*numero;
    }
    
    return (Math.sqrt(quadrado(a) + quadrado(b)) + a + b);
}

console.log(trianguloRetangulo(2, 3))

//abrir o chrome e o console