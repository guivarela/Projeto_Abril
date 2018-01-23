<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 $nome = $_POST['nome'];/*nCategoria, nMontadora = id input*/
 $descricao = $_POST['descricao'];
 $preco = $_POST['preco'];

 if($nome == '' || $descricao == '' || $preco == ''){
 echo 'Por favor, preencha todos os campos';
 }else{
 require_once('dbConnect.php');
 $sql = "SELECT * FROM Produto WHERE nomeProduto='$nome'";

 $check = mysqli_fetch_array(mysqli_query($con,$sql));

 if(isset($check)){
 echo 'Um produto com este mesmo nome já está cadastrado';
 }else{
 $sql = "INSERT INTO Produto (nomeProduto,descricao,preco) VALUES('$nome','$descricao','$preco')";
 if(mysqli_query($con,$sql)){
 echo 'Cadastrado com sucesso!';
 }else{
 echo 'Ops! Algo deu errado, tente novamente';
 }
 }
 mysqli_close($con);
 }
}else{
echo 'error';
}
