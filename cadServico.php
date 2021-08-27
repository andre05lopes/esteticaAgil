<?php
//Utilizando as funções cabeçalho, rodapé e menu disponíveis no arquivo funcoes.php
require "funcoes.php";
cabecalho();
menu();
//acesso();
?>
<h1>Pacote de Serviços</h1>
<form id="f1" name="f1" method="post" action="gravarServico.php" >

		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" placeholder="Infome o nome do serviço" size="70" maxlength="100" />
		
	</p>
		<label for="preco">Preço R$: </label>
		<input type="text" name="preco" id="preco" placeholder="R$ 0.00" size="15" maxlength="15" />

    </p>
		<label for="descricao">Descrição do Serviço: </label>
		<input type="text" name="descricao" id="descricao" size="100" maxlength="100"
        placeholder="Descreva os detalhes do serviço"/>
	
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