@extends('template.layout')
@section('content') 

<!-- Home -->

<div class="home">
    <div class="home_slider_container">
        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <!-- Home Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url(images/home_slider/1.jpg)"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="home_slider_title">Du học Đài Loan chất lượng cao</div>
                                <div class="home_slider_subtitle">Tương lai nằm trong tầm tay bạn!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Home Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url(images/home_slider/2.jpg)"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="home_slider_title">Du học Đài Loan chất lượng cao</div>
                                <div class="home_slider_subtitle">Tương lai nằm trong tầm tay bạn!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Home Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url(images/home_slider/3.jpg)"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="home_slider_title">Du học Đài Loan chất lượng cao</div>
                                <div class="home_slider_subtitle">Tương lai nằm trong tầm tay bạn!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Slider Nav -->

    <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>

<!-- Features -->

<div class="features">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Chào mừng đến với trung tâm tư vấn Du học Đài Loan Đa Hệ</h2>
                    <div class="section_subtitle"><p>Hãy để chúng tôi mang tương lai đến gần bạn</p></div>
                </div>
            </div>
        </div>
        <div class="row features_row">

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="images/icon_1.png" alt=""></div>
                    <h3 class="feature_title">Quy trình</h3>
                    <div class="feature_text"><p>Quy trình hồ sơ rỗ ràng mình bạch</p></div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
                    <h3 class="feature_title">Kinh nghiệm du học</h3>
                    <div class="feature_text"><p>Nhiều kinh nghiệm được chia sẽ bởi các du học sinh</p></div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
                    <h3 class="feature_title">Visa</h3>
                    <div class="feature_text"><p>Trung tâm sẽ hỗ trợ bạn làm visa nhanh chóng</p></div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
                    <h3 class="feature_title">Thông tin học bổng</h3>
                    <div class="feature_text"><p>Danh sách các học bổng các trường hàng đầu Đài Loan</p></div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Popular Courses -->

<div class="courses">
    <div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Các trường đang tuyển sinh</h2>
                    <div class="section_subtitle"><p>Danh sách các trường đang tuyển sinh trong kì nhập học sắp tới </p></div>
                </div>
            </div>
        </div>
        <div class="row courses_row">

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="images/school/school_1.jpg" alt=""></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="course.html">ĐH Khoa học và Công Nghệ Đức Minh</a></h3>
                        <div class="course_teacher">Đài Bắc</div>
                        <div class="course_text">
                            <p>Hệ vừa học vừa làm.Nhà trường liên kết trực tiếp với doanh nghiệp, sắp xếp nơi thực tập cho học sinh trong suốt 4 năm học.</p>
                        </div>
                    </div>
                    <div class="course_footer">
                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                            <div class="course_info">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>Số lượng 100</span>
                            </div>
                            <div class="course_info">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5/5</span>
                            </div>
                            <div class="course_price ml-auto">4/2019</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="images/school/school_2.jpg" alt=""></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="course.html">ĐH Khoa học và Công Nghệ Long Hoa</a></h3>
                        <div class="course_teacher">Đài Bắc</div>
                        <div class="course_text">
                            <p>Hệ vừa học vừa làm.Nhà trường liên kết trực tiếp với doanh nghiệp, sắp xếp nơi thực tập cho học sinh trong suốt 4 năm học</p>
                        </div>
                    </div>
                    <div class="course_footer">
                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                            <div class="course_info">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>Số lượng 160 </span>
                            </div>
                            <div class="course_info">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5/5</span>
                            </div>
                            <div class="course_price ml-auto">10/2018</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="images/school/school_3.jpg" alt=""></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="course.html">ĐH Khoa học và Công Nghệ Tỉnh Ngô</a></h3>
                        <div class="course_teacher">Đài Bắc</div>
                        <div class="course_text">
                            <p>Hệ vừa học vừa làm.Nhà trường liên kết trực tiếp với doanh nghiệp, sắp xếp nơi thực tập cho học sinh trong suốt 4 năm học.</p>
                        </div>
                    </div>
                    <div class="course_footer">
                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                            <div class="course_info">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>Số lượng 80</span>
                            </div>
                            <div class="course_info">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5/5</span>
                            </div>
                            <div class="course_price ml-auto"><span>10/2018</span>4/2019</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="courses_button trans_200"><a href="#">Xem thêm các trường</a></div>
            </div>
        </div>
    </div>
</div>

@include('component.request')
<!-- Events -->

<div class="events">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Sự kiện sắp tới</h2>
                    <div class="section_subtitle"><p>Hãy tự trải nghiệm và giải đáp thắc mắc của các bạn bằng cách tham gia sự kiện tư vấn chúng tôi tổ chức</p></div>
                </div>
            </div>
        </div>
        <div class="row events_row">

            <!-- Event -->
            <div class="col-lg-4 event_col">
                <div class="event event_left">
                    <div class="event_image"><img src="images/event_1.jpg" alt=""></div>
                    <div class="event_body d-flex flex-row align-items-start justify-content-start">
                        <div class="event_date">
                            <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                <div class="event_day trans_200">21</div>
                                <div class="event_month trans_200">Aug</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Làm sao du học với tài chính eo hẹp?</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 - 19.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Hồ Chí Minh</span></div>
                                <div class="event_text">
                                    <p>Policy analysts generally agree on a need for reform, but not on which path...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event -->
            <div class="col-lg-4 event_col">
                <div class="event event_mid">
                    <div class="event_image"><img src="images/event_2.jpg" alt=""></div>
                    <div class="event_body d-flex flex-row align-items-start justify-content-start">
                        <div class="event_date">
                            <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                <div class="event_day trans_200">27</div>
                                <div class="event_month trans_200">Aug</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Vay tài chính du học dễ hay khó</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>09.00 - 17.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Bến Ninh Kiều</span></div>
                                <div class="event_text">
                                    <p>This Consumer Action News issue covers topics now being debated before...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event -->
            <div class="col-lg-4 event_col">
                <div class="event event_right">
                    <div class="event_image"><img src="images/event_3.jpg" alt=""></div>
                    <div class="event_body d-flex flex-row align-items-start justify-content-start">
                        <div class="event_date">
                            <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                <div class="event_day trans_200">01</div>
                                <div class="event_month trans_200">Sep</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Xác định con đường du học của bạn như thế nào?</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>13.00 - 18.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 Rex Hotel</span></div>
                                <div class="event_text">
                                    <p>Policy analysts generally agree on a need for reform, but not on which path...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Team -->

<div class="team">
    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Các du học sinh nói gì về chúng tôi</h2>
                    <div class="section_subtitle"><p>Lắng nghe những người đi trước nói gì</p></div>
                </div>
            </div>
        </div>
        <div class="row team_row">

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_1.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Jacke Masito</a></div>
                        <div class="team_subtitle">Tổng quản hậu cung</div>
                        <div class="social_list">
                            <h5>"Trung tâm này tuyệt con mẹ nó vời"</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_2.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">William James</a></div>
                        <div class="team_subtitle">Young Pilot</div>
                        <div class="social_list">
                            <h5>"Du học đi các anh em ei"</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_3.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">John Tyler</a></div>
                        <div class="team_subtitle">Tiến sĩ tay vịn</div>
                        <div class="social_list">
                            <h5>"Chị qua Đài là chị lên luông"</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_4.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Veronica Vahn</a></div>
                        <div class="team_subtitle">Người trong Ngành</div>
                        <div class="social_list">
                            <h5>"Đéo gì có thể diễn tả. PHÊ!"</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Latest News -->

<div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Nhật ký du học</h2>
                    <div class="section_subtitle"><p>Các du học sinh đã trải nghiệm như thế nào ở nước bạn. Hãy lắng nghe họ chia sẽ những khoảng khắc trong thời gian du học</p></div>
                </div>
            </div>
        </div>
        <div class="row news_row">
            <div class="col-lg-7 news_col">

                <!-- News Post Large -->
                <div class="news_post_large_container">
                    <div class="news_post_large">
                        <div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
                        <div class="news_post_large_title"><a href="blog_single.html">Nhưng nơi bạn nên đến một lần ở Đài Bắc</a></div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">Huyền Chip</a></li>
                                <li><a href="#"> 11 Tháng 3 2018</a></li>
                            </ul>
                        </div>
                        <div class="news_post_text">
                            <p>Linh ta linh tinh, chẳng biết ghi mẹ gì cho nó dài ra nữa, mệt mõi vkl, dm dài ra nào dài ra dài ra dài ra dài ra nữaaa...</p>
                        </div>
                        <div class="news_post_link"><a href="blog_single.html">Xem thêm</a></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 news_col">
                <div class="news_posts_small">

                    <!-- News Posts Small -->
                    <div class="news_post_small">
                        <div class="news_post_small_title"><a href="blog_single.html">Ngắm anh đào ở thủ đô Đài Loan (Xuân 2017 - 2018)</a></div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">Sơn Tùng MTP</a></li>
                                <li><a href="#">14 Tháng 2 2017</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- News Posts Small -->
                    <div class="news_post_small">
                        <div class="news_post_small_title"><a href="blog_single.html">Mùa thu vàng của du học sinh Đài (Thu Cuối 2017)</a></div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">Yanbi</a></li>
                                <li><a href="#">11 Tháng 11 2017</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- News Posts Small -->
                    <div class="news_post_small">
                        <div class="news_post_small_title"><a href="blog_single.html">Việc làm thêm có thực sự khó kiếm?</a></div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">Hà Thiên Lộn</a></li>
                                <li><a href="#">9 Tháng 12 2017</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop