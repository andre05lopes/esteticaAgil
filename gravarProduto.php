<?php
require "funcoes.php";

//Funções para montar o cabeçalho, rodapé e menu
cabecalho();
menu();

if(isset($_FILES['img'])){
	date_default_timezone_set("Brazil/East"); //Timezone padrão
	$ext = strtolower(substr($_FILES['img']['name'], -4)); //Capturando a extensão do arquivo
	$novoNome = date("Y.m.d-H.i.s") . $ext; //Definindo novo nome para o arquivo
	$dir = 'imagensProduto/'; //Diretório do upload

	move_uploaded_file($_FILES['img']['tmp_name'], $dir.$novoNome); //Fazer o upload do arquivo
}

//Conecta ao banco de dados
$con = mysqli_connect("localhost","root","","estetica_agil");

//Variáveis que recebem os dados do formulário preenchido
$nome = $_POST['nome'];
$qtd = $_POST['qtd'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$img = $novoNome;

//Instrução SQL para gravar os dados no banco
$sql = "INSERT INTO produtos VALUES (0,'$nome','$qtd','$marca','$preco',"
. " '$descricao','$img')";
//A variável $res irá conectar no banco e executar a gravação dos dados
$res = mysqli_query($con,$sql);

/*Se ocorrer o $res, os dados serão gravados, e a página será
retornada para cadlivro.php */
if($res){
	echo"<p><br />Produto cadastrado com sucesso!<p>";
	retornar("cadProduto.php");
}else{
	echo "<p><br />Erro ao cadastrar produto!";
}
rodape();
?>