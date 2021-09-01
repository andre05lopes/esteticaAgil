<?php
//Utilizando as funções cabeçalho, rodapé e menu disponíveis no arquivo funcoes.php
require "funcoes.php";
include_once './Funcoes/conecta.php';
cabecalho();
menu();

$conexao = conectar();
$sqlCliente = "SELECT nome FROM cliente ORDER BY nome";
$regNome = $conexao->query($sqlCliente);

$resultado = $conexao->query($sqlCliente);
$registro = $resultado->fetch();

$sqlServico = "SELECT nome FROM servicos ORDER BY nome";
$regNomeServico = $conexao->query($sqlServico);

//acesso();
?>
<form method="POST" action="gravarAgendaConsulta.php" >
<h1 align="center">Agendamento de Consultas</h1>

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
    </p>
    
    <labeL for="nome">Procedimento:</label>
        <select name="servico">
            <option value="null" selected="selected">Selecione um procedimento</option>
               <?php
                   while ($linha = $regNomeServico->fetch() ) {
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
    </p>

		<label for="preco">Data: </label>
		    <input type="date" name="data" id="data" size="15" maxlength="15" />

    </p>
        <label for="hora">Horário: </label>
	        <input type="time" name="hora" id="hora" placeholder="00:00" size="6" maxlength="6" />
	
	<p>
		<label>
			<input type="submit" name="Salvar" id="Gravar" value="Agendar" />
		</label>
		<label>
			<input type="reset" name="Limpar" id="Limpar" value="Limpar" />
		</label>
	</p>
</form>
<?php
rodape();
?>