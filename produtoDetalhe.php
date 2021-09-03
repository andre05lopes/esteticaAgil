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
$sql = "SELECT * FROM produtos WHERE id = $id";
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
	Quantidade: $row[2]<br>
	Marca: $row[3]<br>
	Preço: $row[4]<br>
	Descrição: $row[5]<br> 	
	</td>	
	<td width='10%'>
	<img src='./imagensProduto/$row[6]' width=\"120px\" height=\"120px\">	
	</td>
	</tr>";
}

echo "</table><p>";
voltar();
rodape();
?>