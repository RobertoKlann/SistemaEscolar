$(document).ready(function() {
    buscaDados();

    function buscaDados() {
      $.getJSON("http://localhost:41121/api/clientes/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
          sHtml += "<tr><td>" + val.IDCliente + "</td><td>" + val.NomeCompanhia + "</td> <td>" + val.NomeContato + "</td> <td>" + val.TituloContato + "</td><td>" + val.Endereco + "</td> <td>" + val.Cidade + "</td> <td>" + val.Regiao + "</td> <td>" + val.CEP + "</td> <td><i class='far fa-edit'></i>&nbsp; <a onclick='deletar(" + val.IDCliente + ")' class='btn' id='excluir'><i class='fas fa-trash'></i></a></td></tr>";
        });

        document.getElementById("tabela").innerHTML = sHtml;
      });
    };

    $("#confirmar").click(function() {
      let iCodigo   = $("#IDCliente").val(),
          sNomeCom  = $("#NomeCompanhia").val(),
          sNomeCon  = $("#NomeContato").val(),
          sTitulo   = $("#TituloContato").val(),
          sEndereco = $("#Endereco").val(),
          sCidade   = $("#Cidade").val();

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
