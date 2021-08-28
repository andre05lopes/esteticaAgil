<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$pesquisa=isset($_POST["txtpesquisa"])?$_POST["txtpesquisa"]:$_GET["txtpesquisa"];
$tipo=isset($_POST["txttipo"])?$_POST["txttipo"]:$_GET["txttipo"];
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "select * from servicos where $tipo like '%$pesquisa%'";
$res = mysqli_query($con,$sql);

echo "<p><br><p>
Resultado da pesquisa por <b>$tipo
</b><br>";
$conta = 0;
echo "<table width='100%'>
<tr>
<td>Código</td>
<td>Nome</td>
<td>Preco</td>
<td>Excluir</td>
<td>Alterar</td>
<tr>";

//$row recebe o $res e exibe os detalhes do produto
while ($row = mysqli_fetch_array($res)) {
	$conta=1;
	echo "<tr bgcolor='#cccccc'>
	<td>$row[0]</td>
	<td>
	<a href='detalheServico.php?id=$row[0]'>
	$row[1]</a>
	</td>
	<td>$row[3] </td>
	<td>
	<a href=\"#\" onclick=\"excluir('excluirServico.php?id=$row[0]&txttipo=$tipo&txtpesquisa=$pesquisa','Codigo do Serviço ($row[0])') \";>Excluir</a>
	</td>
	<td><a href='alterarServico.php?id=$row[0]'>Alterar</a></td>
	</tr>";
}
echo "</table><p>";
rodape();

?>