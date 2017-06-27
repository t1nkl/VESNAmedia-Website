@extends('layouts.app')



<!-- /*===== set title =====*/ -->
@section('title')
{{ Helpers::getSeo(1)->seo_title }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
{{ Helpers::getSeo(1)->seo_description }}
@endsection

<!-- /*===== set keywords =====*/ -->
@section('keywords')
@endsection

<!-- /*===== set Open Graph =====*/ -->
@section('open_graph')
@endsection

<!-- /*===== set preloader html =====*/ -->
@section('preloader_html')
<!-- <div class="loader-demo" id="loader-demo">
    <div class="demo">
        <svg class="loader">
            <filter id="blur">
                <fegaussianblur in="SourceGraphic" stddeviation="2"></fegaussianblur>
            </filter>
            <circle cx="75" cy="75" r="60" fill="transparent" stroke="#F4F519" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
        </svg>
        <svg class="loader loader-2">
            <circle cx="75" cy="75" r="60" fill="transparent" stroke="#DE2FFF" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
        </svg>
        <svg class="loader loader-3">
            <circle cx="75" cy="75" r="60" fill="transparent" stroke="#FF5932" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
        </svg>
        <svg class="loader loader-4">
            <circle cx="75" cy="75" r="60" fill="transparent" stroke="#E97E42" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
        </svg>
        <svg class="loader loader-5">
            <circle cx="75" cy="75" r="60" fill="transparent" stroke="white" stroke-width="6" stroke-linecap="round" filter="url(#blur)"></circle>
        </svg>
        <svg class="loader loader-6">
            <circle cx="75" cy="75" r="60" fill="transparent" stroke="#00DCA3" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
        </svg>
        <svg class="loader loader-7">
            <circle cx="75" cy="75" r="60" fill="transparent" stroke="purple" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
        </svg>
        <svg class="loader loader-8">
            <circle cx="75" cy="75" r="60" fill="transparent" stroke="#AAEA33" stroke-width="6" stroke-linecap="round" stroke-dasharray="385" stroke-dashoffset="385" filter="url(#blur)"></circle>
        </svg>
    </div>
</div> -->
@endsection

<!-- /*===== set custom css =====*/ -->
@section('custom_css')
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('custom_javascript')
<script type="text/javascript">
    <!-- /*===== preloader =====*/ -->
    $(window).load(function() {
        $(".loader-demo").delay(2000).fadeOut("slow");
    });

    <!-- /*===== subscribtion =====*/ -->
    $('#subscribtion-input-block').submit(
        function subscribtionInput( event ) {
            event.preventDefault();
            var email = $('#subscribtion-input-field-email').val();
            $.ajax({
                type: "POST",
                url: '/subscribe',
                data: {email: email},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(data){
                    $('#subscribtion-input-block').slideUp();
                    $('#subscribtion-input-block-response').html('Спасибо, вы успешно подписались.');
                },
                error: function(data){
                    setTimeout(mailCallback, 2000);
                }
            });
        }
    );

    <!-- /*===== endless pagination =====*/ -->
    function fetchPosts() {
        var page = $('.endless-pagination').data('next-page');
        $.ajax({
            type: "GET",
            url: '/',
            data: {page: page},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                $('.load-more').hide();
                $('.endless-pagination').data('next-page', data.next_page);
                $('.all_articles').append(data.all_articles);
            }
        });
    };
</script>
@endsection



@section('content')

<h3 class="projects-section-heading">Наши проекты</h3>
<div class="row project-section">
    @foreach($projects as $project)
        <div class="col-md-4 project-block">
            <a href="{{ $project->url }}">
                <img src="{{ $project->image }}" class="img-fluid project-block-img" alt="">
            </a>
            <a href="{{ $project->url }}">
                <h3 class="project-block-heading">{{ $project->title }}</h3>
            </a>
        </div>
    @endforeach
</div>
<div class="subscribtion-block row">
    <div class="subscribtion-block-illustration">
        <img src="/img/subscribtion-desctop.png" class="subscribtion-block-img" alt="">
        <img src="/img/subscribtion-pt.png" class="subscribtion-block-img-mob" alt="">
    </div>
    <div class="subscribtion-block-form row">
        <div class="col-md-6 subscribtion-block-heading">
            <h3 class="subscribtion-block-heading-text">Подпишитесь на нашу новостную рассылку</h3>
        </div>
        <form class="col-md-6 subscribtion-input-block" id="subscribtion-input-block" action="javascript:subscribtionInput()">
            <input type="email" class="subscribtion-input-field" id="subscribtion-input-field-email" placeholder="e-mail" required>
            <button type="submit" name="button" class="subscribtion-send-btn">Подписаться</button>
        </form>
        <div class="subscribtion-input-block-message">
            <h2 id="subscribtion-input-block-response" class="subscribtion-input-block-response"></h2>
        </div>
    </div>
</div>
<h3 class="latest-articles-section-heading">Последние статьи</h3>

<article class="masonry-article endless-pagination all_articles" id="" data-next-page="2">

@foreach($all_articles as $all_article)
    <section class="">
    @if($all_article->description)
        <a href="/recommend/{{ $all_article->slug }}">
    @else
        <a href="/journal/{{ $all_article->slug }}">
    @endif
            <img src="{{ $all_article->image }}" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">{{ $all_article->category->title }}</span>
                <span class="grid-date">{{ Date::parse($all_article->date)->format('j F, Y') }}</span>
                <h3 class="grid-heading">{{ $all_article->title }}</h3>
            @if($all_article->description)
                <p class="grid-text">{{ $all_article->description }}</p>
            @else
                {!! str_limit($all_article->content, $limit = 210, $end = '...') !!}
            @endif
                <!-- <p class="grid-text"></p> -->
            </div>
        </a>
    </section>
@endforeach

{{--{!! $all_articles->render() !!}--}}

<div class="col-md-12 read-more-block load-more">
    <a onclick="fetchPosts()" class="read-more-link">Читать далее</a>
</div>
<div class="load"></div>

</article>

@endsection
