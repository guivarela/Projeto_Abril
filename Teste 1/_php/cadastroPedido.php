<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 $idCliente = $_POST['idCliente'];/*nCategoria, nMontadora = id input*/
 $idProduto = $_POST['idProduto'];

 if($idCliente == '' || $idProduto == ''){
 echo 'Por favor, preencha todos os campos';
 }else{
 require_once('dbConnect.php');

 $sql = "INSERT INTO Pedido (idCliente,idProduto) VALUES('$idCliente','$idProduto')";
 if(mysqli_query($con,$sql)){
 echo 'Cadastrado com sucesso!';
 }else{
 echo 'Ops! Algo deu errado, tente novamente';
 }
 mysqli_close($con);
}
}else{
echo 'error';
}
