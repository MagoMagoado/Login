<?php

    //pega os daods do JavaScript, do FormData
    $username = isset($_POST['nome']) ? $_POST['nome'] : '';
    $password = isset($_POST['senha']) ? $_POST['senha'] : '';

    $ok = true;
    $messages = array();

    if ( !isset($username) || empty($username) ) {
        $ok = false;
        $messages[] = 'Username não pode estar vazio!';
    }

    if ( !isset($password) || empty($password) ) {
        $ok = false;
        $messages[] = 'Password não pode estar vazio!';
    }

    if ($ok) {
        if ($username === 'admin' && $password === 'admin') {
            $ok = true;
            $messages[] = 'Sucesso no login!';
        } else {
            $ok = false;
            $messages[] = 'Username ou Password incorreto!';
        }
    }

    echo json_encode(
        array(
            //o ok vai dizer se o login está correto
            'ok' => $ok,
            'messages' => $messages
        )
    );

?>