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
<td>Descrição do Agendamento</td>
</tr>";

while($row = mysqli_fetch_array($res)){
	echo "<tr bgcolor='#cccccc'>
	<td>
	Código:          $row[0]<br>
	Nome:            $row[1]<br>
	Data:            $row[2]<br>
	Hora:            $row[3]<br>
    Procedimento:    $row[4]<br>
	</td>
	</tr>";
}

echo "</table><p>";
voltar();
rodape();
?>