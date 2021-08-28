<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

//Variáveis
$id = $_GET["id"];
$tipo = $_GET["txttipo"];
$pesquisa = $_GET["txtpesquisa"];

//Conexão com o banco e instrução de exclusão de registro
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "delete from cliente where id = $id";
$res = mysqli_query($con,$sql);

//Resultado for igual a 1 selecionado, efetua a exclusão
if($res==1){
	header("Location:menu_resultadoCliente.php?txttipo=$tipo&txtpesquisa=$pesquisa");
}else{
	echo "Erro ao excluir o cadastro do cliente!";
}
rodape();
?>