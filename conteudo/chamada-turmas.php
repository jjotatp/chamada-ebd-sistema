<section class="">
  	<div class="container">
	  	<div class="col12">
	  		<?php
				$turma = DBRead('turma', null, 'nomeTurma, revista');
					foreach ($turma as $cl){
	  		echo '<div class="col col3">
	  				<div class="item chamada-turma">
			  			<h1>'.$cl['nomeTurma'].'</h1>
			  			<h4>'.$cl['revista'].'</h4>
			  		</div>
			  		<div class="item chamada-make">
			  			<a href="conteudo.php?id=chamada-'.$cl['nomeTurma'].'">Fazer Chamada</a>
			  		</div>
			  	  </div>';
			  	}
	  		?>
	  	</div>
    </div>
 </section>