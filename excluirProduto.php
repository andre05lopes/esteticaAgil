<?php
require "funcoes.php";
cabecalho();
menu();
acesso();

$id = $_GET["id"];
$tipo = $_GET["txttipo"];
$pesquisa = $_GET["txtpesquisa"];
//$nome = $_GET["nome"];
//$qtd = $_GET["qtd"];
//$marca = $_GET["marca"];
//$preco = $_GET["preco"];
//$descricao = $_GET["descricao"];
//$img = $_GET["img"];

$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "delete from produtos where id = $id";
$res = mysqli_query($con,$sql);

if($res==1){
	header("Location:menu_resultado.php?txttipo=$tipo&txtpesquisa=$pesquisa");
}else{
	echo "Erro ao excluir o livro!";
}
rodape();
?>