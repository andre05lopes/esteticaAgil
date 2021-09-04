<?php
//Documento que contém funcões pré-definidas
require "funcoes.php";
cabecalho();
menu();
//acesso();

//Variáveis
$id 		= $_POST["id"];
$tipo 		= $_POST["tipo"];
$valor 	    = $_POST["valor"];
$qtd 		= $_POST["qtd"];
$data 		= $_POST["data"];

//Conecta ao banco e atualiza os dados
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "UPDATE despesas SET tipo='$tipo', valor='$valor', qtd='$qtd', data='$data' WHERE id='$id'";

$res = mysqli_query($con,$sql);

//Se o resultado for igual a 1 selecionado, executa a ação
if($res==1){
	echo "<p><br />Despesa alterada com sucesso!";
}else{
	echo "<p>Erro ao alterar despesa!";
}
?>

<?php
	rodape();
?>