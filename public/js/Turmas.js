$(document).ready(function() {
    buscaDados();
    buscaProfessores();
    buscaCursos()

    function buscaDados() {
      $.getJSON("http://localhost:8000/api/turmas/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
          sHtml += "<tr><td>" + val.trmcodigo + "</td><td>" + val.prfnome + "</td> <td>" + val.cronome + "</td> <td>" + val.trmdatainicio + "</td><td>" + val.trmdatafinal + "</td><td>" + val.trmtotalhoras + "</td><td><i class='far fa-edit'></i>&nbsp; <a onclick='deletar(" + val.trmcodigo + ")' class='btn' id='excluir'><i class='fas fa-trash'></i></a></td></tr>";
        });

        document.getElementById("tabela").innerHTML = sHtml;
      });
    };

    /**
     * Busca os professores cadastrados.
     */
    function buscaProfessores() {
      var oCampoProfessor = document.getElementById('professores');
      if(!oCampoProfessor) {
        return;
      }

      $.getJSON("http://localhost:8000/api/professores/", function(data, status) {

          var oCampoProfessor = document.getElementById('professores');
          var aProfessores    = [];

        $.each(data, function(key, val) {
          addOption(val.prfcodigo, val.prfnome);
        });
      });
    }

    /**
     * Cria e adiciona um option do Professor
     */
    function addOption(value, valor) {
      var option = new Option(valor, value);
      var select = document.getElementById("professores");
      select.appendChild(option);
    }

    /**
     * Busca os cursos cadastrados
     */
    function buscaCursos() {
      var oCampoCurso = document.getElementById('cursos');
      if(!oCampoCurso) {
        return;
      }

      $.getJSON("http://localhost:8000/api/cursos/", function(data, status) {

          var oCampoProfessor = document.getElementById('cursos');
          var aProfessores    = [];

        $.each(data, function(key, val) {
          addOptionCurso(val.crocodigo, val.cronome);
        });
      });
    }

    /**
     * Cria e adiciona um Option do Curso.
     */
    function addOptionCurso(value, valor) {
      var option = new Option(valor, value);
      var select = document.getElementById("cursos");
      select.appendChild(option);
    }

    $("#confirmar").click(function() {
      let iCodigo     = $("#trmcodigo").val(),
          iCurso      = $("#cursos").val(),
          iProfessor  = $("#professores").val(),
          sDataInicio = $("#trmdatainicio").val(),
          sDataFinal  = $("#trmdatafinal").val(),
          sTotalHoras = $("#trmtotalhoras").val();

      //enviado
      $.ajax({
        type: "POST",
        url: "http://localhost:8000/api/turmas/",
        data: JSON.stringify ({trmcodigo: iCodigo, trmcurso : iCurso, trmprofessor : iProfessor, trmdatainicio: sDataInicio, trmdatafinal: sDataFinal, trmtotalhoras: sTotalHoras}),
        success: function(data) {
          //alert("data: " + data);
        },
        contentType: "application/json",
        dataType: "json"
      }).then(res => {
        alert('Cadastro realizado com sucesso!');
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
            url: "http://localhost:8000/api/turmas/"+ iCodigo,
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
