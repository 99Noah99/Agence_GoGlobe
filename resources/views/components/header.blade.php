<header class="main_header_arae">
    <!-- Navbar Bar -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{ route('show_accueil') }}">
                            <img src="{{ asset('images/logofinal.png') }}" alt="logo" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('show_accueil') }}">
                        <img src="{{ asset('images/logofinal.png') }}" alt="logo" />
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        {{-- <div>
                            <a href="#" class="text-white">
                                Home
                            </a>
                        </div> --}}
                        <ul class="navbar-nav">

                            <!-- Home -->
                            {{-- <li class="nav-item">

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
                            </li> --}}

                            <!-- Categories -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Réservations
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('show_forfait') }}" class="nav-link"> Tout les forfaits
                                        </a>
                                        {{-- <ul class="dropdown-menu">
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
                                                <a href="tour-booking-submission.html" class="nav-link">Tour Booking</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="top-destinations.html" class="nav-link">Top Destination</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="top-destinations-details.html" class="nav-link">Destination
                                                    Details</a>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="#" class="nav-link"> Flights </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="flight-search-result.html" class="nav-link">Flight</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="flight-booking-submission.html" class="nav-link">Flight
                                                    Booking</a>
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
                                                <a href="apartment-search-list.html" class="nav-link">Apartments
                                                    List</a>
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
                                    </li> --}}
                                </ul>
                            </li>
                        </ul>


                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                @guest
                                <a href="{{ route('show_login') }}" class="btn btn_navber me-2">Se connecter</a>
                                <a href="{{ route('show_register') }}" class="btn btn_navber me-5">S'inscrire</a>
                                @endguest

                                @auth
                                <a href="{{ route('logout') }}" class="btn btn_navber me-2"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Se déconnecter
                                </a>
                                @if (auth()->user()->Role == 'client')
                                <a href="{{ route('show_account') }}">
                                    <i class="fa-solid fa-circle-user fa-2xl" style="color: WHITE;"></i>
                                </a>
                                @endif

                                @if (auth()->user()->Role == 'admin')
                                <a class="btn btn_navber me-2" href="{{ route('show_admin_accueil') }}">
                                    <i class="fas fa-user-shield" style="margin-right: 5px"></i>Panneau Admin</a>
                                @endif

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                @endauth
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