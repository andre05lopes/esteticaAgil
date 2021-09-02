<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$pesquisa=isset($_POST["txtpesquisa"])?$_POST["txtpesquisa"]:$_GET["txtpesquisa"];
$tipo=isset($_POST["txttipo"])?$_POST["txttipo"]:$_GET["txttipo"];
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "SELECT * FROM cliente WHERE $tipo LIKE '%$pesquisa%'";
$res = mysqli_query($con,$sql);

echo "<p><br><p>
Resultado da pesquisa por <b>$pesquisa
</b><br>";
$conta = 0;
echo "<table width='100%'>
<tr>
<td>Código</td>
<td>Nome</td>
<td>CPF</td>
<td>DDD</td>
<td>Nº Celular</td>
<td>Email</td>
<td>Excluir</td>
<td>Alterar</td>
<tr>";

//$row recebe o $res e exibe os detalhes do cliente
while ($row = mysqli_fetch_array($res)) {
	$conta=1;
	echo "<tr bgcolor='#cccccc'>
	<td>$row[0]</td>
	<td>
	<a href='detalheCliente.php?id=$row[0]'>
	$row[1]</a>
	</td>
	<td>$row[2] </td>
    <td>$row[10] </td>
	<td>$row[9] </td>
    <td>$row[13] </td>
    
    <td>
	<a href='alterarCliente.php?id=$row[0]'>Alterar</a></td>
	</td>
    <td>
    <a href=\"#\" onclick=\"excluir('excluirCliente.php?id=$row[0]&txttipo=$tipo&txtpesquisa=$pesquisa','Codigo do Produto ($row[0])') \";>Excluir</a>
    </td>
	</tr>";
}
echo "</table><p>";
rodape();

?>