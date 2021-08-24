<?php
//Utilizando as funções cabeçalho, rodapé e menu disponíveis no arquivo funcoes.php
require "funcoes.php";
cabecalho();
menu();
?>
<h1>Cadastro de Cliente</h1>
<form id="f1" name="f1" method="post" action="gravarCliente.php" >

		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" placeholder="Infome o nome" size="70" maxlength="100" />
		
	</p>
		<label for="cpf">CPF: </label>
		<input type="text" name="cpf" id="cpf" placeholder="Digite o CPF" size="50" maxlength="50" />

    </p>
		<label for="dtnasc">Nascimento: </label>
		<input type="date" name="dtnasc" id="dtnasc" />

    </p>
		<label for="genero">Gênero: </label><br>
        Masculino
		<input type="radio" name="genero" id="genero" value="M" checked />
        Feminino
        <input type="radio" name="genero" id="genero" value="F" checked />
        Outros
        <input type="radio" name="genero" id="genero" value="O" checked />
		
	</p>
		<label for="endereco">Endereço:</label>
		<input type="text" name="endereco" id="endereco" placeholder="Digite o endereço" size="70" maxlength="100" />
		
	</p>
		<label for="cep">CEP:</label>
		<input type="text" name="cep" id="cep" placeholder="12900-000" size="30" maxlength="30" />
		
	</p>
		<label for="num_resid">Residência:</label>
		<input type="text" name="num_resid" id="num_resid" placeholder="Nº" size="8" maxlength="8" />
	
	</p>

		<label for="complemento">Complemento:</label>
		<input type="text" name="complemento" id="complemento" placeholder="Casa, Apto etc" size="12" maxlength="15" />
	
	</p>

		<label for="cidade">Cidade:</label>
		<input type="text" name="cidade" id="cidade" placeholder="Informe a cidade" size="50" maxlength="60" />
	
	</p>

		<label for="estado">Estado:</label>
		<input type="text" name="estado" id="estado" placeholder="Estado" size="4" maxlength="2" />
	
	</p>

    </p>
        <label for="ddd_cel">DDD:</label>
        <input type="text" name="ddd_cel" id="ddd_cel" placeholder="Informe o DDD" size="13" maxlength="2" />
		<label for="num_cel">Celular:</label>
		<input type="text" name="num_cel" id="num_cel" placeholder="Informe o celular" size="17" maxlength="9" />
	
	</p>

    </p>
        <label for="ddd_tel">DDD:</label>
        <input type="text" name="ddd_tel" id="ddd_tel" placeholder="Informe o DDD" size="13" maxlength="2" />
		<label for="num_cel">Telefone:</label>
		<input type="text" name="num_tel" id="num_tel" placeholder="Informe o telefone" size="16" maxlength="8" />
	
	</p>
    
        <label for="email">Email:</label>
		<input type="text" name="email" id="email" placeholder="Informe o e-mail" size="40" maxlength="50" />
	
	</p>
	
	<p>
		<label>
			<input type="submit" name="Gravar" id="Gravar" value="Gravar" />
		</label>
		<label>
			<input type="reset" name="Limpar" id="Limpar" value="Limpar" />
		</label>
	</p>
</form>
<?php
rodape();
?>