<?php
//Documento que contém funcões pré-definidas
require "funcoes.php";
cabecalho();
menu();
//acesso();

//Variáveis
$id             = $_POST['id'];
$nome           = $_POST['nome'];
$cpf            = $_POST['cpf'];
$endereco       = $_POST['endereco'];
$cep            = $_POST['cep'];
$num_resid      = $_POST['num_resid'];
$complemento    = $_POST['complemento'];
$cidade         = $_POST['cidade'];
$estado         = $_POST['estado'];
$num_cel        = $_POST['num_cel'];
$ddd_cel        = $_POST['ddd_cel'];
$num_tel        = $_POST['num_tel'];
$ddd_tel        = $_POST['ddd_tel'];
$email          = $_POST['email'];
$genero         = $_POST['genero'];
$dtnasc         = $_POST['dtnasc'];

//Conecta ao banco e atualiza os dados
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "UPDATE cliente SET nome ='$nome', cpf='$cpf',"
. " endereco='$endereco', cep='$cep', num_resid='$num_resid',"
. " complemento='$complemento', cidade='$cidade', estado='$estado',"
. " num_cel='$num_cel', ddd_cel='$ddd_cel', num_tel='$num_tel',"
. " ddd_tel='$ddd_tel', email='$email', genero='$genero',"
. " dtnasc='$dtnasc' WHERE id='$id'";

$res = mysqli_query($con,$sql);

//Se o resultado for igual a 1 selecionado, executa a ação
if($res==1){
	echo "<p><br />Cliente alterado com sucesso!";
}else{
	echo "<p>Erro ao alterar os dados do cliente!";
}
?>

<?php
	rodape();
?>