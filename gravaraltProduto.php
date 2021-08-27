<?php
//Documento que contém funcões pré-definidas
require "funcoes.php";
cabecalho();
menu();
//acesso();

//Variáveis
$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$qtd = $_POST["qtd"];
$marca = $_POST["marca"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$img = $_POST["img"];

$con = mysqli_connect("localhost","root","","estetica_agil");

$sql = "update produtos set nome ='$nome', qtd='$qtd',"
. " marca='$marca', preco='$preco', descricao='$descricao',"
. "img='$img' where codigo='$codigo'";

$res = mysqli_query($con,$sql);

if($res==1){
	echo "<p><br />Produto alterado com sucesso!";
}else{
	echo "<p>Erro ao alterar o produto!";
}
?>

<?php
	rodape();
?>