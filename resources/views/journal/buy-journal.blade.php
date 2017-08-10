@extends('layouts.app')



<!-- /*===== set title =====*/ -->
@section('title')
@if(Route::getCurrentRoute()->getActionName() == "App\Http\Controllers\JournalController@buyJournal")
    @if(Helpers::getSeo(8)->seo_title)
    {{ Helpers::getSeo(8)->seo_title }}
    @else
    "Купить журнал "Vesna""
    @endif
@else
Купить журнал "Vesna" - "{{ $last_journal ? $last_journal->title : '' }}"
@endif
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
@if(Route::getCurrentRoute()->getActionName() == "App\Http\Controllers\JournalController@buyJournal")
    @if(Helpers::getSeo(8)->seo_description)
    {{ Helpers::getSeo(8)->seo_description }}
    @else
    Полезный журнал для косметологов и женщин. Новый номер, новые форматы
    @endif
@else
Полезный журнал для косметологов и женщин. Vesna "{{ $last_journal ? $last_journal->title : '' }}"
@endif
@endsection

<!-- /*===== set keywords =====*/ -->
@section('keywords')
@endsection

<!-- /*===== set Open Graph =====*/ -->
@section('open_graph')
@endsection

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
        else{
            $('.load-more').hide();
            $('.load').removeClass('loading');

        }
    }
    $('.magazine-page-form').submit(
        function buyJournal( event ) {
            event.preventDefault();
            var journal_id = {{$last_journal? $last_journal->id : 0}}
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
                    $('.nesto-response').html('Вы подписались на журнал VESNA!');
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
    @include('includes.breadcrumbs', ['crumbs' => [['Купить журнал', '/buy-journal'], $last_journal->title]])

<div class="magazine-section row">
@if($last_journal)
    <div class="col-md-5 magazine-preview-block">
        <h3 class="magazine-order-heading-mobile">{{ $last_journal->title }}</h3>
        <div class="magazine-preview-illustration">
            <img src="{{ $last_journal->image }}" class="magazine-cover-img" alt="">
            @if(isset($last_journal->link_to_isuu))
                <a href="{{ $last_journal->link_to_isuu }}" target="_blank" class="magazine-preview-link">
                    <img src="/img/white-eye.png" class="mazagine-preview-image" alt="">
                    <h4 class="magazine-preview-text">Смотреть превью</h4>
                </a>
            @elseif(isset($last_journal->pdf))
                <a href="{{ $last_journal->pdf }}" target="_blank" class="magazine-preview-link">
                    <img src="/img/white-eye.png" class="mazagine-preview-image" alt="">
                    <h4 class="magazine-preview-text">Смотреть превью</h4>
                </a>
            @endif
        </div>
    </div>
    <div class="col-md-7 magazine-order-block">
        <h3 class="magazine-order-heading">{{ $last_journal->title }}</h3>
        <p class="magazine-order-describtion">Купить печатную версию журнала VESNA</p>
        <form action="javascript:buyJournal()" class="magazine-page-form">
            <input name="name" id="name" type="text" class="magazine-page-form-item" placeholder="Имя">
            <input name="email" id="email" type="email" class="magazine-page-form-item" placeholder="E-mail">
            <input name="phone" id="phone" type="fone" class="magazine-page-form-item" required placeholder="Телефон">
            <button type="submit" name="button" class="magazine-page-form-submit">Подписаться</button>
            <!-- <span class="magazine-page-divider">или</span> -->
        </form>
        <div class="nesto-message">
            <h2 class="nesto-response"></h2>
        </div>
        @if(isset($last_journal->url))
	        <span class="magazine-page-divider">или</span>
	        <a href="{{ $last_journal->url }}" target="_blank" name="button" class="magazine-page-form-submit-online-b">Купить online</a>
        @endif
    </div>
    @endif
    @if($journals)
    <div class="col-md-12 magazine-more-issues row endless-pagination journals" data-next-page="{{ $journals->nextPageUrl() }}">
        <h3 class="magazine-more-issues-heading">Другие выпуски</h3>
        @foreach($journals as $journal)
        <a href="/buy-journal/{{ $journal->slug }}" class="col-md-4 magazine-more-issues-item">
            <img src="{{ $journal->image }}" class="magazine-more-issues-item-img" alt="">
            <h3 class="magazine-more-issues-item-heading">{{ $journal->title }}</h3>
        </a>
        @endforeach

        {{--{!! $journals->render() !!}--}}

        @if(count($journals) > 2)
            <div class="load-more">
                <button onclick="loadMore()" type="submit" name="button" class="magazine-page-form-submit-online">Загрузить еще</button>
            </div>
            <div class="load"></div>
        @endif
    </div>
    @endif
</div>

@endsection
