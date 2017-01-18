@extends('user.layout.base')
@section('navbar')
    @include('user.hub.layout.navbar', ['module' => 'Трекер'])
@endsection
@section('content')
    @foreach($public as $item)
        <div class="col-xs-6 col-md-4 col-lg-4">
            <div class="course-card">
                <section class="course-cover">

                </section>
                <section class="course-information" pub[style]>
                    <h2><a href="{{ url('/hub/show', $item->id) }}">{{ $item->name }}</a></h2>
                    <div class="additional-inforamtion">
                        <div class="row course-statistic">
                            <div class="col-xs-4 students"><i class="fa fa-search"></i></i> {{ $item->view }}</div>
                            <div class="col-xs-4 students"><i class="fa fa-comment"></i> {{ $item->count_comment }}</div>
                            <div class="col-xs-4 students"><i class="fa fa-magnet"></i> {{ $item->count_torrent }} </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @endforeach
@endsection