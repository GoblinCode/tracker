<h1 class="section-header blue">{{ $module }}</h1>
<div class="nav-module-menu">
    <nav class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills">
                    <li role="presentation"@if(Route::currentRouteName() == 'home') class="active" @endif><a href="{{url('/hub')}}" title="Главная">Главная</a></li>
                    <li role="presentation"@if(Route::currentRouteName() == 'tracker.popular') class="active" @endif><a href="{{url('/hub/popular')}}" title="Популярные">Популярные</a></li>
                    <li role="presentation"@if(Route::currentRouteName() == 'tracker.tags') class="active" @endif><a href="{{url('/hub/tags')}}" title="Теги">Теги</a></li>
                    <li role="presentation"@if(Route::currentRouteName() == 'tracker.create') class="active" @endif><a href="{{url('/hub/create')}}" title="Добавить публикацию">Добавить публикацию</a></li>

                </ul>
            </div>
        </div>
    </nav>
</div>