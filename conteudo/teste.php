<section class="">
  	<div class="container">

  		<?php
			$aluno = DBRead('turma', null, 'nomeTurma, revista');
				foreach ($aluno as $al){
			  		echo '<h2>'.$al['nomeTurma'].'</h2>
			  		<hr>
			  		<form action="" class="form-cadastro">';
			  		echo '<input type="text" name="revista" id="revista" placeholder="'.$al['revista'].'" disabled>';
	  			}
	  	?>
		
		<ul>
		<?php
			$aluno = DBRead('aluno', null, 'nome, idade');
				foreach ($aluno as $cl){
			echo '<li class="chamada-aluno">
					<div class="chamada-conteudo">';
			   	echo '<h3>'.$cl['nome'].'</h3>';
			    echo '<p>Idade: '.$cl['idade'].'</p>';
			  echo '</div>
			  		<div class="chamada-presenca">
			  			<input type="checkbox" value="None" id="slideThree" name="check" checked />
			      		<label for="slideThree"></label>
			  		</div>
			  	   </li>'; 	
				}
			?>
  		</ul>
  	</div>
</section>

