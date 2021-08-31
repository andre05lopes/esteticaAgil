<?php
require "funcoes.php";
cabecalho();
menu();
?>
<h1 align="center">Consultar Agenda</h1>
<form id="f1" name="f1" method="POST" action="menu_resultadoAgenda.php" >
  
    <label>
        <input type="radio" name="txttipo" id="radio" value="nome_cliente" checked/>
        Nome do cliente
    </label>
    
    </p>
    <label>
    <p>Digite a pesquisa:
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