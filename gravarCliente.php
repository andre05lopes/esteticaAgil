<?php
require "funcoes.php";

//Funções para montar o cabeçalho, rodapé e menu
cabecalho();
menu();

//Conecta ao banco de dados
$con = mysqli_connect("localhost","root","","estetica_agil");

//Variáveis que recebem os dados do formulário preenchido
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$num_resid = $_POST['num_resid'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$num_cel = $_POST['num_cel'];
$ddd_cel = $_POST['ddd_cel'];
$num_tel = $_POST['num_tel'];
$ddd_tel = $_POST['ddd_tel'];
$email = $_POST['email'];
$genero = $_POST['genero'];
$dtnasc = $_POST['dtnasc'];

//Instrução SQL para gravar os dados no banco
$sql = "insert into cliente values (0,'$nome','$cpf','$endereco','$cep',"
. "'$num_resid','$complemento','$cidade','$estado','$num_cel','$ddd_cel',"
. "'$num_tel','$ddd_tel','$email','$genero','$dtnasc')";
//A variável $res irá conectar no banco e executar a gravação dos dados
$res = mysqli_query($con,$sql);

/*Se ocorrer o $res, os dados serão gravados, e a página será
retornada para cadlivro.php */
if($res){
	echo"<p><br />Cliente cadastrado com sucesso!<p>";
	return("cadCliente.php");
}else{
	echo "<p><br />Erro ao cadastrar cliente!";
}
rodape();
?>