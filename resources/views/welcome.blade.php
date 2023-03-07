@extends("layouts.main")
@section("title", "Norlogic")
@section("content")

{{-- Início --}}
<div class="bg-inicio" id="home">
  <div class="container d-flex justify-content-center align-items-center" style="height: 430px">
    <div class="row">
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
    <div class="row justify-content-center align-items-center">
      <div class="col-auto">
        <h6 class="roboto text-center m-0 mb-1 color-redNor">Informação Breve</h6>
        <h2 class="russo text-center display-5" style="letter-spacing: 0.05em;">SERVIÇOS</h2>
      </div>
    </div>
    <div class="d-lg-flex justify-content-center align-items-center mt-5 pt-1">
      <div class="col justify-content-center align-items-center d-flex gap-4 position-relative">
        <div class="servico-img"></div>
        <img class="img-fluid z-1" src="/img/servico1.png" alt="">
        <div class="z-1">
          <h4 class="russo servico-detalhe">Criação de Hardware e Software</h4>
          <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.</p>
        </div>
      </div>
      <div class="col justify-content-center align-items-center d-flex gap-4 position-relative">
        <div class="servico-img"></div>
        <img class="img-fluid z-1" src="/img/servico2.png" alt="">
        <div class="z-1">
          <h4 class="russo servico-detalhe">Assistência Técnica Eletrónica</h4>
          <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.</p>
        </div>
      </div>
    </div>
    <div class="d-lg-flex justify-content-center align-items-center mt-5 mb-5 pt-1">
      <div class="col justify-content-center align-items-center d-flex gap-4 position-relative">
        <div class="servico-img"></div>
        <img class="img-fluid z-1" src="/img/servico3.png" alt="">
        <div class="z-1">
          <h4 class="russo servico-detalhe">Manutenção Eletrónica Industrial</h4>
          <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.</p>
        </div>
      </div>
      <div class="col justify-content-center align-items-center d-flex gap-4 position-relative">
        <div class="servico-img"></div>
        <img class="img-fluid z-1" src="/img/servico4.png" alt="">
        <div class="z-1">
          <h4 class="russo servico-detalhe">Comercialização de Componentes</h4>
          <p class="roboto">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.</p>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Projetos Desenvolvidos --}}
<div class="bg-w2">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-auto">
        <h6 class="roboto text-center m-0 mb-1 color-redNor">Informação Breve</h6>
        <h2 class="russo text-center display-5" style="letter-spacing: 0.05em;">PROJETOS DESENVOLVIDOS</h2>
      </div>
    </div>
    <div class="row justify-content-center mt-5 mb-5">
      <div class="col-auto position-relative p-0">
        <div class="banner-detalhe"></div>
        <img class="img-fluid z-1" style="opacity: 40%; cursor: pointer" src="/img/projeto1.png" alt="">
        <div class="position-absolute color-w1 text-end end-0 bottom-0 p-3">
          <h4 class="fw-bold roboto fs-3">Robôs em <br> Arduino</h4>
          <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
        </div>
      </div>
      <div class="col-auto position-relative p-0">
        <div class="banner-detalhe"></div>
        <img class="img-fluid z-1" style="opacity: 40%; cursor: pointer" src="/img/projeto2.png" alt="">
        <div class="position-absolute color-w1 text-end end-0 bottom-0 p-3">
          <h4 class="fw-bold roboto fs-3">Leitores de <br>Cartão</h4>
          <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
        </div>
      </div>
      <div class="col-auto position-relative p-0">
        <div class="banner-detalhe"></div>
        <img class="img-fluid z-1" style="opacity: 40%; cursor: pointer" src="/img/projeto3.png" alt="">
        <div class="position-absolute color-w1 text-end end-0 bottom-0 p-3">
          <h4 class="fw-bold roboto fs-3">Próteses <br> Mecânicas</h4>
          <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
        </div>
      </div>
      <div class="col-auto position-relative p-0">
        <div class="banner-detalhe"></div>
        <img class="img-fluid z-1" style="opacity: 40%; cursor: pointer" src="/img/projeto4.png" alt="">
        <div class="position-absolute color-w1 text-end end-0 bottom-0 p-3">
          <h4 class="fw-bold roboto fs-3">Software de <br> Gestão</h4>
          <p class="roboto" style="font-size: .75rem">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection  