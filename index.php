<?php
//Index - requer o config e executa o SQL já fazendo uma consulta
require_once("config.php");

$root = new Usuario();

$root->loadById(3);
echo $root;

#Primeiro método (simples)
##$sql = new Sql();
##$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//Mostra na tela como um Json
##echo json_encode($usuarios);

?>