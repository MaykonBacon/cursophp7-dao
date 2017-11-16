<?php
//Index - requer o config e executa o SQL já fazendo uma consulta
require_once("config.php");
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//Mostra na tela como um Json
echo json_encode($usuarios);

?>