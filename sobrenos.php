<?php    

$puxardados = listarTodosRegistros('sobrenos', ' idsobrenos, titulo, imagem, contato, descricao, video, cadastro, alteracao, ativo, nomecontato, imagemvideo','A');

if($puxardados=='Vazio'){
  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white" > Nenhum Registro no banco de dados </h6>';
}else{
  foreach($puxardados as $itemretornolista){
    $idsobrenos = $itemretornolista->idsobrenos;
    $imagem = $itemretornolista ->imagem;
    $titulo = $itemretornolista ->titulo;
    $descricao = $itemretornolista ->descricao;
    $video = $itemretornolista ->video;
    $cadastro = $itemretornolista ->cadastro;
    $alteracao = $itemretornolista ->alteracao;
    $ativo = $itemretornolista ->ativo;
    $nomecontato = $itemretornolista ->nomecontato;
    $contato = $itemretornolista ->contato;
    $imagemvideo = $itemretornolista ->$imagemvideo;
  }

}

?>

<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Sobre Nós</h2>
          <p><?php echo$titulo?></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4><?php echo$nomecontato ?></h4>
              <p><?php echo$contato ?></p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
               <?php echo$descricao ?>
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i>   <?php echo$descricao ?></li>
                <li><i class="bi bi-check2-all"></i>   <?php echo$descricao ?></li>
                <li><i class="bi bi-check2-all"></i>   <?php echo$descricao ?></li>
              </ul>
              <p>
              <?php echo$descricao ?>
              </p>
                  <br><br>
              <div class="position-relative mt-4">
                <img src="<?php echo$imagemvideo ?>" class="img-fluid" alt="">
                <a href="<?php echo$video ?>" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->