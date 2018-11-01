@extends('template.layout')
@section('header_script') 
<link rel="stylesheet" type="text/css" href="{{asset('styles/contact.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/contact_responsive.css')}}">
@stop
@section('content') 
<!-- Contact -->
<div class="contact">

    <!-- Contact Map -->

    <div class="contact_map">

        <!-- Google Map -->

        <div class="map">
            <div id="google_map" class="google_map">
                <div class="map_container">
                    <div id="map"></div>
                </div>
            </div>
        </div>

    </div>

    <!-- Contact Info -->

    <div class="contact_info_container">
        <div class="container">
            <div class="row">

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact_form">
                        <div class="contact_info_title">Liên hệ chúng tôi</div>
                        <form action="#" class="comment_form">
                            <div>
                                <div class="form_title">Họ và tên</div>
                                <input type="text" class="comment_input" required="required">
                            </div>
                            <div>
                                <div class="form_title">Email</div>
                                <input type="text" class="comment_input" required="required">
                            </div>
                            <div>
                                <div class="form_title">Lời nhắn</div>
                                <textarea class="comment_input comment_textarea" required="required"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="comment_button trans_200">Gửi ngay</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-6">
                    <div class="contact_info">
                        <div class="contact_info_title">Thông tin liên lạc</div>
                        <div class="contact_info_text">
                            <p>Nếu bạn cần tư vấn rõ ràng cho kế hoạch tương lai của mình xin hãy đến địa chỉ phía dưới để nhận được sự hỗ trợ hoàn toàn miễn phí từ phía chúng tôi.</p>
                        </div>
                        <div class="contact_info_location">
                            <div class="contact_info_location_title">Văn phòng Hồ Chí Minh, Việt Nam</div>
                            <ul class="location_list">
                                <li>Đồ Sơn, Tân Bình, HCM, Việt Nam</li>
                                <li>1-234-567-89011</li>
                                <li>duhocdailoandahe@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('footer_script') 
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrhsfnev_H1mGvAZUBiLxt3Uc574FSjDw&callback=initMap">
</script>
<script src="{{asset('js/contact.js')}}"></script>
@stop