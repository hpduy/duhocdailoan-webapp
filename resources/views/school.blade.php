@extends('template.layout')
@section('header_script') 
<link rel="stylesheet" type="text/css" href="{{asset('styles/courses.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/courses_responsive.css')}}">
@stop
@section('content') 
<!-- Home -->

<div class="home">
  
</div>			
</div>
<!-- Courses -->

<div class="courses">
    <div class="container">
        <div class="row">

            <!-- Courses Main Content -->
            <div class="col-lg-8">
                <div class="courses_search_container">
                    <form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
                        <input type="search" class="courses_search_input" placeholder="Tìm theo tên trường" required="required">
                        <select id="courses_search_select" class="courses_search_select courses_search_input">
                            <option>Các bậc học</option>
                            <option>Sau đại học</option>
                            <option>Đại học</option>
                            <option>Cao đẳng</option>
                        </select>
                        <button action="submit" class="courses_search_button ml-auto">Tìm ngay</button>
                    </form>
                </div>
                <div class="courses_container">
                    <div class="row courses_row">

                        <!-- Course -->
                        <div class="col-lg-6 course_col">
                            <div class="course">
                                <div class="course_image"><img src="images/course_4.jpg" alt=""></div>
                                <div class="course_body">
                                    <h3 class="course_title"><a href="course.html">Software Training</a></h3>
                                    <div class="course_teacher">Mr. John Taylor</div>
                                    <div class="course_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                    </div>
                                </div>
                                <div class="course_footer">
                                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_info">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            <span>20 Student</span>
                                        </div>
                                        <div class="course_info">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span>5 Ratings</span>
                                        </div>
                                        <div class="course_price ml-auto">$130</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course -->
                        <div class="col-lg-6 course_col">
                            <div class="course">
                                <div class="course_image"><img src="images/course_5.jpg" alt=""></div>
                                <div class="course_body">
                                    <h3 class="course_title"><a href="course.html">Developing Mobile Apps</a></h3>
                                    <div class="course_teacher">Ms. Lucius</div>
                                    <div class="course_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                    </div>
                                </div>
                                <div class="course_footer">
                                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_info">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            <span>20 Student</span>
                                        </div>
                                        <div class="course_info">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span>5 Ratings</span>
                                        </div>
                                        <div class="course_price ml-auto">Free</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course -->
                        <div class="col-lg-6 course_col">
                            <div class="course">
                                <div class="course_image"><img src="images/course_6.jpg" alt=""></div>
                                <div class="course_body">
                                    <h3 class="course_title"><a href="course.html">Starting a Startup</a></h3>
                                    <div class="course_teacher">Mr. Charles</div>
                                    <div class="course_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                    </div>
                                </div>
                                <div class="course_footer">
                                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_info">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            <span>20 Student</span>
                                        </div>
                                        <div class="course_info">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span>5 Ratings</span>
                                        </div>
                                        <div class="course_price ml-auto"><span>$320</span>$220</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course -->
                        <div class="col-lg-6 course_col">
                            <div class="course">
                                <div class="course_image"><img src="images/course_7.jpg" alt=""></div>
                                <div class="course_body">
                                    <h3 class="course_title"><a href="course.html">Learn Basic German Fast</a></h3>
                                    <div class="course_teacher">Mr. John Taylor</div>
                                    <div class="course_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                    </div>
                                </div>
                                <div class="course_footer">
                                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_info">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            <span>20 Student</span>
                                        </div>
                                        <div class="course_info">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span>5 Ratings</span>
                                        </div>
                                        <div class="course_price ml-auto">$130</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course -->
                        <div class="col-lg-6 course_col">
                            <div class="course">
                                <div class="course_image"><img src="images/course_8.jpg" alt=""></div>
                                <div class="course_body">
                                    <h3 class="course_title"><a href="course.html">Business Groud Up</a></h3>
                                    <div class="course_teacher">Ms. Lucius</div>
                                    <div class="course_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                    </div>
                                </div>
                                <div class="course_footer">
                                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_info">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            <span>20 Student</span>
                                        </div>
                                        <div class="course_info">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span>5 Ratings</span>
                                        </div>
                                        <div class="course_price ml-auto">Free</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course -->
                        <div class="col-lg-6 course_col">
                            <div class="course">
                                <div class="course_image"><img src="images/course_9.jpg" alt=""></div>
                                <div class="course_body">
                                    <h3 class="course_title"><a href="course.html">Java Technology</a></h3>
                                    <div class="course_teacher">Mr. Charles</div>
                                    <div class="course_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                                    </div>
                                </div>
                                <div class="course_footer">
                                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_info">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            <span>20 Student</span>
                                        </div>
                                        <div class="course_info">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span>5 Ratings</span>
                                        </div>
                                        <div class="course_price ml-auto"><span>$320</span>$220</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row pagination_row">
                        <div class="col">
                            <div class="pagination_container d-flex flex-row align-items-center justify-content-start">
                                <ul class="pagination_list">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="courses_show_container ml-auto clearfix">
                                    <div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
                                    <div class="courses_show_content">
                                        <span>Show: </span>
                                        <select id="courses_show_select" class="courses_show_select">
                                            <option>06</option>
                                            <option>12</option>
                                            <option>24</option>
                                            <option>36</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Courses Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">

                    <!-- Categories -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Ngành học</div>
                        <div class="sidebar_categories">
                            <ul>
                                <li><a href="#">Art & Design</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">IT & Software</a></li>
                                <li><a href="#">Languages</a></li>
                                <li><a href="#">Programming</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Latest Course -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Đang tuyển sinh</div>
                        <div class="sidebar_latest">

                            <!-- Latest Course -->
                            <div class="latest d-flex flex-row align-items-start justify-content-start">
                                <div class="latest_image"><div><img src="images/latest_1.jpg" alt=""></div></div>
                                <div class="latest_content">
                                    <div class="latest_title"><a href="course.html">How to Design a Logo a Beginners Course</a></div>
                                    <div class="latest_price">Free</div>
                                </div>
                            </div>

                            <!-- Latest Course -->
                            <div class="latest d-flex flex-row align-items-start justify-content-start">
                                <div class="latest_image"><div><img src="images/latest_2.jpg" alt=""></div></div>
                                <div class="latest_content">
                                    <div class="latest_title"><a href="course.html">Photography for Beginners Masterclass</a></div>
                                    <div class="latest_price">$170</div>
                                </div>
                            </div>

                            <!-- Latest Course -->
                            <div class="latest d-flex flex-row align-items-start justify-content-start">
                                <div class="latest_image"><div><img src="images/latest_3.jpg" alt=""></div></div>
                                <div class="latest_content">
                                    <div class="latest_title"><a href="course.html">The Secrets of Body Language</a></div>
                                    <div class="latest_price">$220</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Gallery -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Hoạt động</div>
                        <div class="sidebar_gallery">
                            <ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="images/gallery_1_large.jpg">
                                        <img src="images/gallery_1.jpg" alt="">
                                    </a>
                                </li>
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="images/gallery_2_large.jpg">
                                        <img src="images/gallery_2.jpg" alt="">
                                    </a>
                                </li>
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="images/gallery_3_large.jpg">
                                        <img src="images/gallery_3.jpg" alt="">
                                    </a>
                                </li>
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="images/gallery_4_large.jpg">
                                        <img src="images/gallery_4.jpg" alt="">
                                    </a>
                                </li>
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="images/gallery_5_large.jpg">
                                        <img src="images/gallery_5.jpg" alt="">
                                    </a>
                                </li>
                                <li class="gallery_item">
                                    <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                    <a class="colorbox" href="images/gallery_6_large.jpg">
                                        <img src="images/gallery_6.jpg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Thẻ đánh dấu</div>
                        <div class="sidebar_tags">
                            <ul class="tags_list">
                                <li><a href="#">creative</a></li>
                                <li><a href="#">unique</a></li>
                                <li><a href="#">photography</a></li>
                                <li><a href="#">ideas</a></li>
                                <li><a href="#">wordpress</a></li>
                                <li><a href="#">startup</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Banner -->
                    <div class="sidebar_section">
                        <div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="sidebar_banner_background" style="background-image:url(images/banner_1.jpg)"></div>
                            <div class="sidebar_banner_overlay"></div>
                            <div class="sidebar_banner_content">
                                <div class="banner_title">Tư vấn miễn phí</div>
                                <div class="banner_button"><a href="#">Liên hệ ngay</a></div>
                            </div>
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
<script src="{{asset('plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('js/courses.js')}}"></script>
@stop