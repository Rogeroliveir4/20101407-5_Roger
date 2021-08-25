<?php

$title = 'Contato';
$page = 'contato';
$css = 'contato.css';
if(isset($_SESSION['mensagem'])) {
    unset($_SESSION['mensagem']);
}

//formulário de envio
if($_POST && !empty($_POST)) {
    $nome = filter_input(INPUT_POST, 'nome');

    echo "$nome, sua mensagem foi enviada com sucesso!";// exibindo nome do usuário + mensagem de envio

}

