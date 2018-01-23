<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "u733115263_adm", "785625", "u733115263_abril");

$result = $conn->query("SELECT idProduto, nomeProduto, descricao, preco FROM Produto");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Id":"'  . $rs["idProduto"] . '",';
    $outp .= '"Nome":"'   . $rs["nomeProduto"]        . '",';
    $outp .= '"Descricao":"'   . $rs["descricao"]        . '",';
    $outp .= '"Preco":"'. $rs["preco"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
