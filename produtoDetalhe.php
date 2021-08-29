<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

//Variável
$id = $_GET["id"];
//Conexão com o banco de dados
$con = mysqli_connect("localhost","root","","estetica_agil");
//Instrução SQL
$sql = "select * from produtos where id = $id";
//Conexão ao SQL e consulta ao banco
$res = mysqli_query($con,$sql);

//Informativo para a descrição do produto
echo "<table width='100%'>
<tr>
<td>Descrição do Produto</td>
</tr>";

//Laço que varrerá o array de produtos para exibir seus detalhes
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