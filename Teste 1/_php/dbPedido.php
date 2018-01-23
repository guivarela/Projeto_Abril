<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('dbConnect.php');


$sql = "SELECT p.idPedido, c.nomeCliente, c.email, c.telefone, pr.nomeProduto, pr.descricao, pr.preco FROM Cliente c INNER JOIN Pedido p ON c.idCliente = p.idCliente INNER JOIN Produto pr ON pr.idProduto = p.idProduto where p.idPedido > 0";
$result = mysqli_query($con,$sql);

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Id":"'  . $rs["idPedido"] . '",';
    $outp .= '"NomeCliente":"'   . $rs["nomeCliente"]        . '",';
    $outp .= '"EmailCliente":"'   . $rs["email"]        . '",';
    $outp .= '"TelCliente":"'   . $rs["telefone"]        . '",';
    $outp .= '"NomeProduto":"'   . $rs["nomeProduto"]        . '",';
    $outp .= '"DescricaoProduto":"'   . $rs["descricao"]        . '",';
    $outp .= '"PrecoProduto":"'. $rs["preco"]     . '"}';
}
$outp ='{"records":['.$outp.']}';

mysqli_close($con);

echo($outp);
?>
