$(document).ready(function() {
    buscaDados();

    function buscaDados() {
      $.getJSON("http://localhost:8000/api/alunos/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
          sHtml += "<tr><td>" + val.alncodigo + "</td><td>" + val.alnnome + "</td> <td>" + val.alncpf + "</td> <td>" + val.alndatanascimento + "</td><td>" + val.alnfone + "</td> <td>" + val.alnemail + "</td> <td><a onclick='alterar(" + val.alncodigo + ")' class='btn' id='alterar'><i class='far fa-edit'></i></a>&nbsp; <a onclick='deletar(" + val.alncodigo + ")' class='btn' id='excluir'><i class='fas fa-trash'></i></a></td></tr>";
        });

        document.getElementById("tabela").innerHTML = sHtml;
      });
    };

    $("#confirmar").click(function() {
      let iCodigo   = $("#alncodigo").val(),
          sNome     = $("#alnnome").val(),
          sCpf      = $("#alncpf").val(),
          sDataNasc = $("#alndatanascimento").val(),
          sFone     = $("#alnfone").val(),
          sEmail   = $("#alnemail").val();

      //enviado
      $.ajax({
        type: "POST",
        url: "http://localhost:8000/api/alunos/",
        data: JSON.stringify ({alncodigo: iCodigo, alnnome : sNome, alncpf : sCpf, alndatanascimento: sDataNasc, alnfone: sFone, alnemail: sEmail}),
        success: function(data) {
          //alert("data: " + data);
        },
        contentType: "application/json",
        dataType: "json"
      }).then(res => {
        alert('Cadastro realizado com sucesso!');
        window.location="http://localhost:8000/consultaAlunos";
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
        url: "http://localhost:8000/api/alunos/"+ iCodigo,
        data: JSON.stringify ({nome: sNome}),
        success: function(data) {
          alert("Alterado com Sucesso!");
          window.location="http://localhost:8000/consultaAlunos";
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

  function alterar(iCodigo) {
    if(!iCodigo) {

    } else {
        //enviado
        $.ajax({
            type: "PUT",
            url: "http://localhost:8000/api/alunos/"+ iCodigo,
            success: function(data) {
            alert("Alterado com Sucesso!");
            window.location="http://localhost:8000/consultaAlunos";
            },
            contentType: "application/json",
            dataType: "json"
        }).then(res => {
            $("#buscar").click();
        });
    }
  }


  /**
   * Função responsável por excluir o cliente.
   */
  function deletar(iCodigo) {
    if(!iCodigo) {

    } else {
        //enviado
        $.ajax({
            type: "DELETE",
            url: "http://localhost:8000/api/alunos/"+ iCodigo,
            success: function(data) {
            alert("Excluido com Sucesso!");
            window.location="http://localhost:8000/consultaAlunos";
            },
            contentType: "application/json",
            dataType: "json"
        }).then(res => {
            $("#buscar").click();
        });
    }
}
