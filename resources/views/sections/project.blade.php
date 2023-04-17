<div class="section-padding">
    <div class="container mb-5">
        <h2 style="color:#74CBFD">{!! $cardData['title'] !!}</h2>
        <div class="mb-5">
            <img class="w-100" src="{{ asset($cardData['image']) }}" alt="">
        </div>
        <div style="font-family: Raleway, sans-serif; font-size:16px">
        <div class="mb-5" ><span class="fw-bold">Project</span> <span
                style="margin-left: 20px;margin-right: 20px;  ">{!! $cardData['project'] !!}</span> | <span
                class="fw-bold"style="margin-left: 20px;">Sector</span> <span
                style="margin-left: 20px;margin-right: 20px;  ">{!! $cardData['sector'] !!}</span>
        </div>
<div class="mb-5">
  <p>{!! $cardData['description'] !!}</p>
</div>
</div>

    </div>
</div>
