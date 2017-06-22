@foreach($journals as $journal)
<a href="/buy-journal/{{ $journal->slug }}" class="col-md-4 magazine-more-issues-item">
	<img src="{{ $journal->image }}" class="magazine-more-issues-item-img" alt="">
	<h3 class="magazine-more-issues-item-heading">{{ $journal->title }}</h3>
</a>
@endforeach

<div class="load-more">
	<button onclick="loadMore()" type="submit" name="button" class="magazine-page-form-submit-online">Загрузить еще</button>
</div>
<div class="load"></div>