$(document).ready(function(){


    // Calcula a idade automaticamente
    $("#data_nascimento").on("change", function(){
        let nascimento = new Date($(this).val());
        let hoje = new Date();
        let idade = hoje.getFullYear() - nascimento.getFullYear();
        let m = hoje.getMonth() - nascimento.getMonth();
        if (m < 0 || (m === 0 && hoje.getDate() < nascimento.getDate())) {
            idade--;
        }
        $("#idade").val(idade);
    });
});