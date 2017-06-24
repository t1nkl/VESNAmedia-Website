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

<!-- /*===== set preloader html =====*/ -->
@section('preloader_html')
<div class="loader-demo" id="loader-demo">
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
</div>
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
        <form class="col-md-6 subscribtion-input-block" action="">
            <input type="email" class="subscribtion-input-field" placeholder="e-mail">
            <button type="submit" name="button" class="subscribtion-send-btn">Подписаться</button>
        </form>
    </div>
</div>
<h3 class="latest-articles-section-heading">Последние статьи</h3>
<article class="masonry-article" id="">
    <section class="">
        <a href="single.html">
            <img src="/img/img-3.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
    <section class="">
        <a href="single.html">
            <img src="/img/img-1.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
    <section class="">
        <a href="single.html">
            <img src="/img/img-3.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
    <section class="">
        <a href="single.html">
            <img src="/img/img-1.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
    <section class="">
        <a href="single.html">
            <img src="/img/img-3.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
    <section class="">
        <a href="single.html">
            <img src="/img/img-1.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
    <section class="">
        <a href="single.html">
            <img src="/img/img-3.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
    <section class="">
        <a href="single.html">
            <img src="/img/img-1.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
    <section class="">
        <a href="single.html">
            <img src="/img/img-3.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
    <section class="">
        <a href="single.html">
            <img src="/img/img-1.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
    <section class="">
        <a href="single.html">
            <img src="/img/img-3.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
    <section class="">
        <a href="single.html">
            <img src="/img/img-1.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
    <section class="">
        <a href="single.html">
            <img src="/img/img-3.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
    <section class="">
        <a href="single.html">
            <img src="/img/img-1.jpg" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">Косметология</span>
                <span class="grid-date">20 May 2017</span>
                <h3 class="grid-heading">A fantastic title</h3>
                <p class="grid-text">«Всю жизнь мне приходилось выбирать между людьми, которых я любила,
                    и моими амбициями», — призналась на склоне лет Хелена Рубинштейн. Увы,...
                </p>
            </div>
        </a>
    </section>
</article>
<div class="col-md-12 read-more-block">
    <a href="posts.html" class="read-more-link">Читать далее</a>
</div>

@endsection
