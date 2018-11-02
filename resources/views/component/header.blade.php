<!--Header -->
<header class = "header">
    <!--Top Bar -->
    <div class = "top_bar">
        <div class = "top_bar_container">
            <div class = "container">
                <div class = "row">
                    <div class = "col">
                        <div class = "top_bar_content d-flex flex-row align-items-center justify-content-start">
                            <ul class = "top_bar_contact_list">
                                <li><div class = "question">Liên hệ với chúng tôi</div></li>
                                <li>
                                    <i class = "fa fa-phone" aria-hidden = "true"></i>
                                    <div>001-1234-88888</div>
                                </li>
                                <li>
                                    <i class = "fa fa-envelope-o" aria-hidden = "true"></i>
                                    <div>duhocdailoandahe@gmail.com</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header Content -->
    <div class = "header_container">
        <div class = "container">
            <div class = "row">
                <div class = "col">
                    <div class = "header_content d-flex flex-row align-items-center justify-content-start">
                        <div class = "logo_container">
                            <a href = "#">
                                <div class = "logo_text">Du học <span>Đài Loan</span></div>
                            </a>
                        </div>
                        <nav class = "main_nav_contaner ml-auto">
                            <ul class = "main_nav">
                                <li class = "{{ (\Request::route()->getName() == 'home') ? 'active' : '' }}"><a href = "{{route("home")}}">Trang chủ</a></li>
                                <li class = "{{ (\Request::route()->getName() == 'about') ? 'active' : '' }}"><a href = "{{route("about")}}">Giới thiệu</a></li>
                                <li class = "{{ (\Request::route()->getName() == 'school') ? 'active' : '' }}"><a href = "{{route("school")}}">Danh sách trường</a></li>
                                <li class = "{{ (\Request::route()->getName() == 'news') ? 'active' : '' }}"><a href = "{{route("news")}}">Tin tức</a></li>
                                <li class = "{{ (\Request::route()->getName() == 'event') ? 'active' : '' }}"><a href = "{{route("event")}}">Sự kiện</a></li>
                                <li class = "{{ (\Request::route()->getName() == 'contact') ? 'active' : '' }}"><a href = "{{route("contact")}}">Liên hệ</a></li>
                            </ul>
                            <div class = "search_button"><i class = "fa fa-search" aria-hidden = "true"></i></div>

                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header Search Panel -->
    <div class = "header_search_container">
        <div class = "container">
            <div class = "row">
                <div class = "col">
                    <div class = "header_search_content d-flex flex-row align-items-center justify-content-end">
                        <form action = "#" class = "header_search_form">
                            <input type = "search" class = "search_input" placeholder = "Tìm kiếm" required = "required">
                            <button class = "header_search_button d-flex flex-column align-items-center justify-content-center">
                                <i class = "fa fa-search" aria-hidden = "true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

