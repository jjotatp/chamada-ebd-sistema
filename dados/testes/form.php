<style>.esconder {display: none;} h3{margin-bottom: -20px;}</style>

<form action="valida-form.php" method="post">

		<!-- Nome vindo do Banco de Dados -->
		<h3><?php $nome = "Joao"; echo $nome ?></h3>
	
		<!-- Coloca o nome do banco no input || E a classe oculta o campo -->
		<input type="text" name="nome" value="<?php echo $nome ?>" class="esconder"><br>
	
		<!-- Verifica se o aluno esta presente -->
		<input type="checkbox" name="presenca" value="1">Presente?<br><br>

		<!-- Nome vindo do Banco de Dados -->
		<h3><?php $nome = "Pedro"; echo $nome ?></h3>
	
		<!-- Coloca o nome do banco no input || E a classe oculta o campo -->
		<input type="text" name="nome" value="<?php echo $nome ?>" class="esconder"><br>
	
		<!-- Verifica se o aluno esta presente -->
		<input type="checkbox" name="presenca" value="1">Presente?<br><br>

		





		<!-- Envia a presença e o nome do aluno -->
		<input type="submit" value="Enviar" onclick="pegaNome()" id="demo">

		<script>
			// Função responsavel por passar o valor da tag H3 oara o input
			function pegaNome(){
				 var x = document.getElementsByTagName("H3");
    			document.getElementById("demo").innerHTML = x[1].innerHTML;
    		};
		</script>

</form>

<!-- <form action="valida-form.php" method="post">		
		<input type="text" name="nome">Presente<br><hr><br>
		<input type="checkbox" name="presenca" value="0">Presente<br><hr><br>
	
		<input type="submit" value="Enviar">
</form> -->