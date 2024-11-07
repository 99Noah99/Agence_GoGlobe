@extends('layouts.app')
@section('contenu')

<!-- Common Banner Area -->
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Customer dashboard</h2>
                    <ul>
                        <li><a href="{{ route ('show_accueil') }}">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span>Customer dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dashboard Area -->
<section id="dashboard_main_arae" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="dashboard_sidebar">
                    <div class="dashboard_sidebar_user">
                        <h3>{{ $current_user->Prenom. " " . $current_user->Nom }}</h3>
                        <p><a href="tel:+00-123-456-789">{{$current_user->Numero_tel}}</a></p>
                        <p><a href="mailto:sherlyn@domain.com">{{$current_user->Email}}</a></p>
                    </div>
                    <div class="dashboard_menu_area">
                        <ul>
                            @if (auth()->user()->Role == 'client')
                            <li><a href="{{ route('show_account') }}"
                                    class="{{ $activeSection == 'dashboard' ? 'active' : '' }}"><i
                                        class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                            <li class="dashboard_dropdown_button" id="dashboard_dropdowns">
                                <i class="fas fa-address-card"></i>My bookings
                                <span> <i class="fas fa-angle-down"></i></span>
                                <div class="booing_sidebar_dashboard" id="show_dropdown_item" style="display: none;">
                                    <ul>
                                        <li><a href="hotel-booking.html"><i class="fas fa-hotel"></i>Hotel
                                                booking</a></li>
                                        <li><a href="flight-booking.html"><i class="fas fa-paper-plane"></i>Flight
                                                booking</a></li>
                                        <li>
                                            <a href="tour-booking.html">
                                                <i class="fas fa-map"></i>Tour booking
                                            </a>
                                        </li>
                                        <li><a href="booking-history.html">
                                                <i class="fas fa-history"></i>Booking history</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="notification.html"><i class="fas fa-bell"></i>Notifications</a></li>
                            <li><a href="wallet.html"><i class="fas fa-wallet"></i>Wallet</a></li>
                            @endif
                            <li><a href="{{ route('show_profil') }}"
                                    class="{{ $activeSection == 'profile' ? 'active' : '' }}"><i
                                        class="fas fa-user-circle"></i>My profile</a>
                            </li>
                            @if (auth()->user()->Role == 'admin')
                            <li><a href="{{ route('show_admin_accueil') }}"><i class="fas fa-user-shield"></i>Panneau
                                    Admin</a></li>

                            @endif

                            <li>
                                <a href="{{ route('logout') }}" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            @section('contenu_account')
            @show

        </div>
    </div>
</section>


@stop