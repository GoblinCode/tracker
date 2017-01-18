@extends('user.layout.base')
@section('open')
<div class="course">
    <div class="row">
@endsection()
@section('close')
    </div>
</div>
@endsection
@section('navbar')
    @include('user.hub.layout.navbar', ['module' => 'Трекер'])
@endsection
@section('content')

<div class="course-tabs-wrapper course-center-md col-xs-12 col-md-7">
    <div class="course-tabs" role="tabpanel">
        <ul class="nav nav-pills nav-justified" role="tablist">
            <li role="presentation" class="active"><a href="#description" id="description-tab" role="tab" data-toggle="tab" aria-controls="description" aria-expanded="true">Описание</a></li>
            <li role="presentation" class=""><a href="#track" role="tab" id="track-tab" data-toggle="tab" aria-controls="track" aria-expanded="false">Раздачи</a></li>
            <li role="presentation" class=""><a href="#screenshot" role="tab" id="screenshot-tab" data-toggle="tab" aria-controls="program" aria-expanded="false">Скриншоты</a></li>
            <li class="public-edit"><a href=""><i class="fa fa-pencil fa-6"></i></a></li>
        </ul>
        <hr>
        <div class="tab-content">
            <article role="tabpanel" class="tab-pane fade active in" id="description" aria-labelledby="description-tab">

                <h1>{{ $public->name }}</h1>
                <div class="course-details">
                    <div class="col-xs-4"><i class="fa fa-fw fa-list"></i>@foreach($category as $item)<a href="{{ url('/hub/category', $item->category_id) }}">{{ $item->name }}</a> @endforeach</div>
                    <div class="col-xs-4"><i class="fa fa-fw fa-magnet"></i> {{ $public->count_torrent }}</div>
                    <div class="col-xs-4"><i class="fa fa-calendar"></i> {{ $public->created_at }}</div>

                </div>
                <div class="course-description">
                    {{ $public->description }}
                </div>
            </article>
            <div role="tabpanel" class="tab-pane fade" id="track" aria-labelledby="track-tab">
                <h1>Торрены</h1>
                <div style="">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Имя</th>
                        <th>Фамилия</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($torrent as $item)
                   <tr>
                       <td>
                           {{ $item->description }}
                       </td>
                       <td>
                           {{ $item->size }}
                       </td>
                       <td>
                           dfgadgdafgaadsfas
                       </td>
                   </tr>
                @endforeach
                    </tbody>
                </table>
                    </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="screenshot" aria-labelledby="screenshot-tab">
                <h1>Скриншоты</h1>
            </div>
        </div>
    </div>
</div>
@endsection
@section('block_right')
<div class="col-xs-12 col-md-5">
    <div class="alert alert-info">
        <i class="fa fa-user icon-bg"></i>
        <h2>Куратор публикации</h2>
        <p class="lead techer-info">
            <img class="img-responsive img-rounded instructor-avatar" src="" alt="Куратор: Имя">
            <a href="/user/4" target="_blank">Имя</a><br>
            <small>Группа: <em>Админ</em></small>
        </p>
    </div>
</div>
@endsection