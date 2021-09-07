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
            <input type="hidden" id="platformChoose" value="" />
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
        <section class="package">
            <div class="package-popular">
                <h3>PHỔ BIẾN NHẤT</h3>
            </div>
            <div class="package-price">
                <div class="package-content">
                    <div class="package-header">CƠ BẢN</div>
                    <div class="package-intro">
                        <div class="package-detail">
                            <div class="price-info">
                                <div class="price-sale-off">
                                    <span>5,979,000 VNĐ</span>
                                    <div class="sale-off-percent">
                                        <span>TIẾT KIỆM 77%</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <span><span>đ</span> 99,000</span>
                                </div>
                            </div>
                            <span>Giao diện hiện đại, đa dạng, sạch theo trend thiết kế mới nhất.</span>
                        </div>
                        <div class="package-benefit">
                            <h3>Bao Gồm</h3>
                            <div class="benefit-detail">
                                <div class="benefit active">
                                    <img src="img/BooleanTrue.svg" />
                                    <span>1 Section</span>
                                </div>
                                <div class="benefit">
                                    <img src="img/BooleanFail.svg" />
                                    <span>Hiệu Ứng Tương Tác Prototype</span>
                                </div>
                                <div class="benefit">
                                    <img src="img/BooleanFail.svg" />
                                    <span>Giám sát tiến độ thực tế</span>
                                </div>
                                <div class="benefit">
                                    <img src="img/BooleanFail.svg" />
                                    <span>Source File Cơ Bản</span>
                                </div>
                            </div>
                            <hr/>
                            <div class="add-section">
                                <span>Thêm số lượng Section</span>
                                <div class="tool-add">
                                    <button type="button" class="reduce"><img src="img/reduce.svg"></button>
                                    <span>1</span>
                                    <button type="button" class="increase"><img src="img/increase.svg" /></button>
                                </div>
                                <span class="price-per-page"><b>$14.99 </b> / Page</span>
                            </div>
                            <hr/>
                            <div class="timeline">
                                <div class="time">
                                    <img src="img/IconTimeline.svg" />
                                    <span><b>2</b> Ngày</span>
                                </div>
                                <div class="edit">
                                    <img src="img/IconEdit.svg" />
                                    <span><b>1</b> Chỉnh Sửa</span>
                                </div>
                            </div>
                            <hr class="hidden-footer"/>
                            <div class="package-footer hidden-footer">
                                <button type="button" class="contact">TƯ VẤN TRỌN GÓI</button>
                                <button type="button" class="payment">CỌC TRƯỚC 50%</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="package-content" style="border-right:0; border-left:0;">
                    <div class="package-header">NÂNG CAO</div>
                    <div class="package-intro">
                        <div class="package-detail">
                            <div class="price-info">
                                <div class="price-sale-off">
                                    <span>5,979,000 VNĐ</span>
                                    <div class="sale-off-percent" style="background-color: #FF5E61;">
                                        <span>TIẾT KIỆM 77%</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <span><span>đ</span> 2,999,000</span>
                                </div>
                            </div>
                            <span>Giao diện hiện đại, đa dạng, sạch theo trend thiết kế mới nhất.</span>
                        </div>
                        <div class="package-benefit">
                            <h3>What’s included</h3>
                            <div class="benefit-detail">
                                <div class="benefit active">
                                    <img src="img/BooleanTrue.svg" />
                                    <span>8 Trang/Màn Hình</span>
                                </div>
                                <div class="benefit active">
                                    <img src="img/BooleanTrue.svg" />
                                    <span>Hiệu Ứng Tương Tác Prototype</span>
                                </div>
                                <div class="benefit">
                                    <img src="img/BooleanFail.svg" />
                                    <span>Giám sát tiến độ thực tế</span>
                                </div>
                                <div class="benefit">
                                    <img src="img/BooleanFail.svg" />
                                    <span>Source File Cơ Bản</span>
                                </div>
                            </div>
                            <hr/>
                            <div class="add-section">
                                <span>Thêm số Trang/Màn Hình</span>
                                <div class="tool-add">
                                    <button type="button" class="reduce"><img src="img/reduce.svg"></button>
                                    <span>5</span>
                                    <button type="button" class="increase"><img src="img/increase.svg" /></button>
                                </div>
                                <span class="price-per-page"><b>$14.99 </b> / Page</span>
                            </div>
                            <hr/>
                            <div class="timeline">
                                <div class="time">
                                    <img src="img/IconTimeline.svg" />
                                    <span><b>3</b> Ngày</span>
                                </div>
                                <div class="edit">
                                    <img src="img/IconEdit.svg" />
                                    <span><b>1</b> Chỉnh Sửa</span>
                                </div>
                            </div>
                            <hr class="hidden-footer"/>
                            <div class="package-footer hidden-footer">
                                <button type="button" class="contact">TƯ VẤN TRỌN GÓI</button>
                                <button type="button" class="payment">CỌC TRƯỚC 50%</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="package-content">
                    <div class="package-header">CHUYÊN NGHIỆP</div>
                    <div class="package-intro">
                        <div class="package-detail">
                            <div class="price-info">
                                <div class="price-sale-off">
                                    <span>5,979,000 VNĐ</span>
                                    <div class="sale-off-percent">
                                        <span>TIẾT KIỆM 78%</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <span><span>đ</span> 3,999,000</span>
                                </div>
                            </div>
                            <span>Giao diện hiện đại, đa dạng, sạch theo trend thiết kế mới nhất.</span>
                        </div>
                        <div class="package-benefit">
                            <h3>Trọn gói</h3>
                            <div class="benefit-detail">
                                <div class="benefit active">
                                    <img src="img/BooleanTrue.svg" />
                                    <span>8 Trang/Màn Hình</span>
                                </div>
                                <div class="benefit active">
                                    <img src="img/BooleanTrue.svg" />
                                    <span>Hiệu Ứng Tương Tác Prototype</span>
                                </div>
                                <div class="benefit active">
                                    <img src="img/BooleanTrue.svg" />
                                    <span>Giám sát tiến độ thực tế</span>
                                </div>
                                <div class="benefit active">
                                    <img src="img/BooleanTrue.svg" />
                                    <span>Source File Cơ Bản</span>
                                </div>
                            </div>
                            <hr/>
                            <div class="add-section">
                                <span>Thêm số Trang/Màn Hình</span>
                                <div class="tool-add">
                                    <button type="button" class="reduce"><img src="img/reduce.svg"></button>
                                    <span>8</span>
                                    <button type="button" class="increase"><img src="img/increase.svg" /></button>
                                </div>
                                <span class="price-per-page"><b>$14.99 </b> / Page</span>
                            </div>
                            <hr/>
                            <div class="timeline">
                                <div class="time">
                                    <img src="img/IconTimeline.svg" />
                                    <span><b>8</b> Ngày</span>
                                </div>
                                <div class="edit">
                                    <img src="img/IconEdit.svg" />
                                    <span><b>Không Giới Hạn</b> Sửa</span>
                                </div>
                            </div>
                            <hr class="hidden-footer"/>
                            <div class="package-footer hidden-footer">
                                <button type="button" class="contact">TƯ VẤN TRỌN GÓI</button>
                                <button type="button" class="payment">CỌC TRƯỚC 50%</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
