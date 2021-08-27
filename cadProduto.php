<?php
//Utilizando as funções cabeçalho, rodapé e menu disponíveis no arquivo funcoes.php
require "funcoes.php";
cabecalho();
menu();
//acesso();
?>
<h1>Cadastro de Produtos</h1>
<form id="f1" name="f1" method="post" action="gravarProduto.php" enctype="multipart/form-data" >

		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" placeholder="Infome o nome do produto" size="100" maxlength="100" />
	
    </p>

	    <label for="qtd">Quantidade: </label>
	    <input type="text" name="qtd" id="qtd" placeholder="Nº" size="5" maxlength="8" />

    </p>

	    <label for="marca">Marca: </label>
	    <input type="text" name="marca" id="marca" placeholder="Marca do produto" size="50" maxlength="50" />

	</p>
    
		<label for="preco">Preço R$: </label>
		<input type="text" name="preco" id="preco" placeholder="R$ 0.00" size="15" maxlength="15" />

    </p>
		<label for="descricao">Descrição do Produto: </label>
		<input type="text" name="descricao" id="descricao" size="100" maxlength="100"
        placeholder="Descreva os detalhes do produto"/>

    </p>
    
		<label for="img">Selecione uma imagem </label><br>
		<input type="file" name="img"/>
	
	<p>
		<label>
			<input type="submit" name="Salvar" id="Gravar" value="Salvar" />
		</label>
		<label>
			<input type="reset" name="Limpar" id="Limpar" value="Limpar" />
		</label>
	</p>
</form>
<?php
rodape();
?>