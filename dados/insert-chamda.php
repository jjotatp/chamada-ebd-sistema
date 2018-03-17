<?php
    require 'config.php';
    require 'connection.php';
    require 'database.php';



// Pega os campos do formulário
    ($valores = array(
        'ano'           => $_POST['ano'],
        'mes'           => $_POST['mes'],
        'dia'           => $_POST['dia'],
        'id_aluno'      => $_POST['id'],
        'id_professor'  => $_POST['professor'],
        'id_turma'      => $_POST['revista']
    );

    // Recebe o valor de presença.
    $presenca =  $_POST['presenca'];
    
    // Valida se a presença é real.
    if ($presenca == "1"){
        // Manda o valor para o vetor.
        $valores["presenca"] = true;
    } else {
        $valores["presenca"] = false;
    }

// se sucesso volta para página de início
    // $grava = "INSERT INTO 'chamada' ('id', 'ano', 'mes', 'dia', 'id_aluno', 'id_professor', 'id_turmas') VALUES (NULL, ''.$ano.'', ''.$mes.'', ''.$dia.'', ''.$aluno.'', ''.$professor.'')";

    $grava = DBCreate('chamada', $valores);
    if ($grava) {
        print "<script>window.location.href='../conteudo.php?id=chamada-turmas'</script>";
    } else {
        echo '=/';
    };
?>