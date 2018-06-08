<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/app.css">

        <title>Habanero</title>
    </head>
    <body>
      <link rel="stylesheet" href="http://volantino.mediaworld.it/css/cookiebar.css" media="screen" title="no title" charset="utf-8">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://www.google-analytics.com/analytics.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

  <style>
    .app {
      min-height: 2000px;
    }

  </style>

  <div id="bannerPolicy" style="display: block;">
    <div id="cookieBanner">
      <div class="widget_height" tabindex="0">
        <!--h5>Informativa breve sui cookies</h5-->
        <p>
          Questo sito ha aggiornato la sua <a href="http://www.mediaworld.it/mw/mediaworld-it/informazioni/privacy-policy" target="_blank">Privacy Policy</a>. Invitiamo tutti gli utenti a prenderne visione. Ricordiamo agli utenti che questo sito usa cookie di profilazione e di terze parti. Chi sceglie di proseguire nella navigazione su www.mediaworld.it oppure di chiudere questo banner o di cliccare al di fuori di esso, acconsente all'uso dei cookie. Per saperne di più o per modificare le preferenze sui cookie, gli utenti possono consultare la nostra <a href="http://www.mediaworld.it/mw/mediaworld-it/informazioni/cookie-policy" target="_blank">Cookie Policy</a>.
        </p>
        <!--p>
          Per offrire una migliore esperienza di navigazione, per avere statistiche sull’uso dei nostri servizi da parte dell’utenza, e per farti visualizzare contenuti pubblicitari in linea con le tue preferenze ed esigenze, questo sito usa cookie anche di terze parti. Chi sceglie di proseguire nella navigazione su <strong><a href="//www.mediaworld.it">www.mediaworld.it</a></strong> oppure di chiudere questo banner o di cliccare al di fuori di esso, esprime il consenso all'uso dei cookie.
          Per saperne di più o per modificare le tue preferenze sui cookie consulta la nostra <a href="http://www.mediaworld.it/webapp/wcs/stores/servlet/LoadHtml?storeId=20000&amp;content=/html/restyling/supporto_clienti/sicurezza-privacy.html">Cookie Policy</a>.
        </p-->
        <p style="padding:0;">
          <a href="#" id="tooglerCookie" class="close"></a>
        </p>
      </div>
    </div>
    <div id="fillPageBanner" onclick="javascript:acceptCookiePolicy()"></div>

    lorem ipsum
  </div>

  <div class="app">
    Lorem Ipsum
  </div>

<script>

window.dataLayer = window.dataLayer || [];

class Cookie {
  constructor(dataLayer) {
    this.dataLayer = dataLayer;
    this.bannerCookie = document.getElementById('bannerPolicy');

    this.onInit();
  }

  addListener(){
    let acceptCookie = document.getElementById('tooglerCookie');

    acceptCookie.addEventListener('click', evt => this.acceptCookie(evt))
    window.addEventListener('scroll', evt => this.acceptCookie(evt))
  }

  acceptCookie(e){
    e.preventDefault();
    Cookies.set('cookiePolicy', 'true');
    Cookies.set('event', 'cookieAccepted');

    (this.dataLayer).push({'event': 'cookieAccepted'});

    console.log(this.dataLayer);
    (this.bannerCookie).style.display="none";
  }

  onInit(){
    if ( !this.checkCookie() ) {
      this.addListener();
    } else {
      (this.dataLayer).push({'event': 'cookieAccepted'});
      (this.bannerCookie).style.display="none";
      console.log(this.dataLayer);
    }
  }
  
  checkCookie(){
    return Cookies.get('cookiePolicy');
  }
}

let cookie = new Cookie(dataLayer);

</script>

</script>
    <div id="viewerDiv" style="height: 100%; width: 100%;" ></div>
</body>

</html>
