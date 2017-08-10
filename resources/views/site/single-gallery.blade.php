@extends('layouts.app')

@section('title')
{{ $title = $gallery->seo_title ? $gallery->seo_title : $gallery->title." - Vesna" }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
{{ $descr = $gallery->seo_description ? $gallery->seo_description : $gallery->title." - журнал Vesna" }}
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
    var url = 'https://www.facebook.com/sharer/sharer.php?u={{env("APP_URL")}}/gallery/{{$gallery->slug}}/' + img;
    window.open(url);
});
</script>
@endsection



@section('content')
    @include('includes.breadcrumbs', ['crumbs' => [['Галлерея', '/gallery'], $gallery->title]])

<div class="gallery-item-page row">
    <div class="col-md-8 gallery-item-title-block">
        <h3 class="gallery-item-heading">{{$gallery->title}}</h3>
        <span class="gallery-item-timing">{{ Date::parse($gallery->date)->format('j F, Y') }}</span>
    </div>
    <div class="col-md-4 gallery-item-back-block">
        <a href="/gallery" class="gallery-item-back-link">Назад</a>
    </div>
    <div class="col-md-12 recommended-item-slider">
        <div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" data-autoplay="true" data-fit="contain">
        @if($gallery->gallery_photos)
            @foreach($gallery->gallery_photos as $key => $value)
                <img src="{{ $value }}">
            @endforeach
        @endif
        </div>
    </div>
</div>
<button id="share" class="buttonShareFb"></button>
@endsection
