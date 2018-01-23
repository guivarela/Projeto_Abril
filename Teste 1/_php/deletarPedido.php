<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['id_excluir'];
    require_once('dbConnect.php');
    $sql = "DELETE FROM Pedido WHERE idPedido = '$id'";

    if(mysqli_query($con,$sql)){
        echo 'Deletado com sucesso!';
    }else{
        echo 'Ops! Algo deu errado, tente novamente';
    }
    mysqli_close($con);
}else{
    echo 'error';
}
