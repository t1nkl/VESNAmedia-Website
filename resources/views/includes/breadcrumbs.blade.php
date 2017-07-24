<ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumbs-list-block">
  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs-list-item">
    <a itemprop="item" href="/" class="breadcrumbs-list-item-link">
    <span itemprop="name">Главная</span></a> <span class="breadcrumb-devider">/</span>
    <meta itemprop="position" content="1" />
  </li>
  @foreach($crumbs as $crumb)
  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumbs-list-item">
    @if(!$loop->last)
    <a itemprop="item" href="{{$crumb[1]}}" class="breadcrumbs-list-item-link">
      <span itemprop="name">{{$crumb[0]}}</span>
    </a> <span class="breadcrumb-devider">/</span>
    @else
      <span itemprop="name">{{$crumb}}</span>
    @endif
    <meta itemprop="position" content="{{$loop->index + 2}}" />
  </li>
  @endforeach
</ol>
