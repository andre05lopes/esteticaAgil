<?php
//Documento que contém funcões pré-definidas
require "funcoes.php";
cabecalho();
menu();
//acesso();

//Variáveis
$id		       =    $_POST["id"];
$nome          =    $_POST["nome"];
$jtf           =    $_POST["jtf"];
$robjt         =    $_POST["robjt"];
$aapp          =    $_POST["aapp"];
$aappdetalhe   =    $_POST["aappdetalhe"];
$grav          =    $_POST["grav"];
$enfer         =    $_POST["enfer"];
$enferdetalhe  =    $_POST["enferdetalhe"];
$cirec         =    $_POST["cirec"];
$cirecdetalhe  =    $_POST["cirecdetalhe"];
$pmp           =    $_POST["pmp"];
$ppp           =    $_POST["ppp"];
$diab          =    $_POST["diab"];
$epil          =    $_POST["epil"];
$tumcan        =    $_POST["tumcan"];
$tumcamdetalhe =    $_POST["tumcamdetalhe"];
$tama          =    $_POST["tama"];
$tamadetalhe   =    $_POST["tamadetalhe"];
$proda         =    $_POST["proda"];
$prodadetalhe  =    $_POST["prodadetalhe"];
$apr           =    $_POST["apr"];
$aprdetalhe    =    $_POST["aprdetalhe"];
$alerg         =    $_POST["alerg"];
$alergdetalhe  =    $_POST["alergdetalhe"];
$plandesejado  =    $_POST["plandesejado"];

//Conecta ao banco e atualiza os dados
$con = mysqli_connect("localhost","root","","estetica_agil");
$sql = "UPDATE anamnesefacial SET nome ='$nome', jtf='$jtf',"
. " robjt='$robjt', aapp='$aapp', aappdetalhe='$aappdetalhe',"
. " grav='$grav', enfer='$enfer', enferdetalhe='$enferdetalhe',"
. " cirec='$cirec', cirecdetalhe='$cirecdetalhe', pmp='$pmp',"
. " ppp='$ppp', diab='$diab', epil='$epil',"
. " tumcan='$tumcan', tumcamdetalhe='$tumcamdetalhe', tama='$tama',"
. " tamadetalhe='$tamadetalhe', proda='$proda', prodadetalhe='$prodadetalhe',"
. " apr='$apr', aprdetalhe='$aprdetalhe', alerg='$alerg', alergdetalhe='$alergdetalhe',"
. " plandesejado='$plandesejado' WHERE id='$id'";

$res = mysqli_query($con,$sql);

//Se o resultado for igual a 1 selecionado, executa a ação
if($res==1){
	echo "<p><br />Ficha alterada com sucesso!";
}else{
	echo "<p>Erro ao alterar ficha!";
}
?>

<?php
	rodape();
?>