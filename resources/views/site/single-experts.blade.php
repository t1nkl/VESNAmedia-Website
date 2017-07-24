@extends('layouts.app')



<!-- /*===== set title =====*/ -->
@section('title')
{{ $expert->seo_title ? $expert->seo_title : $expert->title." - Vesna" }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
{{ $expert->seo_description ? $expert->seo_description : "Советы от ".$expert->title." - Vesna" }}
@endsection

<!-- /*===== set keywords =====*/ -->
@section('keywords')
@endsection

<!-- /*===== set Open Graph =====*/ -->
@section('open_graph')
@endsection

<!-- /*===== set custom css =====*/ -->
@section('custom_css')
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('custom_javascript')
@endsection



@section('content')
    @include('includes.breadcrumbs', ['crumbs' => [['Эксперты', '/experts'], 'Статьи от '. $expert->title]])

<div class="experts-posts-header">
    <a href="/experts" class="experts-posts-back-link"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Эксперты</a>
    <!-- <div class="experts-posts-header-text"> -->
        <h3 class="experts-posts-author">Статьи от <span class="experts-posts-author-name">{{ $expert->title }}</span></h3>
    <!-- </div> -->
</div>
<ul class="col-md-12 grids effect-1 row" id="grid">

@foreach($articles as $article)
    <li class="col-md-4">
        <a href="/journal/{{ $article->slug }}">
            <img src="{{ $article->image }}" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">{{ $article->category->title }}</span>
                <span class="grid-date">{{ Date::parse($article->date)->format('j F, Y') }}</span>
                <h3 class="grid-heading">{{ $article->title }}</h3>
                <p class="grid-text">{!! str_limit($article->mini, $limit = 210, $end = '...') !!}</p>
            </div>
        </a>
    </li>
@endforeach

</ul>
<div class="col-md-12 pagination-block">
    {{ $articles->render() }}
</div>


@endsection
