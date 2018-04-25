<div class="footer__logo">
  <img class="footer__logo-picture" src="{{ asset("storage/images/shared/logotipo.png") }}" alt="habanero logo" title="habanero">
</div>

<div class="footer__socials">
  @include('components.social', ['template' => 'footer'])
</div>

<div class="footer__navigation">
  @include('components.navigation', ['template' => 'footer'])
</div>

<div class="footer__copyright">
  @include('components.copyright', ['template' => 'footer'])
</div>