<?php
$title ="титл";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    @include('user.layout.head', ['title' => $title])

</head>
<body>
<section class="navbar-wrapper">
    <div class="open-offcanvas-menu visible-md visible-sm visible-xs" data-toggle="offcanvas">
        <i class="fa fa-bars"></i>
    </div>
    <div class="navbar-logo">
        <a class="hidden-xs hidden-sm" href="/">{{ $title }}</a>
        <a href="{{ url('/') }}" class="logo-image"><img src="{{ url('/templates/main/images/modules/tracker.png') }}" alt="Трекер"></a><a>Трекер</a>

    </div>
    <div class="vertical-divider-navbar"></div>

        <!---  аккаунт  -->
    <div class="navbar-notification navbar-bell">
        <i class="fa fa-fw fa-bell navbar-notification-toggle toggle-bell"></i><span class="label label-success notifications-count">0</span>
        <ul class="dropdown-notifications dropdown-bell" style="display: none;">
            <li class="dropdown-header"><i class="fa fa-fw fa-bell"></i> Уведомления</li>

        </ul>
    </div>

    <div class="navbar-notification navbar-search">
        <i class="fa fa-fw fa-search navbar-notification-toggle toggle-search"></i>
        <ul class="dropdown-notifications dropdown-search" id="resSearch" style="display: none;">
            <li class="dropdown-header"><i class="fa fa-fw fa-search"></i> Поиск </li>
            <li class="dropdown-header">
                <form action="{{ url('searchpublic') }}" method="post" name="form" onsubmit="return false;">
                    <div class="input-group" style="padding: 7px;">
                        <input class="form-control" name="search" type="text" id="search"  placeholder="Публикации">
                        <span class="input-group-addon" id="basic-addon2">ок</span>
                    </div>
                </form>
            </li>
            <span id="item-search"></span>
        </ul>
    </div>

    <nav class="navbar apps-menu">
        <ul>
            <li class="services-menu-toggle">
                <i class="fa fa-fw fa-th"></i>
            </li>
        </ul>
    </nav>

    <div class="container-fluid services-menu" style="display: none;">
        <div class="col-xs-12 col-md-8 col-lg-6 col-xs-offset-0 col-md-offset-2 col-lg-offset-3 services-menu-content">
            <a class="services-menu-content-item dev col-xs-3" href="{{ url('/') }}"><img src="/templates/main/images/modules/tracker.png" alt="Трекер"><br>Трекер</a>
            <a class="services-menu-content-item dev col-xs-3" href="{{ url('/') }}"><img src="/templates/main/images/modules/forum.png" alt="forum"><br>forum</a>
            <a class="services-menu-content-item dev col-xs-3" href="{{ url('/') }}"><img src="/templates/main/images/modules/contact.png" alt="contact"><br>contact</a>
            <a class="services-menu-content-item dev col-xs-3" href="{{ url('/') }}"><img src="/templates/main/images/modules/account.png" alt="account"><br>account</a>
            <a class="services-menu-content-item dev col-xs-3" href="{{ url('/') }}"><img src="/templates/main/images/modules/recommend.png" alt="recommend"><br>recommend</a>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container-fluid reg-menu" style="display: none;">
        <div class="col-xs-12 col-md-8 col-lg-6 col-xs-offset-0 col-md-offset-2 col-lg-offset-3 reg-menu-content">
            <a class="services-menu-content-item @if(isset($tracker)) dev @endif col-xs-3" href='{{ url('/') }}'><img src="/templates/main/images/modules/tracker.png" alt="tracker"><br>Tracker</a>";

            <div class="clearfix"></div>
        </div>
    </div>
</section>
<div class="services-menu-background"></div>
<section class="offcanvas-wrapper">
    <div class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-left">
            <aside class="col-xs-6 col-sm-6 col-md-4 col-lg-3 sidebar-offcanvas">
                @yield('block_left')
            </aside>
            <article class="content col-xs-12 col-sm-12 col-md-12 @if(isset($forum)) col-lg-12 @else col-lg-9 @endif ">
                <div class="content-wrapper">
                    @yield('open')
                    @yield('message')
                    @yield('content')
                    @yield('block_right')
                    @yield('close')
                </div>
            </article>
        </div>
        <div class="clearfix"></div>
        @include('user.layout.footer')
    </div>
</section>

@include('user.layout.scripts')
</body>
</html>