<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$id = $_GET["id"];

$con = mysqli_connect("localhost","root","","estetica_agil");

$sql = "SELECT * FROM cliente WHERE id = $id";
$res = mysqli_query($con,$sql);

//Varrer as linhas da instrução SQL
while ($row = mysqli_fetch_array($res)) {
	$id		            =    $row[0];
	$nome               =    $row[1];
	$cpf                =    $row[2];
	$endereco           =    $row[3];
	$cep                =    $row[4];
	$num_residencia     =    $row[5];
	$complemento        =    $row[6];
    $cidade             =    $row[7];
    $estado             =    $row[8];
    $num_cel            =    $row[9];
    $ddd_cel            =    $row[10];
    $num_tel            =    $row[11];
    $ddd_tel            =    $row[12];
    $email              =    $row[13];
    $genero             =    $row[14];
    $dtnasc             =    $row[15];
}

?>
<body><p><br>
<form id="f1" name="f1" method="post" action="gravarAltCliente.php" >
<input type="hidden" name="id" value="<?php echo $id ?>" />

<label for="nome">Nome: *</label>
<input type="text" required name="nome" id="nome" placeholder="Infome o nome" value="<?php echo $nome ?>" size="70" maxlength="100" />
</p>
<label for="cpf">CPF: *</label>
<input type="text" required name="cpf" id="cpf" placeholder="Digite o CPF" value="<?php echo $cpf ?>" size="50" maxlength="50" />

</p>
<label for="dtnasc">Nascimento: *</label>
<input type="date" name="dtnasc" id="dtnasc" value="<?php echo $dtnasc ?>"/>

</p>
<label for="genero">Gênero: </label><br>
Masculino
<input type="radio" name="genero" id="genero" value="M" <?php if($genero=="M") { echo "checked"; } ?> /> |
Feminino
<input type="radio" name="genero" id="genero" value="F" <?php if($genero=="F") { echo "checked"; } ?> /> |
Outros
<input type="radio" name="genero" id="genero" value="O" <?php if($genero=="O") { echo "checked"; } ?> /> |
Indefinido
<input type="radio" name="genero" id="genero" value="I" <?php if($genero=="I") { echo "checked"; } ?> /> |

</p>
<label for="endereco">Endereço: *</label>
<input type="text" name="endereco" required name="endereco" id="endereco" placeholder="Digite o endereço"
value="<?php echo $endereco ?>" size="70" maxlength="100" />

</p>
<label for="cep">CEP: *</label>
<input type="text" name="cep" required name="cep" id="cep" placeholder="12900-000"
value="<?php echo $cep ?>" size="30" maxlength="30" />

</p>
<label for="num_resid">Residência: *</label>
<input type="text" name="num_resid" required name="num_resid" id="num_resid" placeholder="Nº"
value="<?php echo $num_residencia ?>" size="8" maxlength="8" />

</p>

<label for="complemento">Complemento:</label>
<input type="text" name="complemento" id="complemento" placeholder="Casa, Apto etc"
value="<?php echo $complemento ?>" size="12" maxlength="15" />

</p>

<label for="cidade">Cidade: *</label>
<input type="text" name="cidade" required name="cidade" id="cidade" placeholder="Informe a cidade"
value="<?php echo $cidade ?>" size="50" maxlength="60" />

</p>

<label for="estado">Estado: *</label>
<input type="text" name="estado" required name="estado" id="estado" placeholder="Estado"
value="<?php echo $estado ?>" size="4" maxlength="2" />

</p>

</p>
<label for="ddd_cel">DDD: *</label>
<input type="text" name="ddd_cel" required name="ddd_cel" id="ddd_cel" placeholder="Informe o DDD"
value="<?php echo $ddd_cel ?>" size="13" maxlength="2" />
<label for="num_cel">Celular: *</label>
<input type="text" name="num_cel" required name="num_cel" id="num_cel" placeholder="Informe o celular"
value="<?php echo $num_cel ?>" size="17" maxlength="9" />

</p>

</p>
<label for="ddd_tel">DDD:</label>
<input type="text" name="ddd_tel" id="ddd_tel" placeholder="Informe o DDD"
value="<?php echo $ddd_tel ?>" size="13" maxlength="2" />
<label for="num_cel">Telefone:</label>
<input type="text" name="num_tel" id="num_tel" placeholder="Informe o telefone"
value="<?php echo $num_tel ?>" size="16" maxlength="8" />

</p>

<label for="email">Email:</label>
<input type="text" name="email" id="email" placeholder="seuemail@seudominio.com"
value="<?php echo $email ?>" size="40" maxlength="50" />

</p>

<p>
<label>
    <input type="submit" name="Gravar" id="Gravar" value="Alterar" />
</label>
</p>
</form>

<?php
rodape();
?>