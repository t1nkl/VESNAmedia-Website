@extends('layouts.app')



<!-- /*===== set title =====*/ -->
@section('title')
{{ Helpers::getSeo(6)->seo_title }}
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
{{ Helpers::getSeo(6)->seo_description }}
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
<script type="text/javascript">
     $('.contact-page-form').submit(
        function buyJournal( event ) {
            event.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var content = $('#content').val();
            $.ajax({
                type: "POST",
                url: '/contacts',
                data: {name: name, email: email, content: content},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(data){
                    $('.contact-page-form').slideUp();
                    $('.nesto-response').html('Спасибо за Ваше письмо.');
                },
                error: function(data){
                    // setTimeout(mailCallback, 2000);
                }
            });
        }
    );
</script>
@endsection



@section('content')
    @include('includes.breadcrumbs', ['crumbs' => ['Контакты']])

<main class="mp-contact row">
    <div class="col-md-12 contact-page-describtion">
        <h3 class="contact-page-describtion">{{$about->title}}</h3>

        <div class="contact-page-text">{!!$about->content!!}</div>
    </div>
    <div class="col-md-12 contact-page-map">
        @if($about->map) {!!$about->map!!} @endif
    </div>
    <div class="col-md-8 contact-page-form-block">
        <div class="nesto-message">
            <h2 class="nesto-response"></h2>
        </div>
        <h3 class="contact-page-form-heading">Напишите нам</h3>
        <form action="" class="contact-page-form">
            <input type="text" class="contact-page-form-item" id="name" placeholder="Имя" required>
            <input type="email" class="contact-page-form-item" id="email" placeholder="E-mail" required>
            <textarea class="contact-page-form-item" id="content" placeholder="Сообщение" required></textarea>
            <button type="submit" name="button" class="contact-page-form-submit">Отправить</button>
        </form>
    </div>
    <div itemscope itemtype="http://schema.org/Organization" class="col-md-4 contact-page-info">
        @if(isset($settings->phone))
            <h3 class="contact-page-info-heading">Телефон</h3>
            @foreach(json_decode($settings->phone) as $phone)
                @if(isset($phone->name))<span itemprop="telephone"><a href="tel:{{ str_replace(' ' ,'',$phone->name) }}" class="contact-page-info-phone">{{ $phone->name }}</a></span>@endif
            @endforeach
        @endif
        @if(isset($settings->contact_address))
            <h3 class="contact-page-info-heading">Адрес</h3>
            <div itemprop="address">
                @foreach(json_decode($settings->address) as $address)
                    @if(isset($address->name))<p class="recommended-map-info-adress">{{$address->name}}</p>@endif
                @endforeach
            </div>
        @endif
        @if($settings->email)
            <h3 class="contact-page-info-heading">E-mail</h3>
            <span itemprop="email"><a href="mailto:{{$settings->email}}" class="contact-page-info-mail">{{$settings->email}}</a></span>
        @endif
        <h3 class="contact-page-info-heading">Мы в соцсетях</h3>
        <ul class="contact-page-info-socmedia">
            @if($settings->youtube)
                <li class="contact-page-socmedia-item">
                    <a href="{{$settings->youtube}}" target="_blank" class="contact-page-socmedia-link">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
            @if($settings->facebook)
                <li class="contact-page-socmedia-item">
                    <a href="{{$settings->facebook}}" target="_blank" class="contact-page-socmedia-link">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
            @if($settings->instagram)
                <li class="contact-page-socmedia-item">
                    <a href="{{$settings->instagram}}" target="_blank" class="contact-page-socmedia-link">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
            @if($settings->twitter)
                <li class="contact-page-socmedia-item">
                    <a href="{{$settings->twitter}}" target="_blank" class="contact-page-socmedia-link">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</main>

@endsection
