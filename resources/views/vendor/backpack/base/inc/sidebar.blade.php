@if (Auth::check())
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> В сети</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">{{ trans('backpack::base.administration') }}</li>
      <!-- ================================================ -->
      <!-- ==== Recommended place for admin menu items ==== -->
      <!-- ================================================ -->
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

      <li class="treeview">
        <a href="#"><i class="fa fa-newspaper-o"></i> <span>Журнал</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/journal/article') }}"><i class="fa fa-newspaper-o"></i> <span>Статьи</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/journal/category') }}"><i class="fa fa-list"></i> <span>Категории</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/journals') }}"><i class="fa fa-tag"></i> <span>Журналы</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/journal/contact') }}"><i class="fa fa-tag"></i> <span>Заявки</span></a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-newspaper-o"></i> <span>Сайт</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/experts') }}"><i class="fa fa-newspaper-o"></i> <span>Эксперты</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/gallery') }}"><i class="fa fa-tag"></i> <span>Галерея</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/partners') }}"><i class="fa fa-list"></i> <span>Партнеры</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/about') }}"><i class="fa fa-list"></i> <span>О нас</span></a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-newspaper-o"></i> <span>Рекомендуем</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/recommend/article') }}"><i class="fa fa-tag"></i> <span>Статьи</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/recommend/category') }}"><i class="fa fa-newspaper-o"></i> <span>Категории</span></a></li>
        </ul>
      </li>

      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/advertising') }}"><i class="fa fa-cog"></i> <span>Реклама</span></a></li>

      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/lids') }}"><i class="fa fa-cog"></i> <span>Лиды</span></a></li>

      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/contact') }}"><i class="fa fa-cog"></i> <span>Форма связи</span></a></li>

      <li class="treeview">
        <a href="#"><i class="fa fa-newspaper-o"></i> <span>Настройки сайта</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/slider') }}"><i class="fa fa-tag"></i> <span>Слайдер</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/projects') }}"><i class="fa fa-newspaper-o"></i> <span>Проекты</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/settings') }}"><i class="fa fa-newspaper-o"></i> <span>Настройки сайта</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/seo') }}"><i class="fa fa-newspaper-o"></i> <span>SEO</span></a></li>
        </ul>
      </li>









      <li><a ><i class="fa"></i><span></span></a></li>
      <li><a ><i class="fa"></i><span></span></a></li>

      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
      
      <li class="treeview">
        <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-cog"></i> <span>Настройки</span><i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
         <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>Файловый менеджер</span></a></li>
         <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/backup') }}"><i class="fa fa-hdd-o"></i> <span>Бекапы</span></a></li>
         <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/log') }}"><i class="fa fa-terminal"></i> <span>Логи</span></a></li>
         <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/language') }}"><i class="fa fa-flag-o"></i> <span>Языки</span></a></li>
         <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/language/texts') }}"><i class="fa fa-language"></i> <span>Переводы</span></a></li>
         <li class="treeview">
          <a href="#"><i class="fa fa-group"></i> <span>Администрирование</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
           <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Пользователи</span></a></li>
           <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Роли</span></a></li>
           <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Права</span></a></li>
         </ul>
       </li>
     </ul>
   </li>


   <!-- ======================================= -->
   <li class="header">{{ trans('backpack::base.user') }}</li>
   <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
 </ul>
</section>
<!-- /.sidebar -->
</aside>
@endif
