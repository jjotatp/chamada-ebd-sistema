<section class="">
  	<div class="container">
		
		<ul>
		<?php
			$turma = DBRead('turma', null, 'nomeTurma, revista');
				foreach ($turma as $cl){
				echo '<li class="chamada-aluno">
					<div class="chamada-conteudo">';
			   	echo '<h3>'.$cl['nomeTurma'].'</h3>';
			    echo '<p>Revista: '.$cl['revista'].'</p>';
			  echo '</div>
			  	   </li>'; 	
				}
			?>
  		</ul>
  	</div>
</section>

