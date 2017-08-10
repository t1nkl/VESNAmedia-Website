@extends('layouts.app')



<!-- /*===== set title =====*/ -->
@section('title')
{{ Helpers::getSeo(4)->seo_title }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
{{ Helpers::getSeo(4)->seo_description }}
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

@include('includes.breadcrumbs', ['crumbs' => ['Галерея']])
<ul class="endless-pagination all_articles  col-md-12 grids effect-1" id="grid">
    @foreach($gallerys as $gallery)
        <li class="col-xs-12">
            <a href="{{$gallery->link}}">
                <img src="{{$gallery->image}}" class="grid-img" alt="">
                <div class="grid-title">
                    <span class="grid-category">{{ Date::parse($gallery->date)->format('j F, Y') }}</span>
                    <span class="grid-date">{{ Date::parse($gallery->date)->format('j F, Y') }}</span>
                    <h3 class="grid-heading">{{ $gallery->title }}</h3>
                </div>
            </a>
        </li>
    @endforeach

</ul>
{{ $gallerys->links() }}
<!-- <div class="col-md-12 pagination-block">
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
</div> -->

    @include('includes.advert')
   
<!-- <div class="general-irrelevant-illustration">
    <img src="/img/flat-img.jpg" class="img-fluid general-illustration" alt="">
</div> -->

@endsection
