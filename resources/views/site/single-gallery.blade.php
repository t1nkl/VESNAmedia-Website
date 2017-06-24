@extends('layouts.app')



<!-- /*===== set title =====*/ -->
@section('title')
@endsection

<!-- /*===== set description =====*/ -->
@section('description')
@endsection

<!-- /*===== set keywords =====*/ -->
@section('keywords')
@endsection

<!-- /*===== set Open Graph =====*/ -->
@section('open_graph')
@endsection

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
<script type="text/javascript" src="js/jssor.slider-24.1.5.min.js"></script>
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

<div class="gallery-item-page row">
    <div class="col-md-8 gallery-item-title-block">
        <h3 class="gallery-item-heading">Масленица & чулочная вечеринка от журнала vesna</h3>
        <span class="gallery-item-timing">10 мая 2017</span>
    </div>
    <div class="col-md-4 gallery-item-back-block">
        <a href="gallery.html" class="gallery-item-back-link">Назад</a>
    </div>
    <div class="col-md-12 gallery-item-slider">
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
    <div class="col-md-12 gallery-item-share-block">
        <h3 class="gallery-item-share-heading">ПОДЕЛИТЬСЯ</h3>
        <ul class="gallery-item-share-socmedia">
            <li class="gallery-item-share-socmedia-item">
                <a href="#" class="gallery-item-share-socmedia-link">
                    <img src="/img/twitter.svg" class="gallery-item-share-img" alt="">
                </a>
            </li>
            <li class="gallery-item-share-socmedia-item">
                <a href="#" class="gallery-item-share-socmedia-link">
                    <img src="/img/facebook.svg" class="gallery-item-share-img" alt="">
                </a>
            </li>
            <li class="gallery-item-share-socmedia-item">
                <a href="#" class="gallery-item-share-socmedia-link">
                    <img src="/img/pinterest.svg" class="gallery-item-share-img" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>

@endsection
