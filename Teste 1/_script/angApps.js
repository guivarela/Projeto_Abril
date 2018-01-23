var app = angular.module('carregaBanco', []);

app.controller('carregaProdutos', function($scope, $http) {
    $scope.deleteInfo=function(id, nome, descricao, preco){
        $("#id_excluir").val(id);
        $("#dId").text(id);
        $("#dNome").text(nome);
        $("#dDescricao").text(descricao);
        $("#dPreco").text(preco);
    }
    $scope.updateInfo=function(id, nome, descricao, preco){
        $("#id_atualizar").val(id);
        $("#aId").text(id);
        $("#aNome").val(nome);
        $("#aDescricao").val(descricao);
        $("#aPreco").val(preco);
    }
    $http.get("http://guilhermevarela.xyz/_php/dbProduto.php")
    .then(function (response) {$scope.produtos = response.data.records;});
});
app.controller('carregaClientes', function($scope, $http) {
    $scope.teste=function(){
        var fd = new FormData();
    }
    $scope.deleteInfo=function(id, nome, email, tel){
        $("#id_excluir").val(id);
        $("#dId").text(id);
        $("#dNome").text(nome);
        $("#dEmail").text(email);
        $("#dTel").text(tel);
    }
    $scope.updateInfo=function(id, nome, email, tel){
        $("#id_atualizar").val(id);
        $("#aId").text(id);
        $("#aNome").val(nome);
        $("#aEmail").val(email);
        $("#aTel").val(tel);
    }
    $http.get("http://guilhermevarela.xyz/_php/dbCliente.php")
    .then(function (response) {$scope.clientes = response.data.records;});
});
app.controller('carregaPedidos', function($scope, $http) {
    $scope.deleteInfo=function(id, nomeC, email, tel, nomeP,desc, preco){
        $("#id_excluir").val(id);
        $("#dId").text(id);
        $("#dNomeC").text(nomeC);
        $("#dEmail").text(email);
        $("#dTel").text(tel);
        $("#dNomeP").text(nomeP);
        $("#dDesc").text(desc);
        $("#dPreco").text(preco);
    }
    $scope.updateInfo=function(id, nome, email, tel){
        $("#id_atualizar").val(id);
        $("#aId").text(id);
        $("#aNomeC").text(nomeC);
        $("#aEmail").text(email);
        $("#aTel").text(tel);
        $("#aNomeP").text(nomeP);
        $("#aDesc").text(desc);
        $("#aPreco").text(preco);
    }
    $http.get("http://guilhermevarela.xyz/_php/dbPedido.php")
    .then(function (response) {$scope.pedidos = response.data.records;});
});
/*
angular.element(document).ready(function() {
    angular.bootstrap(document.getElementById("app2"), ['operApp']);
});
*/
