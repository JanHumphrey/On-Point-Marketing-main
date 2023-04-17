<div class="companies-we-work-with  section-padding" style="background: #F8F8F8;">
    <div class="companies-we-work-with__container container">
        <div class="companies-we-work-with__headings">
            <h2 class="text-center secondary-color">{{ $companies_we_work_with['heading'] }}</h2>
            @if(!empty($companies_we_work_with['description']))
                <p class="text-center">{{ $companies_we_work_with['description'] }}</p>
            @endif
        </div>
        <div class="companies-we-work-with__logos d-flex">
            @foreach($companies_we_work_with['company_logos'] as $company_logo)
                <div class="companies-we-work-with__logo">
                    <img src="{{ asset($company_logo['image']) }}" alt="{{ $company_logo['label'] }}">
                </div>
            @endforeach
        </div>
    </div>
</div>
