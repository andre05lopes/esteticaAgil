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
$sql = "select * from usuarios where $tipo like '%$pesquisa%'";
//Conecta ao banco e executa a instrução SQL
$res = mysqli_query($con,$sql);

//Retorna o tipo de pesquisa
echo "<p><br><p>
Resultado da pesquisa por <b>$tipo
</b><br>";
//Contador
$conta = 0;
echo "<table width='100%'>
<tr>
<td>Código</td>
<td>Nome</td>
<td>Login</td>
<td>Excluir</td>
<td>Alterar</td>
<tr>";

//$row recebe o $res e exibe dados do usuário
while ($row = mysqli_fetch_array($res)) {
	$conta=1;
	echo "<tr bgcolor='#cccccc'>
	<td>$row[0]</td>
	<td>
	$row[1]</a>
	</td>
	<td>$row[2] </td>
	<td>
	<a href=\"#\" onclick=\"excluir('excluirUsuario.php?id=$row[0]&txttipo=$tipo&txtpesquisa=$pesquisa','Codigo do Serviço ($row[0])') \";>Excluir usuário</a>
	</td>
	<td><a href='alterarUsuario.php?id=$row[0]'>Alterar senha</a></td>
	</tr>";
}
echo "</table><p>";
rodape();

?>