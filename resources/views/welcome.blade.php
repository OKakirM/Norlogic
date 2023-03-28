@extends("layouts.main")
@section("title", "Norlogic")
@section("content")

<?php
    if (!empty($_GET['language'])) {
      $_COOKIE['language'] = $_GET['language'] === 'pt' ? 'pt' : 'en';
    } else if (empty($_COOKIE['language'])) {
        $_COOKIE['language'] = 'pt';
    }
    setcookie('language', $_COOKIE['language']);

    if ($_COOKIE['language'] == "pt") {
      $json = file_get_contents('./json/pt.json');
      $data = json_decode($json, true);
    } else {
      $json = file_get_contents('./json/en.json');
      $data = json_decode($json, true); 
    } 
?>

{{-- Início --}}
<div class="container-fluid p-0"id="home">
  {{-- Carrousel --}}
  <div id="autoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner position-relative">
      <div class="carousel-item active">
        {{-- Carrousel Imagem 1 Main View --}}
        <img src="/img/carrosel1.png" class="d-block h-100" alt="carrousel 1 imagem">
        <div class="carousel-caption d-none d-md-block">
          <p class="roboto color-w3 m-0 fs-5" data-aos="fade-right"><?php print_r($data["Introdução"]["subtitulo1"]);?></p>
          <h1 class="russo color-w1 mt-1 intro" data-aos="fade-left"><?php print_r($data["Introdução"]["titulo1"]);?><span class="color-redNor">.</span></h5>
        </div>
        {{-- MOBILE View --}}
        <div class="z-2 d-md-none d-flex flex-column justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
          <p class="roboto color-w3 m-0 fs-5 text-center" data-aos="fade-right"><?php print_r($data["Introdução"]["subtitulo1"]);?></p>
          <h1 class="russo color-w1 mt-1 text-center intro" data-aos="fade-left"><?php print_r($data["Introdução"]["titulo1"]);?><span class="color-redNor">.</span></h5>
        </div>  
      </div>
      <div class="carousel-item">
        {{-- Carrousel Imagem 2 Main View --}}
        <img src="/img/carrosel2.png" class="d-block h-100" alt="carrousel 2 imagem">
        <div class="carousel-caption d-none d-md-block">
          <p class="roboto color-w3 m-0 fs-5" data-aos="fade-right"><?php print_r($data["Introdução"]["subtitulo2"]);?></p>
          <h1 class="russo color-w1 mt-1" data-aos="fade-left"><?php print_r($data["Introdução"]["titulo2"]);?><span class="color-redNor">.</span></h5>
        </div>
        {{-- MOBILE --}}
        <div class="z-2 d-md-none d-flex flex-column justify-content-center align-items-center position-absolute top-50 start-50 translate-middle w-75">
          <p class="roboto color-w3 m-0 fs-5 text-center" data-aos="fade-right"><?php print_r($data["Introdução"]["subtitulo2"]);?></p>
          <h1 class="russo color-w1 mt-1 text-center" data-aos="fade-left"><?php print_r($data["Introdução"]["titulo2"]);?><span class="color-redNor">.</span></h5>
        </div>    
      </div>
      <button class="position-absolute top-0 bottom-0 z-2 bg-transparent border-0 opacity-25 text-center p-0 d-md-flex d-none align-items-center justify-content-center" style="width: 5%" type="button" data-bs-target="#autoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="position-absolute top-0 bottom-0 end-0 z-2 bg-transparent border-0 opacity-25 text-center p-0 d-md-flex d-none align-items-center justify-content-center" style="width: 5%" type="button" data-bs-target="#autoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    
    </div>  
  </div>
</div>

{{-- Soluções v2--}}
<section class="bg-w2 position-relative" id="service">
  <div class="container-fluid py-5">
    {{-- Título --}}
    <div class="d-flex justify-content-center align-items-center mt-5">
      <div class="col-auto" data-aos="fade-down">
        <h6 class="roboto text-center m-0 mb-1 color-redNor"><?php print_r($data["Soluções"]["subtítulo"]);?></h6>
        <h2 class="russo text-center display-5 color-cinzaNor titulo-detalhe" style="letter-spacing: 0.05em;"><?php print_r($data["Soluções"]["titulo"]);?></h2>
      </div>
    </div>
    {{-- Conteúdo --}}
    <div class="row flex-wrap mt-lg-5 mt-2 z-1 p-4 overflow-hidden"  id="rowSettingsService">
      {{-- Bacground --}}
      <div class="position-absolute d-xxl-block d-none py-4 w-100 h-50 start-0 top-50 bg-cinzaNor translate-middle-y overflow-hidden" style="margin-top: 120px">
        <img src="/img/servico_detalhe.svg" class="servico-img-detalhe w-100" alt="">
      </div>
      {{-- Produtos --}}
      <div class="col d-flex jusitfy-content-center align-items-center gap-2 flex-column unfocus" onclick="setService(this)" style="cursor: pointer"> 
        <div class="img-fluid servico-img" data-aos="fade-up">
          <img class="position-relative z-1" src="/img/servico1.png" alt="serviço 1" width="300px">
        </div>
        <div data-aos="fade-up">
          <h4 class="russo servico-detalhe text-center mt-4 color-w1" ><?php print_r($data["Soluções"]["solução1"]["titulo"]);?></h4>
          <p class="roboto text-center color-w1"><?php print_r($data["Soluções"]["solução1"]["conteudo"]);?></p>
        </div>
      </div>
      <div class="col d-flex jusitfy-content-center align-items-center gap-2 flex-column unfocus" onclick="setService(this)" style="cursor: pointer"> 
        <div class="img-fluid servico-img" data-aos="fade-up">
          <img class="position-relative z-1" src="/img/servico2.png" alt="serviço 1" width="300px">
        </div>
        <div data-aos="fade-up">
          <h4 class="russo servico-detalhe text-center mt-4 color-w1" ><?php print_r($data["Soluções"]["solução2"]["titulo"]);?></h4>
          <p class="roboto text-center color-w1"><?php print_r($data["Soluções"]["solução2"]["conteudo"]);?></p>
        </div>
      </div>
      <div class="col d-flex jusitfy-content-center align-items-center gap-2 flex-column unfocus" onclick="setService(this)" style="cursor: pointer"> 
        <div class="img-fluid servico-img" data-aos="fade-up">
          <img class="position-relative z-1" src="/img/servico3.png" alt="serviço 1" width="300px">
        </div>
        <div data-aos="fade-up">
          <h4 class="russo servico-detalhe text-center mt-4 color-w1" ><?php print_r($data["Soluções"]["solução3"]["titulo"]);?></h4>
          <p class="roboto text-center color-w1"><?php print_r($data["Soluções"]["solução3"]["conteudo"]);?></p>
        </div>
      </div>
      <div class="col d-flex jusitfy-content-center align-items-center gap-2 flex-column unfocus" onclick="setService(this)" style="cursor: pointer"> 
        <div class="img-fluid servico-img" data-aos="fade-up">
          <img class="position-relative z-1" src="/img/servico4.png" alt="serviço 1" width="300px">
        </div>
        <div data-aos="fade-up">
          <h4 class="russo servico-detalhe text-center mt-4 color-w1" ><?php print_r($data["Soluções"]["solução4"]["titulo"]);?></h4>
          <p class="roboto text-center color-w1"><?php print_r($data["Soluções"]["solução4"]["conteudo"]);?></p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Projetos --}}
<div class="bg-w1 position-relative">
  {{-- Background --}}
  <div class="position-absolute top-50 translate-middle-y start-0 bg-cinzaNor w-100 h-50 d-lg-block d-none overflow-hidden" style="margin-top: 70px;"> 
    <img src="/img/servico_detalhe.svg" class="servico-img-detalhe w-100" alt="">
  </div>
  <div class="container-lg container-fluid py-lg-5 p-0 overflow-hidden">
    {{-- Título --}}
    <div class="row justify-content-center align-items-center mt-5">
      <div class="col-auto" data-aos="fade-down">
        <h6 class="roboto text-center m-0 mb-1 color-redNor text-center"><?php print_r($data["Projetos"]["subtítulo"]);?></h6>
        <h2 class="russo text-center display-5 color-cinzaNor text-center titulo-detalhe" style="letter-spacing: 0.05em;"><?php print_r($data["Projetos"]["titulo"]);?></h2>
      </div>
    </div>
    {{-- PC --}}
    <div id="projetosCarrousel" class="d-lg-block d-none carousel slide mt-5 mb-lg-5" data-aos="fade-up">
      {{-- Cassousel --}}
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex justify-content-center gap-5">
            <div class="col-auto d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius shadow" style="border: 4px solid #CC0033">
              <div class="banner-detalhe"></div>
              <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer;" src="/img/projeto1.png" alt="projeto 1">
              <div class="position-absolute z-2 color-w1 text-end end-0 bottom-0 p-3">
                <h4 class="fw-bold roboto fs-3 info-detalhe"><?php print_r($data["Projetos"]["projeto1"]["titulo"]);?></h4>
                <p class="roboto" style="font-size: .75rem"><?php print_r($data["Projetos"]["projeto1"]["conteudo"]);?></p>
              </div>
            </div>

            <div class="col-auto d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius shadow" style="border: 4px solid #CC0033">
              <div class="banner-detalhe"></div>
              <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto2.png" alt="projeto 2">
              <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
                <h4 class="fw-bold roboto fs-3 info-detalhe"><?php print_r($data["Projetos"]["projeto2"]["titulo"]);?></h4>
                <p class="roboto" style="font-size: .75rem"><?php print_r($data["Projetos"]["projeto2"]["conteudo"]);?></p>
              </div>
            </div>

            <div class="col-auto d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius shadow" style="border: 4px solid #CC0033">
              <div class="banner-detalhe"></div>
              <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto3.png" alt="projeto 3">
              <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
                <h4 class="fw-bold roboto fs-3 info-detalhe"><?php print_r($data["Projetos"]["projeto3"]["titulo"]);?></h4>
                <p class="roboto" style="font-size: .75rem"><?php print_r($data["Projetos"]["projeto3"]["conteudo"]);?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="d-flex justify-content-center gap-5">
            <div class="col-auto d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius shadow" style="border: 4px solid #CC0033">
              <div class="banner-detalhe"></div>
              <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer;" src="/img/projeto1.png" alt="projeto 1">
              <div class="position-absolute z-2 color-w1 text-end end-0 bottom-0 p-3">
                <h4 class="fw-bold roboto fs-3 info-detalhe"><?php print_r($data["Projetos"]["projeto4"]["titulo"]);?></h4>
                <p class="roboto" style="font-size: .75rem"><?php print_r($data["Projetos"]["projeto4"]["conteudo"]);?></p>
              </div>
            </div>
            <div class="col-auto d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius shadow" style="border: 4px solid #CC0033">
              <div class="banner-detalhe"></div>
              <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto2.png" alt="projeto 2">
              <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
                <h4 class="fw-bold roboto fs-3 info-detalhe"><?php print_r($data["Projetos"]["projeto5"]["titulo"]);?></h4>
                <p class="roboto" style="font-size: .75rem"><?php print_r($data["Projetos"]["projeto5"]["conteudo"]);?></p>
              </div>
            </div>
            <div class="col-auto d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius shadow" style="border: 4px solid #CC0033">
              <div class="banner-detalhe"></div>
              <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto3.png" alt="projeto 3">
              <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
                <h4 class="fw-bold roboto fs-3 info-detalhe"><?php print_r($data["Projetos"]["projeto6"]["titulo"]);?></h4>
                <p class="roboto" style="font-size: .75rem"><?php print_r($data["Projetos"]["projeto6"]["conteudo"]);?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev w-auto" type="button" data-bs-target="#projetosCarrousel" data-bs-slide="prev">
        <ion-icon class="color-w1 fs-2 bg-redNor p-2 rounded-5" name="chevron-back-outline"></ion-icon>
      </button>
      <button class="carousel-control-next w-auto" type="button" data-bs-target="#projetosCarrousel" data-bs-slide="next">
        <ion-icon class="color-w1 fs-2 bg-redNor p-2 rounded-5" name="chevron-forward-outline"></ion-icon>
      </button>
    </div>
    {{-- MOBILE --}}
    <div id="projetosCarrouselMobile" class="d-lg-none d-block carousel slide mt-2 mb-lg-5" data-aos="fade-up">
      {{-- Carrousel --}}
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="col d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius" style="height: 450px;">
            <div class="banner-detalhe"></div>
            <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer;" src="/img/projeto1.png" alt="projeto 1">
            <div class="position-absolute z-2 color-w1 text-end end-0 bottom-0 p-3">
              <h4 class="fw-bold roboto display-4 info-detalhe "><?php print_r($data["Projetos"]["projeto1"]["titulo"]);?></h4>
              <p class="roboto"><?php print_r($data["Projetos"]["projeto1"]["conteudo"]);?></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius" style="height: 450px;">
            <div class="banner-detalhe"></div>
            <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto2.png" alt="projeto 2">
            <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
              <h4 class="fw-bold roboto display-4 info-detalhe"><?php print_r($data["Projetos"]["projeto2"]["titulo"]);?></h4>
              <p class="roboto"><?php print_r($data["Projetos"]["projeto2"]["conteudo"]);?></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius" style="height: 450px;">
            <div class="banner-detalhe"></div>
            <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto3.png" alt="projeto 3">
            <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
              <h4 class="fw-bold roboto display-4 info-detalhe"><?php print_r($data["Projetos"]["projeto3"]["titulo"]);?></h4>
              <p class="roboto"><?php print_r($data["Projetos"]["projeto3"]["conteudo"]);?></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius" style="height: 450px;">
            <div class="banner-detalhe"></div>
            <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer;" src="/img/projeto1.png" alt="projeto 1">
            <div class="position-absolute z-2 color-w1 text-end end-0 bottom-0 p-3">
              <h4 class="fw-bold roboto display-4 info-detalhe "><?php print_r($data["Projetos"]["projeto4"]["titulo"]);?></h4>
              <p class="roboto"><?php print_r($data["Projetos"]["projeto4"]["conteudo"]);?></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius" style="height: 450px;">
            <div class="banner-detalhe"></div>
            <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto2.png" alt="projeto 2">
            <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
              <h4 class="fw-bold roboto display-4 info-detalhe"><?php print_r($data["Projetos"]["projeto5"]["titulo"]);?></h4>
              <p class="roboto"><?php print_r($data["Projetos"]["projeto5"]["conteudo"]);?></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius" style="height: 450px">
            <div class="banner-detalhe"></div>
            <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto3.png" alt="projeto 3">
            <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
              <h4 class="fw-bold roboto display-4 info-detalhe"><?php print_r($data["Projetos"]["projeto5"]["titulo"]);?></h4>
              <p class="roboto"><?php print_r($data["Projetos"]["projeto6"]["conteudo"]);?></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev w-auto d-lg-none d-block" type="button" data-bs-target="#projetosCarrouselMobile" data-bs-slide="prev">
        <ion-icon class="color-redNor display-4 p-2 rounded-5" name="chevron-back-outline"></ion-icon>
      </button>
      <button class="carousel-control-next w-auto d-lg-none d-block" type="button" data-bs-target="#projetosCarrouselMobile" data-bs-slide="next">
        <ion-icon class="color-redNor display-4 p-2 rounded-5" name="chevron-forward-outline"></ion-icon>
      </button>
    </div>
  </div>
</div>

{{-- Produtos --}}
<section class="bg-w2 position-relative" id="products">
  {{-- Background --}}
  <div class="position-absolute top-50 translate-middle-y start-0 bg-cinzaNor w-100 d-lg-block d-none overflow-hidden" style="margin-top: 122px;height: 370px"> 
    <img src="/img/servico_detalhe.svg" class="servico-img-detalhe w-100" alt="">
  </div>
  <div class="container py-5">
    {{-- Título --}}
    <div class="row justify-content-center align-items-center mt-5">
      <div class="col-auto" data-aos="fade-down">
        <h6 class="roboto text-center m-0 mb-1 color-redNor"><?php print_r($data["Produtos"]["subtitulo"]);?></h6>
        <h2 class="russo text-center display-5 color-cinzaNor titulo-detalhe" style="letter-spacing: 0.05em;"><?php print_r($data["Produtos"]["título"]);?></h2>
      </div>
    </div>
    {{-- Seleção de Produtos --}}
    <div class="d-lg-flex d-none mt-lg-5 mt-2 overflow-hidden" data-aos="fade-down">
      <div class="col d-flex justify-content-lg-start justify-content-center align-items-center gap-2 p-3 selected" style="cursor: pointer" onclick="changeSelection(this)" id="drops_selection">
        <h5 class="m-0 russo">Drops</h5>
      </div>
      <div class="col d-flex justify-content-lg-start justify-content-center align-items-center gap-2 p-3 unselected" style="cursor: pointer" onclick="changeSelection(this)" id="dqpool_selection">
        <h5 class="m-0 russo">DQPool</h5>
      </div>
      <div class="col d-flex justify-content-lg-start justify-content-center align-items-center gap-2 p-3 unselected" style="cursor: pointer" onclick="changeSelection(this)" id="adspot_selection">
        <h5 class="m-0 russo">AdSpot</h5>
      </div>
    </div>
    {{-- Smartphone Seleção de Produtos Dropdown --}}
    <div class="d-lg-none d-flex flex-column position-relative mt-lg-5 mt-2 overflow-hidden collapse_offcanvas">
      <div class="col d-flex justify-content-lg-start justify-content-center align-items-center gap-2 p-3" style="cursor: pointer" data-aos="fade-left" data-bs-toggle="collapse" href="#drops_offcanvas" role="button" aria-expanded="false" aria-controls="drops_offcanvas">
        <h5 class="m-0 russo">Drops</h5>
        <ion-icon class="position-absolute end-0 top-50 me-4 fs-4 collapse_icon" name="chevron-down-outline"></ion-icon>
      </div>
      {{-- Drops --}}
      <div class="collapse bg-cinzaNor p-3" id="drops_offcanvas">
        {{-- Conteúdo --}}
        <div class="d-flex flex-column justify-content-center align-items-center gap-3 mt-4">
          <div class="produto-img">
            <img src="/img/produto_drops.png" width="200px" class="z-1 position-relative" alt="produto Drops">
          </div>
          <div class="text-center position-relative d-flex justify-content-center align-items-center flex-column mt-4">
            <h3 class="russo m-0 servico-detalhe fs-2 color-w1">Drops</h3>
            <p class="color-w3 m-0 mt-1"><?php print_r($data["Produtos"]["drops"]["content"]);?></p>
            <div class="d-flex justify-content-center align-items-center mt-4 align-self-lg-end gap-3 fs-5">
              <a id="info4" class="russo color-redNor versions text-decoration-none" style="cursor: pointer" 
              preview_1="/img/produto1.jpg"
              preview_2="/img/drops1_preview1.jpg"
              preview_3="/img/drops1_preview2.jpg" onclick="changeInfo(this)">V1</a>
  
              <a id="info5" class="russo color-w1 versions text-decoration-none" style="cursor: pointer"
              preview_1="/img/drops2_preview1.jpg"
              preview_2="/img/drops2_preview1.jpg"
              preview_3="/img/drops2_preview3.jpg" onclick="changeInfo(this)">V2</a>
  
              <a id="info6" class="russo color-w1 versions text-decoration-none" style="cursor: pointer"
              preview_1="/img/drops3_preview1.jpg"
              preview_2="/img/drops3_preview2.jpg"
              preview_3="/img/drops3_preview3.jpg" onclick="changeInfo(this)">V3</a>
            </div>
          </div>
        </div>
        {{-- Carrousel --}}
        <div class="d-flex justify-content-center align-items-center my-4">
          <div id="carrousel" class="carousel slide">
          <img src="/img/dots.svg" class="img-produto-detalhe" alt="produto detalhe">
            <div class="carousel-inner" style="height: 400px; width:300px; border-radius: 20px 5px 20px 5px; border: 4px solid #CC0033">
              <div class="carousel-item active">
                <div class="d-flex justify-content-center align-items-center bg-cinzaNor" style="height: 400px; width:300px;">
                  <img id="preview_c1" src="/img/produto1.jpg" class="img-fluid" alt="produto 1">
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center bg-cinzaNor" style="height: 400px; width:300px;">
                  <img id="preview_c2" src="/img/drops1_preview1.jpg" class="img-fluid" alt="produto 2">
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center bg-cinzaNor" style="height: 400px; width:300px;">
                  <img id="preview_c3" src="/img/drops1_preview2.jpg" class="img-fluid w-100" alt="produto 3">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev w-auto d-lg-none d-block" type="button" data-bs-target="#carrousel" data-bs-slide="prev">
              <ion-icon class="color-redNor display-4 p-2 rounded-5" name="chevron-back-outline"></ion-icon>
            </button>
            <button class="carousel-control-next w-auto d-lg-none d-block" type="button" data-bs-target="#carrousel" data-bs-slide="next">
              <ion-icon class="color-redNor display-4 p-2 rounded-5" name="chevron-forward-outline"></ion-icon>
            </button>
          </div>
        </div>
      </div>

      <div class="col d-flex justify-content-lg-start justify-content-center align-items-center gap-2 p-3" style="cursor: pointer" data-aos="fade-right" data-bs-toggle="collapse" href="#dqpool_offcanvas" role="button" aria-expanded="false" aria-controls="dqpool_offcanvas">
        <h5 class="m-0 russo">DQPool</h5>
        <ion-icon class="position-absolute end-0 top-50 me-4 fs-4 collapse_icon" name="chevron-down-outline"></ion-icon>
      </div>
      {{-- DQPool --}}
      <div class="collapse bg-cinzaNor p-3" id="dqpool_offcanvas">
        {{-- Conteúdo --}}
        <div class="d-flex flex-column justify-content-center align-items-center gap-3 mt-4">
          <div class="produto-img">
            <img src="/img/produto_dqpool.png" width="200px" class="z-1 position-relative" alt="produto DQPool">
          </div>
          <div class="text-center position-relative d-flex justify-content-center align-items-center flex-column mt-4">
            <h3 class="russo m-0 servico-detalhe fs-2 color-w1">DQPool</h3>
            <p class="color-w3 m-0 mt-1"><?php print_r($data["Produtos"]["dqpool"]["content"]);?></p>
            <div class="d-flex justify-content-center align-items-center mt-4 align-self-lg-end gap-3 fs-5">
              <a id="info4" class="russo color-redNor text-decoration-none" style="cursor: pointer">V1</a>
            </div>
          </div>
        </div>
        {{-- Carrousel --}}
        <div class="d-flex justify-content-center align-items-center my-4">
          <div id="carrousel2" class="carousel slide position-relative">
            <img src="/img/dots.svg" class="img-produto-detalhe" alt="produto detalhe">
            <div class="carousel-inner" style="height: 400px; width:300px; border-radius: 20px 5px 20px 5px; border: 4px solid #CC0033">
              <div class="carousel-item active">
                <div class="overflow-hidden position-relative d-flex justify-content-center align-items-center" style="height: 400px; width:300px;">
                  <img src="/img/produto2.jpg" class="position-absolute top-50 start-50 translate-middle" alt="produto 1">
                </div>
              </div>
              <div class="carousel-item">
                <div class="overflow-hidden position-relative d-flex justify-content-center align-items-center" style="height: 400px; width:300px;">
                  <img src="/img/dqpool_preview1.jpg" class="position-absolute top-50 start-50 translate-middle" alt="produto 2">
                </div>
              </div>
              <div class="carousel-item">
                <div class="overflow-hidden position-relative d-flex justify-content-center align-items-center" style="height: 400px; width:300px;">
                  <img src="/img/dqpool_preview2.jpg" class="position-absolute top-50 start-50 translate-middle" alt="produto 3">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev w-auto d-lg-none d-block" type="button" data-bs-target="#carrousel2" data-bs-slide="prev">
              <ion-icon class="color-redNor display-4 p-2 rounded-5" name="chevron-back-outline"></ion-icon>
            </button>
            <button class="carousel-control-next w-auto d-lg-none d-block" type="button" data-bs-target="#carrousel2" data-bs-slide="next">
              <ion-icon class="color-redNor display-4 p-2 rounded-5" name="chevron-forward-outline"></ion-icon>
            </button>
          </div>
        </div>
      </div>

      <div class="col d-flex justify-content-lg-start justify-content-center align-items-center gap-2 p-3" style="cursor: pointer" data-aos="fade-left" data-bs-toggle="collapse" href="#adspot_offcanvas" role="button" aria-expanded="false" aria-controls="adspot_offcanvas">
        <h5 class="m-0 russo">AdSpot</h5>
        <ion-icon class="position-absolute end-0 top-50 me-4 fs-4 collapse_icon" name="chevron-down-outline"></ion-icon>
      </div>
      {{-- Adspot --}}
      <div class="collapse bg-cinzaNor p-3" id="adspot_offcanvas">
        {{-- Conteúdo --}}
        <div class="d-flex flex-column justify-content-center align-items-center gap-3 mt-4">
          <div class="produto-img">
            <img src="/img/produto_adspot.png" width="200px" class="z-1 position-relative" alt="produto AdSpot">
          </div>
          <div class="text-center position-relative d-flex justify-content-center align-items-center flex-column mt-4">
            <h3 class="russo m-0 servico-detalhe fs-2 color-w1">AdSpot</h3>
            <p class="color-w3 m-0 mt-1"><?php print_r($data["Produtos"]["adspot"]["content"]);?></p>
            <div class="d-flex justify-content-center align-items-center mt-4 align-self-lg-end gap-3 fs-5">
              <a id="info4" class="russo color-redNor text-decoration-none" style="cursor: pointer">V1</a>
            </div>
          </div>
        </div>
        {{-- Carrousel --}}
        <div class="d-flex justify-content-center align-items-center my-4">
          <div id="carrousel3" class="carousel slide position-relative">
            <img src="/img/dots.svg" class="img-produto-detalhe" alt="produto detalhe">
            <div class="carousel-inner" style="width: 350px; height: 200px; border-radius: 20px 5px 20px 5px; border: 4px solid #CC0033">
              <div class="carousel-item active">
                <div class="overflow-hidden position-relative d-flex justify-content-center align-items-center" style="width: 350px; height: 200px">
                  <img src="/img/produto3.jpg" class="img-fluid" alt="produto 1">
                </div>
              </div>
              <div class="carousel-item">
                <div class="overflow-hidden position-relative d-flex justify-content-center align-items-center" style="width: 350px; height: 200px">
                  <img src="/img/spot_preview1.jpg" class="img-fluid" alt="produto 2">
                </div>
              </div>
              <div class="carousel-item">
                <div class="overflow-hidden position-relative d-flex justify-content-center align-items-center" style="width: 350px; height: 200px">
                  <img src="/img/spot_preview2.jpg" class="img-fluid" alt="produto 3">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev w-auto d-lg-none d-block" type="button" data-bs-target="#carrousel3" data-bs-slide="prev">
              <ion-icon class="color-redNor display-4 p-2 rounded-5" name="chevron-back-outline"></ion-icon>
            </button>
            <button class="carousel-control-next w-auto d-lg-none d-block" type="button" data-bs-target="#carrousel3" data-bs-slide="next">
              <ion-icon class="color-redNor display-4 p-2 rounded-5" name="chevron-forward-outline"></ion-icon>
            </button>
          </div>
        </div>
      </div>
    </div>
    {{-- Drops View --}}
    <div class="d-lg-flex d-none mt-5 mb-5 justify-content-between align-items-center" id="drops">
      <div class="col-lg-6 d-flex flex-lg-row flex-column justify-content-center align-items-center gap-3" data-aos="fade-right">
        {{-- Background --}}
        <div class="produto-img position-relative">
          <img src="/img/produto_drops.png" width="200px" class="z-1 position-relative" alt="produto Drops">
        </div>
        {{-- Conteúdo --}}
        <div class="text-lg-start text-center position-relative d-flex justify-content-lg-end justify-content-center align-items-lg-start align-items-center flex-column mt-4">
          <h3 class="russo m-0 servico-detalhe fs-2 color-w1">Drops</h3>
          <p class="color-b1 m-0 mt-1 color-w1"><?php print_r($data["Produtos"]["drops"]["content"]);?></p>
          <div class="d-flex justify-content-center align-items-center mt-4 align-self-lg-end gap-3 fs-5">
            <a id="info1" class="russo color-redNor versions text-decoration-none" style="cursor: pointer" 
            preview_1="/img/produto1.jpg"
            preview_2="/img/drops1_preview1.jpg"
            preview_3="/img/drops1_preview2.jpg" onclick="changeInfo(this)">V1</a>

            <a id="info2" class="russo color-w1 versions text-decoration-none" style="cursor: pointer"
            preview_1="/img/drops2_preview1.jpg"
            preview_2="/img/drops2_preview1.jpg"
            preview_3="/img/drops2_preview3.jpg" onclick="changeInfo(this)">V2</a>

            <a id="info3" class="russo color-w1 versions text-decoration-none" style="cursor: pointer"
            preview_1="/img/drops3_preview1.jpg"
            preview_2="/img/drops3_preview2.jpg"
            preview_3="/img/drops3_preview3.jpg" onclick="changeInfo(this)">V3</a>
          </div>
        </div>
      </div>
      {{-- Galeria de Imagens --}}
      <div class="col-auto d-lg-flex d-none justify-content-center align-items-center h-100 gap-3 position-relative" data-aos="fade-left">
        <img src="/img/dots.svg" class="img-produto-detalhe" alt="produto detalhe">
        <div class="overflow-hidden d-flex justify-content-center aling-items-center z-1 bg-cinzaNor" style="width: 300px; height: 420px; border-radius: 20px 5px 20px 5px; border: 4px solid #CC0033">
          <img id="fullImage" src="/img/produto1.jpg" class="img-fluid" alt="produto destacado">
        </div>
        <div class="d-flex flex-column jusitfy-content-start aling-items-start gap-3">
          <div class="overflow-hidden z-1 img-selected d-flex justify-content-center align-items-center" style="width: 100px; height: 120px; border-radius: 20px 5px 20px 5px; cursor:pointer;">
            <img id="preview_1" src="/img/produto1.jpg" onclick="setImage(this)" class="img-fluid" alt="produto 1">
          </div>
          <div class="overflow-hidden z-1 img-deselected d-flex justify-content-center align-items-center" style="width: 100px; height: 120px; border-radius: 20px 5px 20px 5px; cursor:pointer;">
            <img id="preview_2" src="/img/drops1_preview1.jpg" onclick="setImage(this)" class="img-fluid" alt="produto 2">
          </div>
          <div class="overflow-hidden z-1 img-deselected d-flex justify-content-center align-items-center" style="width: 100px; height: 120px; border-radius: 20px 5px 20px 5px; cursor:pointer;">
            <img id="preview_3" src="/img/drops1_preview2.jpg" onclick="setImage(this)" class="img-fluid" alt="produto 3">
          </div>
        </div>
      </div>
    </div>
    {{-- DQPool View --}}
    <div class="d-none mt-5 mb-5 justify-content-between align-items-center" id="dqpool">
      {{-- Conteúdo --}}
      <div class="col-lg-6 d-flex flex-lg-row flex-column justify-content-center align-items-center gap-3" data-aos="fade-right">
        <div class="produto-img">
          <img src="/img/produto_dqpool.png" width="200px" class="z-1 position-relative" alt="produto DQPool">
        </div>
        <div class="text-lg-start text-center position-relative d-flex justify-content-lg-end justify-content-center align-items-lg-start align-items-center flex-column mt-4">
          <h3 class="russo m-0 servico-detalhe fs-2 color-w1">DQPool</h3>
          <p class="color-b1 m-0 mt-1 color-w1"><?php print_r($data["Produtos"]["dqpool"]["content"]);?></p>
          <div class="d-flex justify-content-center align-items-center mt-4 align-self-lg-end gap-3 fs-5">
            <a id="info1" class="russo color-redNor text-decoration-none" style="cursor: pointer">V1</a>
          </div>
        </div>
      </div>
      {{-- Galeria de Imagens --}}
      <div class="col-auto d-lg-flex d-none justify-content-center align-items-center h-100 gap-3 position-relative" data-aos="fade-left">
        <img src="/img/dots.svg" class="img-produto-detalhe" alt="produto detalhe">
        <div class="overflow-hidden d-flex justify-content-center align-items-center z-1" style="width: 300px; height: 420px; border-radius: 20px 5px 20px 5px; border: 4px solid #CC0033">
          <img id="fullImage" src="/img/produto2.jpg" class="img-fluid" alt="produto destacado">
        </div>
        <div class="d-flex flex-column jusitfy-content-start aling-items-start gap-3">
          <div class="overflow-hidden z-1 img-selected d-flex justify-content-center align-items-center" style="width: 100px; height: 120px; border-radius: 20px 5px 20px 5px; cursor:pointer;">
            <img id="preview_4" src="/img/produto2.jpg" onclick="setImage(this)" class="img-fluid" alt="produto 1">
          </div>
          <div class="overflow-hidden z-1 img-deselected d-flex justify-content-center align-items-center" style="width: 100px; height: 120px; border-radius: 20px 5px 20px 5px; cursor:pointer;">
            <img id="preview_5" src="/img/dqpool_preview1.jpg" onclick="setImage(this)" class="img-fluid" alt="produto 1">
          </div>
          <div class="overflow-hidden z-1 img-deselected d-flex justify-content-center align-items-center" style="width: 100px; height: 120px; border-radius: 20px 5px 20px 5px; cursor:pointer;">
            <img id="preview_6" src="/img/dqpool_preview2.jpg" onclick="setImage(this)" class="img-fluid" alt="produto 1">
          </div>
        </div>
      </div>
    </div>
    {{-- AdSpot View --}}
    <div class="d-none mt-5 mb-5 justify-content-between align-items-center" id="spot">
      {{-- Conteúdo --}}
      <div class="col-lg-6 d-flex flex-lg-row flex-column justify-content-center align-items-center gap-3" data-aos="fade-right">
        <div class="produto-img">
          <img src="/img/produto_adspot.png" width="200px" class="z-1 position-relative" alt="produto AdSpot">
        </div>
        <div class="text-lg-start text-center position-relative d-flex justify-content-lg-end justify-content-center align-items-lg-start align-items-center flex-column mt-4">
          <h3 class="russo m-0 servico-detalhe fs-2 color-w1">Adspot</h3>
          <p class="color-b1 m-0 mt-1 color-w1"><?php print_r($data["Produtos"]["adspot"]["content"]);?></p>
          <div class="d-flex justify-content-center align-items-center mt-4 align-self-lg-end gap-3 fs-5">
            <a id="info1" class="russo color-redNor text-decoration-none" style="cursor: pointer">V1</a>
          </div>
        </div>
      </div>
      {{-- Galeria de Imagens --}}
      <div class="col-auto d-lg-flex flex-column d-none justify-content-center align-items-center h-100 gap-3 position-relative" data-aos="fade-left">
        <img src="/img/dots.svg" class="img-produto-detalhe" style="top: -15px;" alt="produto detalhe">
        <div class="overflow-hidden d-flex jusitfy-content-center align-items-center bg-cinzaNor z-1" style="width: 420px; height: 270px; border-radius: 20px 5px 20px 5px; border: 4px solid #CC0033">
          <img id="fullImage" src="/img/produto3.jpg" class="img-fluid" alt="produto destacado">
        </div>
        <div class="d-flex jusitfy-content-center aling-items-center gap-3 z-1">
          <div class="overflow-hidden position-relative z-1 img-selected" style="width: 100px; height: 120px; border-radius: 20px 5px 20px 5px; cursor:pointer;">
            <img id="preview_7" src="/img/produto3.jpg" onclick="setImage(this)" class="position-absolute top-50 start-50 translate-middle" alt="produto 1">
          </div>
          <div class="overflow-hidden position-relative z-1 img-deselected" style="width: 100px; height: 120px; border-radius: 20px 5px 20px 5px; cursor:pointer;">
            <img id="preview_8" src="/img/spot_preview1.jpg" onclick="setImage(this)" class="position-absolute top-50 start-50 translate-middle" alt="produto 2">
          </div>
          <div class="overflow-hidden position-relative z-1 img-deselected" style="width: 100px; height: 120px; border-radius: 20px 5px 20px 5px; cursor:pointer;">
            <img id="preview_9" src="/img/spot_preview2.jpg" onclick="setImage(this)" class="position-absolute top-50 start-50 translate-middle" alt="produto 3">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- O que é a Norlogic? --}}
<section class="bg-w1 position-relative" id="about">
  {{-- Background --}}
  <div class="position-absolute top-50 translate-middle-y start-0 bg-cinzaNor w-100 d-none overflow-hidden d-lg-block" style="height: 390px; margin-top: 45px"> 
    <img src="/img/servico_detalhe.svg" class="servico-img-detalhe w-100" alt="">
  </div>
  <div class="container-lg container-fluid px-0 py-5">
    {{-- Título --}}
    <div class="row justify-content-center align-items-center">
      <div class="col-auto" data-aos="fade-down">
        <h6 class="roboto text-center m-0 mb-1 color-redNor"><?php print_r($data["Sobre"]["subtitulo"]);?></h6>
        <h2 class="russo text-center display-5 color-cinzaNor titulo-detalhe" style="letter-spacing: 0.05em;"><?php print_r($data["Sobre"]["titulo"]);?></h2>
      </div>
    </div>
    <div class="d-lg-flex justify-content-between align-items-center mt-lg-5 mt-2 mb-5 gap-5 py-lg-0 py-5">
      {{-- Conteúdo --}}
      <div class="col-lg-5 d-flex justify-content-center flex-column align-items-lg-start align-items-center" data-aos="fade-right">
        <h6 class="color-b4 roboto mb-1 text-center"><?php print_r($data["Sobre"]["conteudo"]["subtitulo"]);?></h6>
        <h1 class="russo color-w1 norlogic-titulo-detalhe"><?php print_r($data["Sobre"]["conteudo"]["titulo"]);?><span class="color-redNor">?</span></h1>
        <p class="roboto color-w1 fs-5 lh-base mt-3 text-lg-start text-center"><?php print_r($data["Sobre"]["conteudo"]["texto"]);?></p>
        <div class="d-flex justify-content-start align-items-center gap-2 mt-4">
          <a href="https://www.facebook.com/redfenixeng" target="_blank" class="color-redNor fs-3 text-decoration-none"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="https://www.instagram.com/redfenix.eng/?hl=pt" target="_blank" class="color-redNor fs-3 text-decoration-none"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="mailto:geral@redfenix.pt" class="color-redNor fs-3 text-decoration-none"><ion-icon name="mail-outline"></ion-icon></a>
          <a href="tel:00351249119339" class="color-redNor fs-3 text-decoration-none"><ion-icon name="call-outline"></ion-icon></a>
          <h6 class="roboto color-b5"><?php print_r($data["Sobre"]["conteudo"]["info"]);?></h6>
        </div>
      </div>
      {{-- Video --}}
      <div class="col-lg-7 d-flex mt-lg-0 mt-5 flex-column justify-content-center align-items-center position-relative" data-aos="fade-left">
        <img class="video-detalhe img-fluid" src="/img/video-detalhe.svg" alt="Apresentação Logo Norlogic">
        <video src="/img/video_norlogic.mp4" class="img-fluid position-relative" muted style="border-radius: 20px 20px 0px 20px; border: 4px solid #CC0033" autoplay loop></video>
      </div>
    </div>
  </div>
</section>

{{-- Contacto --}}
<section class="bg-w2 position-relative" id="contact">
  <div class="container py-5">
    {{-- Título --}}
    <div class="row justify-content-center align-items-center">
      <div class="col-auto" data-aos="fade-down">
        <h6 class="roboto text-center m-0 mb-1 color-redNor"><?php print_r($data["Contacto"]["subtitulo"]);?></h6>
        <h2 class="russo text-center display-5 color-cinzaNor titulo-detalhe" style="letter-spacing: 0.05em;"><?php print_r($data["Contacto"]["titulo"]);?></h2>
      </div>
    </div>
    {{-- Main/PC Screen --}}
    <div class="row justify-content-end align-items-center mt-5 mb-5">
      {{-- Formulário --}}
      <div class="col-lg-6 z-1 position-relative bg-cinzaNor d-flex justify-content-center align-items-center flex-column p-5" style="border: 3px solid #CC0033; border-radius: 40px 5px 40px 5px;" data-aos="fade-left">
        <h2 class="roboto color-w1 fw-bold justify-self-center align-self-start"><?php print_r($data["Contacto"]["formulario"]["titulo"]);?><span class="color-redNor">!</span></h2>
        <form class="w-100 d-lg-flex justify-content-center aling-items-center flex-column" action="/send">
          <div class="d-lg-flex justify-content-between align-items-center">
            <div class="w-100 me-lg-3">
              <label class="form-label roboto color-w1 m-0 mt-4 mb-1" for="name"><?php print_r($data["Contacto"]["formulario"]["nome"]);?>:</label>
              <input class="form-control input-contact " type="text" name="name" id="name" placeholder="<?php print_r($data["Contacto"]["formulario"]["nome"]);?>" required>
            </div>
            <div class="w-100 ms-lg-3">
              <label class="form-label roboto color-w1 m-0 mt-4 mb-1" for="email"><?php print_r($data["Contacto"]["formulario"]["email"]);?>:</label>
              <input class="form-control input-contact " type="email" name="email" id="<?php print_r($data["Contacto"]["formulario"]["email"]);?>" placeholder="example@email.com" required>
            </div>
          </div>
          <label class="form-label roboto color-w1 m-0 mt-4 mb-1" for="message"><?php print_r($data["Contacto"]["formulario"]["mensagem"]);?>:</label>
          <textarea class="form-control input-contact" name="message" id="message" placeholder="<?php print_r($data["Contacto"]["formulario"]["mensagem"]);?>" style="height: 144px" required></textarea>
          @if (session("msg"))
          <p class="alert alert-success m-0 rounded-0 text-center mt-3 rounded-1 p-3">{{session("msg")}}<?php print_r($data['Contacto']['formulario']['enviado']);?></p>
          @endif
          <button class="bg-redNor color-w1 roboto fw-bold d-block py-2 px-4 m-auto mt-3 rounded-1" style="border: 0" type="submit"><?php print_r($data["Contacto"]["formulario"]["enviar"]);?></button>
        </form>
      </div>
      {{-- Conteudo Position Absolute --}}
      <div class="position-absolute d-lg-block d-none py-4 w-100 start-0 top-50 bg-cinzaNor translate-middle-y mt-5 overflow-hidden">
        <img src="/img/servico_detalhe.svg" class="servico-img-detalhe w-100" alt="">
        <div class="container">
          <h1 class="color-w1 russo" data-aos="fade-right"><?php print_r($data["Contacto"]["conteudo"]["titulo"]);?><span class="color-redNor">?</span></h1>
          <h5 class="roboto color-w1" data-aos="fade-right"><?php print_r($data["Contacto"]["conteudo"]["subtitulo"]);?></h5>
          <div class="color-w1 roboto ms-4">
            <div class="mt-4" data-aos="fade-down">
              <h5 class="fw-bold m-0"><?php print_r($data["Contacto"]["conteudo"]["telefone"]);?><span class="color-redNor">:</span></h5>
              <p class="text-decoration-none color-w1 roboto d-flex justify-content-start align-items-center gap-1 fs-6 mt-2"><ion-icon name="phone-portrait-outline"></ion-icon> <a class="text-decoration-none color-w1 roboto" href="tel:+351249119339"> +351 249 119 339</a> | <a class="text-decoration-none color-w1 roboto" href="tel:+351910232674">+351 910 232 674</a></p>
            </div>
            <div class="mt-4" data-aos="fade-down">
              <h5 class="fw-bold m-0"><?php print_r($data["Contacto"]["conteudo"]["email"]);?><span class="color-redNor">:</span></h5>
              <a href="mailto:geral@redfenix.pt" class="text-decoration-none color-w1 roboto d-flex justify-content-start align-items-center gap-1 fs-6 mt-2"><ion-icon name="mail-outline"></ion-icon>geral@redfenix.pt</a>
            </div>
            <div class="mt-4" data-aos="fade-down">
              <h5 class="fw-bold m-0"><?php print_r($data["Contacto"]["conteudo"]["lugar"]);?><span class="color-redNor">:</span></h5>
              <a href="http://maps.google.com/?q=RedFénix Engenharia, Lda., Alameda Um de Março, Tomar" type="_blank" class="text-decoration-none color-w1 roboto d-flex justify-content-start align-items-center gap-1 fs-6 mt-2"><ion-icon name="location-outline"></ion-icon>Alameda 1 de Março, nº35, 2300-431 | Tomar - Portugal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Smartphones Screen Content --}}
  <div class="d-lg-none d-block bg-cinzaNor">
    <div class="container py-5">
      <div class="row">
        <div class="col d-flex justify-content-center align-items-center flex-column">
          <h1 class="color-w1 russo" data-aos="fade-down"><?php print_r($data["Contacto"]["conteudo"]["titulo"]);?><span class="color-redNor">?</span></h1>
          <h5 class="roboto color-w1" data-aos="fade-down"><?php print_r($data["Contacto"]["conteudo"]["subtitulo"]);?></h5>
          <div class="color-w1 roboto">
            <div class="mt-4" data-aos="fade-right">
              <h5 class="fw-bold m-0"><?php print_r($data["Contacto"]["conteudo"]["telefone"]);?><span class="color-redNor">:</span></h5>
              <p href="" class="m-0 text-decoration-none color-w1 roboto d-flex justify-content-start align-items-center gap-1 fs-6 mt-2"><ion-icon name="phone-portrait-outline" class="me-1"></ion-icon> <a class="text-decoration-none color-w1 roboto m-0" href="tel:+351249119339"> +351 249 119 339</a> | <a class="text-decoration-none color-w1 roboto m-0" href="tel:+351910232674">+351 910 232 674</a></p>
            </div>
            <div class="mt-4" data-aos="fade-right">
              <h5 class="fw-bold m-0"><?php print_r($data["Contacto"]["conteudo"]["email"]);?><span class="color-redNor">:</span></h5>
              <a href="mailto: geral@redfenix.pt" class="text-decoration-none color-w1 roboto d-flex justify-content-start align-items-center gap-1 fs-6 mt-2"><ion-icon name="mail-outline" class="me-1"></ion-icon>geral@redfenix.pt</a>
            </div>
            <div class="mt-4" data-aos="fade-right">
              <h5 class="fw-bold m-0"><?php print_r($data["Contacto"]["conteudo"]["lugar"]);?><span class="color-redNor">:</span></h5>
              <a href="http://maps.google.com/?q=RedFénix Engenharia, Lda., Alameda Um de Março, Tomar" type="_blank" class="text-decoration-none color-w1 roboto d-flex justify-content-start align-items-center gap-1 fs-6 mt-2"><ion-icon name="location-outline" class="me-1"></ion-icon>Alameda 1 de Março, nº35, <br> 2300-431 | Tomar - Portugal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection  