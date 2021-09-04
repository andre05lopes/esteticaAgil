<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$id = $_GET["id"];

$con = mysqli_connect("localhost","root","","estetica_agil");

$sql = "SELECT * FROM despesas WHERE id = $id";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($res)) {
	$id	   =    $row[0];
	$tipo  =    $row[1];
	$valor =    $row[2];
	$qtd   =    $row[3];
    $data  =    $row[4];
		
}
?>
<body><p><br>
<h1 align="center">Alterar Despesa</h1>
    <form id="f1" name="f1" method="post" action="gravarAltDespesa.php" enctype="multipart/form-data" >
    <input type="hidden" name="id" value="<?php echo $id ?>" />

    <label for="nome">Tipo de despesa:</label>
		<input type="text" name="tipo" id="tipo" size="70" maxlength="100" value="<?php echo $tipo ?>" />
		
	</p>
		<label for="valor">Preço R$: </label>
		<input type="text" name="valor" id="valor" size="15" maxlength="15" value="<?php echo $valor ?>" />

    </p>
		<label for="qtd">Quantidade: </label>
		<input type="text" name="qtd" id="qtd" size="5" maxlength="5" value="<?php echo $qtd ?>"/>
    </p>
		<label for="data">Data de lançamento: </label>
		<input type="date" name="data" id="data" size="15" maxlength="15" value="<?php echo $data ?>" />
	<p>
		<label>
			<input type="submit" name="Salvar" id="Gravar" value="Gravar" />
		</label>
		<label>
			<input type="reset" name="Limpar" id="Limpar" value="Limpar" />
		</label>
	</p>
</form>
<?php
rodape();
?>

