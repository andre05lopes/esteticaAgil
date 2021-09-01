<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$id = $_GET["id"];
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "SELECT * FROM servicos WHERE id = $id";
$res = mysqli_query($con,$sql);

echo "<table width='100%'>
<tr>
<td>Descrição do Serviço</td>
</tr>";

while($row = mysqli_fetch_array($res)){
	echo "<tr bgcolor='#cccccc'>
	<td>
	Código: $row[0]<br>
	Nome: $row[1]<br>
	Descrição: $row[2]<br>
	Preço: R$ $row[3]<br>
	</td>
	</tr>";
}

echo "</table><p>";
voltar();
rodape();
?>