<?php
require "funcoes.php";
//Documento de conexão com o bando de dados
cabecalho();
menu();

//Declaração das variáveis
$nome  =  $_POST["nome"];
$login =  $_POST["login"];
$senha =  $_POST["senha"];

//Conectando ao banco de dados
$con = mysqli_connect("localhost","root","","estetica_agil");

//Query para inserir valores no banco de dados
$sql = "insert into usuarios values (0,'$nome','$login','$senha')";
//Executa a instrução
$res = mysqli_query($con,$sql);

/*Se ocorrer o $res, os dados serão gravados, e a página será
retornada para cadlivro.php */
if($res){
	echo "<p><br />Usuário cadastrado com sucesso!<p>";
	retornar("cadlivro.php");
}else{
	echo "<p><br />Erro ao gravar o usuário!";
}

rodape();
?>
