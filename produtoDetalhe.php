<?php
require "funcoes.php";
cabecalho();
menu();
acesso();

$nome = $_GET["txttipo"];
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "select * from produtos where nome = $nome";
$res = mysqli_query($con,$sql);

echo "<table width='100%'>
<tr>
<td>Descrição do Produto</td>
</tr>";

while($row = mysqli_fetch_array($res)){
	echo "<tr bgcolor='#cccccc'>
	<td>
	Código: $row[0] -
	Nome: $row[1]<br>
	Qtd: $row[2]<br>
	Marca: $row[3]<br>
	Preço: $row[4] -
	Descrição: $row[5]<br>
	IMG: $row[6]<br>
	</td>
	</tr>";
}

echo "</table><p>";
voltar();
rodape();
?>