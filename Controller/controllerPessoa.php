<?php
require_once("../Model/pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome($_POST['txtNome']);
echo $pessoa->getNome();
echo nl2br("\n");
$pessoa->setEndereco($_POST['txtEndereco']);
echo $pessoa->getEndereco();
echo nl2br("\n");
$pessoa->setBairro($_POST['txtBairro']);
echo $pessoa->getBairro();
echo nl2br("\n");
$pessoa->setCep($_POST['txtCep']);
echo $pessoa->getCep();

?>