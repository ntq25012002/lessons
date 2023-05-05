<header>
    <div id="header-sticky" class="header__area header__transparent">
        <div class="header__bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-6 col-6">
                        <div class="header__bottom-left d-flex align-items-center">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{asset('client/assets/img/logo/logo-2.png')}}" alt="logo">
                                </a>
                            </div>
                            <div class="main-menu main-menu-2 main-menu-border ml-30 pl-30">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li >
                                            <a href="{{route('home')}}">Trang chủ</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="index.html">Home Style 1</a></li>
                                                <li><a href="index-2.html">Home Style 2</a></li>
                                                <li><a href="index-3.html">Home Style 3</a></li>
                                            </ul> --}}
                                        </li>
                                        <li>
                                            <a href="{{route('about')}}">Giới thiệu</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="course-v1.html">Khóa học</a>
                                            <ul class="submenu">
                                                <li><a href="course-v1.html">Lập trình</a></li>
                                                <li><a href="course-v2.html">Thiết kế</a></li>
                                                <li><a href="{{route('list-course')}}">Danh sách khóa học</a></li>
                                                <li><a href="{{route('course-detail',['slug' => 'lap-trinh'])}}">Chi tiết khóa học</a></li>
                                                <li><a href="course-sidebar.html">Course Sidebar</a></li>
                                                <li><a href="course-details.html">Course Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="about.html">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="event.html">Our Events</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                                <li><a href="error.html">404 Error</a></li>
                                                <li><a href="my-profile.html">My Profile</a></li>
                                                <li><a href="my-course.html">My Courses</a></li>
                                                <li><a href="sign-in.html">Sign In</a></li>
                                                <li><a href="sign-up.html">Sign Up</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Liên hệ</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-3 col-lg-2 col-md-6 col-6">
                        <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                            <div class="header__action d-none d-xl-block">
                                <ul>
                                    <li>
                                        <a href="sign-in.html">
                                            <svg width="15" height="20" viewBox="0 0 15 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.1466 8.96416C7.05493 8.95499 6.94493 8.95499 6.8441 8.96416C4.66243 8.89083 2.92993 7.10333 2.92993 4.90333C2.92993 2.65749 4.74493 0.833328 6.99993 0.833328C9.24576 0.833328 11.0699 2.65749 11.0699 4.90333C11.0608 7.10333 9.32826 8.89083 7.1466 8.96416Z"
                                                    stroke="#0C140F" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M2.56341 12.3467C0.345075 13.8317 0.345075 16.2517 2.56341 17.7275C5.08424 19.4142 9.21841 19.4142 11.7392 17.7275C13.9576 16.2425 13.9576 13.8225 11.7392 12.3467C9.22758 10.6692 5.09341 10.6692 2.56341 12.3467Z"
                                                    stroke="#0C140F" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header__search header__search-2 d-none d-xl-block">
                                <form action="#">
                                    <div class="header__search-input">
                                        <input type="text" placeholder="Search...">
                                        <button class="header__search-btn">
                                            <svg width="18" height="18" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.11111 15.2222C12.0385 15.2222 15.2222 12.0385 15.2222 8.11111C15.2222 4.18375 12.0385 1 8.11111 1C4.18375 1 1 4.18375 1 8.11111C1 12.0385 4.18375 15.2222 8.11111 15.2222Z"
                                                    stroke="#3E8454" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M17 17L13.1333 13.1333" stroke="#3E8454"
                                                    stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="header__hamburger ml-50 d-xl-none">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal"
                                    class="hamurger-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>