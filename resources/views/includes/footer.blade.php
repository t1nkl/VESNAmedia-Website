<footer class="mp-footer row">
    <div class="col-md-3 footer-journal-issue">
        <p class="footer-journal-issue-name">{{ Helpers::getLastJournal()->title }}</p>
        <img src="{{ Helpers::getLastJournal()->image }}" class="img-fluid footer-journal-issue-img" alt="">
    </div>
    <div class="col-md-9 footer-navigation row">
        <div class="col-md-5 footer-subscribtion-block col-md-5">
            <h3 class="footer-subscribtion-name">Подписка</h3>
            <p class="footer-subscribtion-text">Подпишитесь на нашу новостную рассылку, что бы первыми узнавать все новости</p>
            <form class="footer-subscribtion-form" id="footer-subscribtion-form" action="javascript:subscribeLid()">
                <span class="subscribtion-form">E-mail</span>
                <input name="subscribtion-form-email" id="subscribtion-form-email" type="email" class="footer-subscribtion-field" placeholder="" required>
                <button type="submit" name="button" class="footer-subscribtion-btn">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </button>
            </form>
            <div class="footer-subscribtion-form-message">
                <h2 id="footer-subscribtion-form-response" class="footer-subscribtion-form-response"></h2>
            </div>
        </div>
        <ul class="col-md-3 footer-navigation-journal">
            <li class="footer-navigation-journal-item">
                <a href="/journal">Журнал</a>
            </li>
            @foreach(Helpers::getJournalCategories() as $journal_categories)
            <li class="footer-navigation-journal-item">
                <a href="/journal#{{ $journal_categories->slug }}" class="footer-navigation-journal-link">{{ $journal_categories->title }}</a>
            </li>
            @endforeach
            <!-- <li class="footer-navigation-journal-item">
                <a href="gallery-item.html" class="footer-navigation-journal-link">Косметология</a>
            </li>
            <li class="footer-navigation-journal-item">
                <a href="magazine.html" class="footer-navigation-journal-link">Психология</a>
            </li>
            <li class="footer-navigation-journal-item">
                <a href="gallery-item.html" class="footer-navigation-journal-link">Стиль жизни</a>
            </li>
            <li class="footer-navigation-journal-item">
                <a href="contact.html" class="footer-navigation-journal-link">События</a>
            </li> -->
            <ul class="footer-navigation-socmedia">
                <li class="footer-navigation-socmedia-item">
                    <a href="#" class="footer-navigation-socmedia-link">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="footer-navigation-socmedia-item">
                    <a href="#" class="footer-navigation-socmedia-link">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="footer-navigation-socmedia-item">
                    <a href="#" class="footer-navigation-socmedia-link">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </ul>
        <ul class="col-md-2 footer-navigation-site">
            <li class="footer-navigation-site-item">
                <a href="#">Сайт</a>
            </li>
            <li class="footer-navigation-site-item">
                <a href="/experts" class="footer-navigation-site-link">Эксперты</a>
            </li>
            <li class="footer-navigation-site-item">
                <a href="/gallery" class="footer-navigation-site-link">Галерея</a>
            </li>
            <li class="footer-navigation-site-item">
                <a href="/partners" class="footer-navigation-site-link">Партнеры</a>
            </li>
            <li class="footer-navigation-site-item">
                <a href="/contacts" class="footer-navigation-site-link">Контакты</a>
            </li>
        </ul>
        <ul class="col-md-2 footer-navigation-recommended">
            <li class="footer-navigation-recommended-item">
                <a href="/recommend">Рекомендуем</a>
            </li>
            @foreach(Helpers::getRecommendCategories() as $recommend_categories)
            <li class="footer-navigation-recommended-item">
                <a href="/recommend#{{ $recommend_categories->slug }}" class="footer-navigation-recommended-link">{{ $recommend_categories->title }}</a>
            </li>
            @endforeach
            <!-- <li class="footer-navigation-recommended-item">
                <a href="single.html" class="footer-navigation-recommended-link">Рестораны</a>
            </li>
            <li class="footer-navigation-recommended-item">
                <a href="posts.html" class="footer-navigation-recommended-link">Салоны красоты</a>
            </li>
            <li class="footer-navigation-recommended-item">
                <a href="article.html" class="footer-navigation-recommended-link">Клиники</a>
            </li>
            <li class="footer-navigation-recommended-item">
                <a href="recommended.html" class="footer-navigation-recommended-link">Барбершопы</a>
            </li> -->
        </ul>
    </div>
    <!-- mobile navigation footer -->
    <div class="col-md-12 footer-navigation-mob row">
        <ul class="col-md-8 footer-mob-navigation-block">
            <li class="footer-mob-navigation-item">
                <a class="footer-mob-navigation-link" href="{{ url('/') }}">Главная</a>
            </li>
            <li class="footer-mob-navigation-item">
                <a class="footer-mob-navigation-link" href="/journal">Журнал</a>
            </li>
            <li class="footer-mob-navigation-item">
                <a class="footer-mob-navigation-link" href="/experts">Эксперты</a>
            </li>
            <li class="footer-mob-navigation-item">
                <a class="footer-mob-navigation-link" href="/gallery">Галерея</a>
            </li>
            <li class="footer-mob-navigation-item">
                <a class="footer-mob-navigation-link" href="/partners">Партнеры</a>
            </li>
            <li class="footer-mob-navigation-item">
                <a class="footer-mob-navigation-link" href="/contacts">Контакты</a>
            </li>
            <li class="footer-mob-navigation-item">
                <a class="footer-mob-navigation-link" href="/recommend">Рекомендуем</a>
            </li>
        </ul>
        <ul class="col-md-4 footer-mob-socmedia-block">
            <li class="footer-mob-socmedia-item">
                <a href="#" class="footer-mob-socmedia-link">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
            </li>
            <li class="footer-mob-socmedia-item">
                <a href="#" class="footer-mob-socmedia-link">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li class="footer-mob-socmedia-item">
                <a href="#" class="footer-mob-socmedia-link">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
        <div class="col-md-12 footer-subscribtion-block col-md-5">
            <form class="footer-subscribtion-form" action="">
                <input type="email" class="footer-subscribtion-field" placeholder="Подписка на новости">
                <button type="submit" name="button" class="footer-subscribtion-btn">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- End mobile navigation footer -->
</footer>
<div class="row copyright-section">
    <div class="col-md-10 copyright-block">
        <p class="copyright-text">Copyright © {{ date('Y') }} Vesna Media.</p>
    </div>
    <div class="col-md-2 back-to-top-block">
        <a href="#" class="back-to-top-link">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </a>
    </div>
</div>