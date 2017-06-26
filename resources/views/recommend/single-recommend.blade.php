@extends('layouts.app')



<!-- /*===== set title =====*/ -->
@section('title')
{{ $recommend_article->seo_title ? $recommend_article->seo_title : $recommend_article->title }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
{{ $recommend_article->seo_description ? $recommend_article->seo_description : "Vesna рекомендует ".$recommend_article->title }}
@endsection

<!-- /*===== set keywords =====*/ -->
@section('keywords')
@endsection

<!-- /*===== set Open Graph =====*/ -->
@section('open_graph')
@endsection

<!-- /*===== set custom css =====*/ -->
@section('custom_css')
<link rel="stylesheet" type="text/css" href="{{ asset('packages/fotorama/fotorama.css') }}" />
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('custom_javascript')
<script type="text/javascript" src="{{ asset('packages/fotorama/fotorama.js') }}"></script>
@endsection



@section('content')

<main class="recommended-single-page">
    <h3 class="recommended-single-page-heading">{{ $recommend_article->title }}</h3>
    <div class="col-md-12 recommended-item-slider">
        <div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" data-autoplay="true" data-fit="contain">
        @foreach($recommend_article->recommend_photos as $key => $value)
            <img src="{{ $value }}">
        @endforeach
        </div>
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
    <h4 class="recommended-single-page-heading-secondary">Контакты</h4>
    <div class="col-md-12 recommended-page-map">
        {!! $recommend_article->contact_map !!}
        <div class="recommended-map-info">
            <h3 class="recommended-map-info-heading">Адрес</h3>
            <p class="recommended-map-info-adress">Украина, Киев</p>
            <p class="recommended-map-info-adress">ул. Драгомирова 2, офис 4</p>
            <h3 class="recommended-map-info-heading">Телефон</h3>
            <a href="tel:+380906879685" class="recommended-map-info-phone">{{ $recommend_article->contact_phone }}</a>
            <h3 class="recommended-map-info-heading">Работает</h3>
            <p class="recommended-map-info-timing">с <span class="timing-bold">8:00</span> до <span class="timing-bold">23:00</span></p>
            <ul class="recommended-map-info-socmedia">
            @if($recommend_article->contact_youtube)
                <li class="recommended-map-socmedia-item">
                    <a href="{{ $recommend_article->contact_youtube }}" class="recommended-map-socmedia-link">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
            @if($recommend_article->contact_facebook)
                <li class="recommended-map-socmedia-item">
                    <a href="{{ $recommend_article->contact_facebook }}" class="recommended-map-socmedia-link">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
            @if($recommend_article->contact_instagram)
                <li class="recommended-map-socmedia-item">
                    <a href="{{ $recommend_article->contact_instagram }}" class="recommended-map-socmedia-link">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
            @if($recommend_article->contact_url)
                <li class="recommended-map-socmedia-item">
                    <a href="{{ $recommend_article->contact_url }}" class="recommended-map-socmedia-link">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
            </ul>
        </div>
    </div>
    @if($recommend_article->contact_url)
    <div class="col-md-12 recommended-page-goto-link">
        <a href="{{ $recommend_article->contact_url }}" class="recommended-page-link-to-website">Перейти на сайт</a>
    </div>
    @else
    @endif
</main>

@endsection
