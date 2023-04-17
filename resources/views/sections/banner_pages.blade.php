<div class="banner__pages" style="background-image: url('{{ $banner_background ? asset($banner_background) : asset('images/Banner_Back.png')}}'); background-size: cover; background-repeat: no-repeat;">
    <img src="{{ $arrow_image ? asset($arrow_image)  : asset('images/Arrow.png')}}"" alt="Megaphone">
    <div class="banner__pages__container container d-flex">
                <h1 class="remove-spacing text-light">{!! $banner_pages['heading'] !!}</h1>
    </div>
</div>
