@extends("layouts.main")
@section("title", "Norlogic")
@section("content")

{{-- Início --}}
<div class="container-fluid p-0"id="home">
  <div id="autoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner position-relative">
      <div class="carousel-item active">
        <img src="/img/carrosel1.png" class="d-block h-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <p class="roboto color-w3 m-0 fs-5">Hardware & Software</p>
          <h1 class="display-5 russo color-w1 mt-1">DESENVOLVIMENTO E ASSISTÊNCIA<span class="color-redNor">.</span></h5>
        </div>
        {{-- MOBILE --}}
        <div class="z-2 d-md-none d-flex flex-column justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
          <p class="roboto color-w3 m-0 fs-5 text-center">Hardware & Software</p>
          <h1 class="display-5 russo color-w1 mt-1 text-center">DESENVOLVIMENTO E ASSISTÊNCIA<span class="color-redNor">.</span></h5>
        </div>  
      </div>
      <div class="carousel-item">
        <img src="/img/carrosel2.png" class="d-block h-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <p class="roboto color-w3 m-0 fs-5">Serviço & Manutenção</p>
          <h1 class="display-5 russo color-w1 mt-1">SISTEMAS OPERATIVOS E TELEMÓVEIS<span class="color-redNor">.</span></h5>
        </div>
        {{-- MOBILE --}}
        <div class="z-2 d-md-none d-flex flex-column justify-content-center align-items-center position-absolute top-50 start-50 translate-middle w-75">
          <p class="roboto color-w3 m-0 fs-5 text-center">Serviço & Manutenção</p>
          <h1 class="display-5 russo color-w1 mt-1 text-center">SISTEMAS OPERATIVOS E TELEMÓVEIS<span class="color-redNor">.</span></h5>
        </div>    
      </div>
      <button class="position-absolute top-0 bottom-0 z-2 bg-transparent border-0 opacity-25 text-center p-0 d-md-flex d-none align-items-center justify-content-center" style="width: 5%" type="button" data-bs-target="#autoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="position-absolute top-0 bottom-0 end-0 z-2 bg-transparent border-0 opacity-25 text-center p-0 d-md-flex d-none align-items-center justify-content-center" style="width: 5%" type="button" data-bs-target="#autoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    
    </div>  
  </div>
</div>

{{-- Serviços --}}
<section class="bg-w1" id="service">
  <div class="container py-5">
    <div class="d-flex justify-content-center align-items-center mt-5">
      <div class="col-auto">
        <h6 class="roboto text-center m-0 mb-1 color-redNor">Informação Breve</h6>
        <h2 class="russo text-center display-5 color-cinzaNor" style="letter-spacing: 0.05em;">serviços</h2>
      </div>
    </div>
    <div class="d-lg-flex justify-content-center align-items-center gap-5 mt-5 pt-1">
      <div class="col justify-content-center align-items-center d-flex flex-lg-row flex-column gap-4">
        <div class="img-fluid servico-img">
          <img class="position-relative z-1" src="/img/servico1.png" alt="" width="200px">
        </div>
        <div class="z-1">
          <h4 class="russo servico-detalhe text-lg-start text-center" >Criação de Hardware e Software</h4>
          <p class="roboto text-lg-start text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.</p>
        </div>
      </div>
      <div class="col justify-content-center align-items-center d-flex flex-lg-row flex-column gap-4 mt-4">
        <div class="img-fluid servico-img">
          <img class="position-relative z-1" src="/img/servico2.png" alt="" width="200px">
        </div>
        <div class="z-1">
          <h4 class="russo servico-detalhe text-lg-start text-center">Assistência Técnica Eletrónica</h4>
          <p class="roboto text-lg-start text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.</p>
        </div>
      </div>
    </div>
    <div class="d-lg-flex justify-content-center align-items-center gap-5 mb-5 pt-1">
      <div class="col justify-content-center align-items-center d-flex flex-lg-row flex-column gap-4 mt-4">
        <div class="img-fluid servico-img">
          <img class="position-relative z-1" src="/img/servico3.png" alt="" width="200px">
        </div>
        <div class="z-1">
          <h4 class="russo servico-detalhe text-lg-start text-center">Manutenção Eletrónica Industrial</h4>
          <p class="roboto text-lg-start text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.</p>
        </div>
      </div>
      <div class="col justify-content-center align-items-center mt-4 d-flex flex-lg-row flex-column gap-4">
        <div class="img-fluid servico-img">
          <img class="position-relative z-1" src="/img/servico4.png" alt="" width="200px">
        </div>
        <div class="z-1">
          <h4 class="russo servico-detalhe text-lg-start text-center">Comercialização de Componentes</h4>
          <p class="roboto text-lg-start text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Aptidões --}}
<div class="bg-w2">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center mt-5">
      <div class="col-auto">
        <h6 class="roboto text-center m-0 mb-1 color-redNor">Informação Breve</h6>
        <h2 class="russo text-center display-5 color-cinzaNor" style="letter-spacing: 0.05em;">aptidões</h2>
      </div>
    </div>
    <div class="d-lg-flex mt-5 mb-5">
      <div class="col d-flex justify-content-center align-items-center flex-column bg-w1 p-5 borda-w3">
        <ion-icon class="fs-1 color-redNor" name="globe-outline"></ion-icon>
        <h4 class="fw-bold roboto color-cinzaNor mt-2 text-center">Web Development</h4>
        <p class="roboto text-center color-cinzaNor" style="font-size: .875rem;">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
      </div>
      <div class="col d-flex justify-content-center align-items-center flex-column bg-w1 p-5 borda-w3">
        <ion-icon class="fs-1 color-redNor" name="construct-outline"></ion-icon>
        <h4 class="fw-bold roboto color-cinzaNor mt-2 text-center">Robótica & Hardware</h4>
        <p class="roboto text-center color-cinzaNor" style="font-size: .875rem;">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
      </div>
      <div class="col d-flex justify-content-center align-items-center flex-column bg-w1 p-5 borda-w3">
        <ion-icon class="fs-1 color-redNor" name="construct-outline"></ion-icon>
        <h4 class="fw-bold roboto color-cinzaNor mt-2 text-center">Robótica & Hardware</h4>
        <p class="roboto text-center color-cinzaNor" style="font-size: .875rem;">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
      </div>
    </div>
  </div>
</div>


<div class="bg-w1">
  <div class="container-lg container-fluid py-lg-5 p-0 overflow-hidden">
    <div class="row justify-content-center align-items-center mt-5">
      <div class="col-auto">
        <h6 class="roboto text-center m-0 mb-1 color-redNor text-center">Informação Breve</h6>
        <h2 class="russo text-center display-5 color-cinzaNor text-center" style="letter-spacing: 0.05em;">projetos</h2>
      </div>
    </div>
    {{-- PC --}}
    <div id="projetosCarrousel" class="d-lg-block d-none carousel slide mt-5 mb-lg-5 ">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex justify-content-center gap-5">
            <div class="col-auto d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius">
              <div class="banner-detalhe"></div>
              <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer;" src="/img/projeto1.png" alt="">
              <div class="position-absolute z-2 color-w1 text-end end-0 bottom-0 p-3">
                <h4 class="fw-bold roboto fs-3 info-detalhe">Robôs em <br> Arduino</h4>
                <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
              </div>
            </div>

            <div class="col-auto d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius">
              <div class="banner-detalhe"></div>
              <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto2.png" alt="">
              <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
                <h4 class="fw-bold roboto fs-3 info-detalhe">Leitores de <br> Cartão</h4>
                <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
              </div>
            </div>

            <div class="col-auto d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius">
              <div class="banner-detalhe"></div>
              <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto3.png" alt="">
              <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
                <h4 class="fw-bold roboto fs-3 info-detalhe">Próteses <br> Mecânicas</h4>
                <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="d-flex justify-content-center gap-5">
            <div class="col-auto d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius">
              <div class="banner-detalhe"></div>
              <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer;" src="/img/projeto1.png" alt="">
              <div class="position-absolute z-2 color-w1 text-end end-0 bottom-0 p-3">
                <h4 class="fw-bold roboto fs-3 info-detalhe">Robôs em <br> Arduino</h4>
                <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
              </div>
            </div>
            <div class="col-auto d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius">
              <div class="banner-detalhe"></div>
              <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto2.png" alt="">
              <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
                <h4 class="fw-bold roboto fs-3 info-detalhe">Leitores de <br> Cartão</h4>
                <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
              </div>
            </div>
            <div class="col-auto d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius">
              <div class="banner-detalhe"></div>
              <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto3.png" alt="">
              <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
                <h4 class="fw-bold roboto fs-3 info-detalhe">Próteses <br> Mecânicas</h4>
                <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
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
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    {{-- MOBILE --}}
    <div id="projetosCarrouselMobile" class="d-lg-none d-block carousel slide mt-2 mb-lg-5 ">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="col d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius" style="height: 450px">
            <div class="banner-detalhe"></div>
            <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer;" src="/img/projeto1.png" alt="">
            <div class="position-absolute z-2 color-w1 text-end end-0 bottom-0 p-3">
              <h4 class="fw-bold roboto display-4 info-detalhe ">Robôs em <br> Arduino</h4>
              <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius" style="height: 450px">
            <div class="banner-detalhe"></div>
            <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto2.png" alt="">
            <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
              <h4 class="fw-bold roboto display-4 info-detalhe">Leitores de <br> Cartão</h4>
              <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius" style="height: 450px">
            <div class="banner-detalhe"></div>
            <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto3.png" alt="">
            <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
              <h4 class="fw-bold roboto display-4 info-detalhe">Próteses <br> Mecânicas</h4>
              <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius" style="height: 450px">
            <div class="banner-detalhe"></div>
            <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer;" src="/img/projeto1.png" alt="">
            <div class="position-absolute z-2 color-w1 text-end end-0 bottom-0 p-3">
              <h4 class="fw-bold roboto display-4 info-detalhe ">Robôs em <br> Arduino</h4>
              <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius" style="height: 450px">
            <div class="banner-detalhe"></div>
            <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto2.png" alt="">
            <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
              <h4 class="fw-bold roboto display-4 info-detalhe">Leitores de <br> Cartão</h4>
              <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="col d-flex justify-content-center align-items-center position-relative p-0 overflow-hidden projeto-border-radius" style="height: 450px">
            <div class="banner-detalhe"></div>
            <img class="img-fluid w-100 z-1 opacity-50" style="cursor: pointer" src="/img/projeto3.png" alt="">
            <div class="position-absolute color-w1 z-2 text-end end-0 bottom-0 p-3">
              <h4 class="fw-bold roboto display-4 info-detalhe">Próteses <br> Mecânicas</h4>
              <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
            </div>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev w-auto d-lg-none d-block" type="button" data-bs-target="#projetosCarrouselMobile" data-bs-slide="prev">
        <ion-icon class="color-w1 fs-2 p-2 rounded-5" name="chevron-back-outline"></ion-icon>
      </button>
      <button class="carousel-control-next w-auto d-lg-none d-block" type="button" data-bs-target="#projetosCarrouselMobile" data-bs-slide="next">
        <ion-icon class="color-w1 fs-2 p-2 rounded-5" name="chevron-forward-outline"></ion-icon>
      </button>
    </div>
  </div>
</div>

{{-- Produtos View --}}
<div class="d-none bg-black bg-opacity-50 w-100 h-100 z-3 position-fixed top-0 start-0 justify-content-center align-items-center" id="popup">
  <div class="container">
    <ion-icon name="close-outline" class="d-lg-block d-none position-absolute end-0 top-0 color-w1 fs-1 p-4" style="cursor: pointer;" onclick="closePopup()"></ion-icon>
    <div class="d-flex justify-content-center align-items-center gap-5 flex-lg-row flex-column">
      <div class="col-auto d-lg-block d-none">
        <div class="position-relative overflow-hidden d-flex jusity-content-center align-items-center rounded-1 border-2 border" style="height: 450px; width: 350px">
          <img id="full-image" class="img-fluid z-1 w-auto h-auto" src="" alt="">
        </div>
        <div class="d-flex justify-content-between align-items-center mt-4">
          <div class="position-relative overflow-hidden d-flex jusity-content-center align-items-center rounded-1 border-2 border " style="width: 100px; height:100px">
            <img id="preview_1" class="img-fluid z-1" onclick="setImage(this)" src="" alt="" style="cursor: pointer;">
          </div>
          <div class="position-relative overflow-hidden d-flex jusity-content-center align-items-center rounded-1 border-2 border " style="width: 100px; height:100px">
            <img id="preview_2" class="img-fluid z-1" onclick="setImage(this)" src="" alt="" style="cursor: pointer;">
          </div>
          <div class="position-relative overflow-hidden d-flex jusity-content-center align-items-center rounded-1 border-2 border " style="width: 100px; height:100px">
            <img id="preview_3" class="img-fluid z-1" onclick="setImage(this)" src="" alt="" style="cursor: pointer;">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-auto bg-cinzaNor p-5 position-relative" style="border-radius: 20px 5px 20px 5px; border: 3px solid #CC0033">
        <ion-icon name="close-outline" class="d-lg-none d-block position-absolute end-0 top-0 color-w1 fs-1 p-4" style="cursor: pointer;" onclick="closePopup()"></ion-icon>
        <h1 class="color-w1 fw-bold roboto produtos-texto-detalhe" id="titulo"></h1>
        <p class="color-w1 roboto mt-3" id="comentario"></p>
        <h5 class="color-w1 roboto fw-bold">Especificações:</h5>
        <ul class="color-g roboto">
          <li>Chipset / GPU: NVIDIA GeForce RTX 2060 SUPER;</li>
          <li>Memória vídeo: 8GB GDDR6 256 bit;</li>
          <li>Interface: PCIe 3.0 x16;</li>
          <li>Vel. Memória14.000 Mbps;</li>
          <li>Interfaces na Placa: HDMI 2.0b*1, DisplayPort 1.4*3 e USB Type-C*1;</li>
          <li>Resol. Max: Digital: 7680 x 4320@60Hz.</li>
        </ul>
        <a href="" class="bg-redNor py-2 rounded-1 mt-3 d-inline-block px-4 text-decoration-none fw-bold color-w1 roboto">ENTRAR EM CONTACTO</a>
      </div>
    </div>
  </div>
</div>

{{-- Produtos --}}
<section class="bg-w2" id="products">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center mt-5">
      <div class="col-auto">
        <h6 class="roboto text-center m-0 mb-1 color-redNor">Informação Breve</h6>
        <h2 class="russo text-center display-5 color-cinzaNor" style="letter-spacing: 0.05em;">produtos</h2>
      </div>
    </div>
    <div class="d-lg-flex mt-lg-5 mt-2">
      <div class="col bg-w1 d-flex justify-content-lg-start justify-content-center align-items-center gap-2 p-3 selection-detalhe" style="cursor: pointer" id="hardware-selection" onclick="changeSelection(this)">
        <ion-icon class="fs-2 color-redNor" name="hardware-chip-outline"></ion-icon>
        <h5 class="m-0 roboto color-cinzaNor">Hardware</h5>
      </div>
      <div class="col bg-w1 d-flex mt-lg-0 mt-3 justify-content-lg-start justify-content-center align-items-center gap-2 p-3" style="cursor: pointer" id="software-selection" onclick="changeSelection(this)">
        <ion-icon class="fs-2 color-redNor" name="apps-outline"></ion-icon>
        <h5 class="m-0 roboto color-cinzaNor">Software</h5>
      </div>
    </div>
    {{-- HARDWARE --}}
    <div class="d-lg-flex mt-5 mb-5 justify-content-xxl-between justify-content-center align-items-center flex-wrap gap-5" id="hardware">
      <div class="col-auto m-lg-0 m-auto p-0 h-100 position-relative" style="width: 350px;">
        <div class="produto-detalhe"></div>
        <div class="position-relative overflow-hidden d-flex jusity-content-center align-items-center" style="width: 350px; height: 250px; border-radius: 20px 5px 0px 0px" onclick="openPopup(this)">
          {{-- Information --}}
          <div comment="Apresentamos a nossa máquina de café, um equipamento moderno e sofisticado que vai transformar a sua experiência com o café. Com um design elegante e compacto, ela se encaixa perfeitamente em qualquer ambiente, desde a cozinha da sua casa até o escritório da sua empresa."
          title="DROPS"
          preview_1="/img/produto1.jpg" 
          preview_2="/img/drops1_preview1.jpg" 
          preview_3="/img/drops1_preview2.jpg"></div>

          <div class="banner-detalhe"></div>
          <img class="img-fluid z-1" style="opacity: 80%; cursor: pointer;" src="/img/produto1.jpg" alt="">
        </div>
        <div class="z-1 bg-w1 p-3 d-flex flex-column justify-content-center align-items-start position-relative" style="border-radius: 0px 0px 20px 5px">
          <h4 class="m-0 fw-bold roboto color-b1 produtos-texto-detalhe">DROPS</h4>
          <p class="m-0 text-break roboto mt-2 color-b3">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
          <a href="#" class="mt-4 roboto color-redNor text-decoration-none position-relative" style="font-size: .875rem">Ler mais <ion-icon class="position-absolute top-50 translate-middle-y ms-1" name="arrow-forward-outline"></ion-icon></a>
        </div>
      </div>
      <div class="col-auto m-lg-0 m-auto p-0 h-100 position-relative mt-4" style="width: 350px;">
        <div class="produto-detalhe"></div>
        <div class="position-relative overflow-hidden d-flex jusity-content-center align-items-center" style="width: 350px; height: 250px; border-radius: 20px 5px 0px 0px" onclick="openPopup(this)">
          {{-- Information --}}
          <div comment="Apresentamos a nossa máquina de café, um equipamento moderno e sofisticado que vai transformar a sua experiência com o café. Com um design elegante e compacto, ela se encaixa perfeitamente em qualquer ambiente, desde a cozinha da sua casa até o escritório da sua empresa."
          title="DQPOOL"
          preview_1="/img/produto2.jpg" 
          preview_2="/img/dqpool_preview1.jpg" 
          preview_3="/img/dqpool_preview2.jpg"></div>

          <div class="banner-detalhe"></div>
          <img class="img-fluid z-1" style="opacity: 80%; cursor: pointer;" src="/img/produto2.jpg" alt="">
        </div>
        <div class="z-1 bg-w1 p-3 d-flex flex-column justify-content-center align-items-start position-relative" style="border-radius: 0px 0px 20px 5px">
          <h4 class="m-0 fw-bold roboto color-b1 produtos-texto-detalhe">DQPOOL</h4>
          <p class="m-0 text-break roboto mt-2 color-b3">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
          <a href="#" class="mt-4 roboto color-redNor text-decoration-none position-relative" style="font-size: .875rem">Ler mais <ion-icon class="position-absolute top-50 translate-middle-y ms-1" name="arrow-forward-outline"></ion-icon></a>
        </div>
      </div>
      <div class="col-auto m-lg-0 m-auto p-0 h-100 position-relative mt-4" style="width: 350px;">
        <div class="produto-detalhe"></div>
        <div class="position-relative overflow-hidden d-flex jusity-content-center align-items-center" style="width: 350px; height: 250px; border-radius: 20px 5px 0px 0px" onclick="openPopup(this)">
          {{-- Information --}}
          <div comment="Apresentamos a nossa máquina de café, um equipamento moderno e sofisticado que vai transformar a sua experiência com o café. Com um design elegante e compacto, ela se encaixa perfeitamente em qualquer ambiente, desde a cozinha da sua casa até o escritório da sua empresa."
          title="DROPS"
          preview_1="/img/produto3.jpg" 
          preview_2="/img/drops2_preview1.jpg" 
          preview_3="/img/drops2_preview2.jpg"></div>

          <div class="banner-detalhe"></div>
          <img class="img-fluid z-1" style="opacity: 80%; cursor: pointer;" src="/img/produto3.jpg" alt="">
        </div>
        <div class="z-1 bg-w1 p-3 d-flex flex-column justify-content-center align-items-start position-relative" style="border-radius: 0px 0px 20px 5px">
          <h4 class="m-0 fw-bold roboto color-b1 produtos-texto-detalhe">DROPS</h4>
          <p class="m-0 text-break roboto mt-2 color-b3">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
          <a href="#" class="mt-4 roboto color-redNor text-decoration-none position-relative" style="font-size: .875rem">Ler mais <ion-icon class="position-absolute top-50 translate-middle-y ms-1" name="arrow-forward-outline"></ion-icon></a>
        </div>
      </div>
    </div>
    {{-- SOFTWARE --}}
    <div class="d-none mt-5 mb-5 justify-content-xxl-between justify-content-center align-items-center flex-wrap gap-5" id="software">
      <div class="col-auto m-lg-0 m-auto p-0 h-100 position-relative" style="width: 350px;">
        <div class="produto-detalhe"></div>
        <div class="position-relative overflow-hidden d-flex jusity-content-center align-items-center" style="width: 350px; height: 250px; border-radius: 20px 5px 0px 0px" onclick="openPopup(this)">
          {{-- Information --}}
          <div comment="Apresentamos a nossa máquina de café, um equipamento moderno e sofisticado que vai transformar a sua experiência com o café. Com um design elegante e compacto, ela se encaixa perfeitamente em qualquer ambiente, desde a cozinha da sua casa até o escritório da sua empresa."
          title="DROPS"
          preview_1="/img/produto1.jpg" 
          preview_2="/img/drops1_preview1.jpg" 
          preview_3="/img/drops1_preview2.jpg"></div>

          <div class="banner-detalhe"></div>
          <img class="img-fluid z-1" style="opacity: 80%; cursor: pointer;" src="/img/produto2.jpg" alt="">
        </div>
        <div class="z-1 bg-w1 p-3 d-flex flex-column justify-content-center align-items-start position-relative" style="border-radius: 0px 0px 20px 5px">
          <h4 class="m-0 fw-bold roboto color-b1 produtos-texto-detalhe">DROPS</h4>
          <p class="m-0 text-break roboto mt-2 color-b3">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
          <a href="#" class="mt-4 roboto color-redNor text-decoration-none position-relative" style="font-size: .875rem">Ler mais <ion-icon class="position-absolute top-50 translate-middle-y ms-1" name="arrow-forward-outline"></ion-icon></a>
        </div>
      </div>
      <div class="col-auto m-lg-0 m-auto p-0 h-100 position-relative mt-4" style="width: 350px;">
        <div class="produto-detalhe"></div>
        <div class="position-relative overflow-hidden d-flex jusity-content-center align-items-center" style="width: 350px; height: 250px; border-radius: 20px 5px 0px 0px" onclick="openPopup(this)">
          {{-- Information --}}
          <div comment="Apresentamos a nossa máquina de café, um equipamento moderno e sofisticado que vai transformar a sua experiência com o café. Com um design elegante e compacto, ela se encaixa perfeitamente em qualquer ambiente, desde a cozinha da sua casa até o escritório da sua empresa."
          title="DQPOOL"
          preview_1="/img/produto2.jpg" 
          preview_2="/img/dqpool_preview1.jpg" 
          preview_3="/img/dqpool_preview2.jpg"></div>

          <div class="banner-detalhe"></div>
          <img class="img-fluid z-1" style="opacity: 80%; cursor: pointer;" src="/img/produto2.jpg" alt="">
        </div>
        <div class="z-1 bg-w1 p-3 d-flex flex-column justify-content-center align-items-start position-relative" style="border-radius: 0px 0px 20px 5px">
          <h4 class="m-0 fw-bold roboto color-b1 produtos-texto-detalhe">DQPOOL</h4>
          <p class="m-0 text-break roboto mt-2 color-b3">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
          <a href="#" class="mt-4 roboto color-redNor text-decoration-none position-relative" style="font-size: .875rem">Ler mais <ion-icon class="position-absolute top-50 translate-middle-y ms-1" name="arrow-forward-outline"></ion-icon></a>
        </div>
      </div>
      <div class="col-auto m-lg-0 m-auto p-0 h-100 position-relative mt-4" style="width: 350px;">
        <div class="produto-detalhe"></div>
        <div class="position-relative overflow-hidden d-flex jusity-content-center align-items-center" style="width: 350px; height: 250px; border-radius: 20px 5px 0px 0px" onclick="openPopup(this)">
          {{-- Information --}}
          <div comment="Apresentamos a nossa máquina de café, um equipamento moderno e sofisticado que vai transformar a sua experiência com o café. Com um design elegante e compacto, ela se encaixa perfeitamente em qualquer ambiente, desde a cozinha da sua casa até o escritório da sua empresa."
          title="DROPS"
          preview_1="/img/produto3.jpg" 
          preview_2="/img/drops2_preview1.jpg" 
          preview_3="/img/drops2_preview2.jpg"></div>

          <div class="banner-detalhe"></div>
          <img class="img-fluid z-1" style="opacity: 80%; cursor: pointer;" src="/img/produto2.jpg" alt="">
        </div>
        <div class="z-1 bg-w1 p-3 d-flex flex-column justify-content-center align-items-start position-relative" style="border-radius: 0px 0px 20px 5px">
          <h4 class="m-0 fw-bold roboto color-b1 produtos-texto-detalhe">DROPS</h4>
          <p class="m-0 text-break roboto mt-2 color-b3">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
          <a href="#" class="mt-4 roboto color-redNor text-decoration-none position-relative" style="font-size: .875rem">Ler mais <ion-icon class="position-absolute top-50 translate-middle-y ms-1" name="arrow-forward-outline"></ion-icon></a>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- O que é a Norlogic? --}}
<section class="bg-cinzaNor overflow-hidden" id="about">
  <div class="container py-5">
    <div class="d-lg-flex justify-content-between align-items-center mt-5 mb-5">
      <div class="col-lg-6 d-flex justify-content-center flex-column align-items-lg-start align-items-center h-100">
        <h6 class="color-b4 roboto mb-1">Lorem ipsum dolor sit.</h6>
        <h1 class="russo color-w1 norlogic-titulo-detalhe">o que é a Norlogic<span class="color-redNor">?</span></h1>
        <p class="roboto color-w1 fs-5 lh-base mt-3 text-lg-start text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien. Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
        <div class="d-flex justify-content-start align-items-center gap-2 mt-4">
          <a href="https://www.facebook.com/redfenixeng" target="_blank" class="color-redNor fs-3 text-decoration-none"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="https://www.instagram.com/redfenix.eng/?hl=pt" target="_blank" class="color-redNor fs-3 text-decoration-none"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="mailto:geral@redfenix.pt" class="color-redNor fs-3 text-decoration-none"><ion-icon name="mail-outline"></ion-icon></a>
          <a href="tel:00351249119339" class="color-redNor fs-3 text-decoration-none"><ion-icon name="call-outline"></ion-icon></a>
          <h6 class="roboto color-b5">Curioso? Entre em contacto!</h6>
        </div>
      </div>
      <div class="col-lg-6 d-flex mt-5 flex-column justify-content-lg-end justify-content-center align-items-center position-relative">
        <img class="video-detalhe img-fluid" src="/img/video-detalhe.svg" alt="">
        <video src="/img/video_norlogic.mp4" class="img-fluid position-relative" muted style="border-radius: 20px 20px 0px 20px; border: 4px solid #CC0033" autoplay loop></video>
      </div>
    </div>
  </div>
</section>

{{-- Parceiros --}}
<div class="bg-b2 position-relative">
  <div class="container py-4">
    <div class="row">
      <div class="col d-flex justify-content-start aling-items-center">
        <h5 class="russo color-b3">marcas <span class="color-redNor">/</span> afiliados</h5>
      </div>
    </div>
    <div class="d-sm-flex justify-content-center align-items-center gap-5">
     <div class="col-auto d-flex justify-content-center align-items-center">
      <img src="/img/logo_adspot.png" width="150px" alt="">
     </div>
     <div class="col-auto d-flex justify-content-center align-items-center mt-2">
      <img src="/img/logo_becurious.svg" width="150px" alt="">
     </div>
     <div class="col-auto d-flex justify-content-center align-items-center mt-2">
      <img src="/img/logo_redfenix.png" width="150px" alt="">
     </div>
    </div>
  </div>
</div>

{{-- Contacto --}}
<section class="bg-w1 position-relative" id="contact">
  <div class="position-absolute d-lg-block d-none py-4 w-100 start-0 top-50 bg-cinzaNor translate-middle-y mt-5">
    <div class="container">
      <h1 class="color-w1 russo">Quer falar conosco<span class="color-redNor">?</span></h1>
      <h5 class="roboto color-w1">Estamos disponíveis! Pode:</h5>
      <div class="color-w1 roboto ms-4">
        <div class="mt-4">
          <h5 class="fw-bold m-0">Ligar<span class="color-redNor">:</span></h5>
          <p href="" class="text-decoration-none color-w1 roboto d-flex justify-content-start align-items-center gap-1 fs-6 mt-2"><ion-icon name="phone-portrait-outline"></ion-icon> <a class="text-decoration-none color-w1 roboto" href="tel:+351249119339"> +351 249 119 339</a> | <a class="text-decoration-none color-w1 roboto" href="tel:+351910232674">+351 910 232 674</a></p>
        </div>
        <div class="mt-4">
          <h5 class="fw-bold m-0">Enviar um email<span class="color-redNor">:</span></h5>
          <a href="mailto: geral@redfenix.pt" class="text-decoration-none color-w1 roboto d-flex justify-content-start align-items-center gap-1 fs-6 mt-2"><ion-icon name="mail-outline"></ion-icon>geral@redfenix.pt</a>
        </div>
        <div class="mt-4">
          <h5 class="fw-bold m-0">Visita-nos<span class="color-redNor">:</span></h5>
          <a href="http://maps.google.com/?q=RedFénix Engenharia, Lda., Alameda Um de Março, Tomar" type="_blank" class="text-decoration-none color-w1 roboto d-flex justify-content-start align-items-center gap-1 fs-6 mt-2"><ion-icon name="location-outline"></ion-icon>Alameda 1 de Março, nº35, 2300-431 | Tomar - Portugal</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-auto">
        <h6 class="roboto text-center m-0 mb-1 color-redNor">Informação Breve</h6>
        <h2 class="russo text-center display-5 color-cinzaNor" style="letter-spacing: 0.05em;">contacto</h2>
      </div>
    </div>
    <div class="row justify-content-end align-items-center mt-5 mb-5">
      <div class="col-lg-6 z-1 bg-cinzaNor d-flex justify-content-center align-items-center flex-column p-5" style="border: 3px solid #CC0033; border-radius: 40px 5px 40px 5px;">
        <h2 class="roboto color-w1 fw-bold justify-self-center align-self-start">Envie-nos uma mensagem<span class="color-redNor">!</span></h2>
        <form class="w-100 d-lg-flex justify-content-center aling-items-center flex-column" action="">
          <div class="d-lg-flex justify-content-between align-items-center">
            <div class="w-100 me-lg-3">
              <label class="form-label roboto color-w1 m-0 mt-4 mb-1" for="name">Nome:</label>
              <input class="form-control input-contact " type="text" name="name" id="name" placeholder="Nome" required>
            </div>
            <div class="w-100 ms-lg-3">
              <label class="form-label roboto color-w1 m-0 mt-4 mb-1" for="email">Email:</label>
              <input class="form-control input-contact " type="email" name="email" id="email" placeholder="exemplo@email.com" required>
            </div>
          </div>
          <label class="form-label roboto color-w1 m-0 mt-4 mb-1" for="message">Mensagem:</label>
          <textarea class="form-control input-contact" name="message" id="message" placeholder="Mensagem" style="height: 144px" required></textarea>
          <button class="bg-redNor color-w1 roboto fw-bold d-block py-2 px-4 m-auto mt-4 rounded-1" style="border: 0" type="submit">ENVIAR</button>
        </form>
      </div>
    </div>
  </div>
  <div class="d-lg-none d-block bg-cinzaNor">
    <div class="container py-5">
      <div class="row">
        <div class="col d-flex justify-content-center align-items-center flex-column">
          <h1 class="color-w1 russo">Quer falar conosco<span class="color-redNor">?</span></h1>
          <h5 class="roboto color-w1">Estamos disponíveis! Pode:</h5>
          <div class="color-w1 roboto">
            <div class="mt-4">
              <h5 class="fw-bold m-0">Ligar<span class="color-redNor">:</span></h5>
              <p href="" class="m-0 text-decoration-none color-w1 roboto d-flex justify-content-start align-items-center gap-1 fs-6 mt-2"><ion-icon name="phone-portrait-outline" class="me-1"></ion-icon> <a class="text-decoration-none color-w1 roboto m-0" href="tel:+351249119339"> +351 249 119 339</a> | <a class="text-decoration-none color-w1 roboto m-0" href="tel:+351910232674">+351 910 232 674</a></p>
            </div>
            <div class="mt-4">
              <h5 class="fw-bold m-0">Enviar um email<span class="color-redNor">:</span></h5>
              <a href="mailto: geral@redfenix.pt" class="text-decoration-none color-w1 roboto d-flex justify-content-start align-items-center gap-1 fs-6 mt-2"><ion-icon name="mail-outline" class="me-1"></ion-icon>geral@redfenix.pt</a>
            </div>
            <div class="mt-4">
              <h5 class="fw-bold m-0">Visita-nos<span class="color-redNor">:</span></h5>
              <a href="http://maps.google.com/?q=RedFénix Engenharia, Lda., Alameda Um de Março, Tomar" type="_blank" class="text-decoration-none color-w1 roboto d-flex justify-content-start align-items-center gap-1 fs-6 mt-2"><ion-icon name="location-outline" class="me-1"></ion-icon>Alameda 1 de Março, nº35, <br> 2300-431 | Tomar - Portugal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection  