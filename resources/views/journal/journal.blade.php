@extends('layouts.app')



<!-- /*===== set title =====*/ -->
@section('title')
{{ Helpers::getSeo(2)->getArticleListTitle($category) }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
{{ Helpers::getSeo(2)->getArticleListDescription($category) }}
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
    @include('includes.breadcrumbs', ['crumbs' => ['Журнал']])

<ul class="col-md-12 recommended-list-category">
    <li class="recommended-list-category-item">
        <a href="/journal" class="recommended-list-category-link @if(!$category) active-category @endif">Все</a>
    </li>
    @foreach(Helpers::getJournalCategories() as $journal_categories)
    <li class="recommended-list-category-item">
        <a href="/journal?cat={{ $journal_categories->slug }}" class="recommended-list-category-link @if($category && $category->slug == $journal_categories->slug) active-category @endif">{{ $journal_categories->title }}</a>
    </li>
    @endforeach
</ul>
<ul class="grids effect-1" id="grid">
    @foreach($journal_articles as $journal_article)
        <li class="">
            <a href="/journal/{{ $journal_article->slug }}">
                <img src="{{ $journal_article->image }}" class="grid-img" alt="">
                <div class="grid-title">
                    <span class="grid-category">{{ $journal_article->category->title }}</span>
                    <span class="grid-date">{{ Date::parse($journal_article->date)->format('j F, Y') }}</span>
                    <h3 class="grid-heading">{{ $journal_article->title }}</h3>
                    <p class="grid-text">{!! str_limit($journal_article->mini, $limit = 210, $end = '...') !!}</p>
                </div>
            </a>
        </li>
    @endforeach
</ul>
<div class="col-md-12 pagination-block">
    {{ $journal_articles->render() }}
</div>

@include('includes.advert')


@endsection
