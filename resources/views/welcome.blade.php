@extends("layouts.main")
@section("title", "Norlogic")
@section("content")

{{-- Início --}}
<div class="bg-inicio" id="home">
  <div class="container d-flex justify-content-center align-items-center" style="height: 430px">
    <div class="d-lg-flex">
      <div class="col-auto d-flex justify-content-center align-items-center flex-column text-center">
        <h1 class="russo color-w1 display-5">DESENVOLVIMENTO E ASSISTÊNCIA</h1>
        <h4 class="roboto color-w3">De hardware & software</h2>
        <a href="#" class="roboto text-decoration-none bg-redNor py-2 px-4 color-w1 fs-5 mt-3 rounded-1">Mais Informações</a>
      </div>
    </div>
  </div>
</div>

{{-- Serviços --}}
<div class="bg-w1" id="service">
  <div class="container py-5">
    <div class="d-flex justify-content-center align-items-center mt-5">
      <div class="col-auto">
        <h6 class="roboto text-center m-0 mb-1 color-redNor">Informação Breve</h6>
        <h2 class="russo text-center display-5 color-cinzaNor" style="letter-spacing: 0.05em;">SERVIÇOS</h2>
      </div>
    </div>
    <div class="d-lg-flex justify-content-center align-items-center mt-5 pt-1">
      <div class="col justify-content-center align-items-center d-flex flex-lg-row flex-column gap-4">
        <div class="img-fluid servico-img">
          <img class="position-relative z-1" src="/img/servico1.png" alt="">
        </div>
        <div class="z-1">
          <h4 class="russo servico-detalhe text-lg-start text-center">Criação de Hardware e Software</h4>
          <p class="roboto text-lg-start text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.</p>
        </div>
      </div>
      <div class="col justify-content-center align-items-center d-flex flex-lg-row flex-column gap-4 mt-4">
        <div class="img-fluid servico-img">
          <img class="position-relative z-1" src="/img/servico2.png" alt="">
        </div>
        <div class="z-1">
          <h4 class="russo servico-detalhe text-lg-start text-center">Assistência Técnica Eletrónica</h4>
          <p class="roboto text-lg-start text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.</p>
        </div>
      </div>
    </div>
    <div class="d-lg-flex justify-content-center align-items-center mb-5 pt-1">
      <div class="col justify-content-center align-items-center d-flex flex-lg-row flex-column gap-4 mt-4">
        <div class="img-fluid servico-img">
          <img class="position-relative z-1" src="/img/servico3.png" alt="">
        </div>
        <div class="z-1">
          <h4 class="russo servico-detalhe text-lg-start text-center">Manutenção Eletrónica Industrial</h4>
          <p class="roboto text-lg-start text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.</p>
        </div>
      </div>
      <div class="col justify-content-center align-items-center mt-4 d-flex flex-lg-row flex-column gap-4">
        <div class="img-fluid servico-img">
          <img class="position-relative z-1" src="/img/servico4.png" alt="">
        </div>
        <div class="z-1">
          <h4 class="russo servico-detalhe text-lg-start text-center">Comercialização de Componentes</h4>
          <p class="roboto text-lg-start text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.</p>
        </div>
      </div>
  </div>
</div>

{{-- Aptidões --}}
<div class="bg-w2">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center mt-5">
      <div class="col-auto">
        <h6 class="roboto text-center m-0 mb-1 color-redNor">Informação Breve</h6>
        <h2 class="russo text-center display-5 color-cinzaNor" style="letter-spacing: 0.05em;">APTIDÕES</h2>
      </div>
    </div>
    <div class="d-lg-flex mt-5">
      <div class="col m-auto d-flex justify-content-center align-items-center flex-column bg-w1 p-5 borda-w3">
        <ion-icon class="fs-1 color-redNor" name="globe-outline"></ion-icon>
        <h4 class="fw-bold roboto color-cinzaNor mt-2">Web Development</h4>
        <p class="roboto text-center color-cinzaNor" style="font-size: .875rem;">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
      </div>
      <div class="col m-auto d-flex justify-content-center align-items-center flex-column bg-w1 p-5 borda-w3">
        <ion-icon class="fs-1 color-redNor" name="construct-outline"></ion-icon>
        <h4 class="fw-bold roboto color-cinzaNor mt-2">Robótica & Hardware</h4>
        <p class="roboto text-center color-cinzaNor" style="font-size: .875rem;">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
      </div>
      <div class="col m-auto d-flex justify-content-center align-items-center flex-column bg-w1 p-5 borda-w3">
        <ion-icon class="fs-1 color-redNor" name="construct-outline"></ion-icon>
        <h4 class="fw-bold roboto color-cinzaNor mt-2">Robótica & Hardware</h4>
        <p class="roboto text-center color-cinzaNor" style="font-size: .875rem;">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
      </div>
    </div>
    <div class="d-lg-flex mb-5">
      <div class="col m-auto d-flex justify-content-center align-items-center flex-column bg-w1 p-5 borda-w3" >
        <ion-icon class="fs-1 color-redNor" name="globe-outline"></ion-icon>
        <h4 class="fw-bold roboto color-cinzaNor mt-2">Web Development</h4>
        <p class="roboto text-center color-cinzaNor" style="font-size: .875rem;">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
      </div>
      <div class="col m-auto d-flex justify-content-center align-items-center flex-column bg-w1 p-5 borda-w3">
        <ion-icon class="fs-1 color-redNor" name="construct-outline"></ion-icon>
        <h4 class="fw-bold roboto color-cinzaNor mt-2">Robótica & Hardware</h4>
        <p class="roboto text-center color-cinzaNor" style="font-size: .875rem;">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
      </div>
      <div class="col m-auto d-flex justify-content-center align-items-center flex-column bg-w1 p-5 borda-w3">
        <ion-icon class="fs-1 color-redNor" name="construct-outline"></ion-icon>
        <h4 class="fw-bold roboto color-cinzaNor mt-2">Robótica & Hardware</h4>
        <p class="roboto text-center color-cinzaNor" style="font-size: .875rem;">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
      </div>
    </div>
  </div>
</div>

{{-- Projetos Desenvolvidos --}}
<div class="bg-w1">
  <div class="container-fluid py-5">
    <div class="row justify-content-center align-items-center mt-5">
      <div class="col-auto">
        <h6 class="roboto text-center m-0 mb-1 color-redNor">Informação Breve</h6>
        <h2 class="russo text-center display-5 color-cinzaNor" style="letter-spacing: 0.05em;">PROJETOS DESENVOLVIDOS</h2>
      </div>
    </div>
    <div class="d-lg-flex justify-content-center mt-5 mb-5 gap-2">
      <div class="col-lg-auto position-relative p-0">
        <div class="banner-detalhe"></div>
        <img class="img-fluid w-100 z-1" style="opacity: 40%; cursor: pointer" src="/img/projeto1.png" alt="">
        <div class="position-absolute color-w1 text-end end-0 bottom-0 p-3 d-lg-block d-none">
          <h4 class="fw-bold roboto fs-3 info-detalhe">Robôs em <br> Arduino</h4>
          <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
        </div>
        <div class="position-absolute color-w1 text-end end-0 bottom-0 p-3 d-lg-none d-block">
          <h4 class="fw-bold roboto display-4 info-detalhe">Robôs em <br> Arduino</h4>
          <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
        </div>
      </div>
      <div class="col-lg-auto position-relative p-0">
        <div class="banner-detalhe"></div>
        <img class="img-fluid w-100 z-1" style="opacity: 40%; cursor: pointer" src="/img/projeto2.png" alt="">
        <div class="position-absolute color-w1 text-end end-0 bottom-0 p-3 d-lg-block d-none">
          <h4 class="fw-bold roboto fs-3 info-detalhe">Leitores de <br> Cartão</h4>
          <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
        </div>
        <div class="position-absolute color-w1 text-end end-0 bottom-0 p-3 d-lg-none d-block">
          <h4 class="fw-bold roboto display-4 info-detalhe">Leitores de <br> Cartão</h4>
          <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
        </div>
      </div>
      <div class="col-lg-auto position-relative p-0">
        <div class="banner-detalhe"></div>
        <img class="img-fluid w-100 z-1" style="opacity: 40%; cursor: pointer" src="/img/projeto3.png" alt="">
        <div class="position-absolute color-w1 text-end end-0 bottom-0 p-3 d-lg-block d-none">
          <h4 class="fw-bold roboto fs-3 info-detalhe">Próteses <br> Mecânicas</h4>
          <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
        </div>
        <div class="position-absolute color-w1 text-end end-0 bottom-0 p-3 d-lg-none d-block">
          <h4 class="fw-bold roboto display-4 info-detalhe">Próteses <br> Mecânicas</h4>
          <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
        </div>
      </div>
      <div class="col-lg-auto position-relative p-0">
        <div class="banner-detalhe"></div>
        <img class="img-fluid w-100 z-1" style="opacity: 40%; cursor: pointer" src="/img/projeto4.png" alt="">
        <div class="position-absolute color-w1 text-end end-0 bottom-0 p-3 d-lg-block d-none">
          <h4 class="fw-bold roboto fs-3 info-detalhe">Software de <br> Gestão</h4>
          <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
        </div>
        <div class="position-absolute color-w1 text-end end-0 bottom-0 p-3 d-lg-none d-block">
          <h4 class="fw-bold roboto display-4 info-detalhe">Software de <br> Gestão</h4>
          <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Produtos --}}
<div class="bg-w2" id="products">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center mt-5">
      <div class="col-auto">
        <h6 class="roboto text-center m-0 mb-1 color-redNor">Informação Breve</h6>
        <h2 class="russo text-center display-5 color-cinzaNor" style="letter-spacing: 0.05em;">PRODUTOS</h2>
      </div>
    </div>
    <div class="d-lg-flex mt-lg-5 mt-2">
      <div class="col bg-w1 d-flex justify-content-lg-start justify-content-center align-items-center gap-2 p-3 selection-detalhe">
        <ion-icon class="fs-2 color-redNor" name="hardware-chip-outline"></ion-icon>
        <h5 class="m-0 roboto color-cinzaNor">Hardware</h5>
      </div>
      <div class="col bg-w1 d-flex mt-lg-0 mt-3 justify-content-lg-start justify-content-center align-items-center gap-2 p-3 selection-detalhe">
        <ion-icon class="fs-2 color-redNor" name="apps-outline"></ion-icon>
        <h5 class="m-0 roboto color-cinzaNor">Software</h5>
      </div>
    </div>
    <div class="d-lg-flex mt-5 justify-content-between align-items-center">
      <div class="col-auto m-lg-0 m-auto p-0 h-100 position-relative" style="width: 350px;">
        <div class="produto-detalhe"></div>
        <div class="position-relative" >
          <div class="banner-detalhe" style="border-radius: 20px 5px 0px 0px"></div>
          <img class="img-fluid z-1" style="opacity: 80%; cursor: pointer; border-radius: 20px 5px 0px 0px" src="/img/produto1.png" alt="">
        </div>
        <div class="z-1 bg-w1 p-3 d-flex flex-column justify-content-center align-items-start position-relative" style="border-radius: 0px 0px 20px 5px">
          <h4 class="m-0 fw-bold roboto color-b1 produtos-texto-detalhe">DROPS</h4>
          <p class="m-0 text-break roboto mt-2 color-b3">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
          <a href="#" class="mt-4 roboto color-redNor text-decoration-none position-relative" style="font-size: .875rem">Ler mais <ion-icon class="position-absolute top-50 translate-middle-y ms-1" name="arrow-forward-outline"></ion-icon></a>
        </div>
      </div>
      <div class="col-auto m-lg-0 m-auto mt-5 p-0 h-100 position-relative" style="width: 350px;">
        <div class="produto-detalhe"></div>
        <div class="position-relative" >
          <div class="banner-detalhe" style="border-radius: 20px 5px 0px 0px"></div>
          <img class="img-fluid z-1" style="opacity: 80%; cursor: pointer; border-radius: 20px 5px 0px 0px" src="/img/produto2.png" alt="">
        </div>
        <div class="z-1 bg-w1 p-3 d-flex flex-column justify-content-center align-items-start position-relative" style="border-radius: 0px 0px 20px 5px">
          <h4 class="m-0 fw-bold roboto color-b1 produtos-texto-detalhe">DQPOOL</h4>
          <p class="m-0 text-break roboto mt-2 color-b3">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
          <a href="#" class="mt-4 roboto color-redNor text-decoration-none position-relative" style="font-size: .875rem">Ler mais <ion-icon class="position-absolute top-50 translate-middle-y ms-1" name="arrow-forward-outline"></ion-icon></a>
        </div>
      </div>
      <div class="col-auto m-lg-0 m-auto mt-5 p-0 h-100 position-relative" style="width: 350px;">
        <div class="produto-detalhe"></div>
        <div class="position-relative" >
          <div class="banner-detalhe" style="border-radius: 20px 5px 0px 0px"></div>
          <img class="img-fluid z-1" style="opacity: 80%; cursor: pointer; border-radius: 20px 5px 0px 0px" src="/img/produto3.png" alt="">
        </div>
        <div class="z-1 bg-w1 p-3 d-flex flex-column justify-content-center align-items-start position-relative" style="border-radius: 0px 0px 20px 5px">
          <h4 class="m-0 fw-bold roboto color-b1 produtos-texto-detalhe">DROPS</h4>
          <p class="m-0 text-break roboto mt-2 color-b3">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
          <a href="#" class="mt-4 roboto color-redNor text-decoration-none position-relative" style="font-size: .875rem">Ler mais <ion-icon class="position-absolute top-50 translate-middle-y ms-1" name="arrow-forward-outline"></ion-icon></a>
        </div>
      </div>
    </div>
    <div class="row justify-content-center align-items-center mt-5">
      <div class="col-auto">
        <a href="" class="text-decoration-none d-flex justify-content-center align-items-center flex-column">
          <h6 class="roboto color-g m-0">Ver Mais</h6>
          <ion-icon class="color-g" name="caret-down-outline"></ion-icon>
        </a>
      </div>
    </div>
  </div>
</div>

{{-- O que é a Norlogic? --}}
<div class="bg-cinzaNor overflow-hidden" id="about">
  <div class="container py-5">
    <div class="d-lg-flex justify-content-between align-items-center mt-5 mb-5">
      <div class="col-lg-6 d-flex justify-content-center flex-column align-items-lg-start align-items-center h-100">
        <h6 class="color-b4 roboto mb-1">Lorem ipsum dolor sit.</h6>
        <h1 class="russo color-w1 norlogic-titulo-detalhe">O que é a Norlogic<span class="color-redNor">?</span></h1>
        <p class="roboto color-w1 fs-5 lh-base mt-3 text-lg-start text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien. Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien.</p>
        <div class="d-flex justify-content-start align-items-center gap-2 mt-4">
          <a href="" class="color-redNor fs-3 text-decoration-none"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="" class="color-redNor fs-3 text-decoration-none"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="" class="color-redNor fs-3 text-decoration-none"><ion-icon name="mail-outline"></ion-icon></a>
          <a href="" class="color-redNor fs-3 text-decoration-none"><ion-icon name="call-outline"></ion-icon></a>
          <h6 class="roboto color-b5">Curioso? Entre em contacto!</h6>
        </div>
      </div>
      <div class="col-lg-6 d-flex mt-5 flex-column justify-content-lg-end justify-content-center align-items-center position-relative">
        <img class="video-detalhe img-fluid" src="/img/video-detalhe.svg" alt="">
        <video src="/img/video_norlogic.mp4" class="img-fluid position-relative" style="border-radius: 20px 20px 0px 20px; border: 4px solid #CC0033" autoplay loop onplaying="volume = 0;"></video>
      </div>
    </div>
  </div>
</div>

{{-- Parceiros --}}
<div class="bg-b2 position-relative">
  <div class="container py-5">
    <div class="d-lg-flex justify-content-between align-items-center">
    </div>
  </div>
</div>

{{-- Contacto --}}
<div class="bg-cinzaNor" id="contact">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-auto">
        <h6 class="roboto text-center m-0 mb-1 color-redNor">Informação Breve</h6>
        <h2 class="russo text-center display-5 color-w1" style="letter-spacing: 0.05em;">CONTACTO</h2>
      </div>
    </div>
    <div class="row mt-5 justify-content-center align-items-center">
      <div class="col-lg-6 bg-cinzaNor d-flex justify-content-center align-items-center flex-column p-5" style="border: 3px solid #CC0033; border-radius: 20px 5px 20px 5px;">
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
          <button class="bg-redNor color-w1 roboto fw-bold d-block py-2 px-4 w-25 m-auto mt-4 rounded-1" style="border: 0" type="submit">ENVIAR</button>
        </form>
      </div>
    </div>
    <div class="d-lg-flex justify-content-center align-items-center mt-4 gap-5">
      <div class="col-auto d-flex justify-content-start align-items-end h-100 flex-column contacto-detalhe">
        <h4 class="roboto fw-bold color-w1 m-0">Local</h4>
        <p class="roboto color-w4 text-end mt-2" style="font-size: .815rem">Alameda 1 de Março, nº 35 <br> 2300-431 Tomar - Portugal</p>
      </div>
      <div class="col-auto d-flex justify-content-start align-items-center h-100 flex-column contacto-detalhe">
        <h4 class="roboto fw-bold color-w1 m-0">Email</h4>
        <p class="roboto color-w4 text-end mt-2" style="font-size: .815rem">geral@redfenix.pt</p>
      </div>
      <div class="col-auto d-flex justify-content-start align-items-start h-100 flex-column">
        <h4 class="roboto fw-bold color-w1 m-0">Telefone</h4>
        <p class="roboto color-w4 text-end mt-2" style="font-size: .815rem">(00351) 249 119 339</p>
      </div>
    </div>
  </div>
</div>

@endsection  