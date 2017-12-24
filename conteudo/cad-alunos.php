<section class="cadastros">
  	<div class="container">
  		<h2>&raquo; Cadastro de Aluno</h2>

  		<form action="./dados/insert-cad-aluno.php" class="form-cadastro" method="post">
  			<input type="text" name="nome" id="nome" placeholder="Nome" required="">
        <input type="text" name="mae" id="filiacao" placeholder="Nome da Mãe">
  			<input type="text" name="pai" id="filiacao" placeholder="Nome do Pai">
  			<input type="date" name="data" id="data" required="">
<!--   			<select name="turma" id="turma">
  				<option value="">Selecione a Turma</option>
  				<option value="adultos">Adultos</option>
  				<option value="infantil">Infantil</option>
  				<option value="juniores">Juniores</option>
  				<option value="adolescenter">Adolescentes</option>
  			</select> -->
  			<br>
  			<button type="submit" class="btnOk">Cadastrar</button>
  		</form>
  	</div>
  </section>