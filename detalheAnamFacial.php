<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$id = $_GET["id"];
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "SELECT * FROM anamnesefacial WHERE id = $id";
$res = mysqli_query($con,$sql);

echo "<table width='100%'>
<tr>
<td>Descrição da Ficha de Anamnese Facial</td>
</tr>";

while($row = mysqli_fetch_array($res)){
	echo "<tr bgcolor='#cccccc'>
	<td>
	Código:               $row[0]<br>
	Nome:             	  $row[1]<br>
	Tratamento anterior:  $row[3]<br>
	Plano Desejado:       $row[25]<br>
	</td>
	</tr>";
}

echo "</table><p>";
voltar();
rodape();
?>