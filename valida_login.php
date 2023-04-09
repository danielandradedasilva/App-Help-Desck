<?php

    session_start();

//variavel que verifica se a autenticação foi realizada
$usuarioAutenticado = false;

//usuarios do sistema
$usuarioApp = [
['email' => 'adm@teste.com.br', 'senha' => '123456'],
['email' => 'user@teste.com.br', 'senha' => 'abcd'],
['email' => 'danny83910@gmail.com', 'senha' => 'Daniel83'],
['email' => 'gustavo@gmail.com', 'senha' => '1234']
];

foreach ($usuarioApp as $user) {

   if ($user['email'] == $_POST['email'] && $user  ['senha'] == $_POST['senha']) {
        $usuarioAutenticado = true;
   }
}

if ($usuarioAutenticado) {
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php');
}else{
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');
}
?>