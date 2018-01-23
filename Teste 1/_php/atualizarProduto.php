<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
  $id = $_POST['id_atualizar'];
  $nome = $_POST['aNome'];
  $descricao = $_POST['aDescricao'];
  $preco = $_POST['aPreco'];

  if($nome == '' || $descricao == '' || $preco == ''){
  echo 'Por favor, preencha todos os campos';
  }else{
  require_once('dbConnect.php');

  $sql = "UPDATE Produto SET nomeProduto = '$nome', descricao = '$descricao', preco = '$preco' WHERE idProduto = '$id'";
  if(mysqli_query($con,$sql)){
  echo 'Alterado com sucesso!';
  }else{
  echo 'Ops! Algo deu errado, tente novamente';
  }
  mysqli_close($con);
  }
 }else{
 echo 'error';
 }
