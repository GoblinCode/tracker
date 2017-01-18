<?php
$title = "титл";
?>
        <!DOCTYPE html>
<html class=" webkit chrome win js mdl-js" style="height: auto;">
<head>
    @include('user.layout.head', ['title' => $title])
</head>
<body>
<div id="page" class="fadeIn animated">
    <!--U1AHEADER1Z-->
    <header>
        <div class="wrapper">
            <section class="profile">
                <div class="picture">
                  <!--  <a href="http://movie-groovie.ucoz.com/index/8">
                        <img class="user-ava" alt="hepoh"
                             src="./Каталог файлов - Персональный сайт_files/SVpLKh1RtDo.jpg">
                    </a> -->

                </div>
                <span class="greeting"><a href="http://movie-groovie.ucoz.com/index/8"><b>hepoh</b></a></span>
                <a href="http://movie-groovie.ucoz.com/index/10" title="Выйти"><i class="fa fa-sign-out"></i></a>
            </section>

            <div id="top_right">
                <form onsubmit="this.sfSbm.disabled=true" method="get" style="margin:0"
                      action="http://movie-groovie.ucoz.com/search/">
                    <input type="text" name="q" maxlength="30" size="20" class="topqueryfield">
                    <input type="submit" class="searchSbmFl" name="sfSbm" value="Найти" style="display:none;">
                </form>
            </div>
        </div>
    </header><!--/U1AHEADER1Z-->
    <div id="main">
        <div class="wrapper">
            <!-- <middle> -->
            <!--U1CLEFTER1Z-->
            <aside>
                @yield('right_block')








                <!--section class="block">
                <div class="blocktitle"><i class="fa fa-users"></i> Статистика</div>
                <div class="blockcontent">
                <div align="center">

               <div class="tOnline" id="onl1">Онлайн всего: <b>1</b></div> <div class="gOnline" id="onl2">Гостей: <b>0</b></div> <div class="uOnline" id="onl3">Пользователей: <b>1</b></div> <a class="groupUser" href="/index/8-75">hepoh</a>
                </div>
                </div>
                </section-->

            </aside><!--/U1CLEFTER1Z-->
            <div id="content" class="category">
                <div id="top_title"><h1 class="fadeInDownBig animated">Каталог файлов</h1></div>
                <!-- <body> -->


                    @yield('content')
                <!-- </body> -->
                <span class="pagesBlockuz2"></span>
            </div>
            <!-- </middle> -->
        </div>
        <!--//endwrapper-->
    </div>
    <!--//endmain-->
</div>
<!--//endpage-->
<div class="page-buffer"></div>
<!--footer-->
<footer id="footer">
    <div class="go-top">
        <a href="#" id="goTop" class="fa fa-angle-double-up fa-2x">
        </a>
    </div>
    <div class="copyright">
        <div class="wrapper">
            <div class="float_left">Design: <a href="http://utemplate.pro/shop/595/desc/lite-film">DC Themes</a></div>
            <div class="float_right"><a href="http://movie-groovie.ucoz.com/index/0-2">О сайте</a> | <a
                        href="http://movie-groovie.ucoz.com/index/0-3">Обратная связь</a> | <!-- "' --><span
                        class="pb5fFl9i">Хостинг от <a href="http://www.ucoz.ru/">uCoz</a></span></div>
        </div>
    </div>
</footer>
<script src="{{ url('templates/main/js/jquery.js') }}"></script>

</body>
</html>