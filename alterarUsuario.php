<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$id = $_GET["id"];

$con = mysqli_connect("localhost","root","","estetica_agil");

$sql = "SELECT * FROM usuarios WHERE id = $id";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($res)) {
	$id		   =    $row[0];
	$nome      =    $row[1];
	$login     =    $row[2];
	$senha     =    $row[3];
		
}
?>
<body><p><br>
<h1 align="center">Alterar Cadastro</h1>
    <form id="f1" name="f1" method="post" action="gravarAltUsuario.php" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php echo $id ?>" />
        <input type="hidden" name="nome" value="<?php echo $nome ?>" />
        <input type="hidden" name="login" value="<?php echo $login ?>" />
    
	<p>

	    <label for="senha">Nova Senha: </label>
	    <input type="password" name="senha" id="senha" required name="password" placeholder="Informe a nova senha" size="100" maxlength="100" value="<?php echo $senha ?>"/>

		<label>
			<input type="submit" name="Salvar" id="Gravar" value="Alterar" />
		</label>		
	</p>
</form>
<?php
rodape();
?>