<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
  $idPedido = $_POST['id_atualizar'];
  $idCliente = $_POST['idCliente'];
  $idProduto = $_POST['idProduto'];
  require_once('dbConnect.php');

  $sql = "UPDATE Pedido SET idCliente = '$idCliente', idProduto = '$idProduto' WHERE idPedido = '$idPedido'";
  if(mysqli_query($con,$sql)){
  echo 'Alterado com sucesso!';
  }else{
  echo 'Ops! Algo deu errado, tente novamente';
  }
  mysqli_close($con);
 }else{
 echo 'error';
 }
