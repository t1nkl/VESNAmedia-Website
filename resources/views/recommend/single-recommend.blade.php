@extends('layouts.app')


<!-- /*===== set title =====*/ -->
@section('title')
{{ $title = $recommend_article->seo_title ? $recommend_article->seo_title : $recommend_article->title }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
{{ $descr =  $recommend_article->seo_description ? $recommend_article->seo_description : "Vesna рекомендует ".$recommend_article->title }}
@endsection

<!-- /*===== set keywords =====*/ -->
@section('keywords')
@endsection

<!-- /*===== set Open Graph =====*/ -->
@section('open_graph')
    <meta property="og:title" content="{{$title}}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    @if(isset($image))
    <meta property="og:image" content="{{env('APP_URL'). $image }}" />
    @endif
@endsection

<!-- /*===== set custom css =====*/ -->
@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{ asset('packages/fotorama/fotorama.css') }}" />
@endsection 

<!-- /*===== set custom javascript =====*/ -->
@section('custom_javascript')
<script type="text/javascript" src="{{ asset('packages/fotorama/fotorama.js') }}"></script>
<script type="text/javascript">
$('#share').click(function() {
    var img = $('.fotorama__active img').attr('src').split('/').pop().replace('.png', '');
    var url = 'https://www.facebook.com/sharer/sharer.php?u={{env("APP_URL")}}/recommend/{{$recommend_article->slug}}/' + img;
    window.open(url);
});
</script>
@endsection 


<!-- @section('custom_javascript')
<script type="text/javascript" src="js/sliderCustom.js"></script>
@endsection -->



@section('content')
    @include('includes.breadcrumbs', ['crumbs' => [['Рекомендуем', '/recommend'], $recommend_article->title]])

<main class="recommended-single-page">
    <h3 class="recommended-single-page-heading">{{ $recommend_article->title }}</h3>
    <div class="col-md-12 recommended-item-slider">
        <div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" data-autoplay="true" data-fit="contain">
        @if($recommend_article->recommend_photos)
            @foreach($recommend_article->recommend_photos as $key => $value)
                <a href="{{ $value }}"><img src="{{ $value }}" width="67" height="60"></a>
            @endforeach
        @endif
        </div>
    <button id="share" class="buttonShareFb"></button>
    </div>
    
    {!! $recommend_article->content !!}
    <!-- <h4 class="recommended-single-page-heading-secondary">О ресторане</h4>
    <p class="recommended-single-text">Café L’étage и Bel étage составляют единый развлекательный комплекс.
    </p>
    <p class="recommended-single-text">Café L’étage – ресторан, концепция которого основана на идее космополитизма,
        предлагает меню с блюдами разных стран мира по вполне демократичным ценам,
        дружескую атмосферу и динамичное современное музыкальное сопровождение.
    </p>
    <p class="recommended-single-text">Bel étage – двухуровневый концертный клуб. Многофункциональность площадки,
        оснащенной самым современным оборудованием, позволяет легко трансформировать
        её пространство в масштабную площадь для проведения концертов, перформансов
        и театральных шоу или камерную обстановку для устроения частных и корпоративных
        праздников. Клуб рассчитан на комфортабельное размещение 1000 гостей. На первом
        этаже расположены 2 барные стойки и просторная фан-зона/танцпол, тогда как второй
        этаж можно смело назвать VIP-зоной с посадочными местами и индивидуальным обслуживанием
        официантами ресторана.
    </p> -->
@if($recommend_article->contact_map)
    <h4 class="recommended-single-page-heading-secondary">Контакты</h4>
    <div style="bottom:6px;" class="col-md-12 recommended-page-map">
    <div style="width: 100%; overflow: hidden; height: 320px;">
        {!! $recommend_article->contact_map !!}
    </div>
        <div class="recommended-map-info">
            @if($recommend_article->contact_address)
                <h3 class="recommended-map-info-heading">Адрес</h3>
                @foreach(json_decode($recommend_article->contact_address) as $address)
                    @if(isset($address->name))<p class="recommended-map-info-adress">{{$address->name}}</p>@endif
                @endforeach
            @endif
            @if($recommend_article->contact_address)
                <h3 class="recommended-map-info-heading">Телефон</h3>
                @foreach(json_decode($recommend_article->contact_phone) as $contact_phone)
                    @if(isset($contact_phone->name))<a href="tel:{{ $contact_phone->name }}" class="recommended-map-info-phone">{{ $contact_phone->name }}</a>@endif
                @endforeach
            @endif
            @if($recommend_article->contact_timetable)
                <h3 class="recommended-map-info-heading">Работает</h3>
                <p class="recommended-map-info-timing">с <span class="timing-bold">{{ $recommend_article->contact_timetable }}</span></p>
            @endif
            <ul class="recommended-map-info-socmedia">
            @if($recommend_article->contact_youtube)
                <li class="recommended-map-socmedia-item">
                    <a href="{{ $recommend_article->contact_youtube }}" target="_blank" class="recommended-map-socmedia-link">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
            @if($recommend_article->contact_facebook)
                <li class="recommended-map-socmedia-item">
                    <a href="{{ $recommend_article->contact_facebook }}" target="_blank" class="recommended-map-socmedia-link">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
            @if($recommend_article->contact_instagram)
                <li class="recommended-map-socmedia-item">
                    <a href="{{ $recommend_article->contact_instagram }}" target="_blank" class="recommended-map-socmedia-link">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
            @if($recommend_article->contact_url)
                <li class="recommended-map-socmedia-item">
                    <a href="{{ $recommend_article->contact_url }}" target="_blank" class="recommended-map-socmedia-link">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
            </ul>
        </div>
    </div>
    @endif
    @if($recommend_article->contact_url)
    <div class="col-md-12 recommended-page-goto-link">
        <a href="{{ $recommend_article->contact_url }}" target="_blank" class="recommended-page-link-to-website">Перейти на сайт</a>
    </div>
    @else
    @endif
</main>

@endsection
