<?php
require "funcoes.php";
cabecalho();
menu();
acesso();

$pesquisa = $_GET["txtpesquisa"];
$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$qtd = $_POST["qtd"];
$marca = $_POST["marca"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$img = $_POST["img"];

$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "delete from produtos where codigo = $codigo";
$res = mysqli_query($con,$sql);

if($res==1){
	header("Location:menu_resultado.php?codigo=$codigo&txtpesquisa=$pesquisa");
}else{
	echo "Erro ao excluir o livro!";
}
rodape();
?>