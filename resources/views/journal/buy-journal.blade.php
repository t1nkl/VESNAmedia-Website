@extends('layouts.app')



<!-- /*===== set custom css =====*/ -->
@section('custom_css')
<style type="text/css">
    .loading{
        background-image : url('/img/loading.gif');  
        background-repeat:no-repeat;
    }
    .loading:after {
        content: "Загрузка...";
        text-align : right;
        padding-left : 25px;
    }
</style>
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('custom_javascript')
<script type="text/javascript">
    function loadMore() {
        $('.load-more').hide();
        $('.load').addClass('loading');
        var page = $('.endless-pagination').data('next-page');
        if(page !== null) {
            $.get(page, function(data){
                window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
                ]) !!};
                $('.journals').append(data.journals);
                $('.endless-pagination').data('next-page', data.next_page);
                $('.load').removeClass('loading');
            });
        }
    }
    $('.magazine-page-form').submit(
        function buyJournal( event ) {
            event.preventDefault();
            var journal_id = {{$last_journal->id}}
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            $.ajax({
                type: "POST",
                url: '/buy-journal',
                data: {name: name, email: email, phone: phone, journal_id: journal_id},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(data){
                    $('.magazine-page-form').slideUp();
                    $('.nesto-response').html('Спасибо, ваша заявка успешно оставленна.');
                },
                error: function(data){
                    setTimeout(mailCallback, 2000);
                }
            });
        }
    );
</script>
@endsection



@section('content')

<div class="magazine-section row">
    <div class="col-md-5 magazine-preview-block">
        <h3 class="magazine-order-heading-mobile">{{ $last_journal->title }}</h3>
        <div class="magazine-preview-illustration">
            <img src="{{ $last_journal->image }}" class="magazine-cover-img" alt="">
            <a href="{{ $last_journal->pdf }}" target="_blank" class="magazine-preview-link">
                <img src="/img/white-eye.png" class="mazagine-preview-image" alt="">
                <h4 class="magazine-preview-text">Смотреть превью</h4>
            </a>
        </div>
    </div>
    <div class="col-md-7 magazine-order-block">
        <h3 class="magazine-order-heading">{{ $last_journal->title }}</h3>
        <p class="magazine-order-describtion">Купить печатную версию журнала VESNA</p>
        <form action="javascript:buyJournal()" class="magazine-page-form">
            <input name="name" id="name" type="text" class="magazine-page-form-item" placeholder="Имя">
            <input name="email" id="email" type="email" class="magazine-page-form-item" placeholder="E-mail">
            <input name="phone" id="phone" type="phone" class="magazine-page-form-item" placeholder="Телефон">
            <button type="submit" name="button" class="magazine-page-form-submit">Отправить</button>
            <span class="magazine-page-divider">или</span>
        </form>
        <div class="nesto-message">
            <h2 class="nesto-response"></h2>
        </div>
        <a href="{{ $last_journal->url }}" target="_blank" name="button" class="magazine-page-form-submit-online">Купить online</a>
    </div>
    <div class="col-md-12 magazine-more-issues row endless-pagination journals" data-next-page="{{ $journals->nextPageUrl() }}">
        <h3 class="magazine-more-issues-heading">Другие выпуски</h3>
        @foreach($journals as $journal)
        <a href="/buy-journal/{{ $journal->slug }}" class="col-md-4 magazine-more-issues-item">
            <img src="{{ $journal->image }}" class="magazine-more-issues-item-img" alt="">
            <h3 class="magazine-more-issues-item-heading">{{ $journal->title }}</h3>
        </a>
        @endforeach

        {{--{!! $journals->render() !!}--}}

        <div class="load-more">
            <button onclick="loadMore()" type="submit" name="button" class="magazine-page-form-submit-online">Загрузить еще</button>
        </div>
        <div class="load"></div>
    </div>
</div>

@endsection
