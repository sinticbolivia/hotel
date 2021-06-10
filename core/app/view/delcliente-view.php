<?php
$cliente = ClienteData::getById($_GET["id"]);
if( $client )
	$cliente->del();
Core::redir("./index.php?view=cliente");
?>