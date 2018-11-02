@extends('template.layout')
@section('content') 

<!-- Home -->

<div class="home">
    <div class="home_slider_container">
        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <!-- Home Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url(images/home_slider/cover1.jpg)"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="home_slider_title">Du học Đài Loan chất lượng cao</div>
                                <div class="home_slider_subtitle">"Chung tay thắp sáng tương lai bạn!"</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Home Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url(images/home_slider/cover2.jpg)"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="home_slider_title">Du học tiếng Hoa  </div>
                                <div class="home_slider_subtitle">Học tại các trường hàng đầu</div>
                                <div class="home_slider_subtitle">Hệ vừa học vừa làm</div>
                                <div class="home_slider_subtitle">Tiếp xúc với doanh nghiệp trong thời gian học </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Home Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url(images/home_slider/cover3.jpg)"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="home_slider_title">Du học đảm bảo </div>
                                <div class="home_slider_subtitle">Tư vấn hồ sơ</div>
                                <div class="home_slider_subtitle">Định hướng nghề nghiệp</div>
                                <div class="home_slider_subtitle">Hỗ trợ tận tâm</div>
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
                    <h3 class="feature_title">Quy trình minh bạch</h3>
                    <div class="feature_text"><p>Quy trình làm hồ sơ rỗ ràng mình bạch từ lúc bắt đầu cho đến khi nhập học.</p></div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
                    <h3 class="feature_title">Kinh nghiệm du học</h3>
                    <div class="feature_text"><p>Nhiều kinh nghiệm được chia sẽ bởi các du học sinh đi trước.</p></div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
                    <h3 class="feature_title">Visa</h3>
                    <div class="feature_text"><p>Tư vấn và hỗ trợ bạn làm visa nhanh chóng và đảm bảo.</p></div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
                    <h3 class="feature_title">Thông tin học bổng</h3>
                    <div class="feature_text"><p>Câp nhật thông tin học bổng mới nhất tại các trường hàng đầu.</p></div>
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
                    <div class="course_image"><img style="width: 500px; height: 200px " src="images/school/school_1.jpg" alt=""></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="course.html">ĐH Khoa học và Công Nghệ Đức Minh</a></h3>
                        <div class="course_teacher">Đài Bắc</div>
                        <div class="course_text">
                            <p>Hệ vừa học vừa làm. Nhà trường liên kết trực tiếp với doanh nghiệp, sắp xếp nơi thực tập cho học sinh trong suốt 4 năm học.</p>
                        </div>
                    </div>
                    <div class="course_footer">
                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                            <div class="course_info">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>Số lượng không giới hạn</span>
                            </div>
                            
                            <div class="course_price ml-auto">9/2018</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img  style="width: 500px; height: 200px "src="images/school/school_2.jpg" alt=""></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="course.html">ĐH Khoa học và Công Nghệ Long Hoa</a></h3>
                        <div class="course_teacher">Đào Viên</div>
                        <div class="course_text">
                            <p>Hệ vừa học vừa làm. Nhà trường liên kết trực tiếp với doanh nghiệp, sắp xếp nơi thực tập cho học sinh trong suốt 4 năm học</p>
                        </div>
                    </div>
                    <div class="course_footer">
                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                            <div class="course_info">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>Số lượng không giới hạn </span>
                            </div>
                            <div class="course_price ml-auto">9/2018</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img style="width: 500px; height: 200px" src="images/school/school_3.jpg" alt=""></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="course.html">ĐH Khoa học và Công Nghệ Tỉnh Ngô</a></h3>
                        <div class="course_teacher">Đài Bắc</div>
                        <div class="course_text">
                            <p>Hệ vừa học vừa làm. Nhà trường liên kết trực tiếp với doanh nghiệp, sắp xếp nơi thực tập cho học sinh trong suốt 4 năm học.</p>
                        </div>
                    </div>
                    <div class="course_footer">
                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                            <div class="course_info">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>Số lượng không giới hạn</span>
                            </div>
                            <div class="course_price ml-auto">9/2018</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="courses_button trans_200"><a href="{{route("school")}}">Xem thêm các trường</a></div>
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
                                <div class="event_month trans_200">Tháng 8</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Hội thảo du học Đài Loan</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 - 19.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Hồ Chí Minh</span></div>
                                <div class="event_text">
                                    <p>Tìm hiểu về chương trình đào tạo và điều kiện cần có để du học Đài Loan </p>
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
                                <div class="event_month trans_200">Tháng 7</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Chuẩn bị hành trang khi du học Đài</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>09.00 - 17.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Hồ Chí Minh</span></div>
                                <div class="event_text">
                                    <p>Những việc cần biết và cần chuẩn bị trước khi nhập học ở Đài Loan</p>
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
                                <div class="event_month trans_200">Tháng 7</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Xác định con đường du học của bạn như thế nào?</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>13.00 - 18.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Hồ Chí Minh</span></div>
                                <div class="event_text">
                                    <p>Tư vấn định hướng nghề nghiệp và chọn trường du học</p>
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
                    <div class="section_subtitle"><p> Hãy lắng nghe những người đi trước nói gì</p></div>
                </div>
            </div>
        </div>
        <div class="row team_row">

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_1.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Nguyễn An</a></div>
                        <div class="team_subtitle">Cựu học sinh trường Tỉnh Ngô</div>
                        <div class="social_list">
                            <h5>"Đài Loan là một đất nước tuyệt vời để học tập và du lịch"</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_2.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Hoàng Tôn</a></div>
                        <div class="team_subtitle">Cựu học sinh trường Đức Minh</div>
                        <div class="social_list">
                            <h5>"Vừa học vừa làm giúp mình áp dụng được kiến thức vào thực tế"</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_3.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Thùy Linh</a></div>
                        <div class="team_subtitle">Cựu học sinh trường Long Hoa</div>
                        <div class="social_list">
                            <h5>"Trung tâm đã hỗ trợ nhiệt tình và định hướng rõ ràng cho mình"</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_4.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Đỗ Quyên</a></div>
                        <div class="team_subtitle">Cựu học sinh trường Tỉnh Ngô</div>
                        <div class="social_list">
                            <h5>"Được sự hỗ trợ từ trung tâm mình đã hoàn thành ước mơ của mình"</h5>
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
                    <h2 class="section_title">Tin tức</h2>
                    <div class="section_subtitle"><p>Chia sẽ các kinh nghiệm và thông tin về hòn đảo ngọc Đài Loan</p></div>
                </div>
            </div>
        </div>
        <div class="row news_row">
            <div class="col-lg-7 news_col">

                <!-- News Post Large -->
                <div class="news_post_large_container">
                    <div class="news_post_large">
                        <div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
                        <div class="news_post_large_title"><a href="blog_single.html">Vì sao nên chọn du học Đài Loan?</a></div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">Tổng quan du học Đài Loan</a></li>
                                <li><a href="#"> 11 Tháng 8, 2018</a></li>
                            </ul>
                        </div>
                        <div class="news_post_text">
                            <p>Đài Loan cùng với Singapore, Hàn Quốc và Hồng Kông được mệnh danh là bốn con hổ châu Á nhờ những kỳ tích phát triển kinh tế thần kỳ trong những thập kỷ gần đây. Thành công đó có sự đóng góp không nhỏ từ nguồn nhân lực được đào tạo bài bản, chất lượng. </p>
                        </div>
                        <div class="news_post_link"><a href="#">Xem thêm</a></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 news_col">
                <div class="news_posts_small">

                    <!-- News Posts Small -->
                    <div class="news_post_small">
                        <div class="news_post_small_title"><a href="blog_single.html">Đất nước và con người Đài Loan</a></div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">Tổng quan du học Đài Loan</a></li>
                                <li><a href="#">14 Tháng 7, 2018</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- News Posts Small -->
                    <div class="news_post_small">
                        <div class="news_post_small_title"><a href="blog_single.html">Hệ thống giáo dục Đài Loan</a></div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">Tổng quan du học Đài Loan</a></li>
                                <li><a href="#">11 Tháng 5, 2018</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- News Posts Small -->
                    <div class="news_post_small">
                        <div class="news_post_small_title"><a href="blog_single.html">Điều kiện và chi phí du học Đài Loan</a></div>
                        <div class="news_post_meta">
                            <ul>
                                <li><a href="#">Tổng quan du học Đài Loan</a></li>
                                <li><a href="#">9 Tháng 12, 2017</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop