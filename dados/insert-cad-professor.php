<?php
    require 'config.php';
    require 'connection.php';
    require 'database.php';


// Pega os campos do formulário
    $professor = array(
        'nome' => $_POST['professor'],
        'senha' => $_POST['senha'],
        'turma' => $_POST['turma']
    );
            

// se sucesso volta para página de início
    $grava = DBCreate('professor', $professor);       
        if ($grava) {
            print "<script>window.location.href='../conteudo.php?id=grato'</script>";
        } else {
            echo '=/';
        };
?>