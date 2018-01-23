<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "u733115263_adm", "785625", "u733115263_abril");

$result = $conn->query("SELECT idCliente, nomeCliente, email, telefone FROM Cliente");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Id":"'  . $rs["idCliente"] . '",';
    $outp .= '"Nome":"'   . $rs["nomeCliente"]        . '",';
    $outp .= '"Email":"'   . $rs["email"]        . '",';
    $outp .= '"Telefone":"'. $rs["telefone"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
