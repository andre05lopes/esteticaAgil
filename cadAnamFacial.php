<?php
//Utilizando as funções cabeçalho, rodapé e menu disponíveis no arquivo funcoes.php
require "funcoes.php";
include_once './Funcoes/conecta.php';
cabecalho();
menu();
//acesso();

$conexao = conectar();
$sqlCliente = "SELECT nome FROM cliente ORDER BY nome";
$regNome = $conexao->query($sqlCliente);
$resultado = $conexao->query($sqlCliente);
$registro = $resultado->fetch();


?>
<h1 align="center">Ficha de Anamnese Facial</h1>
<form id="f1" name="f1" method="POST" action="gravarAnamFacial.php" >

<labeL for="nome">Nome do paciente:</label>
        <select name="nome">
            <option value="null" selected="selected">Selecione um paciente</option>
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
	<label for="jtf">Já realizou algum tratamento facial? </label><br>
    Sim
	<input type="radio" name="jtf" id="jtf" value="S" checked /> 
    Não
    <input type="radio" name="jtf" id="jtf" value="N" checked /> 
</p>
    <label for="robjt">O resultado atendeu os objetivos desejados? </label><br>
    Sim
	<input type="radio" name="robjt" id="robjt" value="S" checked /> 
    Não
    <input type="radio" name="robjt" id="robjt" value="N" checked /> 
</p>
    <label for="aapp">Apresenta algum problema de pele? </label><br>
    Sim
	<input type="radio" name="aapp" id="aapp" value="S" checked /> 
    Não
    <input type="radio" name="aapp" id="aapp" value="N" checked /> 
    Se sim, qual?
    <input type="text" name="aappdetalhe" id="aappdetalhe" placeholder="Descrição" size="50" maxlength="100" />
</p>
    <label for="grav">Gravidez? </label><br>
    Sim
	<input type="radio" name="grav" id="grav" value="S" checked /> 
    Não
    <input type="radio" name="grav" id="grav" value="N" checked /> 
</p>
    <label for="enfer">Possui ou teve alguma enfermidade? </label><br>
    Sim
	<input type="radio" name="enfer" id="enfer" value="S" checked /> 
    Não
    <input type="radio" name="enfer" id="enfer" value="N" checked /> |
    Se sim, qual?
    <input type="text" name="enferdetalhe" id="enferdetalhe" placeholder="Descrição" size="50" maxlength="100" />
</p>
    <label for="cirec">Alguma cirurgia recente? </label><br>
    Sim
	<input type="radio" name="cirec" id="cirec" value="S" checked /> 
    Não
    <input type="radio" name="cirec" id="cirec" value="N" checked /> |
    Se sim, qual?
    <input type="text" name="cirecdetalhe" id="cirecdetalhe" placeholder="Descrição" size="50" maxlength="100" />
</p>
    <label for="pmp">Possui marca passo? </label><br>
    Sim
	<input type="radio" name="pmp" id="pmp" value="S" checked /> 
    Não
    <input type="radio" name="pmp" id="pmp" value="N" checked /> 
</p>
    <label for="ppp">Possui pinos ou placas? </label><br>
    Sim
	<input type="radio" name="ppp" id="ppp" value="S" checked /> 
    Não
    <input type="radio" name="ppp" id="ppp" value="N" checked /> 
</p>
    <label for="diab">Possui diabetes? </label><br>
    Sim
	<input type="radio" name="diab" id="diab" value="S" checked /> 
    Não
    <input type="radio" name="diab" id="diab" value="N" checked /> 
</p>
    <label for="epil">Possui epilepsia? </label><br>
    Sim
	<input type="radio" name="epil" id="epil" value="S" checked /> 
    Não
    <input type="radio" name="epil" id="epil" value="N" checked /> 
</p>
    <label for="tumcan">Tumores ou câncer? </label><br>
    Sim
	<input type="radio" name="tumcan" id="tumcan" value="S" checked /> 
    Não
    <input type="radio" name="tumcan" id="tumcan" value="N" checked /> 
    Se sim, qual?
    <input type="text" name="tumcamdetalhe" id="tumcamdetalhe" placeholder="Descrição" size="50" maxlength="100" />
</p>
    <label for="tama">Faz uso de medicamentos? </label><br>
    Sim
	<input type="radio" name="tama" id="tama" value="S" checked /> 
    Não
    <input type="radio" name="tama" id="tama" value="N" checked /> 
    Se sim, qual?
    <input type="text" name="tamadetalhe" id="tamadetalhe" placeholder="Descrição" size="50" maxlength="100" />
</p>
    <label for="proda">Produtos que utiliza atualmente? </label><br>
    Sim
	<input type="radio" name="proda" id="proda" value="S" checked /> 
    Não
    <input type="radio" name="proda" id="proda" value="N" checked /> 
    Se sim, qual?
    <input type="text" name="prodadetalhe" id="prodadetalhe" placeholder="Descrição" size="50" maxlength="100" />
</p>
    <label for="apr">Possui problemas renais? </label><br>
    Sim
	<input type="radio" name="apr" id="apr" value="S" checked /> 
    Não
    <input type="radio" name="apr" id="apr" value="N" checked /> 
    Se sim, qual?
    <input type="text" name="aprdetalhe" id="aprdetalhe" placeholder="Descrição" size="50" maxlength="100" />
</p>
    <label for="alerg">Possui alergia a cremes ou loções? </label><br>
    Sim
	<input type="radio" name="alerg" id="alerg" value="S" checked /> 
    Não
    <input type="radio" name="alerg" id="alerg" value="N" checked /> 
    Se sim, qual?
    <input type="text" name="alergdetalhe" id="alergdetalhe" placeholder="Descrição" size="50" maxlength="100" />
</p>
    Plano desejado para o tratamento
    <input type="text" name="plandesejado" id="plandesejado" placeholder="Descreva o plano desejado" size="50" maxlength="100" />

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
rodape();
?>  