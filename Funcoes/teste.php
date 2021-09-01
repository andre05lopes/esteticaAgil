<?php
include_once './conecta.php';

$conexao = conectar();
$sql = "SELECT * FROM produtos";



        //o nome do meu campo de auto incremento é codigo.. mas geralmente usa-se idNome_do_campo 
	
	
	$resultado = $conexao->query($sql);
	$registro = $resultado->fetch();

    while(!$linha.empty($registro)){
        echo $linha;

        
    }
	
/*
	header("content-type: image/jpeg");
	echo $registro2['img'];
	flush(); //limpa o buffer
*/




?>
