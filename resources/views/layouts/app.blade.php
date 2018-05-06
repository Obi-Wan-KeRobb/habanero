<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/app.css">
        
        <!-- font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

        <title>Habanero</title>
    </head>
    <body>
      <div class="app">
        <header class="header">
          @include('components.hamburger-menu')
          
          <nav>
            <div class="navigation__logo">
              <img class="navigation__logotypo" src="{{ asset("storage/images/shared/logotipo-negative.png") }}" alt="habanero logo" title="habanero"> 
            </div>

            @include('components.navigation', ['template' => 'navigation'])

            <div class="navigation__social">
              <h4>Seguici su:</h4>
              @include('components.social', ['template' => 'navigation'])
            </div>

            <div class="navigation__address">
              <p class="navigation__address-text">
                Largo Marguerite Yourcenar, 1<br />
                Tivoli - 00010 (Roma)
              </p>

              <p class="navigation__address-text">
                0774 530203<br />
                info@habanero
              </p>
            </div>
          </nav>
        </header>
        
        <section class="content">
          @yield('content')
        </section>
        
        <footer class="footer">
          @include('components.footer')
        </footer>
      </div>

      <script src="js/app.js"></script>
    </body>
</html>
