<div class="carousel">
  <!-- container text part -->
  <div class="carousel__support-text">
    <div class="carousel__header">
      {{$recipe->label}}
    </div>
    <div class="carousel__description">
      {{$recipe->recipe}}
    </div>
  </div>
  <!-- background -->
  <div class="carousel__background">
    <img src='{{asset('storage/images/showcase/'.$recipe->src_img.'.jpg')}}' alt="{{$recipe->recipe}}" class="showcase-slider__image">
  </div>
</div>