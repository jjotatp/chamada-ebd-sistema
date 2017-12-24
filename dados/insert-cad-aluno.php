<?php
    require 'config.php';
    require 'connection.php';
    require 'database.php';


// Pega os campos do formulário
    $aluno = array(
        'nome' => $_POST['nome'],
        'nomeMae' => $_POST['mae'],
        'nomePai' => $_POST['pai'],
        'idade' => $_POST['data']
    );
            

// se sucesso volta para página de início
    $grava = DBCreate('aluno', $aluno);       
        if ($grava) {
            print "<script>window.location.href='../conteudo.php?id=grato'</script>";
        } else {
            echo '=/';
        };
?>