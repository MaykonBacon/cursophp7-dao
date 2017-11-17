<?php
//Index - requer o config e executa o SQL já fazendo uma consulta
require_once("config.php");

#Primeiro método (simples)
##$sql = new Sql();
##$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//Mostra na tela como um Json
##echo json_encode($usuarios);

//CARREGAR UM USUÁRIO
#$root = new Usuario();
#$root->loadById(3);
#echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search)

//Carrega um usuário usando o login e a senha
//$usuário = new Usuario();
//$usuário->login("root", "sadsdd");
//echo $usuário;

//Insert de um novo usuário
//$aluno = new Usuario("aluno", "@alun0");
//inserir
//$aluno->insert();
//echo $aluno;

$usuário = new Usuario();
$usuário->loadById(13);
$usuário->update("professor", "mestre");
echo $usuário;

?>