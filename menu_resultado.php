<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$pesquisa=isset($_POST["txtpesquisa"])?$_POST["txtpesquisa"]:$_GET["txtpesquisa"];
$codigo=isset($_POST["txttipo"])?$_POST["txttipo"]:$_GET["txttipo"];
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "select * from produtos where $codigo like '%$pesquisa%'";
$res = mysqli_query($con,$sql);

echo "<p><br><p>
Resultado da pesquisa por <b>$nome:
</b><br>";
$conta = 0;
echo "<table width='100%'>
<tr>
<td>Código</td>
<td>Nome</td>
<td>Quantidade</td>
<td>Marca</td>
<td>Preço</td>
<td>Descrição</td>
<td>IMG</td>
<td>Excluir</td>
<td>Alterar</td>
<tr>";

while ($row = mysqli_fetch_array($res)) {
	$conta=1;
	echo "<tr bgcolor='#cccccc'>
	<td>$row[0]</td>
	<td>
	<a href='produtoDetalhe.php?codigo=$row[0]'>
	$row[1]</a>
	</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
    <td>$row[4]</td>
    <td>$row[5]</td>
    <td>$row[7]</td>
	<td>
	<a href=\"#\" onclick=\"excluir('excluirProduto.php?codigo=$row[0]&nome=$nome&txtpesquisa=$pesquisa','Codigo do Produto ($row[0])') \";>Excluir Produto</a>
	</td>
	<td><a href='alterarProduto.php?codigo=$row[0]'>Alterar Produto</a></td>
	</tr>";
}
echo "</table><p>";
rodape();

?>