<div class="feature" style="background-image: url('images/white_bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="feature__container container d-flex section-padding align-items-center">
        @foreach ($feature_boxes as $box)
        <div class="feature__item {{ $box['class'] }} d-flex">
          <div class="feature__content">
            <h5 class="feature__heading text-uppercase">{{ $box['heading'] }}</h5>
            <p class="feature__description box-text">{{ $box['description'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
</div>
