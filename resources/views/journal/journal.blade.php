@extends('layouts.app')



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
    <!-- <li class="recommended-list-category-item">
        <a href="#" class="recommended-list-category-link active-category">Рестораны</a>
    </li>
    <li class="recommended-list-category-item">
        <a href="#" class="recommended-list-category-link">Салоны красоты</a>
    </li>
    <li class="recommended-list-category-item">
        <a href="#" class="recommended-list-category-link">Клиники</a>
    </li>
    <li class="recommended-list-category-item">
        <a href="#" class="recommended-list-category-link">Фитнес</a>
    </li> -->
</ul>
<article class="masonry-article" id="">
    <section class="">
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
        <a href="/journal/single">
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
</article>
<div class="col-md-12 pagination-block">
    <ul class="pagination-block-list">
        <li class="pagination-item">
            <a href="posts.html" class="pagination-block-link"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </li>
        <li class="pagination-item page-active"><a href="posts.html" class="pagination-block-link">1</a>
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
