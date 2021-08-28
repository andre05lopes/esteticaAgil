<?php
//Documento que contém funcões pré-definidas
require "funcoes.php";
cabecalho();
menu();
//acesso();

//Tratamento para upload de imagens
if(isset($_FILES['img'])){
	date_default_timezone_set("Brazil/East"); //Timezone padrão
	$ext = strtolower(substr($_FILES['img']['name'], -4)); //Capturando a extensão do arquivo
	$novoNome = date("Y.m.d-H.i.s") . $ext; //Definindo novo nome para o arquivo
	$dir = 'imagensProduto/'; //Diretório do upload

	move_uploaded_file($_FILES['img']['tmp_name'], $dir.$novoNome); //Fazer o upload do arquivo
}

//Variáveis
$id 		= $_POST["id"];
$nome 		= $_POST["nome"];
$qtd 		= $_POST["qtd"];
$marca 		= $_POST["marca"];
$preco 		= $_POST["preco"];
$descricao 	= $_POST["descricao"];
$img 		= $novoNome;

//Conecta ao banco e atualiza os dados
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "update produtos set nome ='$nome', qtd='$qtd',"
. " marca='$marca', preco='$preco', descricao='$descricao',"
. "img='$img' where id='$id'";

$res = mysqli_query($con,$sql);

//Se o resultado for igual a 1 selecionado, executa a ação
if($res==1){
	echo "<p><br />Produto alterado com sucesso!";
}else{
	echo "<p>Erro ao alterar o produto!";
}
?>

<?php
	rodape();
?>