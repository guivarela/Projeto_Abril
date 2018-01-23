<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
  $id = $_POST['id_atualizar'];
  $nome = $_POST['aNome'];
  $email = $_POST['aEmail'];
  $telefone = $_POST['aTel'];

  if($nome == '' || $email == '' || $telefone == ''){
  echo 'Por favor, preencha todos os campos';
  }else{
  require_once('dbConnect.php');

  $sql = "UPDATE Cliente SET nomeCliente = '$nome', email = '$email', telefone = '$telefone' WHERE idCliente = '$id'";
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
