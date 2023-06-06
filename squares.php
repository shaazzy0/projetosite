<?php
$puxardados = listarTodosRegistros('cards', 'idcards, titulo,  descricao, cadastro, alteracao, ativo, img', 'A');
if ($puxardados == 'vazio') {
  echo 'erro';
} else {
?>

  <section id="why-us" class="why-us section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="why-box">
            <h3><?php echo $titulo ?></h3>
            <p>
              <?php echo $descricao ?>
            </p>
            <div class="text-center">
              <a href="#" class="more-btn">Saiba mais</a> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
        </div><!-- End Why Box -->



        <div class="col-lg-8 d-flex align-items-center">
          <div class="row gy-4">
            <?php
            foreach ($puxardados as $listaritens) {
              $idcards = $listaritens->idcards;
              $titulo = $listaritens->titulo;
              
              $descricao = $listaritens->descricao;
              $cadastro = $listaritens->cadastro;
              $alteracao = $listaritens->alteracao;
              $ativo = $listaritens->ativo;
              $img = $listaritens->img;

            ?>
              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="<?php echo$img ?>"></i>
                  <h4><?php echo $titulo ?></h4>
                  <p><?php echo $descricao ?></p>
                </div>
              </div><!-- End Icon Box -->
          <?php
            }
          }
          ?>
          </div>
        </div>

      </div>

    </div>
  </section>