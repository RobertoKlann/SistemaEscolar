$(document).ready(function() {
    buscaDados();

    function buscaDados() {
      $.getJSON("http://localhost:8000/api/cursos/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
          sHtml += "<tr><td>" + val.crocodigo + "</td><td>" + val.cronome + "</td> <td>" + val.crodescricao + "</td> <td>" + val.cromensalidade + "</td><td>" + val.crototalhoras + "</td><td><i class='far fa-edit'></i>&nbsp; <a onclick='deletar(" + val.crocodigo + ")' class='btn' id='excluir'><i class='fas fa-trash'></i></a></td></tr>";
        });

        document.getElementById("tabela").innerHTML = sHtml;
      });
    };

    $("#confirmar").click(function() {
      let iCodigo     = $("#crocodigo").val(),
          sNome       = $("#cronome").val(),
          sDescricao  = $("#crodescricao").val(),
          sMensalida  = $("#cromensalidade").val(),
          sTotalHoras = $("#crototalhoras").val();

      //enviado
      $.ajax({
        type: "POST",
        url: "http://localhost:8000/api/cursos/",
        data: JSON.stringify ({crocodigo: iCodigo, cronome : sNome, crodescricao : sDescricao, cromensalidade: sMensalida, crototalhoras: sTotalHoras}),
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
        url: "http://localhost:8000/api/cursos/"+ iCodigo,
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
            url: "http://localhost:8000/api/cursos/"+ iCodigo,
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
