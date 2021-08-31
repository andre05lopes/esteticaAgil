<?php
require "funcoes.php";
cabecalho();
menu();
//acesso();

$pesquisa = $_POST["txtpesquisa"];
$nome = $_POST["txttipo"];
$con = mysqli_connect("localhost","root","","estetica_agil");

$sql = "SELECT * FROM produtos WHERE $nome LIKE '%$pesquisa%'";
$res = mysqli_query($con,$sql);

echo "Resultado da pesquisa por <b>$_POST[txtpesquisa]:
</b><br>";

$conta=0;

echo "<table width='100%' cellpadding=5>
<tr>
<td>Código</td>
<td>Nome</td>
<td>Qtd</td>
<td>Marca</td>
<td>Preço</td>
<td>Descrição</td>
</tr>";

while($row = mysqli_fetch_array($res)){
    $conta = 1;
    echo "<tr bgcolor='#cccccc'>
    <td>$row[0]</td>
    <td> <a href='produtoDetalhe.php?txttipo=$row[0]'>
    $row[1]</a></td>
    <td>$row[2]</td>
    <td>$row[3]</td>
    <td>$row[4]</td>
    <td>$row[5]</td>
    <td>$row[6]</td>
    </tr>";
}

echo "</table><p>";

if($conta==0){
    echo "<br><i>Não foi encontrado nenhum produto para a consulta: 
    <b>$_POST[txtpesquisa]</b>";
    echo "<p>Tentando por todas as marcas...<p></i><br>";

    //por título
    echo "<hr width='50%' align='left'>";
    $sql = "select * from produtos where marca like '%pesquisa%'";
    $res = mysqli_query($con,$sql);
    echo "Resultado da pesquisa por <b>$_POST[txtpesquisa]
    <b><br>";

   /* $conta = 0;
    echo "<table width='50%'>
    <tr>
    <td>Código</td>
    <td>Nome</td>
    <td>Qtd</td>
    <td>Preço</td>
    <td>Descrição</td>
    <td>IMG</td>
    </tr>"; */

    while($row = mysqli_fetch_array($res)){
        $conta = 1;
        echo "<tr bgcolor='#cccccc'>
        <td>$row[0]</td>
        <td><a href='produtoDetalhe.php?txttipo=$row[0]'>
        $row[1]</a></td>
        <td>$row[2]</td>
        <td>$ro2[3]</td>
        <td>$ro2[4]</td>
        <td>$ro2[5]</td>
        <td>$row[6]</td>
        </tr>";
    }
}
rodape();
?>