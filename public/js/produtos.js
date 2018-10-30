$("#buscar").click(function() {
    $.getJSON("http://127.0.0.1:41112/api/produto", function(data, status) {
    var items = [];
    $.each(data, function(key, val) {
      items.push(val);
    });
    //limpa tabela
    $("#tabela01 td").parent().remove();
    var tabela = "";
    for (var i=0; i<items.length; i++){
        tabela += "<tr><td>"+items[i].IDProduto+"</td>"+
                 "<td>"+items[i].NomeProduto+"</td>"+
                 "<td>"+items[i].IDFornecedor+"</td>"+
                 "<td>"+items[i].IDCategoria+"</td>"+
                 "<td>"+items[i].QuantidadePorUnidade+"</td>"+
                 "<td>"+items[i].PrecoUnitario+"</td>"+
                 "<td>"+items[i].UnidadesEmEstoque+"</td>"+
                 "<td>"+items[i].UnidadesEmOrdem+"</td>"+
                 "<td>"+items[i].NivelDeReposicao+"</td>"+
                 "<td>"+items[i].Descontinuado+"</td>"+
                 "<td><a href='#'><i class='fa fa-edit'></i></a> <a class='btn' onclick='excluiProduto("+items[i].IDProduto+");'><i class='fa fa-trash'></i></a></td></tr>"
    }
    $("#tabela01").append(tabela);
    });      
      
});

function excluiProduto(id){
    console.log("http://127.0.0.1:41112/api/produto/"+id);
    $.ajax({
      type: "DELETE",
      url: "http://127.0.0.1:41112/api/produto/"+id,
    }).then(res =>{
      $("#buscar").click();
    })
}