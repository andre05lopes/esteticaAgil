<?php
require "funcoes.php";

//Funções para montar o cabeçalho, rodapé e menu
cabecalho();
menu();

//Conecta ao banco de dados
$con = mysqli_connect("localhost","root","","estetica_agil");

//Variáveis que recebem os dados do formulário preenchido
$nomeCliente = $_POST['nome'];
$data        = $_POST['data'];
$hora        = $_POST['hora'];
$servico 	 = $_POST['servico'];

//Instrução SQL para gravar os dados no banco
$sql = "insert into agendamento values (0,'$nomeCliente','$data','$hora','$servico')";
//A variável $res irá conectar no banco e executar a gravação dos dados
$res = mysqli_query($con,$sql);

/*Se ocorrer o $res, os dados serão gravados, e a página será
retornada para cadlivro.php */
if($res){
	echo"<p><br />Agendamento realizado com sucesso!<p>";
	return("agendaConsulta.php");
}else{
	echo "<p><br />Erro no agendamento!";
}
rodape();
?>