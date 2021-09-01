<?php
require "funcoes.php";

//Funções para montar o cabeçalho, rodapé e menu
cabecalho();
menu();

//Conecta ao banco de dados
$con = mysqli_connect("localhost","root","","estetica_agil");

//Variáveis que recebem os dados do formulário preenchido
$nome = $_POST['nome'];
$jtf = $_POST['jtf'];
$robjt = $_POST['robjt'];
$aapp = $_POST['aapp'];
$aappdetalhe = $_POST['aappdetalhe'];
$grav = $_POST['grav'];
$enfer = $_POST['enfer'];
$enferdetalhe = $_POST['enferdetalhe'];
$cirec = $_POST['cirec'];
$cirecdetalhe = $_POST['cirecdetalhe'];
$pmp = $_POST['pmp'];
$ppp = $_POST['ppp'];
$diab = $_POST['diab'];
$epil = $_POST['epil'];
$tumcan = $_POST['tumcan'];
$tumcamdetalhe = $_POST['tumcamdetalhe'];
$tama = $_POST['tama'];
$tamadetalhe = $_POST['tamadetalhe'];
$proda = $_POST['proda'];
$prodadetalhe = $_POST['prodadetalhe'];
$apr = $_POST['apr'];
$aprdetalhe = $_POST['aprdetalhe'];
$alerg = $_POST['alerg'];
$alergdetalhe = $_POST['alergdetalhe'];
$plandesejado = $_POST['plandesejado'];

//Instrução SQL para gravar os dados no banco
$sql = "INSERT INTO anamnesefacial VALUES (0,'$nome','$jtf','$robjt','$aapp',"
. "'$aappdetalhe','$grav','$enfer','$enferdetalhe','$cirec','$cirecdetalhe',"
. "'$pmp','$ppp','$diab','$epil','$tumcan','$tumcamdetalhe','$tama','$tamadetalhe',"
. "'$proda','$prodadetalhe','$apr','$aprdetalhe','$alerg','$alergdetalhe',"
. "'$plandesejado')";
//A variável $res irá conectar no banco e executar a gravação dos dados
$res = mysqli_query($con,$sql);

/*Se ocorrer o $res, os dados serão gravados, e a página será
retornada para cadAnamFacial.php */
if($res){
	echo"<p><br />Ficha cadastrada com sucesso!<p>";
	return("cadAnamFacial.php");
}else{
	echo "<p><br />Erro ao cadastrar ficha!";
}
rodape();
?>