<?php
require "funcoes.php";

//Funções para montar o cabeçalho, rodapé e menu
cabecalho();
menu();

//Conecta ao banco de dados
$con = mysqli_connect("localhost","root","","estetica_agil");

//Variáveis que recebem os dados do formulário preenchido
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

//Instrução SQL para gravar os dados no banco
$sql = "INSERT INTO servicos VALUES (0,'$nome','$descricao','$preco')";
//A variável $res irá conectar no banco e executar a gravação dos dados
$res = mysqli_query($con,$sql);

/*Se ocorrer o $res, os dados serão gravados, e a página será
retornada para cadlivro.php */
if($res){
	echo"<p><br />Pacote cadastrado com sucesso!<p>";
	return("cadServico.php");
}else{
	echo "<p><br />Erro ao cadastrar serviços!";
}
rodape();
?>