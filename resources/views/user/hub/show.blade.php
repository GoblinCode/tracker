@extends('user.layout.base')
@section('open')
<div class="course">
    <div class="row">
@endsection()
@section('close')
    </div>
</div>
@endsection
@section('right_block')
    @include('user.layout.block.navar', ['module' => 'Трекер'])
    @include('user.layout.block.category', ['module' => 'Трекер'])
@endsection
@section('content')
    <div id="content">
        <div class="padding20 border-bottom">
            <a href="#"><!--<s5176>-->Главная<!--</s>--></a> → <a href="/load/">Архив</a> →  <a href="/load/1">Фильмы</a> → <span>{{ $public->name }}</span>
        </div>

        <div class="reliz padding20">

            <div class="reliz_left">
                <div class="reliz_image">
                    <a class="ulightbox" href="{{ $public->logo }}" data-fancybox-group="ulightboxgroup"><img src="{{ $public->logo }}" alt="{{ $public->name }}"></a>
                </div>

                <!--- <div class="reliz_rating">
                     <div align="center">
                         <style type="text/css">
                             .u-star-rating-30 { list-style:none;margin:0px;padding:0px;width:150px;height:30px;position:relative;background: url('/img/stars_big.png') top left repeat-x }
                             .u-star-rating-30 li{ padding:0px;margin:0px;float:left }
                             .u-star-rating-30 li a { display:block;width:30px;height: 30px;line-height:30px;text-decoration:none;text-indent:-9000px;z-index:20;position:absolute;padding: 0px;overflow:hidden }
                             .u-star-rating-30 li a:hover { background: url('/img/stars_big.png') left center;z-index:2;left:0px;border:none }
                             .u-star-rating-30 a.u-one-star { left:0px }
                             .u-star-rating-30 a.u-one-star:hover { width:30px }
                             .u-star-rating-30 a.u-two-stars { left:30px }
                             .u-star-rating-30 a.u-two-stars:hover { width:60px }
                             .u-star-rating-30 a.u-three-stars { left:60px }
                             .u-star-rating-30 a.u-three-stars:hover { width:90px }
                             .u-star-rating-30 a.u-four-stars { left:90px }
                             .u-star-rating-30 a.u-four-stars:hover { width:120px }
                             .u-star-rating-30 a.u-five-stars { left:120px }
                             .u-star-rating-30 a.u-five-stars:hover { width:150px }
                             .u-star-rating-30 li.u-current-rating { top:0 !important; left:0 !important;margin:0 !important;padding:0 !important;outline:none;background: url('/img/stars_big.png') left bottom;position: absolute;height:30px !important;line-height:30px !important;display:block;text-indent:-9000px;z-index:1 }
                         </style><ul id="uStarRating6" class="uStarRating6 u-star-rating-30" title="Рейтинг: 4.0/1">
                             <li class="u-current-rating uCurStarRating6" id="uCurStarRating6" style="width:80%;"></li>
                             <li class="u-star-li-6"><a href="#" onclick="ustarrating('6',1);return false;" class="u-one-star">1</a></li>
                             <li class="u-star-li-6"><a href="#" onclick="ustarrating('6',2);return false;" class="u-two-stars">2</a></li>
                             <li class="u-star-li-6"><a href="#" onclick="ustarrating('6',3);return false;" class="u-three-stars">3</a></li>
                             <li class="u-star-li-6"><a href="#" onclick="ustarrating('6',4);return false;" class="u-four-stars">4</a></li>
                             <li class="u-star-li-6"><a href="#" onclick="ustarrating('6',5);return false;" class="u-five-stars">5</a></li></ul>
                     </div>
                     <div class="reliz_rating_in"><b><span id="entRating6">4</span> из 5</b> / <b><span id="entRated6">1</span></b> человек
                     </div>
                 </div> -->


                <div class="reliz-dwnld">
                    <a href="">Скачать удалённо (1.4 гб)</a>
                </div>
            </div>

            <div class="reliz_right">
                <h1 class="reliz_title">{{ $public->name }}</h1>

                <div class="post_meta">
                    <span><i class="fa fa-navicon"></i> <a href="/load/1" title="Фильмы">Фильмы</a></span><span><i class="fa fa-clock-o"></i> 24.01.2016,11:41 / Просмотров: 56 / DC_Themes</span>
                </div>

                <article class="eText">
                    {{ $public->description }}
                </article>

                <div class="post-tags"></div>
            </div>

        </div> <!-- END Reliz tab -->


        <div class="screens"><?php $i = 1; ?>
            @foreach($screen as $sc)

                <div class="screen-img"><a class="ulightbox" href="{{  $sc->path }}{{  $sc->file }}" data-fancybox-group="ulightboxgroup"><img src="{{  $sc->path }}{{  $sc->file }}" border="0" alt="Скриншот {{ $i++ }}"></a></div>
            @endforeach
        </div>


        <!-- tabs container -->


        <div class="tabs-container">
            <ul class="tabs">
                <li class="tab-link current" data-tab="tab-2" id="buttonid">Источник (Moonwalk)</li>
                <li class="tab-link" data-tab="tab-3">Трейлер</li>
            </ul>

            <!-- Вывод фьма или сериала добавленного вручную-->

            <!-- / end -->

            <!-- Авто вывод фьма или сериала -->
            <div id="tab-2" class="tab-content current" align="center">
                <div id="moonwalkPlayer"></div>
            </div>
            <!-- / end -->
            <!-- trailer !-->
            <div id="tab-3" class="tab-content" align="center">
                <div id="trailerDiv"></div>
            </div>
        </div>
        <!-- End trailer -->



        <!-- // tabs container // -->



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