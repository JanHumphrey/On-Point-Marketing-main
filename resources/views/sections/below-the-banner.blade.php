<div class="below-the-banner" style="background-image: url('images/white_bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="below-the-banner__container container d-flex">
      @foreach ($below_the_banner_boxes as $box)
        <div class="below-the-banner__item">
          <div class="below-the-banner__content">
            <h3 class="below-the-banner__heading text-light">{{ $box['heading'] }}</h3>
            <p class="text-light box-text">{{ $box['description'] }}</p>
            <div class="btn__container">
              <a class="btn--secondary" href="{{ $box['buttonUrl'] }}">{{ $box['buttonText'] }}</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
</div>
