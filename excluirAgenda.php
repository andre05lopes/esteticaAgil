<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

//Variáveis
$tipo             = $_GET["txttipo"];
$id               = $_GET["id"];
$pesquisa         = $_GET["txtpesquisa"];

//Conexão com o banco e instrução de exclusão de registro
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "DELETE FROM agendamento WHERE id = $id";
$res = mysqli_query($con,$sql);

//Resultado for igual a 1 selecionado, efetua a exclusão
if($res==1){
	header("Location:menu_resultadoAgenda.php?txttipo=$tipo&txtpesquisa=$pesquisa");
}else{
	echo "Erro ao excluir o agendamento!";
}

rodape();
?>