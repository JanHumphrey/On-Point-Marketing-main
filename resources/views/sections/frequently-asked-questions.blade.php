<div class="frequently-asked-questions section-padding" style="background-image: url('images/white_bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="frequently-asked-questions__container container">
        <div class="frequently-asked-questions__headings">
            <h2 class="text-center secondary-color">{{ $frequently_asked_questions['heading'] }}</h2>
            @if(!empty($frequently_asked_questions['description']))
                <p class="text-center">{{ $frequently_asked_questions['description'] }}</p>
            @endif
        </div>
        <div class="frequently-asked-questions__content position-relative">
            @foreach($frequently_asked_questions['frequently_asked_questions_1'] as $faq)
            <div class="frequently-asked-questions__items d-flex">
                <div class="frequently-asked-questions__item-answer flex-basis-100">
                    <h6 class="text-uppercase">{{ $faq[0]['question'] }}</h6>
                </div>
                <div class="frequently-asked-questions__item-question flex-basis-100 ">
                    <div class="frequently-asked-questions__item-position position-absolute">
                        <h6 class="secondary-color">{{ $faq[0]['answer_heading'] }}</h6>
                        <p>{{ $faq[0]['answer'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> 
