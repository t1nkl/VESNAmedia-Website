@extends('layouts.app')



<!-- /*===== set title =====*/ -->
@section('title')
{{ $title = Helpers::getSeo(1)->seo_title }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
{{ $description = Helpers::getSeo(1)->seo_description }}
@endsection

<!-- /*===== set keywords =====*/ -->
@section('keywords')
@endsection

<!-- /*===== set Open Graph =====*/ -->
@section('open_graph')
<meta property="og:title" content="{{$title}}" />
<meta property="og:type" content="website" />
<meta property="og:description" content="{{ $description }}" />
<meta property="og:url" content="{{env('APP_URL')}}" />
<meta property="og:image" content="{{env('APP_URL')}}img/og/1.jpg" />
@endsection

<!-- /*===== set preloader html =====*/ -->
@section('preloader_html')
<div class="loader-demo" id="loader-demo">
    <div id="loading-center" class="">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>
<style type="text/css">
    #loading{background-color:#cf4a30;height:100%;width:100%;position:fixed;z-index:100;margin-top:0;top:0}#loading-center{width:100%;height:100%;position:relative}#loading-center-absolute{position:absolute;left:50%;top:50%;height:60px;width:60px;margin-top:-30px;margin-left:-30px;-webkit-animation:loading-center-absolute 1s infinite;animation:loading-center-absolute 1s infinite}.object{width:20px;height:20px;background-color:#c4d468;float:left;-moz-border-radius:50%;-webkit-border-radius:50%;border-radius:50%;margin-right:20px;margin-bottom:20px}.object:nth-child(2n+0){margin-right:0}#object_one{-webkit-animation:object_one 1s infinite;animation:object_one 1s infinite}#object_two{-webkit-animation:object_two 1s infinite;animation:object_two 1s infinite}#object_three{-webkit-animation:object_three 1s infinite;animation:object_three 1s infinite}#object_four{-webkit-animation:object_four 1s infinite;animation:object_four 1s infinite}@-webkit-keyframes loading-center-absolute{100%{-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes loading-center-absolute{100%{-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes object_one{50%{-ms-transform:translate(20px,20px);-webkit-transform:translate(20px,20px);transform:translate(20px,20px)}}@keyframes object_one{50%{-ms-transform:translate(20px,20px);-webkit-transform:translate(20px,20px);transform:translate(20px,20px)}}@-webkit-keyframes object_two{50%{-ms-transform:translate(-20px,20px);-webkit-transform:translate(-20px,20px);transform:translate(-20px,20px)}}@keyframes object_two{50%{-ms-transform:translate(-20px,20px);-webkit-transform:translate(-20px,20px);transform:translate(-20px,20px)}}@-webkit-keyframes object_three{50%{-ms-transform:translate(20px,-20px);-webkit-transform:translate(20px,-20px);transform:translate(20px,-20px)}}@keyframes object_three{50%{-ms-transform:translate(20px,-20px);-webkit-transform:translate(20px,-20px);transform:translate(20px,-20px)}}@-webkit-keyframes object_four{50%{-ms-transform:translate(-20px,-20px);-webkit-transform:translate(-20px,-20px);transform:translate(-20px,-20px)}}@keyframes object_four{50%{-ms-transform:translate(-20px,-20px);-webkit-transform:translate(-20px,-20px);transform:translate(-20px,-20px)}}
</style>
@endsection

<!-- /*===== set custom css =====*/ -->
@section('custom_css')
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('custom_javascript')
<script type="text/javascript">
    <!-- /*===== preloader =====*/ -->
    $(window).load(function() {
        $(".loader-demo").delay(1000).fadeOut("slow");
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
                    $('#sub_title_email').slideUp();
                    $('#subscribtion-input-block-response').html('Спасибо. Вы упешно подписались на новостную рассылку!');
                },
                error: function(data){
                // setTimeout(mailCallback, 2000);
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
                if(data.less_then){$('.load-more').hide();}
                $('.endless-pagination').data('next-page', data.next_page);
                $('.all_articles').append(data.all_articles);
            }
        });
    };
</script>
@endsection



@section('content')
<div class="gallery-wrap">
    @if(count($slides))
    <div class="single-item">
        @foreach($slides as $slide)
        <div class="slide">
            <div class="slide-illustration-block">
                <a href="{{$slide->url}}" class="slider-link">
                    <div class="slider-bg-img">
                        <img class="slide-illustration" src="{{$slide->image}}" />
                    </div>
                </a>
            </div>
            <div class="slide-count-wrap">
                <span class="current"></span> /
                <span class="total"></span>
            </div>
            <div class="slider-describtion">
                <h3>{{$slide->title}}</h3>
                  <a href="{{$slide->url}}" class="slider-link"><p>{{$slide->description}}</p></a>
            </div>
        </div>
        @endforeach
    </div>
    @endif
    <h3 class="projects-section-heading">Наши проекты</h3>
    <div class="row project-section">
        @foreach($projects as $project)
        <div class="col-md-4 project-block">
            <a href="{{ $project->url }}" target="_blank">
                <img src="{{ $project->image }}" class="img-fluid project-block-img" alt="">
            </a>
            <a href="{{ $project->url }}" target="_blank">
                <h3 class="project-block-heading">{{ $project->title }}</h3>
            </a>
        </div>
        @endforeach
    </div>
    @if(isset($advert_sub))
    <div class="general-irrelevant-illustration-mob">
        @if(isset($advert_sub->url))
        <a href="{{$advert_sub->url}}" target="_blank">
            <img src="{{$advert_sub->mobileimage}}" class="img-fluid general-illustration" alt="">
        </a>
        @else
        <img src="{{$advert_sub->mobileimage}}" class="img-fluid general-illustration" alt="">
        @endif
    </div>
    <div class="general-irrelevant-illustration">
        @if(isset($advert_sub->url))
        <a href="{{$advert_sub->url}}" target="_blank">
            <img src="{{$advert_sub->desktopimage}}" class="img-fluid general-illustration" alt="">
        </a>
        @else
        <img src="{{$advert_sub->desktopimage}}" class="img-fluid general-illustration" alt="">
        @endif
    </div>
    @else
    <div class="subscribtion-block row">
        <div class="subscribtion-block-illustration">
            <img src="/img/subscribtion-desctop.png" class="subscribtion-block-img" alt="">
            <img src="/img/subscribtion-pt.png" class="subscribtion-block-img-mob" alt="">
        </div>
        <div class="subscribtion-block-form row">
            <div class="col-md-6 subscribtion-block-heading" id="sub_title_email">
                <h3 id="sub_title_email" class="subscribtion-block-heading-text">Подпишитесь на нашу новостную рассылку</h3>
            </div>
            <form class="col-md-6 subscribtion-input-block" id="subscribtion-input-block" action="javascript:subscribtionInput()">
                <input type="email" class="subscribtion-input-field" id="subscribtion-input-field-email" placeholder="e-mail" required>
                <button type="submit" name="button" class="subscribtion-send-btn">Подписаться</button>
            </form>
            <div class="col-md-12 subscribtion-input-block-message">
                <h2 id="subscribtion-input-block-response" class="subscribtion-input-block-response"></h2>
            </div>
        </div>
    </div>
    @endif
    <h3 class="latest-articles-section-heading">Последние статьи</h3>

    <ul class="endless-pagination all_articles grids effect-1" id="grid" data-next-page="2">

        @foreach($all_articles as $article)
        @if($loop->index == 5)
        <li class="col-xs-12">
            @if(isset($advert))
                @if(isset($advert->url))
                <a href="{{$advert->url}}" target="_blank">
                    <img src="{{$advert->mobileimage}}" class="img-fluid general-illustration" alt="">
                </a>
                @else
                <img src="{{$advert->mobileimage}}" class="img-fluid general-illustration" alt="">
                @endif
            @endif
        </li>
        @endif
        <li class="col-xs-12">
            <a href="{{ $article->link }}">
                <img src="{{ $article->image }}" class="grid-img" alt="">
                <div class="grid-title">
                    <span class="grid-category">{{ $article->category->title }}</span>
                    <span class="grid-date">{{ Date::parse($article->date)->format('j F, Y') }}</span>
                    <h3 class="grid-heading">{{ $article->title }}</h3>
                    @if($article->description)
                    <p class="grid-text">{{ $article->description }}</p>
                    @else
                    <p class="grid-text">{!! str_limit($article->mini, $limit = 210, $end = '...') !!}</p>
                    @endif
                </div>
            </a>
        </li>
        @endforeach

    </ul>
    {{--{!! $all_articles->render() !!}--}}

    <div class="col-md-12 read-more-block load-more">
        <a onclick="fetchPosts()" class="read-more-link">Читать далее</a>
    </div>
    <div class="load"></div>

@endsection
