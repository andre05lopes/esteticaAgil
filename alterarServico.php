<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$id = $_GET["id"];

$con = mysqli_connect("localhost","root","","estetica_agil");

$sql = "select * from servicos where id = $id";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($res)) {
	$id		   =    $row[0];
	$nome      =    $row[1];
	$descricao =    $row[2];
	$preco     =    $row[3];
		
}
?>
<body><p><br>
    <form id="f1" name="f1" method="post" action="gravarAltServico.php" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php echo $id ?>" />

		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" placeholder="Infome o nome do produto" size="70" maxlength="100" value="<?php echo $nome ?>" />
	
    </p>

        <label for="preco">Preço: </label>
	    <input type="text" name="preco" id="preco" placeholder="R$ 0.00" size="15" maxlength="15" value="<?php echo $preco ?>" />

	</p>

	    <label for="descricao">Descrição: </label>
	    <input type="text" name="descricao" id="descricao" placeholder="Descreva os detalhes do serviço" size="100" maxlength="100" value="<?php echo $descricao ?>"/>

		<label>
			<input type="submit" name="Salvar" id="Gravar" value="Alterar" />
		</label>		
	</p>
</form>
<?php
rodape();
?>