<section class="cadastros">
  	<div class="container">
  		<h2>&raquo; Cadastro de Aluno</h2>

  		<form action="./dados/insert-cad-aluno.php" class="form-cadastro" method="post">
  			<input type="text" name="nome" id="nome" placeholder="Nome" required="">
        <input type="text" name="mae" id="filiacao" placeholder="Nome da Mãe">
  			<input type="text" name="pai" id="filiacao" placeholder="Nome do Pai">
  			<input type="date" name="data" id="data" required="">
  			<select name="turma" id="turma">
  				<option value="">Selecione a Turma</option>
          <?php
            $result_turma = "SELECT * FROM turma";
            $resultado_turma = mysqli_query(DBConect(), $result_turma);
            while($row_turma = mysqli_fetch_assoc($resultado_turma)){?>
              <option value="<?php echo $row_turma['id'];?>"><?php echo $row_turma['nomeTurma'];?> </option><?php 
            }
          ?>
  			</select>
  			<br>
  			<button type="submit" class="btnOk">Cadastrar</button>
  		</form>
  	</div>
  </section>