<div class="banner">
    <div class="banner__container container d-flex">
        <div class="banner__left d-flex align-items-end flex-basis-100">
            <div class="banner__content">
                <h1 class="remove-spacing text-light">{!! $banner['heading'] !!}</h1>
                <div class="btn__container">
                    <a class="btn--primary" href="{{ $banner['buttonUrl'] }}">{{ $banner['buttonText'] }}</a>
                </div>
            </div>
        </div>
        <div class="banner__right flex-basis-100 d-flex align-items-end">
            <img src="{{ asset($banner['image']) }}" alt="Megaphone">
        </div>
    </div>
</div>
