<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$id = $_GET["id"];
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "select * from cliente where id = $id";
$res = mysqli_query($con,$sql);

echo "<table width='100%'>
<tr>
<td>Descrição do Cliente</td>
</tr>";

while($row = mysqli_fetch_array($res)){
	echo "<tr bgcolor='#cccccc'>
	<td>
	Código:                 $row[0]<br>
	Nome:                   $row[1]<br>
	CPF:                    $row[2]<br>
	Endereço:               $row[3]<br>
	CEP:                    $row[4]<br>
	Número da Residência:   $row[5]<br>
	Complemento:            $row[6]<br>
    Cidade:                 $row[7]<br>
    Estado:                 $row[8]<br>
    Nº Cel:                 $row[9]<br>
    DDD Cel:                $row[10]<br>
    Nº Tel:                 $row[11]<br>
    DDD Tel:                $row[12]<br>
    Email:                  $row[13]<br>
    Gênero:                 $row[14]<br>
    Data de Nascimento:     $row[15]<br>
	</td>
	</tr>";
}

echo "</table><p>";
voltar();
rodape();
?>