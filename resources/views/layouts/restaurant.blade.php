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
        </div>
      </div>
    </div>
  </div>
@endsection