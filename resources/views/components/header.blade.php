<header class="main_header_arae">
    <!-- Navbar Bar -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{ route('accueil') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="logo" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('accueil') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="logo" />
                    </a>
                    <div
                        class="collapse navbar-collapse mean-menu"
                        id="navbarSupportedContent">


                        <ul class="navbar-nav">

                            <!-- Home -->
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    Home
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link active">Home One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">Home Three</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-4.html" class="nav-link">Home Four</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-5.html" class="nav-link">Home Five</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-6.html" class="nav-link">Home six</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-7.html" class="nav-link">Home seven</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-8.html" class="nav-link">Home Eight</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-9.html" class="nav-link">Home nine</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-10.html" class="nav-link">Home ten</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-11.html" class="nav-link">Home eleven</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-12.html" class="nav-link">Home twelve</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-13.html" class="nav-link">Home thirteen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-14.html" class="nav-link">Home fourteen</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Categories -->
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Categories
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"> Tours </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="tour-search.html" class="nav-link">Tour Grid</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="tour-search-list.html" class="nav-link">Tour List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="tour-search-map.html" class="nav-link">Tour Map</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="tour-details.html" class="nav-link">Tour Details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a
                                                    href="tour-booking-submission.html"
                                                    class="nav-link">Tour Booking</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="top-destinations.html" class="nav-link">Top Destination</a>
                                            </li>
                                            <li class="nav-item">
                                                <a
                                                    href="top-destinations-details.html"
                                                    class="nav-link">Destination Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"> Flights </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="flight-search-result.html" class="nav-link">Flight</a>
                                            </li>
                                            <li class="nav-item">
                                                <a
                                                    href="flight-booking-submission.html"
                                                    class="nav-link">Flight Booking</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"> Hotel </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="hotel-search.html" class="nav-link">Hotel Grid</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="hotel-search-list.html" class="nav-link">Hotel List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="hotel-map.html" class="nav-link">Hotel Map</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="hotel-details.html" class="nav-link">Hotel Booking</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="room-details.html" class="nav-link">Room Details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="room-booking.html" class="nav-link">Room Booking</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"> Visa </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="visa-details.html" class="nav-link">Visa Details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-application.html" class="nav-link">Visa Application</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-info.html" class="nav-link">Business visa
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-info.html" class="nav-link">Education visa
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-info.html" class="nav-link">Working visa
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-info.html" class="nav-link">Tourist visa
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-info.html" class="nav-link">Medical visa
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="visa-info.html" class="nav-link">On-arrival visa
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"> Apartments </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="apartment-search.html" class="nav-link">Apartments Grid</a>
                                            </li>
                                            <li class="nav-item">
                                                <a
                                                    href="apartment-search-list.html"
                                                    class="nav-link">Apartments List</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apartment-search-map.html" class="nav-link">Apartments Map</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apartment-details.html" class="nav-link">Apartments Details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="apartment-booking.html" class="nav-link">Apartments Booking</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"> Bus </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="bus-search-list.html" class="nav-link">Bus</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="bus-search-map.html" class="nav-link">Bus Map</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="bus-booking.html" class="nav-link">Bus Booking</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"> Cruise </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="cruise-search-list.html" class="nav-link">Cruise</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="cruise-map.html" class="nav-link">Cruise Map</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="cruise-details.html" class="nav-link">Cruise Details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="cruise-booking.html" class="nav-link">Cruise Booking</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->

                            <!-- Pages -->
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pages
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tour-guides.html" class="nav-link">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="testimonials.html" class="nav-link">Testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faqs.html" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="booking-confirmation.html" class="nav-link">Booking Confirmation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="become-expert.html" class="nav-link">Become Expert
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">User Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="login.html" class="nav-link">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="register.html" class="nav-link">Register</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="forgot-password.html" class="nav-link">Forget Password</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="verify-otp.html" class="nav-link">Verify OTP</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="reset-password.html" class="nav-link">Reset Password</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="error.html" class="nav-link">404 Error</a>
                                    </li>
                                </ul>
                            </li> -->

                            <!-- Dashboard -->
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">Dashboard <i class="fas fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="dashboard.html" class="nav-link">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="hotel-booking.html" class="nav-link">Hotel booking</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="flight-booking.html" class="nav-link">Flight booking</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tour-booking.html" class="nav-link">Tour booking</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="booking-history.html" class="nav-link">Booking history</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="my-profile.html" class="nav-link">My profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wallet.html" class="nav-link">Wallet</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="notification.html" class="nav-link">Notifications</a>
                                    </li>
                                </ul>
                            </li> -->

                            <!-- News -->
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">News <i class="fas fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="news.html" class="nav-link">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="news-v2.html" class="nav-link">News v2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="news-v3.html" class="nav-link">News v3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="news-v4.html" class="nav-link">News v4</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="news-details.html" class="nav-link">News Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="news-details-v2.html" class="nav-link">News Details v2</a>
                                    </li>
                                </ul>
                            </li> -->

                            <!-- Contact -->
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">Contact <i class="fas fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="contact.html" class="nav-link">Contact v1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact-v2.html" class="nav-link">Contact v2</a>
                                    </li>
                                </ul>
                            </li> -->

                        </ul>


                        <div class="others-options d-flex align-items-center">
                            <!-- <div class="option-item">
                                <a href="#" class="search-box">
                                    <i class="bi bi-search"></i>
                                </a>
                            </div> -->
                            <div class="option-item">
                                <a href="{{ route('login') }}" class="btn btn_navber">Se connecter</a>
                                <a href="{{ route('register') }}" class="btn btn_navber">S'inscire</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>


        <!-- <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="#" class="search-box"><i class="fas fa-search"></i></a>
                            </div>
                            <div class="option-item">
                                <a href="contact.html" class="btn btn_navber">Get free quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</header>