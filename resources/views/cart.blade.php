@extends('layouts.default')

@section('title', 'Giỏ Hàng')

@section('style')
    <style>
        body {
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.04), rgba(0, 0, 0, 0.04)), #FFFFFF;
        }
    </style>
@stop

@section('content')
    <div class="col-md-12 cart">
        <div class="banner">
            <img src="img/Frame 3596.svg" />
            <h3>{{ $package_name }}</h3>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-8 detail">
                    <h5>Dành cho nền tảng:</h5>
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
                </div>
                <div class="col-md-4 summary">
                    <div class="summary-text">
                        <h3>Tóm Tắt Đơn Hàng</h3>
                        <hr />
                        <div class="package-summary">
                            <div class="total-package">
                                <span class="package-name">{{ $package_name  }}</span>
                                <span class="package-price">{{ $package_price  }}</span>
                            </div>
                            <div class="detail-price">
                                <div class="section-page">
                                    <div>
                                        <div class="quantity">
                                            <img src="img/IconCartSection.svg" />
                                            @if ($package == 3)
                                                <span>Số lượng Section X8</span>
                                            @elseif ($package == 2)
                                                <span>Số lượng Section X5</span>
                                            @else
                                                <span>Số lượng Section X1</span>
                                            @endif
                                        </div>
                                        <div class="tool-add">
                                            <button type="button" onclick="reduce({{ $package }})" class="reduce"><img src="img/reduce.svg"></button>
                                            <span id="quantity_{{ $package }}">1</span>
                                            <button type="button" onclick="increase({{ $package }})" class="increase"><img src="img/increase.svg" /></button>
                                        </div>
                                    </div>
                                    <span>{{ $per_price }}</span>
                                </div>
                                <div class="animation-price">
                                    <div>
                                        <img src="img/IconCartSection.svg" />
                                        <span>Animation prototype</span>
                                    </div>
                                    <span>đ 219,000</span>
                                </div>
                            </div>
                            <div class="addition">
                                <h3>Bổ sung</h3>
                                <div class="item">
                                    <div>
                                        <img src="img/IconCartSection.svg" />
                                        <span>Prototype Animation</span>
                                    </div>
                                    <span>đ 219,000</span>
                                </div>
                                <div class="item">
                                    <div>
                                        <img src="img/IconCartSection.svg" />
                                        <span>Strong UX</span>
                                    </div>
                                    <span>đ 219,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="text" id="voucher" placeholder="Nhập mã giảm giá" />
                    <div class="total-price">
                        <span>Tổng dự án</span>
                        <div class="price">
                            <div class="sale-off">
                                <img src="img/IconPriceTag.svg" />
                                <span>78%</span>
                            </div>
                            <div class="price-new">
                                <span>đ 700,000</span>
                                <span>đ 919,000</span>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="datcoc">
                        <span>Số tiền cọc trước</span>
                        <span>đ 408,000</span>
                    </div>
                    <button type="button" id="payment">THANH TOÁN CỌC 50%</button>
                    <span>Bằng cách bấm vào nút thanh toán thông tin của bạn được chúng tôi bảo mật tuyệt đối. </span>
                    <div class="group-payment">
                        <img src="img/momo.svg" />
                        <img src="img/paypal.svg" />
                        <img src="img/credit-card.svg" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $(window).scroll(function(){
            var sticky = $('.summary'),
                scroll = $(window).scrollTop();
            if (scroll > 438) sticky.addClass('summary-fixed');
            else sticky.removeClass('summary-fixed');
        });
        var arrPlatform = ['web'];
        function reduce(i) {
            let quantity = parseInt($('#quantity_' + i).text());
            if (quantity <= 1) {
                return;
            }
            quantity = quantity - 1;
            let price = 99000;
            if (i === 2) {
                price = 599800;
            }
            if (i === 3) {
                price = 799800;
            }
            let priceOld = formatMoney(Math.floor((price * 100)/77) * quantity);
            $('#priceOld_' + i).html(priceOld + " VNĐ");
            let priceNew = formatMoney(price * quantity);
            $('#priceNew_' + i).html('<span>đ</span> ' + priceNew);
            $('#quantity_' + i).html(quantity);
            if (i === 1 && priceNew <= 500000) {
                $('#btn1').html('THANH TOÁN');
            }
        }
        function increase(i) {
            let quantity = parseInt($('#quantity_' + i).text());
            quantity = quantity + 1;
            let price = 99000;
            if (i === 2) {
                price = 599800;
            }
            if (i === 3) {
                price = 799800;
            }
            let priceOld = formatMoney(Math.floor((price * 100)/77) * quantity);
            $('#priceOld_' + i).html(priceOld + " VNĐ");
            let priceNew = price * quantity;
            let priceNewHtml = formatMoney(priceNew);
            $('#priceNew_' + i).html('<span>đ</span> ' + priceNewHtml);
            $('#quantity_' + i).html(quantity);

            if (i === 1 && priceNew > 500000) {
                $('#btn1').html('CỌC TRƯỚC 50%');
            }
        }
        function formatMoney(n, c, d, t) {
            var c = isNaN(c = Math.abs(c)) ? 2 : c,
                t = t == undefined ? "," : t,
                s = n < 0 ? "-" : "",
                i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
                j = (j = i.length) > 3 ? j % 3 : 0;

            return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t);
        };
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
