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
            <div class="col-sm-12 col-md-12">
                <div class="col-sm-12 col-md-8 detail">
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
                    <div class="package-sale-off">
                        <div class="item">
                            <div class="price">
                                <h4>1 Section</h4>
                                <p>{{ $old_price }}</p>
                                <p><span>đ</span> {{ $package_price }}</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tag">
                                <p>TIẾT KIỆM
                                    50%</p>
                            </div>
                            <div class="price">
                                <h4>5 Trang</h4>
                                <p>{{ $old_price }}</p>
                                <p><span>đ</span> {{ $package_price }}</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tag">
                                <p>TIẾT KIỆM
                                    77%</p>
                            </div>
                            <div class="price">
                                <h4>8 Trang</h4>
                                <p>{{ $old_price }}</p>
                                <p><span>đ</span> {{ $package_price }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="package-detail">
                        <h4>Bao gồm</h4>
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
                        <hr />
                        <div class="add-section">
                            <span>Bổ sung Trang/Màn Hình</span>
                            <div class="tool-add">
                                <button type="button" onclick="reduce({{ $package }})" class="reduce"><img src="img/reduce.svg"></button>
                                <span id="quantity_{{ $package }}">8</span>
                                <button type="button" onclick="increase({{ $package }})" class="increase"><img src="img/increase.svg" /></button>
                            </div>
                        </div>
                        <hr />
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
                        <hr />
                    </div>
                    <div class="package-plugin">
                        <div class="total">
                            <p>Tổng phụ: <span>đ</span> <b>2,690,000</b></p>
                            <p><b>Tiết kiệm được:</b> <span>đ</span> <b>2,899,000</b></p>
                        </div>
                        <div class="alert">
                            <img src="img/IconPriceTag.svg" />
                            <p><b>Lựa chọn tốt!</b> Gói nâng cao bạn có thể tiết kiệm <b>đ 2,800,000!</b>  Và bạn có thể được bảo hành hoàn phí nếu không hài lòng trong <b>14-ngày</b></p>
                        </div>
                        <div class="plugin">
                            <div>
                                <h3>Bổ sung tính năng</h3>
                                <img src="img/IconRequest.svg">
                            </div>
                            <div class="tick">
                                <div class="item">
                                    <div>
                                        <input type="checkbox" class="" name="">
                                        <span>Thêm <b>2</b> Lần <b>Chỉnh Sửa</b></span>
                                    </div>
                                    <span>đ 99,000</span>
                                </div>
                                <div class="item">
                                    <div>
                                        <input type="checkbox" class="" name="">
                                        <span>Tăng Tốc <b>Tiến Độ</b> Còn <b>1 Ngày</b></span>
                                    </div>
                                    <span>đ 999,000</span>
                                </div>
                                <div class="item">
                                    <div>
                                        <input type="checkbox" class="" name="">
                                        <span>Hiệu Ứng Tương Tác <b>Prototype Animation</b></span>
                                    </div>
                                    <span>đ 999,000</span>
                                </div>
                                <div class="item">
                                    <div>
                                        <input type="checkbox" class="" name="">
                                        <span>Giao Diện <b>Sáng</b> & <b>Tối</b></span>
                                    </div>
                                    <span>đ 999,000</span>
                                </div>
                                <div class="item">
                                    <div>
                                        <input type="checkbox" class="" name="">
                                        <span>Strong UX</span>
                                    </div>
                                    <div class="sale-off">
                                        <div class="tag">
                                            <img src="img/IconPriceTag.svg" />
                                            <span>50%</span>
                                        </div>
                                        <div class="price-off">
                                            <p class="price-old">đ 4,999,000</p>
                                            <p class="price-new">đ 1,999,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item customer-item">
                                    <div class="chk-customer">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                            <label class="form-check-label" for="flexSwitchCheckDefault">Đăng ký khách quen</label>
                                        </div>
                                        <p>Tiết kiệm 5% cho đơn hàng lần sau</p>
                                    </div>
                                    <select>
                                        <option>3 tháng</option>
                                    </select>
                                </div>
                                <div class="item footer-item">
                                    <span>Thi công Dev Thiết Kế</span>
                                    <button type="button" class="btn btn-default">LIÊN HỆ</button>
                                </div>
                            </div>
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
            <div class="col-sm-12 col-md-12">
                <div class="col-sm-12 col-md-8 comment">
                    <div>
                        <h3></h3>
                        <form>
                            <h3>Mô tả sản phẩm của bạn</h3>
                            <textarea rows="5" placeholder="Remake, Giao diện UI, Tính năng thông báo"></textarea>
                            <button type="button" class="btn btn-primary">
                                <img src="img/IconSend.svg" />
                                GỞI LỜI NHẮN
                            </button>
                        </form>
                    </div>
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
@stop

@section('js')
    <script>
        $(window).scroll(function(){
            var sticky = $('.summary'),
                scroll = $(window).scrollTop(),
                ww = $(window).width;
            if (scroll > 438 && ww > 768) sticky.addClass('summary-fixed');
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
