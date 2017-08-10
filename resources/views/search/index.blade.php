@extends('layouts.app')



<!-- /*===== set title =====*/ -->
@section('title')
{{ Helpers::getSeo(2)->seo_title }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
{{ Helpers::getSeo(2)->seo_description }}
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
<ul class="grids effect-1" id="grid">
    @foreach($search_items as $item)
        <li class="">
            <a href="{{ $item->link }}">
                <img src="{{ $item->image }}" class="grid-img" alt="">
                <div class="grid-title">
                    @if(isset($item->category))
                        <span class="grid-category">{{ $item->category->title }}</span>
                        @if(isset($item->date))<span class="grid-date">{{ Date::parse($item->date)->format('j F, Y') }}</span>@endif
                    @else
                        @if(isset($item->date))<span class="gridDate">{{ Date::parse($item->date)->format('j F, Y') }}</span>@endif
                    @endif
                    <h3 class="grid-heading">{{ $item->title }}</h3>
                    @if(isset($item->mini))<p class="grid-text">{!! str_limit($item->mini, $limit = 210, $end = '...') !!}</p>
                    @elseif(isset($item->description))<p class="grid-text">{!! $item->description !!}</p>
                    @elseif(isset($item->content))<p class="grid-text">{!! str_limit($item->content, $limit = 210, $end = '...') !!}</p>
                    @endif
                </div>
            </a>
        </li>
    @endforeach

</ul>
<div class="col-md-12 pagination-block">

</div>

@endsection
