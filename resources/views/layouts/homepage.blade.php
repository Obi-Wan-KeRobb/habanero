@extends('layouts.app')

@section('content')
  <div class="homePage">
    <!-- hero section -->
    <div class="homePage__hero">
      <div class="hero-image">
        <div class="hero-image__strip">
          <div class="strip">
            <div class="strip__image">
              <img class="strip__logo-picture" src="{{ asset("storage/images/shared/logotipo-negative.png") }}" alt="habanero logo" title="habanero">
            </div>

            <div class="strip__text">
              La <strong>qualità</strong> alla portata di tutti
            </div>
          </div>
        </div>

        <div class="hero-image__sliders">
          <div class="slider">
            <div class="slider__slides">

              @for ($i = 1; $i <= 4; $i++)
                <!-- single slide -->
                <div class="slider__slide">
                  <img src='{{ asset("storage/images/homePage/mainvisual0" . $i . ".jpg") }}' alt="" class="slider__background">
                </div>
              @endfor
            </div>
          </div>
        </div>

        <div class="hero-image__scroll">
          @include('components.mouse-scroll')
        </div>
      </div>
    </div>

    <!-- showcase piatti section -->
    <div class="homePage__showcase-food">
      <div class="showcase-slider">
        carousel
        <div class="owl-carousel" id="showcase-food">
          @for ($i = 1; $i <= 4; $i++)
            @include('components.showcase-slider')
          @endfor
        </div>
      </div>
    </div>

    <!-- ingredients section -->
    <div class="homePage__ingredients">
      <div class="support-text">
        <div class="support-text__content support-text__content--center">
          <h3 class="support-text__title">Gli ingredienti e la nostra filosofia</h3>
          <p class="support-text__paragraph">Noi dell'<strong>habanero</strong> siamo convinti che andare a <strong>mangiare</strong> in un ristorante dev’essere un <strong>piacevole viaggio</strong>, che inizia quando si varca la porta d’ingresso e finisce il giorno seguente.</p>
          <p class="support-text__paragraph">Il nostro menu è composto da una scelta, finalizzata da mesi di prove ed esperimenti tra il tradizionale ed il nuovo, per garantire un’<strong>esperienza culinaria</strong> elegante ma non troppo ricercata, a cui tutti i palati possano accedere, un’interpretazione di ricette che speriamo accompagnino il nostro ospite lungo un viaggio nella piacevole cultura culinaria Italiana, tra <strong>leggerezza</strong> e <strong>gusto</strong></p>
          <p class="support-text__paragraph">Al fine di seguire questa filosofia, ci imponiamo di usare <strong>ingredienti freschi</strong> e di origine Italiana, perché solo tramite questa scelta possiamo garantire la qualità di quel che viene creato in cucina. Qualità che infine si trasmette nello svegliarsi il giorno dopo con un piacevole ricordo di questo viaggio affrontato insieme.</p>
        </div>
      </div>
    </div>

    <!-- restaurant background section -->
    <div class="homePage__background-restaurant">
      <div class="background-restaurant"> background-restaurant component</div>
    </div>

    <!-- menu section -->
    <div class="homePage__menu">
      <div class="menu">component menu</div>
    </div>

    <!-- intollerance section -->
    <div class="homePage__intollerance">
      <div class="support-text">
        <div class="support-text__content support-text__content--center">
          <h3 class="support-text__title">Intolleranze ed allergie</h3>
          <p class="support-text__paragraph">Le <strong>allergie</strong> o <strong>intolleranze alimentari</strong> in Italia sono una realtà sempre più diffusa, da ultime ricerche circa il <strong>4% della popolazione</strong> è affetto da allergia, ed il numero aumenta se si considerano anche gli intolleranti a lattosio e glutine.</p>
          <p class="support-text__paragraph">Crediamo che sia sbagliato, non considerare questi numeri e peggio ancora privare le persone della possibilità di provare la nostra cucina, per questo motivo è stata nostra premura inserire in ogni menu la <strong>carta degli allergeni</strong>, creare un menu più variegato possibile, ed infine studiare e formarci per creare dei nostri piatti l’alternativa <strong>senza glutine e/o lattosio</strong>.</p>
        </div>
      </div>
    </div>

    <!-- instagram section -->
    <div class="homePage__instagram">
      <div class="instagram">instagram component</div>
    </div>
  </div>
@endsection