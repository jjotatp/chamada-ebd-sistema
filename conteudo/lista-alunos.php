<section class="">
  	<div class="container">
		
		<ul>
		<?php
			$aluno = DBRead('aluno', null, 'nome, idade');
				foreach ($aluno as $cl){
			echo '<li class="chamada-aluno">
					<div class="chamada-conteudo">';
			   	echo '<h3>'.$cl['nome'].'</h3>';
			    echo '<p>Idade: '.$cl['idade'].'</p>';
			  echo '</div>
			  	   </li>'; 	
				}
			?>
  		</ul>
  	</div>
</section>

