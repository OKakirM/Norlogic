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

      {{-- Bootstrap CSS --}}
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
      {{-- HEADER --}}
      <header class="position-fixed top-0 w-100 z-3 roboto" style="border-bottom: 5px solid #CC0033">
        <nav class="navbar navbar-expand-lg bg-cinzaNor py-2">
          <div class="container position-relative">
            <a href="#home" class="d-lg-none d-inline-block p-2"><img src="/img/logo_norlogic.png" width="200" alt="Logo StrikeTatto"></a>
            <a href="#" class="text-decoration-none text-light fs-4 p-2 d-lg-none d-block" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><ion-icon name="grid-outline"></ion-icon></a>
            <div class="collapse navbar-collapse justify-content-center me-auto" id="navbarNav">
              <ul class="navbar-nav d-flex justify-content-center align-items-center">
                <li class="nav-item d-lg-inline-block d-none">
                  <a href="#home" class="text-decoration-none"><img src="/img/logo_norlogic.png" alt="Logo StrikeTatto"></a>
                </li>
              </ul>
              <div class="d-lg-none d-block mt-4 mb-3">
                <ul class="navbar-nav d-flex flex-column justify-content-center align-items-center gap-3">
                  <div class="d-flex justify-content-center align-items-center flex-row gap-3">
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
                      <a href="#facebook" class="text-decoration-none color-w3 d-inline-block fs-4"><ion-icon name="logo-facebook"></ion-icon></a>
                    </li>
                    <li class="nav-item">
                      <a href="#insta" class="text-decoration-none color-w3 d-inline-block fs-4"><ion-icon name="logo-instagram"></ion-icon></a>
                    </li>
                    <li class="nav-item">
                      <a href="#email" class="text-decoration-none color-w3 d-inline-block fs-4"><ion-icon name="mail-outline"></ion-icon></a>
                    </li>
                    <li class="nav-item">
                      <a href="#telefone" class="text-decoration-none color-w3 d-inline-block fs-4"><ion-icon name="call-outline"></ion-icon></a>
                    </li>
                  </div>
              </div>
            </div>
            <div class="position-absolute collapse navbar-collapse end-0 bottom-0">
              <ul class="navbar-nav d-flex justify-content-center align-items-center gap-3">
                <li class="nav-item">
                  <a href="#service" class="text-decoration-none color-w3 d-inline-block nav-detalhe">Serviços</a>
                </li>
                <li class="nav-item">
                  <a href="#products" class="text-decoration-none color-w3 d-inline-block nav-detalhe">Produtos</a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="text-decoration-none color-w3 d-inline-block nav-detalhe">Sobre Nós</a>
                </li>
                <li class="nav-item">
                  <a href="#contact" class="text-decoration-none color-w3 d-inline-block nav-detalhe">Contato</a>
                </li>
              </ul>
            </div>
            <div class="position-absolute collapse navbar-collapse end-0 top-0">
              <ul class="navbar-nav d-flex justify-content-center align-items-center gap-3">
                <li class="nav-item">
                  <a href="#facebook" class="text-decoration-none color-w3 d-inline-block fs-5"><ion-icon name="logo-facebook"></ion-icon></a>
                </li>
                <li class="nav-item">
                  <a href="#insta" class="text-decoration-none color-w3 d-inline-block fs-5"><ion-icon name="logo-instagram"></ion-icon></a>
                </li>
                <li class="nav-item">
                  <a href="#email" class="text-decoration-none color-w3 d-inline-block fs-5"><ion-icon name="mail-outline"></ion-icon></a>
                </li>
                <li class="nav-item">
                  <a href="#telefone" class="text-decoration-none color-w3 d-inline-block fs-5"><ion-icon name="call-outline"></ion-icon></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      {{-- CONTENT --}}
      <main>
        @yield("content")
      </main>

      {{-- FOOTER --}}
      <footer class="bg-b1 roboto">
        <div class="container py-3">
          <div class="d-lg-flex justify-content-between align-items-center">
            <div class="col-auto">
              <h5 class="color-w1 m-0" style="font-size: .875rem">&copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> Norlogic</h5>
              <p class="color-b5 m-0" style="font-size: .75rem">A Norlogic é uma marca registada em Portugal sob o número 591278 e propriedade da Norlogic Engenharia Lda.</p>
            </div>
            <div class="col-auto">
              <a href="/"><img src="/img/favicon.svg" width="50" alt=""></a>
            </div>
          </div>
        </div>
      </footer>

      {{-- ICONS --}}
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      {{-- JS --}}
      <script src="/js/scripts.js"></script>

      {{-- BOOTSTRAP JS --}}
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>