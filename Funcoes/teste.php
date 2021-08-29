<?php
include_once './conecta.php';

$conexao = conectar();
$sql = "SELECT nome FROM cliente ORDER BY nome";
$resultado = $conexao->query($sql);
$registro = $resultado->fetch();
$sqlNome = "SELECT nome FROM cliente ORDER BY nome";
$regNome = $conexao->query($sql);

?>

<html>
    <head>
        <title>Teste</title>
    </head>
    <body>
    <h1>Agendamento de Consultas</h1>
    <form method="POST" action="" >

    <labeL for="nome">Nome do cliente:</label>
                <select name="nome">
                    <option value="null" selected="selected">Selecione um cliente</option>
                    <?php
                        while ($linha = $regNome->fetch() ) {
                            $str = "<option ";
                            if ($linha["nome"] == $registro["nome"]){
                            $str .= "selected = 'selected' ";
                            }
                            $str .= " value='" 
                                . $linha['nome']
                                ."'>". $linha['nome']. "</option>" ; 
                                echo $str;
                        }
                
                ?>
                
            </select>
    </body>
</html>