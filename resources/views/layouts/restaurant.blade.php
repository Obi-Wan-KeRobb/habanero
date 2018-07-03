@extends('layouts.app')

@section('content')
  <div class="restaurant">
    <div class="restaurant__hero">
      <div class="hero-image">
          <div class="hero-image__strip">
            <div class="strip strip--hero">
              <div class="strip__image">
                <img class="strip__logo-picture" src="{{ asset("storage/images/shared/logotipo-negative.png") }}" alt="habanero logo" title="habanero">
              </div>

              <div class="strip__text">
                La <strong>qualità</strong> alla portata di tutti
              </div>
            </div>
          </div>

          <div class="hero-image__sliders">
            <div class="slider slider--hero">
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

    <div class="restaurant__menu">
      <div class="support-text">
        <div class="support-text__content support-text__content--center">
          <h3 class="support-text__title">Il Menu del ristorante</h3>
          <p class="support-text__paragraph">Cucinare significare dedicare del tempo ed attenzione al prossimo, sotto troverete le nostre proposte per il ristorante che vengono aggiornate di frequente.</p>
        </div>
      </div>

      

      <div class="menu-list menu-list--restaurant">

        

        <div class="menu-list__servings">
          @foreach($orders as $order)
            <div class="menu-list__serving">
              <div class="menu-list__title-wrapper">
                <h3 class="menu-list__title"> {{ $order }}</h3>
              </div>

              <div class="test">
                @foreach ($recipes->where('label', $order ) as $item)
                  <div class="menu-list__recipe"> 
                      <p><strong>{{$item->recipe }}</strong></p>

                      <ul class="menu-list__ingredients">
                        @foreach($item->ingredients as $ing)
                          <li class="menu-list__ingredient">{{ $ing->name_ingredients }}</li>
                        @endforeach
                      </ul>
                  </div>
                @endforeach
              </div>

            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection