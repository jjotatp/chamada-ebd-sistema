<section class="cadastros">
  	<div class="container">
  		<h2>&raquo; Chamada</h2>

		<form action="" class="form-cadastro">
  			<select name="turma" id="turma" required="">
          <option value="">Selecione a Turma</option>
          <?php
            $result_turma = "SELECT * FROM turma";
            $resultado_turma = mysqli_query(DBConect(), $result_turma);
            while($row_turma = mysqli_fetch_assoc($resultado_turma)){?>
              <option value="<?php echo $row_turma['id'];?>"><a href="conteudo.php?id=chamada-<?php echo $row_turma['nomeTurma'];?>"><?php echo $row_turma['nomeTurma'];?></a></option><?php 
            }
          ?>
        </select>
  			<input type="date" name="data" id="data" required="">
  			<label for="data">Data da Aula</label>
  			<br>
  			<button class="btnOk"><a href="conteudo.php?id=chamada">Começar Chamada</a></button>
  		</form>
  	</div>
  </section>