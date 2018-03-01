<?php 
// Pega os campos do formulário
	$aluno =  $_POST['nome'];
    $presenca = $_POST['presenca'];

    if ($presenca == "1"){
        echo "$aluno, PRESENTE";
    }else {
        echo "$aluno,  FALTOU";
    };

    // $aluno = $_POST['nome'];
    // $presenca = $_POST['presenca'];
 
    // if ( $presenca == '0'){
    // 	echo "O $aluno Presente";
    // } else {
    // 	echo "$aluno Faltou";
    // }
?>