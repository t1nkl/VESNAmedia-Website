@extends('layouts.app')



<!-- /*===== set custom css =====*/ -->
@section('custom_css')
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('custom_javascript')
@endsection



@section('content')

<main class="mp-experts">
@foreach($experts as $expert)
    <div class="chess-grid-block row">
        <div class="col-md-6 chess-grid-illustration">
            <a href="single.html" class="chess-grid-content-link">
                <img src="{{ $expert->image }}" class="img-fluid chess-grid-image" alt="">
            </a>
        </div>
        <div class="col-md-6 chess-grid-description">
            <a href="single.html" class="chess-grid-content-link">
                <h3 class="chess-grid-heading">{{ $expert->title }}</h3>
            </a>
            <a href="single.html" class="chess-grid-content-link">
                <p class="chess-grid-text">{{ $expert->description }}</p>
            </a>
            <ul class="chess-grid-socmedia">
            @if($expert->youtube)
                <li class="chess-grid-socmedia-item">
                    <a href="{{ $expert->youtube }}" class="chess-grid-socmedia-link">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
            @if($expert->facebook)
                <li class="chess-grid-socmedia-item">
                    <a href="{{ $expert->facebook }}" class="chess-grid-socmedia-link">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
            @if($expert->instagram)
                <li class="chess-grid-socmedia-item">
                    <a href="{{ $expert->instagram }}" class="chess-grid-socmedia-link">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
            @if($expert->twitter)
                <li class="chess-grid-socmedia-item">
                    <a href="{{ $expert->twitter }}" class="chess-grid-socmedia-link">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
            @if($expert->url)
                <li class="chess-grid-socmedia-item">
                    <a href="{{ $expert->url }}" class="chess-grid-socmedia-link">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                    </a>
                </li>
            @else
            @endif
            </ul>
            <a href="posts-experts.html" class="chess-grid-link">Статьи <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
@endforeach
</main>

@endsection
