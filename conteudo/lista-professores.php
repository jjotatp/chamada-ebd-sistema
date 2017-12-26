<section class="">
  	<div class="container">
		
		<ul>
		<?php
			$professor = DBRead('professor', null, 'nome, turma');
				foreach ($professor as $cl){
				echo '<li class="chamada-aluno">
					<div class="chamada-conteudo">';
			   	echo '<h3>'.$cl['nome'].'</h3>';
			    echo '<p>Turma: '.$cl['turma'].'</p>';
			  echo '</div>
			  	   </li>'; 	
				}
			?>
  		</ul>
  	</div>
</section>

