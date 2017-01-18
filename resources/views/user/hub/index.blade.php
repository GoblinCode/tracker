@extends('user.layout.base')
@section('navbar')
    @include('user.hub.layout.navbar', ['module' => 'Трекер'])
@endsection
@section('right_block')
    @include('user.layout.block.navar')
    @include('user.layout.block.category')
@endsection
@section('content')
    <div id="allEntries">
    @foreach($public as $item)
            <div id="entryID{{ $item->id }}">
                <div class="img-box">
                    <a href="{{ url('/hub/show', $item->id) }}" class="inf_a serial-item">
                        <img src="{{ url($item->logo) }}">
                        <div class="cat-name"><i class="fa fa-film"></i> Новинки 2016</div>
                        <div class="poster-rate"><span>4.5<span></span></span></div>
                        <span class="play"><i class="fa fa-play-circle-o"></i></span>
                        <p class="title_poster">{{ $item->name }}</p>
                        <p class="janr_poster">Детский, семейный, мультфильм</p>
                    </a>
                </div>
            </div>
    @endforeach
    </div>
@endsection