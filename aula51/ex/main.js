window.onload = function(){

    //JSON

    //ex1
    let propriedade = '{"propriedade1": "Wagner"}'
    console.log(propriedade)

    let convertendoEmObjeto = JSON.parse(propriedade)
    console.log(convertendoEmObjeto)

    let convertendoEmString = JSON.stringify(convertendoEmObjeto)
    console.log(convertendoEmString)

    //ex2
    let amigos = '{"amigos": ["Kleber", "João", "Luca", "Gustavo"], "Quantidade":4}';
    let convertendoEx2Objeto = JSON.parse(amigos)
    console.log(convertendoEx2Objeto)

    let convertendoEx2String = JSON.stringify(convertendoEx2Objeto)
    console.log(convertendoEx2String)

    //ex3
    let ex3 = '{"amigos": [{"10":"Wagner"}, {"15":"Luca"},{"20":"Gustavo"}]}';
    let convertendoEx3Objeto = JSON.parse(ex3)

    //ex3a
    console.log(convertendoEx3Objeto.amigos[0]["10"])

    //ex3 continuacao
    let convertendoEx3String = JSON.stringify(convertendoEx3Objeto)
    console.log(convertendoEx3String)

    


    //AJAX

    //ex4
    //feito em index.html

    // ex5
    let xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
            // console.log(xmlhttp.responseText)
            
            let resposta = JSON.parse(xmlhttp.responseText)
            //console.log(resposta)

            //ex7
            let respostaEmArray = Object.keys(resposta.contenido)

            let criandoOption = ""

            respostaEmArray.forEach(function(item){
                // let pais = item[0]
                // let id = item[1]
                criandoOption += "<option>" + item + "</option>"
            })

            selectPaises.innerHTML = criandoOption
            
            console.log(respostaEmArray)
        }
    };
    xmlhttp.open("GET", "http://pilote.techo.org/?do=api.getPaises", true);
    xmlhttp.send();

    //ex6
    //n tem
}
