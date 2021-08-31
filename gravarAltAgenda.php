<?php
//Documento que contém funcões pré-definidas
require "funcoes.php";
cabecalho();
menu();
//acesso();

//Variáveis
$id 		= $_POST["id"];
//$nome 		= $_POST["nome"];
$data 	    = $_POST["data"];
$hora 		= $_POST["hora"];

//Conecta ao banco e atualiza os dados
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "UPDATE agendamento SET data='$data', hora='$hora' WHERE id='$id'";

$res = mysqli_query($con,$sql);

//Se o resultado for igual a 1 selecionado, executa a ação
if($res==1){
	echo "<p><br />Agenda alterada com sucesso!";
}else{
	echo "<p>Erro ao alterar agenda!";
}
?>

<?php
	rodape();
?>