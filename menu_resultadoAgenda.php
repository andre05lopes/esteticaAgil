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
$sql = "SELECT * FROM agendamento WHERE $tipo LIKE '%$pesquisa%'";
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
<td>Data</td>
<td>Hora</td>
<td>Procedimento</td>
<td>Excluir</td>
<td>Alterar</td>
<tr>";

//$row recebe o $res e exibe os detalhes do serviço
while ($row = mysqli_fetch_array($res)) {
    $data = inverterdata($row[2]);
	$conta=1;
	echo "<tr bgcolor='#cccccc'>
	<td>$row[0]</td>
	<td>
	<a href='detalheAgenda.php?id=$row[0]'>
	$row[1]</a>
	</td>
	<td>$data </td>
    <td>$row[3] </td>
    <td>$row[4] </td>

	<td>
	<a href='alterarAgendaConsulta.php?id=$row[0]'>Alterar</a></td>
	</td>
    <td>
    <a href=\"#\" onclick=\"excluir('excluirAgenda.php?id=$row[0]&txttipo=$tipo&txtpesquisa=$pesquisa','Codigo da Agenda ($row[0])') \";>Excluir</a>
    </td>
	</tr>";
}
echo "</table><p>";
rodape();

?>