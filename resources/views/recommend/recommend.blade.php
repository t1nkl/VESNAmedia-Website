@extends('layouts.app')

<!-- /*===== set title =====*/ -->
@section('title')
{{ Helpers::getSeo(7)->getArticleListTitle($category) }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
{{ Helpers::getSeo(7)->getArticleListDescription($category) }}
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

    @include('includes.breadcrumbs', ['crumbs' => ['Рекомендуем']])

<main class="mp-main row">
    <ul class="col-md-12 recommended-list-category">
        <li class="recommended-list-category-item">
            <a href="/recommend" class="recommended-list-category-link @if(!$category) active-category @endif">All</a>
        </li>
        @foreach(Helpers::getRecommendCategories() as $recommend_categories)
        <li class="recommended-list-category-item">
            <a href="/recommend?cat={{ $recommend_categories->slug }}" class="recommended-list-category-link @if($category && $category->slug == $recommend_categories->slug) active-category @endif" >{{ $recommend_categories->title }}</a>
        </li>
        @endforeach
    </ul>
    <div class="col-md-12 page-grid-block partners-page">

    @foreach($recommend_articles as $recommend_article)
        <div class="col-md-3 page-grid-item content-centered">
            <div class="page-grid-illustration">
                <a href="/recommend/{{ $recommend_article->slug }}" class="page-grid-item-link">
                    <img src="{{ $recommend_article->image }}" class="page-grid-illustration-image" alt="">
                </a>
            </div>
            <a href="/recommend/{{ $recommend_article->slug }}" class="page-grid-item-link">
                <h3 class="page-grid-heading">{{ $recommend_article->title }}</h3>
            </a>
            <a href="/recommend/{{ $recommend_article->slug }}" class="page-grid-item-link">
                <p class="page-grid-description">{{ $recommend_article->description }}</p>
            </a>
        </div>
    @endforeach

    </div>
    <div class="col-md-12 pagination-block">
        {{ $recommend_articles->render() }}
    </div>
</main>

@include('includes.advert')

@endsection
