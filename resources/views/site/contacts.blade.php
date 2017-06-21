@extends('layouts.app')



<!-- /*===== set custom css =====*/ -->
@section('custom_css')
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('custom_javascript')
@endsection



@section('content')

<main class="mp-contact row">
    <div class="col-md-12 contact-page-describtion">
        <h3 class="contact-page-describtion">О Нас</h3>
        <p class="contact-page-text">Каждая леди не понаслышке знает, что значит аромат для женщины. Выбрать парфюм, который вам идеально подходит и будет сопровождать вас на авансцене, покоряя сердца окружающих, — задача не из легких! Именно об этом мы пообщались в кулуарах с Дмитрием Милютиным — коллекционером селективной парфюмерии и владельцем парфюм-галереи Moluar. Говорили о тенденциях на рынке парфюмерии, о выборе ароматов и узнали, чем нужно руководствоваться современной женщине в мире парфюмерии.
        </p>
    </div>
    <div class="col-md-12 contact-page-map">
        <iframe width="100%" height="300" frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBgrXsG8X_Dgelnf_Zsal_i9OshVvoU7Bc&q=Space+Needle,Seattle+WA" allowfullscreen></iframe>
    </div>
    <div class="col-md-8 contact-page-form-block">
        <h3 class="contact-page-form-heading">Напишите нам</h3>
        <form action="" class="contact-page-form">
            <input type="text" class="contact-page-form-item" placeholder="Имя">
            <input type="email" class="contact-page-form-item" placeholder="E-mail">
            <textarea class="contact-page-form-item" placeholder="Сообщение"></textarea>
            <button type="submit" name="button" class="contact-page-form-submit">Отправить</button>
        </form>
    </div>
    <div class="col-md-4 contact-page-info">
        <h3 class="contact-page-info-heading">Телефон</h3>
        <a href="tel:+380906879685" class="contact-page-info-phone">+38 090 687 96 85</a>
        <a href="tel:+380906879685" class="contact-page-info-phone">+38 090 687 96 85</a>
        <h3 class="contact-page-info-heading">Адрес</h3>
        <p class="contact-page-info-adress">Украина, Киев</p>
        <p class="contact-page-info-adress">ул. Драгомирова 2, офис 4</p>
        <h3 class="contact-page-info-heading">E-mail</h3>
        <a href="mailto:konkursvba@gmail.com" class="contact-page-info-mail">konkursvba@gmail.com</a>
        <h3 class="contact-page-info-heading">Мы в соцсетях</h3>
        <ul class="contact-page-info-socmedia">
            <li class="contact-page-socmedia-item">
                <a href="#" class="contact-page-socmedia-link">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
            </li>
            <li class="contact-page-socmedia-item">
                <a href="#" class="contact-page-socmedia-link">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li class="contact-page-socmedia-item">
                <a href="#" class="contact-page-socmedia-link">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
</main>

@endsection
