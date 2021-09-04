<?php
//Utilizando as funções cabeçalho, rodapé e menu disponíveis no arquivo funcoes.php
require "funcoes.php";
cabecalho();
menu();
//acesso();
?>
<h1>Lançamento de Despesas</h1>
<form id="f1" name="f1" method="post" action="gravarDespesa.php" >

		<label for="nome">Tipo de despesa:</label>
		<input type="text" name="tipo" id="tipo" placeholder="Ex.: Água, luz, IPTU etc." size="70" maxlength="100" />
		
	</p>
		<label for="valor">Preço R$: </label>
		<input type="text" name="valor" id="valor" placeholder="R$ 0.00" size="15" maxlength="15" />

    </p>
		<label for="qtd">Quantidade: </label>
		<input type="text" name="qtd" id="qtd" size="5" maxlength="5" placeholder="nº"/>
    </p>
		<label for="data">Data de lançamento: </label>
		<input type="date" name="data" id="data" size="15" maxlength="15" />
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