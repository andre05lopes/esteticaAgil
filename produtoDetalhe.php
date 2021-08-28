<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$id = $_GET["id"];
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "select * from produtos where id = $id";
$res = mysqli_query($con,$sql);

echo "<table width='100%'>
<tr>
<td>Descrição do Produto</td>
</tr>";

while($row = mysqli_fetch_array($res)){
	echo "<tr bgcolor='#cccccc'>
	<td>
	Código: $row[0]<br>
	Nome: $row[1]<br>
	Qtd: $row[2]<br>
	Marca: $row[3]<br>
	Preço: $row[4]<br>
	Descrição: $row[5]<br>
	IMG: $row[6]<br>
	</td>
	</tr>";
}

echo "</table><p>";
voltar();
rodape();
?>