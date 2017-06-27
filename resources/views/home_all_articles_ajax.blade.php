@foreach($all_articles as $all_article)
    <section class="">
    @if($all_article->description)
        <a href="/recommend/{{ $all_article->slug }}">
    @else
        <a href="/journal/{{ $all_article->slug }}">
    @endif
            <img src="{{ $all_article->image }}" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">{{ $all_article->category->title }}</span>
                <span class="grid-date">{{ Date::parse($all_article->date)->format('j F, Y') }}</span>
                <h3 class="grid-heading">{{ $all_article->title }}</h3>
            @if($all_article->description)
                <p class="grid-text">{{ $all_article->description }}</p>
            @else
                {!! str_limit($all_article->content, $limit = 210, $end = '...') !!}
            @endif
                <!-- <p class="grid-text"></p> -->
            </div>
        </a>
    </section>
@endforeach

<div class="col-md-12 read-more-block load-more">
    <a onclick="fetchPosts()" class="read-more-link">Читать далее</a>
</div>
<div class="load"></div>