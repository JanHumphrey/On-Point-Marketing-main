<div class="our-recent-work  section-padding"
    style="background-image: url('images/white_bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="our-recent-work__container">
        <div class="our-recent-work__headings d-flex justify-content-center container">
            <div class="our-recent-work--heading-width">
                <h2 class="secondary-color text-center">{{ $our_recent_work['heading'] }}</h2>
                <p class="text-center">{{ $our_recent_work['description'] }}</p>
            </div>
        </div>
        <div id="our-recent-work__slider-main" class="our-recent-work__slider-main d-flex">
            @foreach ($our_recent_work['slider'] as $slide)
                <div class="our-recent-work__slide flex-basis-100">
                    <a href="/our-work/{{$slide['number']}}">
                        <img class="our-recent-work__image" src="{{ asset($slide['image']) }}"
                            alt="{{ $slide['Label'] }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
