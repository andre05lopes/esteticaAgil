<?php
//Inserindo o cabeçalho e o menu contidos na "funcoes.php"
require "funcoes.php";
cabecalho();
menu();
//acesso();
?>

<!--
Formulário de cadastro de usuários
-->

<h1 align="center">Cadastro de Usuários do Sistema</h1>
<form id="f1" name="f1" method="post" action="gravarUsuario.php">

<p>Nome:
<label>
<input name="nome" type="text" id="nome" placeholder="Informe o nome" size="70" maxlength="100" />
</label>
</p>

<p>Login:
<label>
<input name="login" type="text" id="login" placeholder="Informe um id de usuário" size="50" maxlength="50" />
</label>
</p>

<p>Senha:
<label>
<input name="senha" type="password" id="txtsenha" placeholder="Informe uma senha" size="50" maxlength="50" />
</label>
</p>

<p>
<label>
<input type="submit" name="Gravar" id="Gravar" value="Salvar" />
</label>
<label>
<input type="reset" name="Limpar" id="Limpar" value="Limpar" />
</label>
</p>
</form>

<?php
//Inserindo o rodapé das funcoes.php
rodape();
?>