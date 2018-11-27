$(document).ready(function() {
    buscaDados();

    function buscaDados() {
      $.getJSON("http://localhost:8000/api/professores/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
          sHtml += "<tr><td>" + val.prfcodigo + "</td><td>" + val.prfnome + "</td> <td>" + val.prfcurriculo + "</td> <td>" + val.prfemail + "</td><td>" + val.prffone + "</td><td><i class='far fa-edit'></i>&nbsp; <a onclick='deletar(" + val.prfcodigo + ")' class='btn' id='excluir'><i class='fas fa-trash'></i></a></td></tr>";
        });

        document.getElementById("tabela").innerHTML = sHtml;
      });
    };

    $("#confirmar").click(function() {
      let iCodigo    = $("#prfcodigo").val(),
          sNome      = $("#prfnome").val(),
          sCurriculo = $("#prfcurriculo").val(),
          sEmail     = $("#prfemail").val(),
          sFone      = $("#prffone").val();

      //enviado
      $.ajax({
        type: "POST",
        url: "http://localhost:8000/api/professores/",
        data: JSON.stringify ({prfcodigo: iCodigo, prfnome : sNome, prfemail : sEmail, prffone: sFone, prfcurriculo: sCurriculo}),
        success: function(data) {
          //alert("data: " + data);
        },
        contentType: "application/json",
        dataType: "json"
      }).then(res => {
        alert('Cadastro realizado com sucesso!');
        window.location="http://localhost:8000/consultaProfessor";
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
        url: "http://localhost:8000/api/professores/"+ iCodigo,
        data: JSON.stringify ({nome: sNome}),
        success: function(data) {
          alert("Alterado com Sucesso!");
          window.location="http://localhost:8000/consultaProfessor";
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

    $("#prffone").on('keydown', function (e) {
        var digit = e.key.replace(/\D/g, '');

        var value = $(this).val().replace(/\D/g, '');

        var size = value.concat(digit).length;

        $(this).mask('(00)00000-0000');
    });

  });


  /**
   * Função responsável por excluir o professor.
   */
  function deletar(iCodigo) {
    if(!iCodigo) {

    } else {
        //enviado
        $.ajax({
            type: "DELETE",
            url: "http://localhost:8000/api/professores/"+ iCodigo,
            success: function(data) {
            alert("Excluido com Sucesso!");
            window.location="http://localhost:8000/consultaProfessor";
            },
            contentType: "application/json",
            dataType: "json"
        }).then(res => {
            $("#buscar").click();
        });
    }
}
