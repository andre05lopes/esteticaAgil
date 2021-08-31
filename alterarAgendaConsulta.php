<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$id = $_GET["id"];

$con = mysqli_connect("localhost","root","","estetica_agil");

$sql = "SELECT * FROM agendamento WHERE id = $id";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($res)) {
	$id		           =    $row[0];
	$nome_cliente      =    $row[1];
	$data              =    $row[2];
	$hora              =    $row[3];
    $serviconome       =    $row[4];
		
}
?>
<body><p><br>
<body><p><br>
    <form id="f1" name="f1" method="post" action="gravarAltAgenda.php" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php echo $id ?>" />

		<label for="nome_cliente">Cliente: </label>
        <label for="nome_cliente"><?php echo $nome_cliente ?></label>				
        
	
    </p>

        <label for="data">Data: </label>
	    <input type="date" name="data" id="data" size="15" maxlength="15" value="<?php echo $data ?>" />

	</p>

	    <label for="hora">Horário: </label>
	    <input type="text" name="hora" id="hora" size="6" maxlength="6" value="<?php echo $hora ?>"/>

    </p>

	    <label for="serviconome">Procedimento: </label>
        <label for="serviconome"><?php echo $serviconome ?></label>

    </p>	    
		<label>
			<input type="submit" name="Salvar" id="Gravar" value="Alterar" />
		</label>		
	</p>
</form>
<?php
rodape();
?>