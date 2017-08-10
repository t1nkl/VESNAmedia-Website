@extends('layouts.app')

<!-- /*===== set title =====*/ -->
@section('title')
{{ $title = $journal_article->seo_title ? $journal_article->seo_title : $journal_article->title." - Vesna" }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
{{ $descr = $journal_article->seo_description ? $journal_article->seo_description : $journal_article->title." - журнал Vesna" }}
@endsection

<!-- /*===== set keywords =====*/ -->
@section('keywords')
@endsection

<!-- /*===== set Open Graph =====*/ -->
@section('open_graph')
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{$title}}">
    <meta name="twitter:description" content="{{ $journal_article->mini }}">
    <meta name="twitter:image" content="{{env('APP_URL'). $journal_article->minimage }}">

    <meta property="og:title" content="{{$title}}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:image" content="{{$image }}" />
    @if(isset($journal_article->author->facebook))
        <meta property="article:author" content="{{ $journal_article->author->facebook }}" />  
    @endif  
    <meta property="og:description" content="{{ $journal_article->mini }}" />
@endsection

<!-- /*===== set custom css =====*/ -->
@section('custom_css')
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('custom_javascript')
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
$('#article').find('p img').each(function(){
    var image = $(this).attr('src').split('/').pop();
        $(this).after('<a href="https://www.facebook.com/sharer/sharer.php?u={{env("APP_URL")}}{{$journal_article->link}}/'+ image +'"> поделиться в facebook </a>');    
})
</script>
@endsection



@section('content')
    @include('includes.breadcrumbs', ['crumbs' => [['Журнал', '/journal'], $journal_article->title]])
<main class="single-page row">
    <div class="col-md-3 single-author-info">
        <div class="single-author-illustration-block">
            <a href="/experts/{{$journal_article->author->slug}}"><img src="{{ $journal_article->author->image }}" class="single-author-img" alt="">
        </div>
        <h3 class="single-author-name">{{ $journal_article->author->title }}</h3>
        <div class="social-media-share-block">
            <span class="single-author-share-text">ПОДЕЛИТЬСЯ</span>
            <ul class="single-author-socmedia">
              <li class="single-author-socmedia-item">
                <a href="https://twitter.com/share" class="single-author-socmedia-item-link" data-url="{{url()->current()}}" target="_blank">
                    <img src="/img/twitter.svg" alt="">
                </a>
              </li>
              <li class="single-author-socmedia-item">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{request()->url()}}" target="_blank" class="single-author-socmedia-item-link">
                  <img src="/img/facebook.svg" alt="">
                </a>
              </li>
            </ul>
        </div>
    </div>
    <div class="col-md-9 single-article">
        <h3 class="single-article-heading">{{ $journal_article->title }}</h3>
        <span class="single-article-category">{{ $journal_article->category->title }}</span>
        <span class="single-article-publishdate">{{ Date::parse($journal_article->date)->format('j F, Y') }}</span>
        <div id="article">{!! $journal_article->content !!}</div>
    </div>
    <div class="col-md-12 single-article-share-mobile">
        <h3 class="share-heading-mobile">ПОДЕЛИТЬСЯ</h3>
        <ul class="single-socmedia">
            <li class="single-socmedia-item">
            <a href="https://twitter.com/share" class="single-socmedia-item-link" data-url="{{url()->current()}}" target="_blank">
                <img src="/img/twitter.svg" alt="">
            </a>
            </li>
            <li class="single-socmedia-item">
                <a class="single-socmedia-item-link" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{request()->url()}}&amp;src=sdkpreparse" >
                    <img src="/img/facebook.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
    <div class="col-md-12 single-recommended-articles row">
        <h3 class="single-recommended-heading">Похожие статьи</h3>
        @foreach($suggested as $article)
            <div class="grid-recommended-item">
                <a href="{{ $article->link }}">
                    <img src="{{ $article->minimage }}" class="img-fluid grid-recommended-img" alt="">
                    <span class="grid-recommended-date">{{ Date::parse($article->date)->format('j F, Y') }}</span>
                    <h3 class="grid-recommended-heading">{{ $article->title }}</h3>
                </a>
            </div>
        @endforeach
    </div>
</main>

@endsection
