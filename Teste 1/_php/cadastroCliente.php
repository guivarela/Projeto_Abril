<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 $nome = $_POST['nome'];/*nCategoria, nMontadora = id input*/
 $email = $_POST['email'];
 $telefone = $_POST['telefone'];


 if($nome == '' || $email == '' || $telefone == ''){
 echo 'Por favor, preencha todos os campos';
 }else{
 require_once('dbConnect.php');
 $sql = "SELECT * FROM Cliente WHERE email='$email'";

 $check = mysqli_fetch_array(mysqli_query($con,$sql));

 if(isset($check)){
 echo 'Este cliente já está cadastrado(email já consta no banco de dados)';
 }else{
 $sql = "INSERT INTO Cliente (nomeCliente,email,telefone) VALUES('$nome','$email','$telefone')";
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
