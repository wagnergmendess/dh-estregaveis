window.onload = function(){

// checkbox
    formulario.onsubmit = function(event){
        event.preventDefault()

        let nome = this['nome'].value
        let email = this['email'].value
        let password = this['password'].value
        let passwordConfirmation = this['passwordConfirmation'].value
        let sexoM = formulario.elements[4]
        let sexoF = formulario.elements[5]
        let sexoX = formulario.elements[6]
        let msgFinal = ""

        //ex 1A e B
        // validação
        if(!nome){
            msgFinal = msgFinal + "O campo 'Nome' é obrigatório!<br>"
        }if(!email){
            msgFinal = msgFinal + "O campo 'Email' é obrigatório!<br>"
        }if(!password){
            msgFinal = msgFinal + "O campo 'Senha' é obrigatório!<br>"
        }if(!passwordConfirmation){
            msgFinal = msgFinal + "O campo 'Confirmar Senha' é obrigatório!<br>"
        }if(!sexoM.checked && !sexoF.checked && !sexoX.checked ){
            msgFinal = msgFinal + "Selecione algum sexo<br>"
        }

        // ex 1C
        // senhas iguais
        if(password != passwordConfirmation){
            alert("As senhas não coincidem!")
        }

        mensagem.innerHTML = msgFinal
    }

    let LimparTodoForm = formulario.elements[9]
    let OcultarForm = formulario.elements[10]

    //ex 1E

    //Limpar todos os campos
    LimparTodoForm.addEventListener('click', function(){
    let nome = formulario.elements[0]
    let email = formulario.elements[1]
    let password = formulario.elements[2]
    let passwordConfirmation = formulario.elements[3]
    let sexoM = formulario.elements[4]
    let sexoF = formulario.elements[5]
    let sexoX = formulario.elements[6]
    let noticias = formulario.elements[7]

        nome.value = "";
        email.value = "";
        password.value = "";
        passwordConfirmation.value = "";
        sexoM.checked = false;
        sexoF.checked = false;
        sexoX.checked = false;
        noticias.checked = false;
    })

    //Ocultar todos os campos
    OcultarForm.addEventListener('click', function(){
        formulario.style.display = "none";

        let nome = formulario.elements[0]
        let email = formulario.elements[1]
        let password = formulario.elements[2]
        let sexoM = formulario.elements[4]
        let sexoF = formulario.elements[5]
        let sexoX = formulario.elements[6]
        let noticias = formulario.elements[7]

        table.innerHTML = "<li>" + nome.value + "</li><li>" + email.value + "</li><li>" + password.value + "</li><li>" + sexoM.value + "</li><li>" + sexoF.value + "</li><li>" + sexoX.value + "</li><li>" + noticias.value + "</li>"
        table.style.display = "block"
    })

    table.style.display = "none"

    // ex 1F

    let sexoM = formulario.elements[4]
    let sexoF = formulario.elements[5]
    let sexoX = formulario.elements[6]
    let selecionandoBody = document.querySelector("body");

    selecionandoBody.onclick = function () {
        if(sexoM.checked){
            selecionandoBody.style.background = 'blue';
        }if(sexoF.checked){
            selecionandoBody.style.background = 'pink';
        }if(sexoX.checked){
            selecionandoBody.style.background = 'green';
        }
    }
    
    
}
