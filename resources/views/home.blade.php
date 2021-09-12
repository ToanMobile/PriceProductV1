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
                                    <span id="priceOld_1">5,979,000 VNĐ</span>
                                    <div class="sale-off-percent">
                                        <span>TIẾT KIỆM 77%</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <span id="priceNew_1"><span>đ</span> 99,000</span>
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
                                    <button type="button" onclick="reduce(1)" class="reduce"><img src="img/reduce.svg"></button>
                                    <span id="quantity_1">1</span>
                                    <button type="button" onclick="increase(1)" class="increase"><img src="img/increase.svg" /></button>
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
                                <button type="button" id="btn1" class="payment">THANH TOÁN</button>
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
                                    <span id="priceOld_2">5,979,000 VNĐ</span>
                                    <div class="sale-off-percent" style="background-color: #FF5E61;">
                                        <span>TIẾT KIỆM 77%</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <span id="priceNew_2"><span>đ</span> 2,999,000</span>
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
                                    <button type="button" onclick="reduce(2)" class="reduce"><img src="img/reduce.svg"></button>
                                    <span id="quantity_2">5</span>
                                    <button type="button" onclick="increase(2)" class="increase"><img src="img/increase.svg" /></button>
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
                                    <span id="priceOld_3">5,979,000 VNĐ</span>
                                    <div class="sale-off-percent">
                                        <span>TIẾT KIỆM 78%</span>
                                    </div>
                                </div>
                                <div class="price">
                                    <span id="priceNew_3"><span>đ</span> 3,999,000</span>
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
                                    <button type="button" onclick="reduce(3)" class="reduce"><img src="img/reduce.svg"></button>
                                    <span id="quantity_3">8</span>
                                    <button type="button" onclick="increase(3)" class="increase"><img src="img/increase.svg" /></button>
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
        <section class="banner-contact">
            <div style="position: relative">
            <img src="img/BannerContact.svg" />
            <div class="btn-group">
                <button type="button" onclick="window.open('tel:0846088081');" class="call"><img src="img/IconCallBtn.svg" />GỌI NGAY</button>
                <button type="button" class="message"><img src="img/IconMessageBtn.svg" />CHAT TRỰC TIẾP</button>
            </div>
            </div>
        </section>
        <section class="feature">
            <div class="title">
                <h3>Cam Kết & Chuyên Nghiệp</h3>
                <p>Tính năng giao diện hoàn chỉnh</p>
            </div>
            <div class="intro">
                <div class="col-md-12 first">
                    <div class="col-md-3">
                        <img src="img/Rectangle 1341.png" />
                        <h4>Xem Tiến Độ <b>Trực Tiếp, Trung Thực</b></h4>
                        <p>Đội ngũ chúng tôi làm việc với nhiều năm kinh nghiệm, sẵn sàng làm hài lòng bạn đúng tiến độ</p>
                    </div>
                    <div class="col-md-3">
                        <img src="img/Rectangle 1342.png" />
                        <h4><b>Hỗ Trợ</b> Chỉnh Sửa Theo <b>Design Systems</b></h4>
                        <p>Đội ngũ chúng tôi làm việc với nhiều năm kinh nghiệm, sẵn sàng làm hài lòng bạn đúng tiến độ</p>
                    </div>
                    <div class="col-md-3">
                        <img src="img/Rectangle 1343.png" />
                        <h4>Quy Trình <b>Bài Bản</b> UX/UI <b>Chuyên Nghiệp</b></h4>
                        <p>Đội ngũ chúng tôi làm việc với nhiều năm kinh nghiệm, sẵn sàng làm hài lòng bạn đúng tiến độ</p>
                    </div>
                    <div class="col-md-3">
                        <img src="img/Rectangle 1344.png" />
                        <h4>Giao Diện <b>Dark - Light</b> Mode, <b>Reponsive</b></h4>
                        <p>Đội ngũ chúng tôi làm việc với nhiều năm kinh nghiệm, sẵn sàng làm hài lòng bạn đúng tiến độ</p>
                    </div>
                </div>
                <div class="col-md-12 second">
                    <img src="img/Frame 3610.png" />
                </div>
                <div class="col-md-12 thirty">
                    <div class="col-md-4">
                        <img src="img/Frame 3634.svg" />
                        <div class="intro">
                            <h4>Thi Công <b>Chuyên Nghiệp</b></h4>
                            <p>Đội ngũ chúng tôi làm việc với nhiều năm kinh nghiệm, sẵn sàng làm hài lòng bạn</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="img/Frame 3635.svg" />
                        <div class="intro">
                            <h4>Quy Trình <b>Bài Bản</b></h4>
                            <p>Đội ngũ chúng tôi làm việc với nhiều năm kinh nghiệm, sẵn sàng làm hài lòng bạn</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="img/Frame 3636.svg" />
                        <div class="intro">
                            <h4>Đúng Tiến Độ, <b>Kịp Thời</b></h4>
                            <p>Đội ngũ chúng tôi làm việc với nhiều năm kinh nghiệm, sẵn sàng làm hài lòng bạn</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="category">
            <div class="title">
                <h2>Đa Dạng Lĩnh Vực & Tối Ưu Doanh Nghiệp</h2>
                <p>Tính năng giao diện hoàn chỉnh</p>
            </div>
            <div class="intro">
                <ul class="cate-name">
                    <li class="active">Sản Phẩm & Dịch Vụ</li>
                    <li>CV Profile & Portfolio</li>
                    <li>Agency</li>
                    <li>Thương Mại Điện Tử</li>
                    <li>Sự Kiện & Giải Trí</li>
                    <li>Ladning Page</li>
                    <li>Tin Tức / Blogs</li>
                    <li>Sức Khoẻ & Fitness</li>
                    <li>Công nghệ</li>
                </ul>
                {{--<div class="img"></div>--}}
                <img src="img/Frame 3612.png" />
            </div>
        </section>
        <section class="banner-logo">
            <img src="img/image 129.png" />
            <img src="img/image 129.png" />
            <img src="img/image 129.png" />
            <img src="img/image 129.png" />
            <img src="img/image 129.png" />
        </section>
        <section class="security">
            {{--<img src="img/Frame 1419.png" />--}}
            <div class="img"></div>
            <div class="key">
                <div>
                    <img src="img/Group 1415.svg" />
                    <div class="intro">
                        <h3>Hoàn Tiền Trong <b>14-Ngày</b></h3>
                        <p>Thật lấy làm tiếc ! nếu chất lượng dịch vụ không tốt, chúng tôi sẽ hoàn tiền cho bạn trong 14 ngày kể từ khi bắt đầu công việc.</p>
                    </div>
                </div>
                <div>
                    <img src="img/Group 1416.svg" />
                    <div class="intro">
                        <h3>Bảo Mật An Toàn</h3>
                        <p>Thông tin của bạn là bất khả xâm phạm, chúng tôi bảo vệ chúng một cách tuyệt đối</p>
                    </div>
                </div>
                <div>
                    <img src="img/Group 1417.svg" />
                    <div class="intro">
                        <h3>Thanh Toán</h3>
                        <p>Chúng tôi chấp nhận thanh toán với nhiều hình thức khác nhau</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="carousel"></section>
        <section class="thanks">
            <div class="description">
                <div class="title">
                    <h3>Cảm ơn<br/> Quý Khách</h3>
                    <p>Biết ơn vì sự tin tưởng và thời gian của bạn, chúng tôi sẽ làm việc hết mình !</p>
                </div>
                <div class="btn-group">
                    <button type="button" class="price"><img src="img/IconPrice.svg"/>BẢNG GIÁ</button>
                    <button type="button" class="chat"><img src="img/IconMessageBtn.svg"/>CHAT TRỰC TIẾP</button>
                </div>
            </div>
            <img src="img/2021-08-31.png" />
        </section>
        <section class="footer">
            <div>
                <div class="left">
                    <div class="description">
                        <div class="title">
                            <img src="img/Group.svg" />
                            <h3>Digital Academy <br/>
                                Học Viện Thực Chiến </h3>
                        </div>
                        <p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the”.</p>
                    </div>
                    <div class="society">
                        <div class="icon">
                            <img src="img/IconFB.svg" />
                            <img src="img/IconFB.svg" />
                            <img src="img/IconFB.svg" />
                            <img src="img/IconFB.svg" />
                            <img src="img/IconFB.svg" />
                            <img src="img/IconFB.svg" />
                        </div>
                        <p>Digital Academy. All Right Reserved</p>
                    </div>
                </div>
                <div class="right">
                    <div class="register">
                        <h3>Đăng Ký Với Chúng Tôi</h3>
                        <input type="text" class="email" placeholder="Địa chỉ email của bạn" />
                        <button type="button" class="btn-register">Đăng ký</button>
                        <p>Khi điền địa chỉ email, bạn đồng ý với các điều khoản của chúng tôi <b>Terms & Conditions</b> and <b>Privacy Policy</b></p>
                    </div>
                    <div class="contact">
                        <h3>Liên Hệ</h3>
                        <div>
                            <div class="phone">
                                <img src="img/IconPhone.svg" />
                                <span>(+84) 0846 088 081</span>
                            </div>
                            <div class="email">
                                <img src="img/IconEmail.svg" />
                                <span>Thietke.huutri@gmail.com</span>
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
