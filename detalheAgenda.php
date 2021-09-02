<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$id = $_GET["id"];
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "SELECT * FROM agendamento WHERE id = $id";
$res = mysqli_query($con,$sql);

echo "<table width='100%'>
<tr>
<h2 align=\"center\">Descrição do Agendamento</h2>
</tr>";

while($row = mysqli_fetch_array($res)){
	$data = inverterdata($row[2]);
	echo "<tr bgcolor='#cccccc'>
	<td>
	Código:          $row[0]<br>
	Nome:            $row[1]<br>
	Data:            $data<br>
	Hora:            $row[3]<br>
    Procedimento:    $row[4]<br>
	</td>
	</tr>";
}

echo "</table><p>";
voltar();
rodape();
?>