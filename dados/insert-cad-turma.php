<?php
    require 'config.php';
    require 'connection.php';
    require 'database.php';


// Pega os campos do formulário
    $turma = array(
        'nomeTurma' => $_POST['nomeTurma'],
        'revista' => $_POST['revista']        
    );
            

// se sucesso volta para página de início
    $grava = DBCreate('turma', $turma);       
        if ($grava) {
            print "<script>window.location.href='../conteudo.php?id=grato'</script>";
        } else {
            echo '=/';
        };
?>