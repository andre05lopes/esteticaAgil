<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$id = $_GET["id"];

$con = mysqli_connect("localhost","root","","estetica_agil");

$sql = "SELECT * FROM produtos WHERE id = $id";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($res)) {
	$id		   =    $row[0];
	$nome      =    $row[1];
	$qtd       =    $row[2];
	$marca     =    $row[3];
	$preco     =    $row[4];
	$descricao =    $row[5];
	$img       =    $row[6];
		
}
?>
<body><p><br>
    <form id="f1" name="f1" method="post" action="gravaraltProduto.php" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php echo $id ?>" />

		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" placeholder="Infome o nome do produto" size="100" maxlength="100" value="<?php echo $nome ?>" />
	
    </p>

	    <label for="qtd">Quantidade: </label>
	    <input type="text" name="qtd" id="qtd" placeholder="Nº" size="5" maxlength="8" value="<?php echo $qtd ?>"/>

    </p>

	    <label for="marca">Marca: </label>
	    <input type="text" name="marca" id="marca" placeholder="Marca do produto" size="50" maxlength="50" value="<?php echo $marca ?>" />

	</p>
    
		<label for="preco">Preço R$: </label>
		<input type="text" name="preco" id="preco" placeholder="R$ 0.00" size="15" maxlength="15" value="<?php echo $preco ?>" />

    </p>
		<label for="descricao">Descrição do Produto: </label>
		<input type="text" name="descricao" id="descricao" size="100" maxlength="100"
        placeholder="Descreva os detalhes do produto" value="<?php echo $descricao ?>"/>

    </p>
    
		<label for="img">Foto </label>
		<input type="file" name="img" value="<?php echo $img ?>" />
	
	<p>
		<label>
			<input type="submit" name="Salvar" id="Gravar" value="Alterar" />
		</label>		
	</p>
</form>
<?php
rodape();
?>