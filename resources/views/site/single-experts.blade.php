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

<div class="experts-posts-header">
    <a href="/experts" class="experts-posts-back-link"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Эксперты</a>
    <div class="experts-posts-header-text">
        <h3 class="experts-posts-author">Статьи от <span class="experts-posts-author-name">{{ $expert_article->title }}</span></h3>
    </div>
</div>
<ul class="col-md-12 grid swipe-down row" id="grid">

@foreach($articles as $article)
    <li class="col-md-4">
        <a href="/journal/{{ $article->slug }}">
            <img src="{{ $article->image }}" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">{{ $article->category->title }}</span>
                <span class="grid-date">{{ Date::parse($article->date)->format('j F, Y') }}</span>
                <h3 class="grid-heading">{{ $article->title }}</h3>
                {!! str_limit($article->content, $limit = 210, $end = '...') !!}
            </div>
        </a>
    </li>
@endforeach

    <!-- <li class="col-md-4">
        <a href="single.html">
            <img src="/img/img.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила, и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </li>
    <li class="col-md-4">
        <a href="single.html">
            <img src="/img/img.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила, и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </li>
    <li class="col-md-4">
        <a href="single.html">
            <img src="/img/img.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила, и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </li>
    <li class="col-md-4">
        <a href="single.html">
            <img src="/img/img-1.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила, и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </li>
    <li class="col-md-4">
        <a href="single.html">
            <img src="/img/img-3.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила, и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </li>
    <li class="col-md-4">
        <a href="single.html">
            <img src="/img/img.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила, и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </li>
    <li class="col-md-4">
        <a href="single.html">
            <img src="/img/img-1.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила, и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </li>
    <li class="col-md-4">
        <a href="single.html">
            <img src="/img/img-1.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила, и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </li> -->
</ul>
<div class="col-md-12 pagination-block">
    <ul class="pagination-block-list">
        <li class="pagination-item">
            <a href="posts.html" class="pagination-block-link">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
        </li>
        <li class="pagination-item page-active">
            <a href="posts.html" class="pagination-block-link">1</a>
        </li>
        <li class="pagination-item">
            <a href="posts.html" class="pagination-block-link">2</a>
        </li>
        <li class="pagination-item">
            <a href="posts.html" class="pagination-block-link">3</a>
        </li>
        <li class="pagination-item">
            <a href="posts.html" class="pagination-block-link">4</a>
        </li>
        <li class="pagination-item">
            <a href="posts.html" class="pagination-block-link">5</a>
        </li>
        <li class="pagination-item">
            <a href="posts.html" class="pagination-block-link">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</div>
<div class="col-md-12 advertisement-block">
    <img src="/img/flat-img.jpg" class="img-fluid advertisement-illustration" alt="">
</div>

@endsection
