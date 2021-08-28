<?php
//Documento que contém funcões pré-definidas
require "funcoes.php";
cabecalho();
menu();
//acesso();

//Variáveis
$id 		= $_POST["id"];
$nome 		= $_POST["nome"];
$descricao 	= $_POST["descricao"];
$preco 		= $_POST["preco"];

//Conecta ao banco e atualiza os dados
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "update servicos set nome='$nome', descricao='$descricao', preco='$preco' where id='$id'";

$res = mysqli_query($con,$sql);

//Se o resultado for igual a 1 selecionado, executa a ação
if($res==1){
	echo "<p><br />Pacote de serviço alterado com sucesso!";
}else{
	echo "<p>Erro ao alterar o pacote de serviços!";
}
?>

<?php
	rodape();
?>