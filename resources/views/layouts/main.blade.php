<!DOCTYPE html>
<html lang="pt">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      {{-- Tags Primárias --}}
      <meta name="title" content="StrikeTattoo - Tatuaria Portuguesa Desde 2021">
      <meta name="description" content="StrikeTattoo é uma tatuaria voltada ao realismo">

      {{-- Facebook --}}
      <meta property="og:type" content="website">
      <meta property="og:url" content="http://striketattoo.com/">
      <meta property="og:title" content="StrikeTattoo - Tatuaria Portuguesa Desde 2021">
      <meta property="og:description" content="StrikeTattoo é uma tatuaria voltada ao realismo">
      <meta property="og:image" content="https://laravel.com/img/og-image.jpg">

      {{-- Twitter --}}
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:url" content="http://striketattoo.com/">
      <meta property="twitter:title" content="StrikeTattoo - Tatuaria Portuguesa Desde 2021">
      <meta property="twitter:description" content="StrikeTattoo é uma tatuaria voltada ao realismo">
      <meta property="twitter:image" content="https://laravel.com/img/og-image.jpg">

      {{-- TITLE --}}
      <title>@yield("title")</title>

      {{-- FAVICON --}}
      <link rel="icon" type="image/x-icon" href="/img/favicon.svg">

      {{-- FONTS --}}
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Russo+One&display=swap" rel="stylesheet">

      {{-- STYLE --}}
      <link rel="stylesheet" href="/css/style.css">

      {{-- AOS --}}
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

      {{-- Bootstrap CSS --}}
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
      {{-- HEADER --}}
      <header class="position-fixed top-0 w-100 z-3 roboto" style="border-bottom: 5px solid #CC0033">
        <nav class="navbar navbar-expand-lg bg-cinzaNor py-2 position-relative">
          <div class="container position-relative d-flex jusitfy-content-between align-items-center">
            <a href="#home" class="d-lg-none d-inline-block"><img src="/img/logo_norlogic.png" width="180" alt="Logo Norlogic"></a>
            <div class="d-lg-none d-flex justify-content-center align-items-center gap-3">
              <a href="" class="text-decoration-none fs-5">🇵🇹</a>
              <a href="" class="text-decoration-none fs-5">🇬🇧</a>
              <a href="#" class="text-decoration-none text-light fs-4 d-flex jusitfy-content-center align-items-center" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><ion-icon class="menu-icon p-2" name="grid-outline"></ion-icon></a>
            </div>

            <div class="collapse navbar-collapse justify-content-center me-auto" id="navbarNav">
              <ul class="navbar-nav d-flex justify-content-center align-items-center">
                <li class="nav-item d-lg-inline-block d-none">
                  <a href="#home" class="text-decoration-none"><img src="/img/logo_norlogic.png" width="230" alt="Logo Norlogic"></a>
                </li>
              </ul>
              <div class="d-lg-none d-block mt-4 mb-3">
                <ul class="navbar-nav d-flex flex-column justify-content-center align-items-center gap-3">
                  <div class="d-flex justify-content-center align-items-center flex-row gap-3">
                    {{-- Smartphone --}}
                    <li class="nav-item">
                      <a href="#service" class="text-decoration-none color-w3 d-inline-block nav-smart-detalhe">Serviços</a>
                    </li>
                    <li class="nav-item">
                      <a href="#products" class="text-decoration-none color-w3 d-inline-block nav-smart-detalhe">Produtos</a>
                    </li>
                    <li class="nav-item">
                      <a href="#about" class="text-decoration-none color-w3 d-inline-block nav-smart-detalhe">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                      <a href="#contact" class="text-decoration-none color-w3 d-inline-block nav-smart-detalhe">Contato</a>
                    </li>
                  </div>
                  <div class="d-flex justify-content-center align-items-center flex-row gap-3">
                    <li class="nav-item">
                      <a href="https://www.facebook.com/redfenixeng" target="_blank" class="text-decoration-none color-w3 d-inline-block fs-4"><ion-icon name="logo-facebook"></ion-icon></a>
                    </li>
                    <li class="nav-item">
                      <a href="https://www.instagram.com/redfenix.eng/?hl=pt" target="_blank" class="text-decoration-none color-w3 d-inline-block fs-4"><ion-icon name="logo-instagram"></ion-icon></a>
                    </li>
                    <li class="nav-item">
                      <a href="mailto:geral@redfenix.pt" class="text-decoration-none color-w3 d-inline-block fs-4"><ion-icon name="mail-outline"></ion-icon></a>
                    </li>
                    <li class="nav-item">
                      <a href="tel:00351249119339" class="text-decoration-none color-w3 d-inline-block fs-4"><ion-icon name="call-outline"></ion-icon></a>
                    </li>
                  </div>
              </div>
            </div>
            <div class="position-absolute collapse navbar-collapse end-0 bottom-0">
              <ul class="navbar-nav d-flex justify-content-center align-items-center gap-3" id="list-pc">
                {{-- PC --}}
                <li class="nav-item">
                  <a href="#service" class="text-decoration-none color-w3 d-inline-block nav-detalhe nav-active" id="nav-items">Serviços</a>
                </li>
                <li class="nav-item">
                  <a href="#products" class="text-decoration-none color-w3 d-inline-block nav-detalhe" id="nav-items">Produtos</a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="text-decoration-none color-w3 d-inline-block nav-detalhe" id="nav-items">Sobre Nós</a>
                </li>
                <li class="nav-item">
                  <a href="#contact" class="text-decoration-none color-w3 d-inline-block nav-detalhe" id="nav-items">Contato</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="position-absolute collapse navbar-collapse end-0 top-0 mt-2 me-4">
            <ul class="navbar-nav d-flex justify-content-center align-items-center gap-2">
              <li class="nav-item">
                <a href="" class="text-decoration-none" style="font-size: 1.1rem">🇵🇹</a>
              </li>
              <li class="nav-item">
                <a href="" class="text-decoration-none" style="font-size: 1.1rem">🇬🇧</a>
              </li>
              <li class="nav-item">
                <a href="https://www.facebook.com/redfenixeng" target="_blank" class="text-decoration-none color-w3 d-flex justify-content-center align-items-center" style="font-size: 1.1rem"><ion-icon name="logo-facebook"></ion-icon></a>
              </li>
              <li class="nav-item">
                <a href="https://www.instagram.com/redfenix.eng/?hl=pt" target="_blank" class="text-decoration-none color-w3 d-flex justify-content-center align-items-center" style="font-size: 1.1rem"><ion-icon name="logo-instagram"></ion-icon></a>
              </li>
              <li class="nav-item">
                <a href="mailto:geral@redfenix.pt" class="text-decoration-none color-w3 d-flex justify-content-center align-items-center" style="font-size: 1.1rem"><ion-icon name="mail-outline"></ion-icon></a>
              </li>
              <li class="nav-item">
                <a href="tel:00351249119339" class="text-decoration-none color-w3 d-flex justify-content-center align-items-center" style="font-size: 1.1rem"><ion-icon name="call-outline"></ion-icon></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      {{-- Cookies --}}
      <div class="d-none position-fixed w-100 h-100 bg-black bg-opacity-50 z-3">
        <div class="position-absolute bottom-0 w-100 bg-w1">
          <div class="container py-4">
            <div class="d-flex justify-content-center align-items-lg-start align-items-center flex-column">
              <h1 class="display-4 russo color-cinzaNor text-center">AVISO DE COOKIES<span class="color-redNor">.</span></h1>
              <p class="roboto color-cinzaNor text-lg-start text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa cumque deleniti fugiat eos voluptates mollitia. Itaque quisquam aspernatur dolores natus dolor sit aut quia esse necessitatibus tenetur voluptatum sapiente cum fuga rem officiis atque, hic magni quibusdam quaerat! Eveniet velit sapiente tempora commodi. Accusamus ipsa sed ex reiciendis deleniti culpa nisi placeat adipisci aperiam omnis optio numquam.</p>
            </div>
            <div class="d-flex justify-content-lg-end justify-content-center align-items-center gap-3 flex-shrink-1 flex-fill flex-grow-1 mt-lg-2 mt-4">
              <button class="bg-w1 color-redNor px-4 py-2 roboto fw-bold rounded-1 d-flex justify-content-center align-items-center gap-2" style="border: 2px solid #cc0033"><ion-icon name="hammer-outline" class="color-redNor fs-5"></ion-icon> PERSONALIZAR</button>
              <button class="js-cookie-consent-agree bg-redNor color-w1 px-4 py-2 roboto fw-bold rounded-1 d-flex justify-content-center align-items-center gap-2" style="border: 2px solid #cc0033"><ion-icon name="checkmark-outline" class="color-w1 fs-5"></ion-icon> ACEITAR TODOS</button>
            </div>
          </div>
        </div>
      </div>

      {{-- Top Button --}}
      <div id="progress" class="top-button">
        <span id="progressStyle"><ion-icon name="caret-up-outline"></ion-icon></span>
      </div>

      {{-- CONTENT --}}
      <main class="position-relative overflow-hidden">
        @yield("content")
      </main>

      {{-- FOOTER --}}
      <footer class="bg-b1 roboto">
        <div class="container py-3">
          <div class="d-lg-flex justify-content-between align-items-center">
            <div class="col-auto">
              <h5 class="color-w1 m-0" style="font-size: .875rem">&copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> Norlogic</h5>
              <p class="color-b5 m-0 mt-2" style="font-size: .75rem">A Norlogic é uma marca registada em Portugal sob o número 591278 e propriedade da Norlogic Engenharia Lda.</p>
            </div>
            <div class="col-auto d-flex justify-content-center mt-3 align-items-center gap-2">
              <a href="https://www.livroreclamacoes.pt/INICIO/" target="_blank" class="text-decoration-none color-b5" style="font-size: .75rem"><img src="/img/livro_de_reclamacao.png" width="100px" alt="Livro de Reclamações"></a>
              <a href="/"><img class="" src="/img/favicon.svg" width="50" alt="Logo Norlogic"></a>
            </div>
          </div>
        </div>
      </footer>

      {{-- ICONS --}}
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      {{-- JS --}}
      <script src="/js/scripts.js"></script>

      {{-- AOS --}}
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

      <script>
        AOS.init();
      </script>
      
      {{-- BOOTSTRAP JS --}}
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>