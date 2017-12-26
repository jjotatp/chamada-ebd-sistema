<section class="cadastros">
  	<div class="container">
  		<h2>&raquo; Cadastro de Professor</h2>

		<form method="post" action="./dados/insert-cad-professor.php" class="form-cadastro">
        <input type="text" name="professor" id="professor" placeholder="Nome do Professor" required="">
  			<input type="password" name="senha" id="senha" placeholder="Senha do Professor" required="">
  			<select name="turma" id="turma" required="">
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