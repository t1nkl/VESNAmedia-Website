 @if(isset($advert))
    <div class="general-irrelevant-illustration-mob">
        @if(isset($advert->url))
            <a href="{{$advert->url}}" target="_blank">
                <img src="{{$advert->mobileimage}}" class="img-fluid general-illustration" alt="">
            </a>
        @else
            <img src="{{$advert->mobileimage}}" class="img-fluid general-illustration" alt="">
        @endif
    </div>
    <div class="general-irrelevant-illustration">
        @if(isset($advert->url))
            <a href="{{$advert->url}}" target="_blank">
                <img src="{{$advert->desktopimage}}" class="img-fluid general-illustration" alt="">
            </a>
        @else
            <img src="{{$advert->desktopimage}}" class="img-fluid general-illustration" alt="">
        @endif
    </div>
@endif