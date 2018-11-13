$(document).ready(function() {
    buscaDados();

    function buscaDados() {
      $.getJSON("http://localhost:8000/api/turmas/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
          sHtml += "<tr><td>" + val.trmcodigo + "</td><td>" + val.prfnome + "</td> <td>" + val.cronome + "</td> <td>" + val.trmdatainicio + "</td><td>" + val.trmdatafinal + "</td><td>" + val.trmtotalhoras + "</td><td><i class='far fa-edit'></i>&nbsp; <a onclick='deletar(" + val.trmcodigo + ")' class='btn' id='excluir'><i class='fas fa-trash'></i></a></td></tr>";
        });

        document.getElementById("tabela").innerHTML = sHtml;
      });
    };

    $("#confirmar").click(function() {
      let iCodigo   = $("#trmcodigo").val(),
          sNomeCom  = $("#trmcurso").val(),
          sNomeCon  = $("#trmprofessor").val(),
          sTitulo   = $("#trmdatainicio").val(),
          sEndereco = $("#trmdatafinal").val(),
          sEndereco = $("#trmtotalhoras").val();

      //enviado
      $.ajax({
        type: "POST",
        url: "http://localhost:41121/api/clientes/",
        data: JSON.stringify ({IDCliente: iCodigo, NomeCompanhia : sNomeCom, NomeContato : sNomeCon, TituloContato: sTitulo, Endereco: sEndereco, Cidade: sCidade}),
        success: function(data) {
          //alert("data: " + data);
        },
        contentType: "application/json",
        dataType: "json"
      }).then(res => {
        alert('Cadastro realizado com sucesso!');
        buscaDados();
      });
    });

    $("#alterar").click(function() {
      let iCodigo = $("#codigo").val();
      let sNome = $("#nome").val();

      if(iCodigo == "" || sNome == "") {

      } else {
        //enviado
      $.ajax({
        type: "PATCH",
        url: "http://localhost:41071/pessoa/"+ iCodigo,
        data: JSON.stringify ({nome: sNome}),
        success: function(data) {
          alert("Alterado com Sucesso!");
        },
        contentType: "application/json",
        dataType: "json"
      }).then(res => {
        $("#buscar").click();
      });
      }

    });

    $("#alncpf").on('keydown', function (e) {
        var digit = e.key.replace(/\D/g, '');

        var value = $(this).val().replace(/\D/g, '');

        var size = value.concat(digit).length;

        $(this).mask('000.000.000-00');
    });

    $("#alnfone").on('keydown', function (e) {
        var digit = e.key.replace(/\D/g, '');

        var value = $(this).val().replace(/\D/g, '');

        var size = value.concat(digit).length;

        $(this).mask('(00)00000-0000');
    });

  });


  /**
   * Função responsável por excluir o cliente.
   */
  function deletar(iCodigo) {
    if(!iCodigo) {

    } else {
        //enviado
        $.ajax({
            type: "DELETE",
            url: "http://localhost:41121/api/clientes/"+ iCodigo,
            success: function(data) {
            alert("Excluido com Sucesso!");
            },
            contentType: "application/json",
            dataType: "json"
        }).then(res => {
            $("#buscar").click();
        });
    }
}
