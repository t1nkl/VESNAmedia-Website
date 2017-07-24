@foreach($all_articles as $article)
    <li class="col-xs-12">
        <a href="{{ $article->link }}">
            <img src="{{ $article->image }}" class="grid-img" alt="">
            <div class="grid-title">
                <span class="grid-category">{{ $article->category->title }}</span>
                <span class="grid-date">{{ Date::parse($article->date)->format('j F, Y') }}</span>
                <h3 class="grid-heading">{{ $article->title }}</h3>
            @if($article->description)
                <p class="grid-text">{{ $article->description }}</p>
            @else
                <p class="grid-text">{!! str_limit($article->mini, $limit = 210, $end = '...') !!}</p>
            @endif
            </div>
        </a>
    </li>
@endforeach

<script>
    new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
    } );
</script>

