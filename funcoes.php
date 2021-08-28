<?php  
function cabecalho(){
	session_start();
	if (isset($_SESSION['login'])){
		$login = $_SESSION['login'];
	}else{
		$login="";
	}
	echo "<html>
	<head>
	<title>Estética Ágil</title>
	<link href=\"estilo.css\" rel=\"stylesheet\"
	type=\"text/css\">
	<script>
	function excluir(url,texto){
		if (confirm(\"Confirma exclusão: \"+texto+\" ?\")){
			document.location = url;
		}
	}
	</script>
	</head>
	<body>
	<div id=\"principal\">
	<div id=\"cabecalho\">
	Estética Ágil <br> Controle e Gestão de Clínicas de Estéticas
	<table width=\"100%\">
	<tr> 
	<table align=\"center\">
	<td>
	<img src=\"imagens/book1.jpg\" width=\"110\" height=\"130\" alt=\"Biblioteca Virtual\">
	</td>
	<td>
	<div id=\"usuario\">Logado como: $login</div>
	</td>
	<td>
	<img src=\"imagens/book2.jpg\" width=\"110\" height=\"130\" alt=\"Biblioteca Virtual\">
	</td>
	</tr>
	</table>
	</div>
	<div id=\"centro\">";
}

function rodape(){
	echo "</div>
	<div id=\"rodape\">
	Estética Ágil - 2021 - Todos os direitos reservados</div>
	</div></body></html>";
}

function retornar($url){
	echo "<a href=\"url\">Retornar</a>";
}

function acesso(){
	@session_start();
	if (!isset($_SESSION['autenticacao'])){
		header("Location: index.php?erro=login");
		exit;
	}
}

function menu(){
	echo "<div id=\"menu\">
	<a href=\"cadCliente.php\">Cadastro de Cliente</a> |
	<a href=\"cadUsuario.php\">Cadastra Usuarios</a> |
	<a href=\"cadProduto.php\">Novo Produto</a> |
	<a href=\"cadServico.php\">Serviços</a> |
	<a href=\"consultaProduto.php\">Consultar Produtos</a> |
	<a href=\"consultaCliente.php\">Consultar Cliente</a> |
	<a href=\"consultaServico.php\">Consultar Serviços</a> |
	<a href=\"vendas.php\">Vendas</a> |
	<a href=\"relatorio.php\">Relatorio</a> |
	<a href=\"acessos.php\">Acessos Sistema</a> |
	<a href=\"mudasenha.php\">Alterar Senha</a> |
	<a href=\"alterarProduto.php\">Alterar Produto</a> |
	<a href=\"logout.php\">Sair</a></div>";
	
}

function voltar(){
	echo "<p align=\"center\">
	<input type=\"button\" value=\"Voltar\" onclick=\"window.history.back()\"></p>";
}

function datahoral(){
	$datah = array();
	$datal = date("Y")."-".date("m")."-".date("d");
	$data = getdate();
	$hora = $data["hours"].":".$data["minutes"].":".$data["seconds"];
	$datah[0] = $datal;
	$datah[1] = $hora;
	return $datah;
}

function inverterdata($datal){
	$aux = explode('-',$datal);
	$datan = $aux[2]."-".$aux[1]."-".$aux[0];
	return $datan;
}

?>