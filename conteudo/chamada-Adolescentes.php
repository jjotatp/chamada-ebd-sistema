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

    		<ul>
          <?php
            $aluno = DBReadWhere('aluno', 'nome', 'aluno', 'idade', 'turma', 2);
            // $alunos = DBRead('aluno', null, 'nome, idade');
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

  		<button class="btnOk">Finalizar Chamada</button>
  		</form>
  	</div>
  </section>