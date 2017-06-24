@extends('layouts.app')



<!-- /*===== set title =====*/ -->
@section('title')
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
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

<ul class="col-md-12 recommended-list-category">
    <li class="recommended-list-category-item">
        <a href="#" class="recommended-list-category-link active-category">Все</a>
    </li>
    @foreach(Helpers::getJournalCategories() as $journal_categories)
    <li class="recommended-list-category-item">
        <a href="#{{ $journal_categories->slug }}" class="recommended-list-category-link">{{ $journal_categories->title }}</a>
    </li>
    @endforeach
</ul>
<article class="masonry-article" id="">

    @foreach($journal_articles as $journal_article)
        <section class="">
            <a href="/journal/{{ $journal_article->slug }}">
                <img src="{{ $journal_article->image }}" class="grid-img" alt="">
                <div class="grid-title">
                    <span class="grid-category">{{ $journal_article->category->title }}</span>
                    <span class="grid-date">{{ Date::parse($journal_article->date)->format('j F, Y') }}</span>
                    <h3 class="grid-heading">{{ $journal_article->title }}</h3>
                    <p class="grid-text">{!! str_limit($journal_article->content, $limit = 210, $end = '...') !!}</p>
                </div>
            </a>
        </section>
    @endforeach

</article>
<div class="col-md-12 pagination-block">
    {{ $journal_articles->render() }}
</div>
<div class="col-md-12 advertisement-block">
    <img src="/img/flat-img.jpg" class="img-fluid advertisement-illustration" alt="">
</div>

@endsection
