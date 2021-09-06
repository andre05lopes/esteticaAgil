<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

//Recebe os dados informados pelo tipo de pesquisa
$pesquisa=isset($_POST["txtpesquisa"])?$_POST["txtpesquisa"]:$_GET["txtpesquisa"];
//Seleciona o tipo de pesquisa que será realizada
$tipo=isset($_POST["txttipo"])?$_POST["txttipo"]:$_GET["txttipo"];
//Conecta ao banco de dados
$con = mysqli_connect("localhost","root","","estetica_agil");
//Instrução SQL
$sql = "SELECT * FROM anamnesefacial WHERE $tipo LIKE '%$pesquisa%'";
//Conecta ao banco e executa a instrução SQL
$res = mysqli_query($con,$sql);

//Retorna o tipo de pesquisa
echo "<p><br><p>
Resultado da pesquisa por <b>$pesquisa
</b><br>";
//Contador
$conta = 0;
echo "<table width='100%'>
<tr>
<td>Código</td>
<td>Nome</td>
<td>Plano Desejado</td>
<td>Excluir</td>
<td>Alterar</td>
<tr>";

//$row recebe o $res e exibe os detalhes do serviço
while ($row = mysqli_fetch_array($res)) {
	$conta=1;
	echo "<tr bgcolor='#cccccc'>
	<td>$row[0]</td>
	<td>
	<a href='detalheAnamFacial.php?id=$row[0]'>
	$row[1]</a>
	</td>
	<td>$row[25] </td>    
	<td>
	<a href=\"#\" onclick=\"excluir('excluirAnamFacial.php?id=$row[0]&txttipo=$tipo&txtpesquisa=$pesquisa','Codigo do Serviço ($row[0])') \";>Excluir</a>
	</td>
	<td><a href='alterarAnamFacial.php?id=$row[0]'>Alterar</a></td>
	</tr>";
}
echo "</table><p>";
rodape();

?>