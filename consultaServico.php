<?php
require "funcoes.php";
cabecalho();
menu();
?>
<h1 align="center">Consultar Serviços</h1>
<form id="f1" name="f1" method="post" action="menu_resultadoServico.php" >
  
    <label>
        <input type="radio" name="txttipo" id="radio" value="nome" checked/>
        Nome do Serviço
    </label>
    
    </p>
<p>Digite a pesquisa:
    <label>
        <input name="txtpesquisa" type="text" id="txtpesquisa" size="70" maxlength="100" />
    </label>
    <label>
        <input type="submit" name="Pesquisar" id="Pesquisar" value="Pesquisar" />
    </label>
</p>
</form>

<?php
rodape();
?>