@extends('user.layout.base')
@section('navbar')
    @include('user.hub.layout.navbar', ['module' => 'Трекер'])
@endsection
@section('content')
    <div class="box">
        <div class="row">
            <div class="form-group col-md-12">
                {{ Form::label('user_name', 'Ваше имя:') }}
                {{ Form::text('user_name', Auth::getName(), array('class' => 'form-control', 'readonly' => 'readonly', 'placeholder' => '')) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('name', 'Название:') }}
                {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Название публикации')) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('key_name', 'Идентификатор ЧПУ:') }}
                {{ Form::text('key_name', null, array('class' => 'form-control', 'placeholder' => 'Идентификатор ЧПУ')) }}
            </div>
            <div class="form-group col-md-12">
                {{ Form::label('category', 'Категории:') }}
                <?php $category = []; $category = [1 => 'One', 2 => 'Two', 3 => 'Three', 4 => 'Four']; ?>
                <select class="js-example-basic-multiple form-control" multiple="multiple" id="id_label_multiple" >

                </select>

            </div>
            <div class="form-group col-md-12">
                {{ Form::label('description', 'Описание:') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'placeholder' => 'Описание публикации', 'id' => 'discription'))}}


            </div>
        </div>
    </div>
@endsection