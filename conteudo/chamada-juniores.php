<style>.esconder {display: none;} h3{margin-bottom: -20px;}</style>
<section class="">
    <div class="container">
      <h2>Juniores</h2>
      <hr>
      <form action="dados/insert-chamda.php" method="post" class="form-cadastro">
        <select name="professor" id="professor" required="">
            <option value="">Professor</option>
            <?php
              $result_professor = "SELECT * FROM professor WHERE turma = 7";
              $resultado_professor = mysqli_query(DBConect(), $result_professor);
              while($row_professor = mysqli_fetch_assoc($resultado_professor)){?>
              <option value="<?php echo $row_professor['id'];?>"><?php echo $row_professor['nome'];?> </option><?php 
              }
            ?>
        </select>

        <select name="revista" id="revsita" required="">
            <option value="">Revista</option>
            <?php
              $turma = "SELECT * FROM turma WHERE id = 7";
              $revista = mysqli_query(DBConect(), $turma);
              while($row_revista = mysqli_fetch_assoc($revista)){?>
              <option value="<?php echo $row_revista['id'];?>"><?php echo $row_revista['revista'];?> </option><?php 
              }
            ?>
          </select>

          <div class="container">
            <div class="row">   
                <div class="col col4">
                    <select name="mes" id="">
                      <option value="">Mês</option>
                      <option value="Janeiro">Janeiro</option>
                      <option value="Fevereiro">Fevereiro</option>
                      <option value="Março">Março</option>
                      <option value="Abril">Abril</option>
                      <option value="Maio">Maio</option>
                      <option value="Junho">Junho</option>
                      <option value="Julho">Julho</option>
                      <option value="Agosto">Agosto</option>
                      <option value="Setembro">Setembro</option>
                      <option value="Outubro">Outubro</option>
                      <option value="Novembro">Novembro</option>
                      <option value="Dezembro">Dezembro</option>
                    </select>
                </div>
                <div class="col col4">
                    <input type="text" name="dia" placeholder="Dia Ex 01">
                </div>
                <div class="col col4">
                    <input type="text" name="ano" placeholder="Ano: Ex 2018">
                </div>
            </div>
          </div>
          
           
        <ul>
          <?php

            $aluno = DBReadWhere('aluno', 'id', 'aluno', 'nome', 'turma', 7);
            foreach ($aluno as $cl){
              echo '<li class="chamada-aluno">
                      <div class="chamada-conteudo">
                        <h3>'.$cl['nome'].'</h3>

                        <!-- Coloca o nome do banco no input || E a classe oculta o campo -->
                        <input type="text" name="id" value="'.$cl['id'].'" class="esconder"><br>
                      </div>

                      <div class="">
                        <input type="checkbox" name="presenca" value="1" />
                      </div>
                    </li>';  
            }
          ?>
      </ul>

      <button type="submit" class="btnOk" onclick="pegaNome()" id="demo">Finalizar Chamada</button>
      <a href="conteudo.php?id=chamada-turmas" class="btnOk">Voltar</a>
      </form>

      <script>
      // Função responsavel por passar o valor da tag H3 oara o input
      function pegaNome(){
         var x = document.getElementsByTagName("H3");
          document.getElementById("demo").innerHTML = x[1].innerHTML;
        };
    </script>
    </div>
  </section>