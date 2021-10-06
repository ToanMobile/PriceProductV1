@extends('layouts.default')

@section('title', 'Giỏ Hàng')

@section('style')
    <style>
        body {
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.04), rgba(0, 0, 0, 0.04)), #FFFFFF;
        }
        .cart {
            height: 1440px;
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
            <div class="col-sm-12 col-md-12">
                <div class="col-sm-12 col-md-8 detail">
                    <h3>Thông Tin Khách Hàng</h3>
                    <div class="row w-100 m-top-24">
                        <div class="col-md-6">
                            <p>Họ</p>
                            <input type="text" class="form-control" name="firstname" />
                        </div>
                        <div class="col-md-6">
                            <p>Tên</p>
                            <input type="text" class="form-control" name="lastname" />
                        </div>
                    </div>
                    <div class="row w-100 m-top-32">
                        <div class="col-md-6">
                            <p>Địa chỉ email</p>
                            <input type="text" class="form-control" name="email" />
                        </div>
                        <div class="col-md-6">
                            <p>Số điện thoại</p>
                            <input type="text" class="form-control" name="sdt" />
                        </div>
                    </div>
                    <h3 class="m-top-32">Phương Thức Thanh Toán</h3>
                    <div class="row w-100 m-top-24">
                        <div class="col-md-12 pay-group">
                            <div class="col-md-4 pay-method">
                                <img src="img/Paypal.svg" />
                                <input type="radio" name="payment" value="paypal">
                            </div>
                            <div class="col-md-4 pay-method active">
                                <img src="img/Chuyenkhoan.svg" />
                                <input type="radio" name="payment" value="chuyenkhoan" checked="checked">
                            </div>
                            <div class="col-md-4 pay-method">
                                <img src="img/Momo.svg" />
                                <input type="radio" name="payment" value="momo">
                            </div>
                        </div>
                    </div>
                    <div class="row w-100 m-top-24" id="methodPay">
                        <div class="col-md-6">
                            <p>Số thẻ</p>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-3">
                            <p>Ngày hết hạn</p>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-3">
                            <p>Mã CVC</p>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 summary">
                    <div class="summary-text">
                        <h3>Tóm Tắt Đơn Hàng</h3>
                        <hr />
                        <div class="package-summary">
                            <div class="total-package">
                                <span class="package-name">{{ $package_name  }}</span>
                                <span class="package-price">đ {{ $package_price  }}</span>
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
                                    <span>đ {{ $per_price }}</span>
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
                    <hr />
                    <div class="total-price" style="margin-top: 0px">
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
                </div>
            </div>
            <div class="col-sm-12 col-md-12 m-top-24">
                <div class="confirm-group">
                    <div class="col-sm-12 col-md-8 w-100 btn-group1">
                        <button type="button" class="btn col-md-4">QUAY LẠI</button>
                        <button type="button" id="payment" class="btn col-md-6"><img src="img/IconLock.svg" />CỌC TRƯỚC 408,000 VNĐ</button>
                    </div>
                    <p>Bằng cách bấm vào nút thanh toán thông tin của bạn được chúng tôi bảo mật tuyệt đối.</p>
                </div>
            </div>
        </div>
        <div class="cart-footer">
            <div>
                <img src="img/Icon247.svg" />
                <p>HỖ TRỢ TRỰC TUYẾN 24/7</p>
            </div>
            <div>
                <img src="img/Icon247.svg" />
                <p>THANH TOÁN BẢO MẬT</p>
            </div>
            <div>
                <img src="img/Icon247.svg" />
                <p>14-NGÀY BẢO HÀNH KHÔNG RỦI RO!</p>
            </div>
        </div>
    </div>
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/Group 1440.svg" />
                    <h3>THANH TOÁN THÀNH CÔNG !</h3>
                    <p>Cảm ơn bạn đã tin tưởng, sử dụng dịch vụ của chúng tôi !</p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            if ("{{ $success }}" === 'Success') {
                $('#myModal').modal('show');
            }
        });
        $(window).scroll(function(){
            var sticky = $('.summary'),
                scroll = $(window).scrollTop(),
                ww = $(window).width();
            if (scroll > 438 && ww > 768) sticky.addClass('summary-fixed');
            else sticky.removeClass('summary-fixed');
        });
        $('.pay-method').click(function () {
            $('.pay-method').removeClass('active');
            $('.pay-method input').removeAttr('checked');

            let radio = $(this).find('input')[0];
            $(this).addClass('active');
            $(radio).attr('checked', 'checked');

            if (radio.value === 'chuyenkhoan') {
                $('#methodPay').attr('style', 'display: flex');
            } else {
                $('#methodPay').attr('style', 'display: none');
            }
        });
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
        $('#payment').click(function () {
            let data = {
                name: $('input[name="firstname"]').val() + " " + $('input[name="lastname"]').val(),
                email: $('input[name="email"]').val(),
                phone: $('input[name="sdt"]').val(),
                payMethod: $('input[name="payment"]').val(),
                platform: '{{ $platform }}',
                package: '{{ $package }}',
                quantity: '{{ $quantity }}',
                plugin: '{{ $plugin }}'
            };
            $.ajax({
                url: '/payment',
                async: true,
                method: 'POST',
                data: data,
                dataType: "JSON",
                success: function (res) {
                    if (res.errorCode === 0) {
                        window.location = res.payUrl;
                    }
                }
            });
        });
    </script>
@stop
