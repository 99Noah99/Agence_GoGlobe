@extends('layouts.app')
@section('contenu')
<!-- Banner Area -->
<section id="home_one_banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner_one_text">
                    <h1>Explorez le monde</h1>
                    <h3>
                        Trouvez des vols, des hôtels, des circuits, des voitures et des
                        forfaits exceptionnels.
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Area -->
<section id="theme_search_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="theme_search_form_area">
                    <div class="theme_search_form_tabbtn">
                        <ul class="nav nav-tabs" role="tablist">

                            <!-- Forfaits -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tours-tab" data-bs-toggle="tab"
                                    data-bs-target="#tours" type="button" role="tab" aria-controls="tours"
                                    aria-selected="true">
                                    <i class="fas fa-globe"></i>Forfaits
                                </button>
                            </li>

                            <!-- Vols -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="flights-tab" data-bs-toggle="tab" data-bs-target="#flights"
                                    type="button" role="tab" aria-controls="flights" aria-selected="false">
                                    <i class="fas fa-plane-departure"></i>Vols
                                </button>
                            </li>

                            <!-- Train -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="visa-tab" data-bs-toggle="tab" data-bs-target="#trains"
                                    type="button" role="tab" aria-controls="train" aria-selected="false">
                                    <i class="fa-solid fa-train-subway"></i> Train
                                </button>
                            </li>

                            <!-- Bus -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="bus-tab" data-bs-toggle="tab" data-bs-target="#bus"
                                    type="button" role="tab" aria-controls="bus" aria-selected="false">
                                    <i class="fa-solid fa-bus"></i></i>Bus
                                </button>
                            </li>

                            <!-- Voiture -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="cruise-tab" data-bs-toggle="tab" data-bs-target="#cruise"
                                    type="button" role="tab" aria-controls="cruise" aria-selected="false">
                                    <i class="fa-solid fa-car"></i> Voiture
                                </button>
                            </li>

                            <!-- Hôtels -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="hotels-tab" data-bs-toggle="tab" data-bs-target="#hotels"
                                    type="button" role="tab" aria-controls="hotels" aria-selected="false">
                                    <i class="fa-solid fa-hotel"></i></i>Hotels
                                </button>
                            </li>

                        </ul>
                    </div>

                    <!-- Barres de recherche -->
                    <div class="tab-content" id="myTabContent">

                        <!-- Forfaits -->
                        <div class="tab-pane fade show active" id="tours" role="tabpanel" aria-labelledby="tours-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="{{ route('show_forfait') }}" method="get">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Destination</p>
                                                        <input type="text" name="ville"
                                                            placeholder="Ou voulez vous allez ?" required />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Combien de jours voulez vous partir ? </p>
                                                        <input type="number" name="duree" placeholder="Nombre de jours"
                                                            required />
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">
                                                        Search
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Vols -->
                        <div class="tab-pane fade" id="flights" role="tabpanel" aria-labelledby="flights-tab">
                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade show active" id="oneway_flight" role="tabpanel"
                                    aria-labelledby="oneway-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="oneway_search_form">
                                                <form action="#!">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed">
                                                                <p>Départ</p>
                                                                <input type="text" name="form_ville_depart"
                                                                    value="New York" />
                                                                <div class="plan_icon_posation">
                                                                    <i class="fas fa-plane-departure"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed">
                                                                <p>Arriver</p>
                                                                <input type="text" name="form_ville_arriver"
                                                                    value="London " />
                                                                <div class="plan_icon_posation">
                                                                    <i class="fas fa-plane-arrival"></i>
                                                                </div>
                                                                <div class="range_plan">
                                                                    <i class="fas fa-exchange-alt"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                            <div class="form_search_date">
                                                                <div class="flight_Search_boxed date_flex_area">
                                                                    <div class="Journey_date">
                                                                        <p>Date de départ</p>
                                                                        <input type="date" value="2022-05-05" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed dropdown_passenger_area">
                                                                <p>Choisir catégorie</p>
                                                                <div class="dropdown">
                                                                    <button class="dropdown-toggle final-count"
                                                                        type="button" id="dropdownMenuButton1"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        {{ $donnee_vols[0] }}
                                                                    </button>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton1">
                                                                        @foreach($donnee_vols as $categorie)
                                                                        <li><a class="dropdown-item" href="#"
                                                                                data-value="{{ $categorie }}">{{
                                                                                $categorie }}</a></li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>

                                                                <!-- Champ caché pour soumettre la valeur sélectionnée -->
                                                                <input type="hidden" name="cabin_class"
                                                                    id="cabinClassInput" value="Economy">
                                                            </div>
                                                        </div>

                                                        <div class="top_form_search_button">
                                                            <button class="btn btn_theme btn_md">
                                                                Search
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Train -->
                        <div class="tab-pane fade" id="trains" role="tabpanel" aria-labelledby="trains-tab">
                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade show active" id="oneway_flight" role="tabpanel"
                                    aria-labelledby="oneway-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="oneway_search_form">
                                                <form action="#!">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed">
                                                                <p>Départ</p>
                                                                <input type="text" name="form_ville_depart"
                                                                    value="New York" />
                                                                <div class="plan_icon_posation">
                                                                    <i class="fa-solid fa-train"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed">
                                                                <p>Arriver</p>
                                                                <input type="text" name="form_ville_arriver"
                                                                    value="London " />
                                                                <div class="plan_icon_posation">
                                                                    <i class="fa-solid fa-location-dot"></i>
                                                                </div>
                                                                <div class="range_plan">
                                                                    <i class="fas fa-exchange-alt"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                            <div class="form_search_date">
                                                                <div class="flight_Search_boxed date_flex_area">
                                                                    <div class="Journey_date">
                                                                        <p>Date de départ</p>
                                                                        <input type="date" value="2022-05-05" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                                            <div class="flight_Search_boxed dropdown_passenger_area">
                                                                <p>Choisir catégorie</p>
                                                                <div class="dropdown">
                                                                    <button class="dropdown-toggle final-count"
                                                                        type="button" id="dropdownMenuButton1"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        {{ $donnee_vols[0] }}
                                                                    </button>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton1">
                                                                        @foreach($donnee_train as $categorie)
                                                                        <li><a class="dropdown-item" href="#"
                                                                                data-value="{{ $categorie }}">{{
                                                                                $categorie }}</a></li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>

                                                                <!-- Champ caché pour soumettre la valeur sélectionnée -->
                                                                <input type="hidden" name="cabin_class"
                                                                    id="cabinClassInput" value="Economy">
                                                            </div>
                                                        </div>

                                                        <div class="top_form_search_button">
                                                            <button class="btn btn_theme btn_md">
                                                                Search
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hotel -->
                        <div class="tab-pane fade" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Destination</p>
                                                        <input type="text" placeholder="Where are you going?" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Journey date</p>
                                                                <input type="date" value="2022-05-03" />
                                                            </div>
                                                            <div class="Journey_date">
                                                                <p>Return date</p>
                                                                <input type="date" value="2022-05-05" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                                        <p>Passenger, Class</p>
                                                        <div class="dropdown">
                                                            <button class="dropdown-toggle final-count"
                                                                data-toggle="dropdown" type="button"
                                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                0 Passenger
                                                            </button>
                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                aria-labelledby="dropdownMenuButton1">
                                                                <div class="traveller-calulate-persons">
                                                                    <div class="passengers">
                                                                        <h6>Passengers</h6>
                                                                        <div class="passengers-types">
                                                                            <div class="passengers-type">
                                                                                <div class="text">
                                                                                    <span class="count pcount">2</span>
                                                                                    <div class="type-label">
                                                                                        <p>Adult</p>
                                                                                        <span>12+ yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text">
                                                                                    <span class="count ccount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Children
                                                                                        </p>
                                                                                        <span>2 - Less than 12
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-c">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-c">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text">
                                                                                    <span class="count incount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Infant
                                                                                        </p>
                                                                                        <span>Less than 2 yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-in">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-in">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cabin-selection">
                                                                        <h6>Cabin Class</h6>
                                                                        <div class="cabin-list">
                                                                            <button type="button"
                                                                                class="label-select-btn">
                                                                                <span class="muiButton-label">Economy
                                                                                </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                class="label-select-btn active">
                                                                                <span class="muiButton-label">
                                                                                    Business
                                                                                </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                class="label-select-btn">
                                                                                <span class="MuiButton-label">First
                                                                                    Class
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">
                                                        Search
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="visa-application" role="tabpanel" aria-labelledby="visa-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Select country</p>
                                                        <input type="text" value="United states" />
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Your nationality</p>
                                                        <input type="text" value="Bangladesh" />
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Entry date</p>
                                                                <input type="date" value="2022-05-03" />
                                                                <span>Thursday</span>
                                                            </div>
                                                            <div class="Journey_date">
                                                                <p>Exit date</p>
                                                                <input type="date" value="2022-05-05" />
                                                                <span>Thursday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                                        <p>Traveller, Class</p>
                                                        <div class="dropdown">
                                                            <button class="dropdown-toggle final-count"
                                                                data-toggle="dropdown" type="button"
                                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                0 Traveller
                                                            </button>
                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                aria-labelledby="dropdownMenuButton1">
                                                                <div class="traveller-calulate-persons">
                                                                    <div class="passengers">
                                                                        <h6>Traveller</h6>
                                                                        <div class="passengers-types">
                                                                            <div class="passengers-type">
                                                                                <div class="text">
                                                                                    <span class="count pcount">2</span>
                                                                                    <div class="type-label">
                                                                                        <p>Adult</p>
                                                                                        <span>12+ yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text">
                                                                                    <span class="count ccount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Children
                                                                                        </p>
                                                                                        <span>2 - Less than 12
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-c">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-c">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text">
                                                                                    <span class="count incount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Infant
                                                                                        </p>
                                                                                        <span>Less than 2 yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-in">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-in">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">
                                                        Search
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="apartments" role="tabpanel" aria-labelledby="apartments-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Destination</p>
                                                        <input type="text" placeholder="Where are you going?" />
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Journey date</p>
                                                                <input type="date" value="2022-05-03" />
                                                                <span>Thursday</span>
                                                            </div>
                                                            <div class="Journey_date">
                                                                <p>Return date</p>
                                                                <input type="date" value="2022-05-05" />
                                                                <span>Thursday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                                        <p>Passenger, Class</p>
                                                        <div class="dropdown">
                                                            <button class="dropdown-toggle final-count"
                                                                data-toggle="dropdown" type="button"
                                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                0 Traveler
                                                            </button>
                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                aria-labelledby="dropdownMenuButton1">
                                                                <div class="traveller-calulate-persons">
                                                                    <div class="passengers">
                                                                        <h6>Passengers</h6>
                                                                        <div class="passengers-types">
                                                                            <div class="passengers-type">
                                                                                <div class="text">
                                                                                    <span class="count pcount">2</span>
                                                                                    <div class="type-label">
                                                                                        <p>Adult</p>
                                                                                        <span>12+ yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text">
                                                                                    <span class="count ccount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Children
                                                                                        </p>
                                                                                        <span>2 - Less than 12
                                                                                            yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-c">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-c">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="passengers-type">
                                                                                <div class="text">
                                                                                    <span class="count incount">0</span>
                                                                                    <div class="type-label">
                                                                                        <p class="fz14 mb-xs-0">
                                                                                            Infant
                                                                                        </p>
                                                                                        <span>Less than 2 yrs</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="button-set">
                                                                                    <button type="button"
                                                                                        class="btn-add-in">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        class="btn-subtract-in">
                                                                                        <i class="fas fa-minus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cabin-selection">
                                                                        <h6>Cabin Class</h6>
                                                                        <div class="cabin-list">
                                                                            <button type="button"
                                                                                class="label-select-btn">
                                                                                <span class="muiButton-label">Economy
                                                                                </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                class="label-select-btn active">
                                                                                <span class="muiButton-label">
                                                                                    Business
                                                                                </span>
                                                                            </button>
                                                                            <button type="button"
                                                                                class="label-select-btn">
                                                                                <span class="MuiButton-label">First
                                                                                    Class
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span>Business</span>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">
                                                        Search
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="bus" role="tabpanel" aria-labelledby="bus-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="oneway_search_form">
                                                        <form action="#!">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>From</p>
                                                                        <input type="text" value="Dhaka" />
                                                                        <span>Bus Trtminal</span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-departure"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                    <div class="flight_Search_boxed">
                                                                        <p>To</p>
                                                                        <input type="text" value="Cox’s Bazar " />
                                                                        <span>Bus Trtminal</span>
                                                                        <div class="plan_icon_posation">
                                                                            <i class="fas fa-plane-arrival"></i>
                                                                        </div>
                                                                        <div class="range_plan">
                                                                            <i class="fas fa-exchange-alt"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                                    <div class="form_search_date">
                                                                        <div class="flight_Search_boxed date_flex_area">
                                                                            <div class="Journey_date">
                                                                                <p>Journey date</p>
                                                                                <input type="date" value="2022-05-05" />
                                                                                <span>Thursday</span>
                                                                            </div>
                                                                            <div class="Journey_date">
                                                                                <p>Return date</p>
                                                                                <input type="date" value="2022-05-08" />
                                                                                <span>Saturday</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                                                    <div
                                                                        class="flight_Search_boxed dropdown_passenger_area">
                                                                        <p>Passenger, Class</p>
                                                                        <div class="dropdown">
                                                                            <button class="dropdown-toggle final-count"
                                                                                data-toggle="dropdown" type="button"
                                                                                id="dropdownMenuButton1"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-expanded="false">
                                                                                0 Passenger
                                                                            </button>
                                                                            <div class="dropdown-menu dropdown_passenger_info"
                                                                                aria-labelledby="dropdownMenuButton1">
                                                                                <div class="traveller-calulate-persons">
                                                                                    <div class="passengers">
                                                                                        <h6>Passengers</h6>
                                                                                        <div class="passengers-types">
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                    <span
                                                                                                        class="count pcount">2</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p>Adult</p>
                                                                                                        <span>12+
                                                                                                            yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                    <span
                                                                                                        class="count ccount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Children
                                                                                                        </p>
                                                                                                        <span>2 - Less
                                                                                                            than 12
                                                                                                            yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-c">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-c">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="passengers-type">
                                                                                                <div class="text">
                                                                                                    <span
                                                                                                        class="count incount">0</span>
                                                                                                    <div
                                                                                                        class="type-label">
                                                                                                        <p
                                                                                                            class="fz14 mb-xs-0">
                                                                                                            Infant
                                                                                                        </p>
                                                                                                        <span>Less than
                                                                                                            2 yrs</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="button-set">
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-add-in">
                                                                                                        <i
                                                                                                            class="fas fa-plus"></i>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn-subtract-in">
                                                                                                        <i
                                                                                                            class="fas fa-minus"></i>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cabin-selection">
                                                                                        <h6>Cabin Class</h6>
                                                                                        <div class="cabin-list">
                                                                                            <button type="button"
                                                                                                class="label-select-btn">
                                                                                                <span
                                                                                                    class="muiButton-label">Economy
                                                                                                </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="label-select-btn active">
                                                                                                <span
                                                                                                    class="muiButton-label">
                                                                                                    Business
                                                                                                </span>
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                class="label-select-btn">
                                                                                                <span
                                                                                                    class="MuiButton-label">First
                                                                                                    Class
                                                                                                </span>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span>Business</span>
                                                                    </div>
                                                                </div>
                                                                <div class="top_form_search_button">
                                                                    <button class="btn btn_theme btn_md">
                                                                        Search
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tour_search_form">
                                        <form action="#!">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Destination</p>
                                                        <input type="text" placeholder="Where are you going?" />
                                                        <span>Where are you going?</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                    <div class="flight_Search_boxed">
                                                        <p>Cruise line</p>
                                                        <input type="text" placeholder="American line" />
                                                        <span>Choose your cruise</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                                    <div class="form_search_date">
                                                        <div class="flight_Search_boxed date_flex_area">
                                                            <div class="Journey_date">
                                                                <p>Journey date</p>
                                                                <input type="date" value="2022-05-03" />
                                                                <span>Thursday</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="top_form_search_button">
                                                    <button class="btn btn_theme btn_md">
                                                        Search
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

@stop