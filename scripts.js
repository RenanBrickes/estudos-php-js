$(document).ready(function(){


    $('#form').on('submit',function (e){
        

        if($("input[name='Nome']").val() == '' ||$("input[name='Cargo']").val() == '' || $("input[name='Salario']").val() == '')
        {
            e.preventDefault();
            
            $('.alert').html("<p>Preencha corretamente seus dados</p>");

        }
        else if (!e.isDefaultPrevented()) 
        {
            e.preventDefault();
            var url         = "./envia.php";
            var formData    = $('#form').serialize();

            $.ajax({
                type: "POST",
                url: url,
                data: formData,

                beforeSend: function()
                {

                    $('.alert').html("<p>Estamos enviandos seus dados</p>");
                    

                },

                success: function(){
                    setTimeout(function(){
                        $('.alert').html("<p>Dados cadastrados !</p>");
                        $('#form').each (function()
                        {this.reset();
                        });

                        $.get( "./procura.php", function(data) {            
                        });
                    },
                    2000);

                }
            });
        }
    });

   /* $('#botao').click(function () {
        alert($('#form_altera').serialize());
        /*$.get( "./procura.php", function(data) {
            var as = JSON.parse(data);
            console.log(as.Nome);
            

        });

    });*/
    

 $('#form-result').on('submit', function(e)
    {
        var url = './excluir.php';
        var dados = $('#form_altera').serialize();

        e.preventDefault();
        
        $.ajax(
        {
            type: 'POST',
            url : url,
            data : dados,

            success: function() 
            {
                alert("Dados Excluidos com sucesso!")
            },

        })

    });     




    $('#form_altera').on('submit', function(e)
    {
        var url = './procura.php';
        var dados = $('#form_altera').serialize();

        e.preventDefault();
        
        $.ajax(
        {
            type: 'POST',
            url : url,
            data : dados,

            success: function(data) //Recebe a resposta em JSON
            {
                var as = JSON.parse(data); // Converte os JSON para objeto JS
                $("input[name='NomeReturn']").val(as.Nome); //Acesso o objeto
                $("input[name='CargoReturn']").val(as.Cargo);
                $("input[name='SalarioReturn']").val(as.Salario);
                $("input[name='IdReturn']").val(as.Id);
            },

        })

    });     

  });