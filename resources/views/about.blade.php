@extends('template.layout')
@section('header_script') 
<link rel="stylesheet" type="text/css" href="{{asset('styles/about.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/about_responsive.css')}}">
@stop
@section('content') 

<div class="home">

</div>
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Chào mừng đến với trung tâm tư vấn Du học Đài Loan Đa Hệ</h2>
                    <div class="section_subtitle"><p>Hãy để chúng tôi mang tương lai đến gần bạn</p></div>
                </div>
            </div>
        </div>
        <div class="row about_row">

            <!-- About Item -->
            <div class="col-lg-4 about_col about_col_left">
                <div class="about_item">
                    <div class="about_item_image"><img src="images/about_1.jpg" alt=""></div>
                    <div class="about_item_title"><a href="#">Sơ lược</a></div>
                    <div class="about_item_text">
                        <p>Du học ĐLĐH một trong những đơn vị tiên phong có chương trình du học Đài Loan thu hút sự quan tâm và nhận được sự tin tưởng của nhiều phụ huynh – học sinh</p>
                    </div>
                </div>
            </div>

            <!-- About Item -->
            <div class="col-lg-4 about_col about_col_middle">
                <div class="about_item">
                    <div class="about_item_image"><img src="images/about_2.jpg" alt=""></div>
                    <div class="about_item_title"><a href="#">Nhiệm vụ</a></div>
                    <div class="about_item_text">
                        <p> Chúng tôi tư vấn hướng dẫn các thủ tục xin visa du học Đài Loan như du học tiếng, đại học, thạc sĩ và tiến sĩ, đặc biệt là tư vấn học bổng du học Đài Loan</p>
                    </div>
                </div>
            </div>

            <!-- About Item -->
            <div class="col-lg-4 about_col about_col_right">
                <div class="about_item">
                    <div class="about_item_image"><img src="images/about_3.jpg" alt=""></div>
                    <div class="about_item_title"><a href="#">Tầm nhìn</a></div>
                    <div class="about_item_text">
                        <p>Năm 2015 có 110.000 sinh viên quốc tế du học Đài Loan, chiếm 8.27% tổng số sinh viên. Chính phủ Đài Loan đặt kế hoạch thu hút 150.000 sinh viên quốc tế vào năm 2021 tới.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Feature -->

<div class="feature">
    <div class="feature_background" style="background-image:url(images/courses_background.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Tại sao bạn nên lựa chọn chúng tôi</h2>
                    <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
                </div>
            </div>
        </div>
        <div class="row feature_row">
            <!-- Feature Content -->
            <div class="col-lg-6 feature_col">
                <div class="feature_content">
                    <!-- Accordions -->
                    <div class="accordions">

                        <div class="elements_accordions">

                            <div class="accordion_container">
                                <div class="accordion d-flex flex-row align-items-center"><div>Award for Best School 2017</div></div>
                                <div class="accordion_panel">
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>

                            <div class="accordion_container">
                                <div class="accordion d-flex flex-row align-items-center active"><div>You’re learning from the best.</div></div>
                                <div class="accordion_panel">
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>

                            <div class="accordion_container">
                                <div class="accordion d-flex flex-row align-items-center"><div>Our degrees are recognized worldwide.</div></div>
                                <div class="accordion_panel">
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>

                            <div class="accordion_container">
                                <div class="accordion d-flex flex-row align-items-center"><div>We encourage our students to go global.</div></div>
                                <div class="accordion_panel">
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Accordions End -->
                </div>
            </div>

            <!-- Feature Video -->
            <div class="col-lg-6 feature_col">
                <div class="feature_video d-flex flex-column align-items-center justify-content-center">
                    <div class="feature_video_background" style="background-image:url(images/video.jpg)"></div>
                    <a class="vimeo feature_video_button" href="https://player.vimeo.com/video/99340873?title=0" title="OH, PORTUGAL - IN 4K - Basti Hansen - Stock Footage">
                        <img src="images/play.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('component.request')
<!-- Partners -->

<div class="partners">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="partners_slider_container">
                    <div class="owl-carousel owl-theme partners_slider">

                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="images/logos/1.jpg" alt=""></div>

                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="images/logos/2.jpg" alt=""></div>

                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="images/logos/3.png" alt=""></div>

                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="images/logos/4.gif" alt=""></div>

                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="images/logos/5.png" alt=""></div>

                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="images/logos/6.png" alt=""></div>
                        
                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="images/logos/7.png" alt=""></div>
                        
                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="images/logos/8.png" alt=""></div>
                        
                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="images/logos/9.jpg" alt=""></div>
                        
                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="images/logos/10.jpg" alt=""></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('footer_script') 
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('js/about.js')}}"></script>
@stop