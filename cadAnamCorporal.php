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
<h1 align="center">Ficha de Anamnese Corporal</h1>
<form method="POST" enctype="multipart/form-data" action="gravarAnamCorporal.php" >

<labeL for="nome">Nome do paciente:</label>
        <select name="nome">
            <option value="null" selected="selected">Selecione um nome</option>
                <?php
                    while ($linha = $regNome->fetch() ) {
                        $str = "<option ";
                            if ($linha["nome"] == $registro["nome"]){
                                //$str .= "selected = 'selected' ";
                            }
                                $str .= " value='" 
                                    . $linha['nome']
                                        ."'>". $linha['nome']. "</option>" ; 
                                            echo $str;
                        }                
                ?>                
            </select>
    
           
</p>
	<label for="peso">Peso: * </label>    
	<input type="text" required name="peso" name="peso" id="peso" placeholder="Ex.: 00" size="6" maxlength="6"/> kg

</p>
	<label for="busto">Busto: * </label>    
	<input type="text" required name="busto" name="busto" id="busto" placeholder="Ex.: 00" size="6" maxlength="6"/> Cm

</p>
	<label for="braco_esq">Braço esquerdo: * </label>    
	<input type="text" required name="braco_esq" name="braco_esq" id="braco_esq" placeholder="Ex.: 00" size="6" maxlength="6"/> Cm

</p>
	<label for="braco_dir">Braço direito: * </label>    
	<input type="text" required name="braco_dir" name="braco_dir" id="braco_dir" placeholder="Ex.: 00" size="6" maxlength="6"/> Cm

</p>
	<label for="abdomen">Abdômen: * </label>    
	<input type="text" required name="abdomen" name="abdomen" id="abdomen" placeholder="Ex.: 00" size="6" maxlength="6"/> Cm

</p>
	<label for="cintura">Cintura: * </label>    
	<input type="text" required name="cintura" name="cintura" id="cintura" placeholder="Ex.: 00" size="6" maxlength="6"/> Cm

</p>
	<label for="culote">Culote: * </label>    
	<input type="text" required name="culote" name="culote" id="culote" placeholder="Ex.: 00" size="6" maxlength="6"/> Cm

</p>
	<label for="coxa_esq">Coxa esquerda: * </label>    
	<input type="text" required name="coxa_esq" name="coxa_esq" id="coxa_esq" placeholder="Ex.: 00" size="6" maxlength="6"/> Cm

</p>
	<label for="coxa_dir">Coxa direita: * </label>    
	<input type="text" required name="coxa_dir" name="coxa_dir" id="coxa_dir" placeholder="Ex.: 00" size="6" maxlength="6"/> Cm

</p>
	<label for="pantur_esq">Panturrilha esquerda: * </label>    
	<input type="text" required name="pantur_esq" name="pantur_esq" id="pantur_esq" placeholder="Ex.: 00" size="6" maxlength="6"/> Cm

</p>
	<label for="pantur_dir">Panturrilha direita: * </label>    
	<input type="text" required name="pantur_dir" name="pantur_dir" id="pantur_dir" placeholder="Ex.: 00" size="6" maxlength="6"/> Cm

</p>
    <label for="cpmts">Costuma permanecer muito tempo sentado(a)? </label><br>
    Sim
	<input type="radio" required name="cpmts" name="cpmts" id="cpmts" value="S"  /> 
    Não
    <input type="radio" required name="cpmts" name="cpmts" id="cpmts" value="N"  /> 

</p>
    <label for="antcir">Possui antecedentes cirúrgicos? </label><br>
    Sim
	<input type="radio" required name="antcir" name="antcir" id="antcir" value="S"  /> 
    Não
    <input type="radio" required name="antcir" name="antcir" id="antcir" value="N"  /> |
    Se sim, qual?
    <input type="text" name="antcirdetalhe" id="antcirdetalhe" placeholder="Descrição" size="50" maxlength="100" />

</p>
    <label for="tte">Realizou algum tratamento estético? </label><br>
    Sim
	<input type="radio" required name="tte" name="tte" id="tte" value="S"  /> 
    Não
    <input type="radio" required name="tte" name="tte" id="tte" value="N"  /> 

</p>
    <label for="atf">Pratica alguma atividade física? </label><br>
    Sim
	<input type="radio" required name="atf" name="atf" id="atf" value="S"  /> 
    Não
    <input type="radio" required name="atf" name="atf" id="atf" value="N"  /> |
    Se sim, qual?
    <input type="text" name="atfdetalhe" id="atfdetalhe" placeholder="Descrição" size="50" maxlength="100" />

</p>
    <label for="fum">Fumante? </label><br>
    Sim
	<input type="radio" required name="fum" name="fum" id="fum" value="S"  /> 
    Não
    <input type="radio" required name="fum" name="fum" id="fum" value="N"  /> 
    
</p>
    <label for="alib">Alimentação balanceada? </label><br>
    Sim
	<input type="radio" required name="alib" name="alib" id="alib" value="S"  /> 
    Não
    <input type="radio" required name="alib" name="alib" id="alib" value="N"  /> 

</p>
    <label for="ilf">Ingere líquidos com frequência? </label><br>
    Sim
	<input type="radio" required name="ilf" name="ilf" id="ilf" value="S"  /> 
    Não
    <input type="radio" required name="ilf" name="ilf" id="ilf" value="N"  /> 

</p>
    <label for="cirec">Alguma cirurgia recente? </label><br>
    Sim
	<input type="radio" required name="cirec" name="cirec" id="cirec" value="S"  /> 
    Não
    <input type="radio" required name="cirec" name="cirec" id="cirec" value="N"  /> |
    Se sim, qual?
    <input type="text" name="cirecdetalhe" id="cirecdetalhe" placeholder="Descrição" size="50" maxlength="100" />

</p>
    <label for="pmp">Possui marcapasso? </label><br>
    Sim
	<input type="radio" required name="pmp" name="pmp" id="pmp" value="S"  /> 
    Não
    <input type="radio" required name="pmp" name="pmp" id="pmp" value="N"  /> 

</p>
    <label for="ppp">Possui pinos ou placas? </label><br>
    Sim
	<input type="radio" required name="ppp" name="ppp" id="ppp" value="S"  /> 
    Não
    <input type="radio" required name="ppp" name="ppp" id="ppp" value="N"  /> |
    Se sim, qual?
    <input type="text" name="pppdetalhe" id="pppdetalhe" placeholder="Descrição" size="50" maxlength="100" />

</p>
    <label for="diab">Diabético? </label><br>
    Sim
	<input type="radio" required name="diab" name="diab" id="diab" value="S"  /> 
    Não
    <input type="radio" required name="diab" name="diab" id="diab" value="N"  /> 
    
</p>
    <label for="tvr">Tem varizes? </label><br>
    Sim
	<input type="radio" required name="tvr" name="tvr" id="tvr" value="S"  /> 
    Não
    <input type="radio" required name="tvr" name="tvr" id="tvr" value="N"  /> 
    
</p>
    <label for="cmr">Ciclo menstrual regular? </label><br>
    Sim
	<input type="radio" required name="cmr" name="cmr" id="cmr" value="S"  /> 
    Não
    <input type="radio" required name="cmr" name="cmr" id="cmr" value="N"  /> 
    
</p>
    <label for="tama">Toma alguma medicação atualmente? </label><br>
    Sim
	<input type="radio" required name="tama" name="tama" id="tama" value="S"  /> 
    Não
    <input type="radio" required name="tama" name="tama" id="tama" value="N"  /> |
    Se sim, qual?
    <input type="text" name="tamadetalhe" id="tamadetalhe" placeholder="Descrição" size="50" maxlength="100" />

</p>
    <label for="proda">Faz uso de algum produto? </label><br>
    Sim
	<input type="radio" required name="proda" name="proda" id="proda" value="S"  /> 
    Não
    <input type="radio" required name="proda" name="proda" id="proda" value="N"  /> |
    Se sim, qual?
    <input type="text" name="prodadetalhe" id="prodadetalhe" placeholder="Descrição" size="50" maxlength="100" />

</p>
    Plano desejado para o tratamento
    <input type="text" required name="plandesejado" name="plandesejado" id="plandesejado" placeholder="Descreva o plano desejado" size="50" maxlength="100" />

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