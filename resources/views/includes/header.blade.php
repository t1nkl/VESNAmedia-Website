<header class="mp-header row">
	<div class="col-md-5 header-brand">
		<a href="{{ url('/') }}"><img src="/img/logo.svg" class="img-fluid header-brand-img" alt=""></a>
	</div>
	<div class="col-md-7 header-navigation">
		<ul class="header-navigation-journal">
			<li class="header-navigation-journal-item">
				<a href="/journal" class="header-navigation-journal-link">Журнал</a>
			</li>
			@foreach(Helpers::getJournalCategories() as $journal_categories)
			<li class="header-navigation-journal-item">
				<a href="/journal?cat={{ $journal_categories->slug }}" class="header-navigation-journal-link">{{ $journal_categories->title }}</a>
			</li>
			@endforeach
		</ul>
		<ul class="header-navigation-site">
			<li class="header-navigation-site-item">
				<a href="/" class="header-navigation-site-link">САЙТ</a>
			</li>
			<li class="header-navigation-site-item">
				<a href="/experts" class="header-navigation-site-link">Эксперты</a>
			</li>
			<li class="header-navigation-site-item">
				<a href="/gallery" class="header-navigation-site-link">Галерея</a>
			</li>
			<li class="header-navigation-site-item">
				<a href="/partners" class="header-navigation-site-link">Партнеры</a>
			</li>
			<li class="header-navigation-site-item">
				<a href="/contacts" class="header-navigation-site-link">Контакты</a>
			</li>
		</ul>
		<ul class="header-navigation-recommended">
			<li class="header-navigation-recommended-item">
				<a href="/recommend" class="header-navigation-recommended-link">РЕКОМЕНДУЕМ</a>
			</li>
			@foreach(Helpers::getRecommendCategories() as $recommend_categories)
			<li class="header-navigation-recommended-item">
				<a href="/recommend?cat={{ $recommend_categories->slug }}" class="header-navigation-recommended-link">{{ $recommend_categories->title }}</a>
			</li>
			@endforeach
		</ul>
		<ul class="header-navigation-socmedia">
			@if($settings->youtube)
			<li class="header-navigation-socmedia-item">
				<a href="{{$settings->youtube}}" target="_blank" class="header-navigation-socmedia-link">
					<i class="fa fa-youtube" aria-hidden="true"></i>
				</a>
			</li>
			@endif
			@if($settings->facebook)
			<li class="header-navigation-socmedia-item">
				<a href="{{$settings->facebook}}" target="_blank" class="header-navigation-socmedia-link">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
			</li>
			@endif
			@if($settings->instagram)
			<li class="header-navigation-socmedia-item">
				<a href="{{$settings->instagram}}" target="_blank" class="header-navigation-socmedia-link">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
			</li>
			@endif
			@if($settings->twitter)
			<li class="header-navigation-socmedia-item">
				<a href="{{$settings->twitter}}" target="_blank" class="header-navigation-socmedia-link">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
			</li>
			@endif
		</ul>
	</div>
	<div class="col-md-12 header-search-block">
		<form action="/search" method="get" class="col-md-12 header-search-form">
			<input id="header-search-item-id" class="form-control header-search-item" type="text" name="s" value="" placeholder="" id="header-search-input">
			<input class="header-search-reset" type="reset" value="">
		</form>
	</div>
	<!-- Mobile navigation -->
	<nav class="mobile-navigation-block">
		<div class="shops" >
			<div class="col-md-12 header-search-block-mob">
				<form action="/search" method="get" class="mobile-search-form">
					<input id="header-search-item-id-mob" class="form-control-mob header-search-item-mob" type="text" name="s" placeholder="Поиск" value="" id="header-search-input-mob">
					<input class="header-search-reset-mob" type="reset" value=" ">
				</form>
			</div>
			<ul class="col-md-12 header-mob-navigation-block">
				<li class="header-mob-navigation-item">
					<a class="header-mob-navigation-link" href="{{ url('/') }}">Главная</a>
				</li>
				<li class="header-mob-navigation-item">
					<a class="header-mob-navigation-link" href="/journal">Журнал</a>
				</li>
				<li class="header-mob-navigation-item">
					<a class="header-mob-navigation-link" href="/experts">Эксперты</a>
				</li>
				<li class="header-mob-navigation-item">
					<a class="header-mob-navigation-link" href="/gallery">Галерея</a>
				</li>
				<li class="header-mob-navigation-item">
					<a class="header-mob-navigation-link" href="/partners">Партнеры</a>
				</li>
				<li class="header-mob-navigation-item">
					<a class="header-mob-navigation-link" href="/contacts">Контакты</a>
				</li>
				<li class="header-mob-navigation-item">
					<a class="header-mob-navigation-link" href="/recommend">Рекомендуем</a>
				</li>
			</ul>
			<ul class="col-md-12 header-mob-socmedia-block">
			  @if($settings->youtube)
				<li class="header-mob-socmedia-item">
					<a href="{{$settings->youtube}}" target="_blank" class="header-mob-socmedia-link">
						<i class="fa fa-youtube" aria-hidden="true"></i>
					</a>
				</li>
			  @endif
			  @if($settings->facebook)
				<li class="header-mob-socmedia-item">
					<a href="{{$settings->facebook}}" target="_blank" class="header-mob-socmedia-link">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</a>
				</li>
			   @endif
			   @if($settings->instagram)
				<li class="header-mob-socmedia-item">
					<a href="{{$settings->instagram}}" target="_blank" class="header-mob-socmedia-link">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
				</li>
			  @endif
			  @if($settings->twitter)
				<li class="header-mob-socmedia-item">
					<a href="{{$settings->twitter}}" target="_blank" class="header-mob-socmedia-link">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>
				</li>
			  @endif
			</ul>
		</div>
		<button class="toggle-menu-mob"></button>
	</nav>
	<!-- End mobile navigation -->
</header>
