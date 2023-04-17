<div class="main-content section-padding" style="background-image: url('images/white_bg.png'); background-size: contain; background-repeat: repeat;">
    <div class="container">
        @foreach ($main_content['main-content'] as $content)
            <div class="main-content pb-5">
                @if (!empty($content['heading']))
                    <h5 class="main-content text-capitalize secondary-color fw-bold">{{ $content['heading'] }}</h5>
                @endif
                @if (!empty($content['description']))
                    <p class="main-content remove-spacing">{{ $content['description'] }}</p>
                @endif
                @if (!empty($content['list']))
                    <ul class="pt-3 pb-0 mb-0">
                        @foreach ($content['list'] as $item)
                            <li class="pb-1">{{ $item }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </div>
</div>
