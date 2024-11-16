@extends('layouts.app')
@section('contenu')

<!-- Common Banner Area -->
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Forfait</h2>
                    <ul>
                        <li><a href="{{ route('show_accueil') }}">Accueil</a></li>
                        <li>
                            <span><i class="fas fa-circle"></i></span> Forfait
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="explore_area" class="section_padding">
    <div class="container">
        <!-- Section Heading -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>{{ count($donnee_forfait) }} forfait{{ count($donnee_forfait) > 1 ? 's trouvés' : ' trouvé' }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="left_side_search_area">
                    <div class="left_side_search_boxed">
                        <div class="item_searc_map_area">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663570607!2d89.56355961427838!3d22.813715829827952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1557901943656!5m2!1sen!2sbd"></iframe>
                        </div>
                    </div>
                    <div class="left_side_search_boxed">
                        <div class="left_side_search_heading">
                            <h5>Search by name</h5>
                        </div>
                        <div class="name_search_form">
                            <input type="text" class="form-control" placeholder="e.g Deluxe bus">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <div class="left_side_search_boxed">
                        <div class="left_side_search_heading">
                            <h5>Filter by price</h5>
                        </div>
                        <div class="filter-price">
                            <div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal">
                                <div class="noUi-base">
                                    <div class="noUi-connects">
                                        <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.75, 1);">
                                        </div>
                                    </div>
                                    <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 5;">
                                        <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0"
                                            role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                            aria-valuemax="550.0" aria-valuenow="0.0" aria-valuetext="$0">
                                            <div class="noUi-touch-area"></div>
                                            <div class="noUi-tooltip">$0</div>
                                        </div>
                                    </div>
                                    <div class="noUi-origin" style="transform: translate(-25%, 0px); z-index: 4;">
                                        <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0"
                                            role="slider" aria-orientation="horizontal" aria-valuemin="200.0"
                                            aria-valuemax="1000.0" aria-valuenow="750.0" aria-valuetext="$750">
                                            <div class="noUi-touch-area"></div>
                                            <div class="noUi-tooltip">$750</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="apply" type="button">Apply</button>
                    </div>
                    <div class="left_side_search_boxed">
                        <div class="left_side_search_heading">
                            <h5>Filter by Review</h5>
                        </div>
                        <div class="filter_review">
                            <form class="review_star">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                    <label class="form-check-label" for="flexCheckDefault1">
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_asse"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_asse"></i>
                                        <i class="fas fa-star color_asse"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                    <label class="form-check-label" for="flexCheckDefault3">
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_asse"></i>
                                        <i class="fas fa-star color_asse"></i>
                                        <i class="fas fa-star color_asse"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                    <label class="form-check-label" for="flexCheckDefault5">
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_asse"></i>
                                        <i class="fas fa-star color_asse"></i>
                                        <i class="fas fa-star color_asse"></i>
                                        <i class="fas fa-star color_asse"></i>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="left_side_search_boxed">
                        <div class="left_side_search_heading">
                            <h5>Filter by hotel star</h5>
                        </div>
                        <div class="filter_review">
                            <form class="review_star">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaulta">
                                    <label class="form-check-label" for="flexCheckDefaulta">
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaulf21">
                                    <label class="form-check-label" for="flexCheckDefaulf21">
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_asse"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf3">
                                    <label class="form-check-label" for="flexCheckDefaultf3">
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_asse"></i>
                                        <i class="fas fa-star color_asse"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf4">
                                    <label class="form-check-label" for="flexCheckDefaultf4">
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_asse"></i>
                                        <i class="fas fa-star color_asse"></i>
                                        <i class="fas fa-star color_asse"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf5">
                                    <label class="form-check-label" for="flexCheckDefaultf5">
                                        <i class="fas fa-star color_theme"></i>
                                        <i class="fas fa-star color_asse"></i>
                                        <i class="fas fa-star color_asse"></i>
                                        <i class="fas fa-star color_asse"></i>
                                        <i class="fas fa-star color_asse"></i>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="left_side_search_boxed">
                        <div class="left_side_search_heading">
                            <h5>Facilities</h5>
                        </div>
                        <div class="tour_search_type">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                                <label class="form-check-label" for="flexCheckDefaultf1">
                                    <span class="area_flex_one">
                                        <span>Wake-up call</span>
                                        <span>20</span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf2">
                                <label class="form-check-label" for="flexCheckDefaultf2">
                                    <span class="area_flex_one">
                                        <span>Flat TV</span>
                                        <span>14</span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf3">
                                <label class="form-check-label" for="flexCheckDefaultaf3">
                                    <span class="area_flex_one">
                                        <span>Vehicle service</span>
                                        <span>30</span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf4">
                                <label class="form-check-label" for="flexCheckDefaultaf4">
                                    <span class="area_flex_one">
                                        <span>Guide service</span>
                                        <span>22</span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf5">
                                <label class="form-check-label" for="flexCheckDefaultaf5">
                                    <span class="area_flex_one">
                                        <span>Internet, Wi-fi</span>
                                        <span>41</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="left_side_search_boxed">
                        <div class="left_side_search_heading">
                            <h5>Hotel service</h5>
                        </div>
                        <div class="tour_search_type">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt1">
                                <label class="form-check-label" for="flexCheckDefaultt1">
                                    <span class="area_flex_one">
                                        <span>Gymnasium</span>
                                        <span>20</span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt2">
                                <label class="form-check-label" for="flexCheckDefaultt2">
                                    <span class="area_flex_one">
                                        <span>Mountain Bike</span>
                                        <span>14</span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt3">
                                <label class="form-check-label" for="flexCheckDefaultt3">
                                    <span class="area_flex_one">
                                        <span>Wifi</span>
                                        <span>62</span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt4">
                                <label class="form-check-label" for="flexCheckDefaultt4">
                                    <span class="area_flex_one">
                                        <span>Aerobics Room</span>
                                        <span>08</span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt5">
                                <label class="form-check-label" for="flexCheckDefaultt5">
                                    <span class="area_flex_one">
                                        <span>Golf Cages</span>
                                        <span>12</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- affichage des forfaits --}}
            <div class="col-lg-9">
                <div class="row">
                    @foreach ($donnee_forfait as $forfait)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="tour-details.html"><img src="/storage/forfait/{{ $forfait->Image }}"
                                        alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>{{ $forfait->ville->Nom }}, {{
                                    $forfait->ville->region->pays->Nom }}</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="tour-details.html">{{ $forfait->Intitule }}</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>{{ $forfait->Prix }} €</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@stop