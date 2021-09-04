<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$id = $_GET["id"];
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "SELECT * FROM despesas WHERE id = $id";
$res = mysqli_query($con,$sql);

echo "<table width='100%'>
<tr>
<td>Descrição da Despesa</td>
</tr>";

while($row = mysqli_fetch_array($res)){
    $data = inverterdata($row[4]);
	echo "<tr bgcolor='#cccccc'>
	<td>
	Código: $row[0]<br>
	Tipo: $row[1]<br>
	Preço: R$ $row[2]<br>
	Quantidade: $row[3]<br>
    Data: $data<br>
	</td>
	</tr>";
}

echo "</table><p>";
voltar();
rodape();
?>