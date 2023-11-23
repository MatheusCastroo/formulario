<?php
//print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){ //Acessar o sistema
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    print_r('Email: '. $email);
    print_r('Senha: '. $senha);
}
else { // Não acessa o sistema e retorna para a pagina de login
    header('Location: login.php');
}
?>