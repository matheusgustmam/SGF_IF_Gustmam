$(document).ready(function(){
    $("#cpf").mask('000.000-00')
})


$("#formCadsatroCliente").validate({
    rules: {

        nome:{
            required: true,
            minlength: 3,
        },
        cpf:{
            required: true,
            minlength: 14,
            maxlength: 14,
        },
        email:{
            required: true,
            email: true
        }
    },
    messages: {
        nome: {
            required: "Please enter nome",
            minlength: "Please nome deve ter pelo menos 3 caracteres."
        },
        cpf: {
            required: "Please enter cpf.",
            minlength: "o cpf deve conter exatamnet 14 caracteres.",
            maxlength: "o cpf. deve ter pelo menos 3 caracteres."
        }
    },
    errorElement: "span",
    errorClass: "text-danger",
})