@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <div class="col-md-12 content">
        <section class="banner">
            <img src="img/BannerBg.svg" width="100%" />
            <div class="platform">
                <div class="platform-item platform-active" data-platform="web">
                    <img src="img/iconWeb.svg" />
                    <p>Website</p>
                </div>
                <div class="platform-item" data-platform="desktop">
                    <img src="img/iconDesktop.svg" />
                    <p>Desktop</p>
                </div>
                <div class="platform-item" data-platform="tablet">
                    <img src="img/iconTablet.svg" />
                    <p>Tablet</p>
                </div>
                <div class="platform-item" data-platform="mobile">
                    <img src="img/iconMobile.svg" />
                    <p>Mobile</p>
                </div>
                <div class="platform-item" data-platform="orther">
                    <img src="img/iconOrther.svg" />
                    <p>Khác</p>
                </div>
            </div>
        </section>
        {{--<section class="banner">
            <img src="img/pngegg 1.png" class="component1" />
            <img src="img/Group 1413.png" class="component2" />
            <img src="img/01.png" class="component3" />
            <img src="img/Group 1414.png" class="component4" />
            <div class="banner-content">
                <div class="banner-text">
                    <img src="img/bannerText1.png" class="banner-text1" />
                </div>
            </div>
        </section>--}}
    </div>
    <input type="hidden" id="platformChoose" value="" />
@stop

@section('js')
<script>
    var arrPlatform = ['web'];
    $(window).scroll(function(){
        var sticky = $('header'),
            scroll = $(window).scrollTop();

        if (scroll > 0) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });
    $('.platform-item').click(function () {
        let platformObj = $(this);
        if (platformObj.hasClass('platform-active')) {
            platformObj.removeClass('platform-active');
            var index = arrPlatform.indexOf(platformObj.attr('data-platform'));
            if (index !== -1) {
                arrPlatform.splice(index, 1);
            }
        } else {
            platformObj.addClass('platform-active');
            arrPlatform.push(platformObj.attr('data-platform'));
        }
        $('#platformChoose').val(arrPlatform.join(','));
    });
</script>
@stop
