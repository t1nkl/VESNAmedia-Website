@extends('layouts.app')



<!-- /*===== set custom css =====*/ -->
@section('custom_css')
<style rel="stylesheet" type="text/css">
    .jssora05l, .jssora05r {
        display: block;
        position: absolute;
        width: 40px;
        height: 40px;
        cursor: pointer;
        background: url('/img/a17.png') no-repeat;
        overflow: hidden;
    }
    .jssora05l { background-position: -10px -40px; }
    .jssora05r { background-position: -70px -40px; }
    .jssora05l:hover { background-position: -130px -40px; }
    .jssora05r:hover { background-position: -190px -40px; }
    .jssora05l.jssora05ldn { background-position: -250px -40px; }
    .jssora05r.jssora05rdn { background-position: -310px -40px; }
    .jssora05l.jssora05lds { background-position: -10px -40px; opacity: .3; pointer-events: none; }
    .jssora05r.jssora05rds { background-position: -70px -40px; opacity: .3; pointer-events: none; }
    /* jssor slider thumbnail navigator skin 01 css *//*.jssort01 .p            (normal).jssort01 .p:hover      (normal mouseover).jssort01 .p.pav        (active).jssort01 .p.pdn        (mousedown)*/.jssort01 .p {    position: absolute;    top: 0;    left: 0;    width: 72px;    height: 72px;}.jssort01 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort01 .w {    position: absolute;    top: 0px;    left: 0px;    width: 100%;    height: 100%;}.jssort01 .c {    position: absolute;    top: 0px;    left: 0px;    width: 68px;    height: 68px;    border: #000 2px solid;    box-sizing: content-box;    background: url('/img/t01.png') -800px -800px no-repeat;    _background: none;}.jssort01 .pav .c {    top: 2px;    _top: 0px;    left: 2px;    _left: 0px;    width: 68px;    height: 68px;    border: #000 0px solid;    _border: #fff 2px solid;    background-position: 50% 50%;}.jssort01 .p:hover .c {    top: 0px;    left: 0px;    width: 70px;    height: 70px;    border: #fff 1px solid;    background-position: 50% 50%;}.jssort01 .p.pdn .c {    background-position: 50% 50%;    width: 68px;    height: 68px;    border: #000 2px solid;}* html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {    /* ie quirks mode adjust */    width /**/: 72px;    height /**/: 72px;}
</style>
@endsection

<!-- /*===== set custom javascript =====*/ -->
@section('custom_javascript')
<script src="/js/jssor.slider-24.1.5.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jssor_1_slider_init = function() {
        var jssor_1_SlideshowTransitions = [
        {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        ];
        var jssor_1_options = {
            $AutoPlay: 1,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
            }
        };
        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 800);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    };
</script>
@endsection



@section('content')

<main class="recommended-single-page">
    <h3 class="recommended-single-page-heading">Ресторан CAFE L’ETAGE & BEL ETAGE</h3>
    <div class="col-md-12 recommended-item-slider">
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1400px;height:456px;overflow:hidden;visibility:hidden;background-color:#24262e;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('/img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1400px;height:356px;overflow:hidden;">
                <div>
                    <img data-u="image" src="/img/01.jpg" />
                    <img data-u="thumb" src="/img/01-s72x72.jpg" />
                </div>
                <div>
                    <img data-u="image" src="/img/02.jpg" />
                    <img data-u="thumb" src="/img/02-s72x72.jpg" />
                </div>
                <div>
                    <img data-u="image" src="/img/03.jpg" />
                    <img data-u="thumb" src="/img/03-s72x72.jpg" />
                </div>
                <div>
                    <img data-u="image" src="/img/04.jpg" />
                    <img data-u="thumb" src="/img/04-s72x72.jpg" />
                </div>
                <div>
                    <img data-u="image" src="/img/05.jpg" />
                    <img data-u="thumb" src="/img/05-s72x72.jpg" />
                </div>
                <div>
                    <img data-u="image" src="/img/06.jpg" />
                    <img data-u="thumb" src="/img/06-s72x72.jpg" />
                </div>
                <div>
                    <img data-u="image" src="/img/07.jpg" />
                    <img data-u="thumb" src="/img/07-s72x72.jpg" />
                </div>
                <div>
                    <img data-u="image" src="/img/08.jpg" />
                    <img data-u="thumb" src="/img/08-s72x72.jpg" />
                </div>
                <div>
                    <img data-u="image" src="/img/09.jpg" />
                    <img data-u="thumb" src="/img/09-s72x72.jpg" />
                </div>
                <div>
                    <img data-u="image" src="/img/10.jpg" />
                    <img data-u="thumb" src="/img/10-s72x72.jpg" />
                </div>
                <div>
                    <img data-u="image" src="/img/11.jpg" />
                    <img data-u="thumb" src="/img/11-s72x72.jpg" />
                </div>
                <div>
                    <img data-u="image" src="/img/12.jpg" />
                    <img data-u="thumb" src="/img/12-s72x72.jpg" />
                </div>
                <a data-u="any" href="https://www.jssor.com" style="display:none">javascript slider</a>
            </div>
            <!-- Thumbnail Navigator -->
            <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:1400px;height:100px;" data-autocenter="1">
                <!-- Thumbnail Item Skin Begin -->
                <div data-u="slides" style="cursor: default;">
                    <div data-u="prototype" class="p">
                        <div class="w">
                            <div data-u="thumbnailtemplate" class="t"></div>
                        </div>
                        <div class="c"></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
            <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
        </div>
        <script type="text/javascript">jssor_1_slider_init();</script>
        <!-- #endregion Jssor Slider End -->
    </div>
    <h4 class="recommended-single-page-heading-secondary">О ресторане</h4>
    <p class="recommended-single-text">Café L’étage и Bel étage составляют единый развлекательный комплекс.
    </p>
    <p class="recommended-single-text">Café L’étage – ресторан, концепция которого основана на идее космополитизма,
        предлагает меню с блюдами разных стран мира по вполне демократичным ценам,
        дружескую атмосферу и динамичное современное музыкальное сопровождение.
    </p>
    <p class="recommended-single-text">Bel étage – двухуровневый концертный клуб. Многофункциональность площадки,
        оснащенной самым современным оборудованием, позволяет легко трансформировать
        её пространство в масштабную площадь для проведения концертов, перформансов
        и театральных шоу или камерную обстановку для устроения частных и корпоративных
        праздников. Клуб рассчитан на комфортабельное размещение 1000 гостей. На первом
        этаже расположены 2 барные стойки и просторная фан-зона/танцпол, тогда как второй
        этаж можно смело назвать VIP-зоной с посадочными местами и индивидуальным обслуживанием
        официантами ресторана.
    </p>
    <h4 class="recommended-single-page-heading-secondary">Контакты</h4>
    <div class="col-md-12 recommended-page-map">
        <iframe width="100%" height="320" frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBgrXsG8X_Dgelnf_Zsal_i9OshVvoU7Bc&q=Space+Needle,Seattle+WA" allowfullscreen></iframe>
        <div class="recommended-map-info">
            <h3 class="recommended-map-info-heading">Адрес</h3>
            <p class="recommended-map-info-adress">Украина, Киев</p>
            <p class="recommended-map-info-adress">ул. Драгомирова 2, офис 4</p>
            <h3 class="recommended-map-info-heading">Телефон</h3>
            <a href="tel:+380906879685" class="recommended-map-info-phone">+38 090 687 96 85</a>
            <h3 class="recommended-map-info-heading">Работает</h3>
            <p class="recommended-map-info-timing">с <span class="timing-bold">8:00</span> до <span class="timing-bold">23:00</span></p>
            <ul class="recommended-map-info-socmedia">
                <li class="recommended-map-socmedia-item">
                    <a href="#" class="recommended-map-socmedia-link">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="recommended-map-socmedia-item">
                    <a href="#" class="recommended-map-socmedia-link">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="recommended-map-socmedia-item">
                    <a href="#" class="recommended-map-socmedia-link">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="recommended-map-socmedia-item">
                    <a href="#" class="recommended-map-socmedia-link">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-12 recommended-page-goto-link">
        <a href="#" class="recommended-page-link-to-website">Перейти на сайт</a>
    </div>
</main>

@endsection
