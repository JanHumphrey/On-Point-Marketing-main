<div class="why-on-point section-padding" style="background-image: url('images/white_bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="why-on-point__container container">
        <div class="why-on-point__headings d-flex justify-content-center">
            <div class="why-on-point--width">
                <h2 class="secondary-color text-center">{{ $why_on_point['heading'] }}</h2>
                <p class="text-center">{{ $why_on_point['description'] }}</p>
            </div>
        </div>
        <div class="why-on-point__box-container d-flex">
            @foreach($why_on_point['boxes'] as $box)
                <div class="why-on-point__box flex-basis-100">
                    <div class="why-on-point__box-image-container text-center">
                        <img src="{{ asset($box['image']) }}" alt="{{ $box['heading'] }}" width="80" height="80">
                    </div>
                    <div class="why-on-point__box-headings">
                        <h5 class="text-center text-uppercase secondary-color">{{ $box['heading'] }}</h5>
                        <p class="text-center">{{ $box['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
