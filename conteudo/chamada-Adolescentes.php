<section class="">
  	<div class="container">
  		<h2>Nome da Turma</h2>
  		<hr>
  		<form action="" class="form-cadastro">
    		<select name="professor" id="professor" required="">
            <option value="">Selecione Professor</option>
            <?php
              $result_professor = "SELECT * FROM professor WHERE turma = 2";
              $resultado_professor = mysqli_query(DBConect(), $result_professor);
              while($row_professor = mysqli_fetch_assoc($resultado_professor)){?>
                <option value="<?php echo $row_professor['id'];?>"><?php echo $row_professor['nome'];?> </option><?php 
              }
            ?>
        </select>

        <?php
          $turma = "SELECT * FROM turma WHERE id = 2";
          $revista = mysqli_query(DBConect(), $turma);
          while($row_revista = mysqli_fetch_assoc($revista)){?>
            <input type="text" name="revista" id="revista" placeholder="<?php echo $row_revista['revista'];?>" disabled><?php 
          }
          ?>

          <div class="container">
            <div class="row">   
                <div class="col col4">
                    <input type="text" name="ano" placeholder="Ano: Ex 2018">
                </div>
                <div class="col col4">
                    <input type="text" name="mes" placeholder="Mês Ex Jaineiro">
                </div>
                <div class="col col4">
                    <input type="text" name="dia" placeholder="Dia Ex 01">
                </div>
            </div>
          </div>
          

    		<ul>
          <?php
            $aluno = DBReadWhere('aluno', 'nome', 'aluno', 'idade', 'turma', 2);
            foreach ($aluno as $cl){
              echo '<li class="chamada-aluno">
                      <div class="chamada-conteudo">
                        <h3>'.$cl['nome'].'</h3>
                        <p>Idade: '.$cl['idade'].'</p>
                      </div>

                      <div class="">
                        <input type="checkbox" value="None" id="presente" name="presente" />
                      </div>
                    </li>';  
            }
          ?>
      </ul>

      <button class="btnOk">Finalizar Chamada</button>
  		<a href="conteudo.php?id=chamada-turmas" class="btnOk">Voltar</a>
  		</form>
  	</div>
  </section>