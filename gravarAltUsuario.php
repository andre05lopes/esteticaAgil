<?php
//Documento que contém funcões pré-definidas
require "funcoes.php";
cabecalho();
menu();
//acesso();

//Variáveis
$id 		= $_POST["id"];
$senha 		= $_POST["senha"];

//Conecta ao banco e atualiza os dados
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "update usuarios set senha='$senha' where id='$id'";

$res = mysqli_query($con,$sql);

//Se o resultado for igual a 1 selecionado, executa a ação
if($res==1){
	echo "<p><br />Senha alterada com sucesso!";
}else{
	echo "<p>Erro ao alterar senha!";
}
?>

<?php
	rodape();
?>