@extends('layouts.app')



<!-- /*===== set custom css =====*/ -->
@section('custom_css')
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('custom_javascript')
@endsection



@section('content')

<div class="magazine-section row">
    <div class="col-md-5 magazine-preview-block">
        <h3 class="magazine-order-heading-mobile">Выпуск №5 - Май 2017</h3>
        <div class="magazine-preview-illustration">
            <img src="/img/cover-vesna-1.png" class="magazine-cover-img" alt="">
            <a href="/img/magazine.pdf" target="_blank" class="magazine-preview-link">
                <img src="/img/white-eye.png" class="mazagine-preview-image" alt="">
                <h4 class="magazine-preview-text">Смотреть превью</h4>
            </a>
        </div>
    </div>
    <div class="col-md-7 magazine-order-block">
        <h3 class="magazine-order-heading">Выпуск №5 - Май 2017</h3>
        <p class="magazine-order-describtion">Купить печатную версию журнала VESNA</p>
        <form action="" class="magazine-page-form">
            <input type="text" class="magazine-page-form-item" placeholder="Имя">
            <input type="email" class="magazine-page-form-item" placeholder="E-mail">
            <input type="phone" class="magazine-page-form-item" placeholder="Телефон">
            <button type="submit" name="button" class="magazine-page-form-submit">Отправить</button>
            <span class="magazine-page-divider">или</span>
            <button type="submit" name="button" class="magazine-page-form-submit-online">Купить online</button>
        </form>
    </div>
    <div class="col-md-12 magazine-more-issues row">
        <h3 class="magazine-more-issues-heading">Другие выпуски</h3>
        <a href="magazine.html" class="col-md-4 magazine-more-issues-item">
            <img src="/img/vesna-cover-1.png" class="magazine-more-issues-item-img" alt="">
            <h3 class="magazine-more-issues-item-heading">Выпуск №5 - Май 2017</h3>
        </a>
        <a href="magazine.html" class="col-md-4 magazine-more-issues-item">
            <img src="/img/vesna-cover-2.png" class="magazine-more-issues-item-img" alt="">
            <h3 class="magazine-more-issues-item-heading">Выпуск №5 - Май 2017</h3>
        </a>
        <a href="magazine.html" class="col-md-4 magazine-more-issues-item">
            <img src="/img/vesna-cover-4.png" class="magazine-more-issues-item-img" alt="">
            <h3 class="magazine-more-issues-item-heading">Выпуск №5 - Май 2017</h3>
        </a>
    </div>
</div>

@endsection
