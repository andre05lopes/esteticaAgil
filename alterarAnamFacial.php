<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$id = $_GET["id"];

$con = mysqli_connect("localhost","root","","estetica_agil");

$sql = "SELECT * FROM anamnesefacial WHERE id = $id";
$res = mysqli_query($con,$sql);

//Percorrer as linhas da instrução SQL
while ($row = mysqli_fetch_array($res)) {
	$id		       =    $row[0];
	$nome          =    $row[1];
	$jtf           =    $row[2];
	$robjt         =    $row[3];
	$aapp          =    $row[4];
	$aappdetalhe   =    $row[5];
	$grav          =    $row[6];
    $enfer         =    $row[7];
    $enferdetalhe  =    $row[8];
    $cirec         =    $row[9];
    $cirecdetalhe  =    $row[10];
    $pmp           =    $row[11];
    $ppp           =    $row[12];
    $diab          =    $row[13];
    $epil          =    $row[14];
    $tumcan        =    $row[15];
    $tumcandetalhe =    $row[16];
    $tama          =    $row[17];
    $tamadetalhe   =    $row[18];
    $proda         =    $row[19];
    $prodadetalhe  =    $row[20];
    $apr           =    $row[21];
    $aprdetalhe    =    $row[22];
    $alerg         =    $row[23];
    $alergdetalhe  =    $row[24];
    $plandesejado  =    $row[25];
}
?>
<h1 align="center">Alterar Anamnese Facial</h1>
<form method="POST" enctype="multipart/form-data" action="gravarAltAnamFacial.php" >
<input type="hidden" name="id" value="<?php echo $id ?>" />

    <label for="nome">Nome do paciente </label><br>
    <input type="text" name="nome" id="nome" placeholder="Nome do paciente" value="<?php echo $nome ?>" size="50" maxlength="100" />    
</p>
	<label for="jtf">Já realizou algum tratamento facial? </label><br>
    Sim
	<input type="radio" required name="jtf" name="jtf" id="jtf" value="S" <?php if($jtf=="S") { echo "checked"; } ?> /> 
    Não
    <input type="radio" required name="jtf" name="jtf" id="jtf" value="N" <?php if($jtf=="N") { echo "checked"; } ?> /> 
</p>
    <label for="robjt">O resultado atendeu os objetivos desejados? </label><br>
    Sim
	<input type="radio" required name="robjt" name="robjt" id="robjt" value="S" <?php if($robjt=="S") { echo "checked"; } ?> /> 
    Não
    <input type="radio" required name="robjt" name="robjt" id="robjt" value="N" <?php if($robjt=="N") { echo "checked"; } ?> /> 
</p>
    <label for="aapp">Apresenta algum problema de pele? </label><br>
    Sim
	<input type="radio" required name="aapp" name="aapp" id="aapp" value="S" <?php if($aapp=="S") { echo "checked"; } ?>  /> 
    Não
    <input type="radio" required name="aapp" name="aapp" id="aapp" value="N" <?php if($aapp=="N") { echo "checked"; } ?>  /> 
    Se sim, qual?
    <input type="text" name="aappdetalhe" id="aappdetalhe" placeholder="Descrição" value="<?php echo $aappdetalhe ?>" size="50" maxlength="100" />
</p>
    <label for="grav">Gravidez? </label><br>
    Sim
	<input type="radio" required name="grav" name="grav" id="grav" value="S" <?php if($grav=="S") { echo "checked"; } ?>  /> 
    Não
    <input type="radio" required name="grav" name="grav" id="grav" value="N" <?php if($grav=="N") { echo "checked"; } ?>  /> 
</p>
    <label for="enfer">Possui ou teve alguma enfermidade? </label><br>
    Sim
	<input type="radio" required name="enfer" name="enfer" id="enfer" value="S" <?php if($enfer=="S") { echo "checked"; } ?>  /> 
    Não
    <input type="radio" required name="enfer" name="enfer" id="enfer" value="N" <?php if($enfer=="N") { echo "checked"; } ?>  /> |
    Se sim, qual?
    <input type="text" name="enferdetalhe" id="enferdetalhe" placeholder="Descrição" value="<?php echo $enferdetalhe ?>" size="50" maxlength="100" />
</p>
    <label for="cirec">Alguma cirurgia recente? </label><br>
    Sim
	<input type="radio" required name="cirec" name="cirec" id="cirec" value="S" <?php if($cirec=="S") { echo "checked"; } ?>  /> 
    Não
    <input type="radio" required name="cirec" name="cirec" id="cirec" value="N" <?php if($cirec=="N") { echo "checked"; } ?>  /> |
    Se sim, qual?
    <input type="text" name="cirecdetalhe" id="cirecdetalhe" placeholder="Descrição" value="<?php echo $cirecdetalhe ?>" size="50" maxlength="100" />
</p>
    <label for="pmp">Possui marca passo? </label><br>
    Sim
	<input type="radio" required name="pmp" name="pmp" id="pmp" value="S" <?php if($pmp=="S") { echo "checked"; } ?>  /> 
    Não
    <input type="radio" required name="pmp" name="pmp" id="pmp" value="N" <?php if($pmp=="N") { echo "checked"; } ?>  /> 
</p>
    <label for="ppp">Possui pinos ou placas? </label><br>
    Sim
	<input type="radio" required name="ppp" name="ppp" id="ppp" value="S" <?php if($ppp=="S") { echo "checked"; } ?>  /> 
    Não
    <input type="radio" required name="ppp" name="ppp" id="ppp" value="N" <?php if($ppp=="N") { echo "checked"; } ?>  /> 
</p>
    <label for="diab">Possui diabetes? </label><br>
    Sim
	<input type="radio" required name="diab" name="diab" id="diab" value="S" <?php if($diab=="S") { echo "checked"; } ?>  /> 
    Não
    <input type="radio" required name="diab" name="diab" id="diab" value="N" <?php if($diab=="N") { echo "checked"; } ?>  /> 
</p>
    <label for="epil">Possui epilepsia? </label><br>
    Sim
	<input type="radio" required name="epil" name="epil" id="epil" value="S" <?php if($epil=="S") { echo "checked"; } ?>  /> 
    Não
    <input type="radio" required name="epil" name="epil" id="epil" value="N" <?php if($epil=="N") { echo "checked"; } ?>  /> 
</p>
    <label for="tumcan">Tumores ou câncer? </label><br>
    Sim
	<input type="radio" required name="tumcan" name="tumcan" id="tumcan" value="S" <?php if($tumcan=="S") { echo "checked"; } ?>  /> 
    Não
    <input type="radio" required name="tumcan" name="tumcan" id="tumcan" value="N" <?php if($tumcan=="N") { echo "checked"; } ?>  /> 
    Se sim, qual?
    <input type="text" name="tumcamdetalhe" id="tumcamdetalhe" placeholder="Descrição" value="<?php echo $tumcandetalhe ?>" size="50" maxlength="100" />
</p>
    <label for="tama">Faz uso de medicamentos? </label><br>
    Sim
	<input type="radio" required name="tama" name="tama" id="tama" value="S" <?php if($tama=="S") { echo "checked"; } ?>  /> 
    Não
    <input type="radio" required name="tama" name="tama" id="tama" value="N" <?php if($tama=="N") { echo "checked"; } ?>  /> 
    Se sim, qual?
    <input type="text" name="tamadetalhe" id="tamadetalhe" placeholder="Descrição" value="<?php echo $tamadetalhe ?>" size="50" maxlength="100" />
</p>
    <label for="proda">Produtos que utiliza atualmente? </label><br>
    Sim
	<input type="radio" required name="proda" name="proda" id="proda" value="S" <?php if($proda=="S") { echo "checked"; } ?>  /> 
    Não
    <input type="radio" required name="proda" name="proda" id="proda" value="N" <?php if($proda=="N") { echo "checked"; } ?>  /> 
    Se sim, qual?
    <input type="text" name="prodadetalhe" id="prodadetalhe" placeholder="Descrição" value="<?php echo $prodadetalhe ?>" size="50" maxlength="100" />
</p>
    <label for="apr">Possui problemas renais? </label><br>
    Sim
	<input type="radio" required name="apr" name="apr" id="apr" value="S" <?php if($apr=="S") { echo "checked"; } ?>  /> 
    Não
    <input type="radio" required name="apr" name="apr" id="apr" value="N" <?php if($apr=="N") { echo "checked"; } ?>  /> 
    Se sim, qual?
    <input type="text" name="aprdetalhe" id="aprdetalhe" placeholder="Descrição" value="<?php echo $aprdetalhe ?>" size="50" maxlength="100" />
</p>
    <label for="alerg">Possui alergia a cremes ou loções? </label><br>
    Sim
	<input type="radio" required name="alerg" name="alerg" id="alerg" value="S" <?php if($alerg=="S") { echo "checked"; } ?>  /> 
    Não
    <input type="radio" required name="alerg" name="alerg" id="alerg" value="N" <?php if($alerg=="N") { echo "checked"; } ?>  /> 
    Se sim, qual?
    <input type="text" name="alergdetalhe" id="alergdetalhe" placeholder="Descrição" value="<?php echo $alergdetalhe ?>" size="50" maxlength="100" />
</p>
    Plano desejado para o tratamento
    <input type="text" required name="plandesejado" name="plandesejado" id="plandesejado" placeholder="Descreva o plano desejado" value="<?php echo $plandesejado ?>" size="50" maxlength="100" />

<p>
	<label>
		<input type="submit" name="Gravar" id="Gravar" value="Alterar" />
	</label>	
</p>
</form>

<?php
rodape();
?>  