@extends('layouts.app')



<!-- /*===== set custom css =====*/ -->
@section('custom_css')
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('custom_javascript')
@endsection



@section('content')

<h3 class="projects-section-heading">Наши проекты</h3>
<div class="row project-section">
    <div class="col-md-4 project-block">
        <a href="article.html">
            <img src="/img/project-1.png" class="img-fluid project-block-img" alt="">
        </a>
        <a href="article.html">
            <h3 class="project-block-heading">Клуб VESNA</h3>
        </a>
    </div>
    <div class="col-md-4 project-block">
        <a href="article.html">
            <img src="/img/project-2.png" class="img-fluid project-block-img" alt="">
        </a>
        <a href="article.html">
            <h3 class="project-block-heading">Институт VESNA</h3>
        </a>
    </div>
    <div class="col-md-4 project-block">
        <a href="article.html">
            <img src="/img/project-3.png" class="img-fluid project-block-img" alt="">
        </a>
        <a href="article.html">
            <h3 class="project-block-heading">VESNA Beauty Awards</h3>
        </a>
    </div>
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
