@extends('layouts.app')
@section('contenu')

<!-- Common Banner Area -->
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Détail du forfait</h2>
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

<section id="tour_details_main" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="tour_details_leftside_wrapper">
                    <div class="tour_details_heading_wrapper">
                        <div class="tour_details_top_heading">
                            <h2>{{ $forfait->Intitule }}</h2>
                            <h5><i class="fas fa-map-marker-alt"></i> {{ $forfait->ville->Nom }}, {{
                                $forfait->ville->region->pays->Nom }}</h5>
                        </div>
                        <div class="tour_details_top_heading_right">
                            <h4>Excellent</h4>
                            <h6>4.8/5</h6>
                            <p>(1214 reviewes)</p>
                        </div>
                    </div>
                    <div class="tour_details_top_bottom">
                        <div class="toru_details_top_bottom_item">
                            <div class="tour_details_top_bottom_icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="tour_details_top_bottom_text">
                                <h5>Durée</h5>
                                <p>{{ $forfait->Duree }} jours</p>
                            </div>
                        </div>
                        <div class="toru_details_top_bottom_item">
                            <div class="tour_details_top_bottom_icon">
                                <i class="fas fa-paw"></i>
                            </div>
                            <div class="tour_details_top_bottom_text">
                                <h5>Type de voyage </h5>
                                <p>{{ $forfait->type_forfait->Nom }}</p>
                            </div>
                        </div>
                        {{-- <div class="toru_details_top_bottom_item">
                            <div class="tour_details_top_bottom_icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="tour_details_top_bottom_text">
                                <h5>Group size</h5>
                                <p>50 people</p>
                            </div>
                        </div> --}}
                        <div class="toru_details_top_bottom_item">
                            <div class="tour_details_top_bottom_icon">
                                <i class="fas fa-map-marked"></i>
                            </div>
                            <div class="tour_details_top_bottom_text">
                                <h5>Location</h5>
                                <p>{{ $forfait->ville->Nom }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="tour_details_img_wrapper">
                        <div class="slider slider-for slick-initialized slick-slider">
                            <div class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: auto;">
                                    <div class="slick-slide slick-current slick-active" data-slick-index="0"
                                        aria-hidden="false"
                                        style="width: 898px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"
                                        tabindex="0">
                                        <img src="/storage/forfait/{{ $forfait->Image }}" alt="img">
                                    </div>
                                    {{-- <div class="slick-slide" data-slick-index="1" aria-hidden="true"
                                        style="width: 898px; position: relative; left: -898px; top: 0px; z-index: 998; opacity: 0;"
                                        tabindex="-1">
                                        <img src="assets/img/tour/big-img2.png" alt="img">
                                    </div>
                                    <div class="slick-slide" data-slick-index="2" aria-hidden="true"
                                        style="width: 898px; position: relative; left: -1796px; top: 0px; z-index: 998; opacity: 0;"
                                        tabindex="-1">
                                        <img src="assets/img/tour/big-img3.png" alt="img">
                                    </div>
                                    <div class="slick-slide" data-slick-index="3" aria-hidden="true"
                                        style="width: 898px; position: relative; left: -2694px; top: 0px; z-index: 998; opacity: 0;"
                                        tabindex="-1">
                                        <img src="assets/img/tour/big-img4.png" alt="img">
                                    </div>
                                    <div class="slick-slide" data-slick-index="4" aria-hidden="true"
                                        style="width: 898px; position: relative; left: -3592px; top: 0px; z-index: 998; opacity: 0;"
                                        tabindex="-1">
                                        <img src="assets/img/tour/big-img5.png" alt="img">
                                    </div>
                                    <div class="slick-slide" data-slick-index="5" aria-hidden="true"
                                        style="width: 898px; position: relative; left: -4490px; top: 0px; z-index: 998; opacity: 0;"
                                        tabindex="-1">
                                        <img src="assets/img/tour/big-img6.png" alt="img">
                                    </div>
                                    <div class="slick-slide" data-slick-index="6" aria-hidden="true"
                                        style="width: 898px; position: relative; left: -5388px; top: 0px; z-index: 998; opacity: 0;"
                                        tabindex="-1">
                                        <img src="assets/img/tour/big-img7.png" alt="img">
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="slider slider-nav slick-initialized slick-slider"><button
                                class="slick-prev slick-arrow" aria-label="Previous" type="button"
                                style="display: inline-block;">Previous</button>
                            <div class="slick-list draggable">
                                <div class="slick-track"
                                    style="opacity: 1; width: 3420px; transform: translate3d(-900px, 0px, 0px);">
                                    <div class="slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small3-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small4-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small5-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small6-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small7-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-current slick-active" data-slick-index="0"
                                        aria-hidden="false" style="width: 180px;" tabindex="0">
                                        <img src="assets/img/tour/small1-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                        style="width: 180px;" tabindex="0">
                                        <img src="assets/img/tour/small2-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                        style="width: 180px;" tabindex="0">
                                        <img src="assets/img/tour/small3-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                                        style="width: 180px;" tabindex="0">
                                        <img src="assets/img/tour/small4-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-active" data-slick-index="4" aria-hidden="false"
                                        style="width: 180px;" tabindex="0">
                                        <img src="assets/img/tour/small5-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide" data-slick-index="5" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small6-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide" data-slick-index="6" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small7-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small1-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small2-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small3-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small4-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small5-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small6-img.png" alt="img">
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true"
                                        style="width: 180px;" tabindex="-1">
                                        <img src="assets/img/tour/small7-img.png" alt="img">
                                    </div>
                                </div>
                            </div>






                            <button class="slick-next slick-arrow" aria-label="Next" type="button"
                                style="display: inline-block;">Next</button>
                        </div> --}}
                    </div>
                    <div class="tour_details_boxed">
                        <h3 class="heading_theme">Informations supplémentaires</h3>
                        <div class="tour_details_boxed_inner">
                            <p>
                                Ce forfait de voyage est conçu pour les voyageurs qui souhaitent découvrir la ville de
                                {{ $forfait->ville->Nom }} et ses environs. L'hébergement et le transport sont inclus
                                dans ce forfait.
                                <br>
                                Vous aurez notament lors de la réservation le choix entre différents moyen de transport
                                :
                            </p>
                            <ul>
                                @foreach ($forfait->deplacer_moyens_transport as $moyen_transport)
                                <li><i class="fas fa-circle"></i>{{
                                    $moyen_transport->moyen_transport->Nom_mode_transport}}</li>
                                @endforeach
                            </ul>

                            <p>
                                Ainsi que différents hébergement
                                :
                            </p>
                            <ul>
                                @foreach ($forfait->hebergement_forfait as $hebergement)
                                {{-- {{ dd($hebergement->hebergement) }} --}}
                                <li><i class="fas fa-circle"></i>{{ $hebergement->hebergement->Nom }}, {{
                                    $hebergement->hebergement->type_hebergement->Intitule }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="tour_details_boxed">
                        <h3 class="heading_theme">Itinerary</h3>
                        <div class="tour_details_boxed_inner">
                            <div class="accordion" id="accordionExample">
                                @foreach ($forfait->etape_itineraires as $etape)
                                <div class="accordion_flex_area">
                                    <div class="accordion_left_side">
                                        <h5>Etape {{$etape->Rang}}</h5>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <div
                                                style="color: #8b3eea; font-size: 18px; font-weight: 600; background-color: #fff; padding: 0;">
                                                {{$etape->Titre}}
                                            </div>
                                        </h2>
                                        {{-- <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="accordion_itinerary_list">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-circle"></i>
                                                            There are many variations of passages of Lorem Ipsum
                                                            available, but the majority have
                                                            suffered alteration in some form
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-circle"></i>
                                                            Contrary to popular belief, Lorem Ipsum is not simply
                                                            random
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-circle"></i>
                                                            Many desktop publishing packages and web page editors
                                                            now
                                                            use
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-circle"></i>
                                                            Lorem Ipsum is that it has a more-or-less normal
                                                            distribution of letters, to using 'Content here
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-circle"></i>
                                                            The standard chunk of Lorem Ipsum used since the 1500s
                                                            is
                                                            reproduced below for those interested.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tour_details_boxed">
                        <h3 class="heading_theme">Différents hébergement disponibles :</h3>
                        <div class="tour_details_boxed_inner">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion_flex_area">
                                    @foreach ($forfait->hebergement_forfait as $hebergement)
                                    {{-- <div class="accordion_left_side">
                                        <h5>{{$hebergement->hebergement->Nom}}<h5>
                                    </div> --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                {{$hebergement->hebergement->Nom}},
                                                {{$hebergement->hebergement->ville->Nom}}
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="accordion_itinerary_list">

                                                    <img src="/storage/hebergement/{{ $hebergement->hebergement->Image }}"
                                                        alt="img">

                                                    <p>
                                                        <br>
                                                        {{$hebergement->hebergement->Description}}
                                                    </p>
                                                    {{-- <ul>
                                                        <li>
                                                            <i class="fas fa-circle"></i>
                                                            There are many variations of passages of Lorem Ipsum
                                                            available, but the majority have
                                                            suffered alteration in some form
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-circle"></i>
                                                            Contrary to popular belief, Lorem Ipsum is not simply
                                                            random
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-circle"></i>
                                                            Many desktop publishing packages and web page editors
                                                            now
                                                            use
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-circle"></i>
                                                            Lorem Ipsum is that it has a more-or-less normal
                                                            distribution of letters, to using 'Content here
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-circle"></i>
                                                            The standard chunk of Lorem Ipsum used since the 1500s
                                                            is
                                                            reproduced below for those interested.
                                                        </li>
                                                    </ul> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="tour_details_boxed">
                        <h3 class="heading_theme">Included/Excluded</h3>
                        <div class="tour_details_boxed_inner">
                            <p>
                                Stet clitaStet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                                sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                eirmod.
                            </p>
                            <ul>
                                <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian culture
                                </li>
                                <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire, and Cultural
                                    Dance at Camp</li>
                                <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver allowances
                                </li>
                                <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle (SUV/Sedan) for
                                    sightseeing on all days as per the itinerary.</li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="tour_details_right_sidebar_wrapper">
                    <div class="tour_detail_right_sidebar">
                        <div class="tour_details_right_boxed">
                            <div class="tour_details_right_box_heading">
                                <h3>Résumé des informations</h3>
                            </div>
                            <div class="valid_date_area">
                                <div class="valid_date_area_one">
                                    <h5>Durée</h5>
                                    <p>{{ $forfait->Duree }} jours</p>
                                </div>
                            </div>
                            <div class="tour_package_details_bar_list">
                                <h5>Forfait détail</h5>
                                <ul>
                                    <li><i class="fas fa-circle"></i>Hébergement inclus</li>
                                    <li><i class="fas fa-circle"></i>Transport inclus</li>

                                    <li><i class="fas fa-circle"></i>Voyage : {{ $forfait->type_forfait->Nom }}</li>
                                    <li><i class="fas fa-circle"></i>Nombre d'étapes : {{
                                        $forfait->etape_itineraires->count() }}
                                    </li>
                                </ul>
                            </div>
                            <div class="tour_package_details_bar_price">
                                <h5>Prix</h5>
                                <div class="tour_package_bar_price">
                                    <h3>{{ $forfait->Prix }} €</h3>
                                </div>
                            </div>
                        </div>
                        <div class="tour_select_offer_bar_bottom">
                            <button class="btn btn_theme btn_md w-100" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Réserver le
                                forfait</button>
                        </div>
                    </div>
                    {{-- <div class="tour_detail_right_sidebar">
                        <div class="tour_details_right_boxed">
                            <div class="tour_details_right_box_heading">
                                <h3>Super deluxe package</h3>
                            </div>
                            <div class="valid_date_area">
                                <div class="valid_date_area_one">
                                    <h5>Valid from</h5>
                                    <p>01 Feb 2022</p>
                                </div>
                                <div class="valid_date_area_one">
                                    <h5>Valid till</h5>
                                    <p>15 Feb 2022</p>
                                </div>
                            </div>
                            <div class="tour_package_details_bar_list">
                                <h5>Package details</h5>
                                <ul>
                                    <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                    <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian
                                        culture
                                    </li>
                                    <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>
                                    <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver
                                        allowances
                                    </li>
                                    <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>
                                </ul>
                            </div>
                            <div class="tour_package_details_bar_price">
                                <h5>Price</h5>
                                <div class="tour_package_bar_price">
                                    <h6><del>$ 35,500</del></h6>
                                    <h3>$ 30,500 <sub>/Per serson</sub> </h3>
                                </div>
                            </div>
                        </div>
                        <div class="tour_select_offer_bar_bottom">
                            <button class="btn btn_theme btn_md w-100" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Select
                                offer</button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="write_your_review_wrapper">
                    <h3 class="heading_theme">Write your review</h3>
                    <div class="write_review_inner_boxed">
                        <form action="!#" id="news_comment_form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-froup">
                                        <input type="text" class="form-control bg_input" placeholder="Enter full name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-froup">
                                        <input type="text" class="form-control bg_input"
                                            placeholder="Enter email address">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-froup">
                                        <textarea rows="6" placeholder="Write your comments"
                                            class="form-control bg_input"></textarea>
                                    </div>
                                    <div class="comment_form_submit">
                                        <button class="btn btn_theme btn_md">Post comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="all_review_wrapper">
                    <h3 class="heading_theme">All review</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="all_review_box">
                    <div class="all_review_date_area">
                        <div class="all_review_date">
                            <h5>08 Dec, 2021</h5>
                        </div>
                        <div class="all_review_star">
                            <h5>Excellent</h5>
                            <div class="review_star_all">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="all_review_text">
                        <img src="assets/img/review/review1.png" alt="img">
                        <h4>Manresh Chandra</h4>
                        <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                            money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                            on time pickup and drop overall. Thanks for it. "</p>
                    </div>
                    <div class="all_review_small_img">
                        <div class="all_review_small_img_item">
                            <img src="assets/img/review/review-small1.png" alt="img">
                        </div>
                        <div class="all_review_small_img_item">
                            <img src="assets/img/review/review-small2.png" alt="img">
                        </div>
                        <div class="all_review_small_img_item">
                            <img src="assets/img/review/review-small3.png" alt="img">
                        </div>
                        <div class="all_review_small_img_item">
                            <img src="assets/img/review/review-small4.png" alt="img">
                        </div>
                        <div class="all_review_small_img_item">
                            <img src="assets/img/review/review-small5.png" alt="img">
                        </div>
                        <div class="all_review_small_img_item">
                            <h5>+5</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="all_review_box">
                    <div class="all_review_date_area">
                        <div class="all_review_date">
                            <h5>08 Dec, 2021</h5>
                        </div>
                        <div class="all_review_star">
                            <h5>Excellent</h5>
                            <div class="review_star_all">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="all_review_text">
                        <img src="assets/img/review/review2.png" alt="img">
                        <h4>Michel falak</h4>
                        <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                            money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                            on time pickup and drop overall. Thanks for it. "</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="all_review_box">
                    <div class="all_review_date_area">
                        <div class="all_review_date">
                            <h5>08 Dec, 2021</h5>
                        </div>
                        <div class="all_review_star">
                            <h5>Excellent</h5>
                            <div class="review_star_all">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="all_review_text">
                        <img src="assets/img/review/review3.png" alt="img">
                        <h4>Chester dals</h4>
                        <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                            money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                            on time pickup and drop overall. Thanks for it. "</p>
                    </div>
                    <div class="all_review_small_img">
                        <div class="all_review_small_img_item">
                            <img src="assets/img/review/review-small1.png" alt="img">
                        </div>
                        <div class="all_review_small_img_item">
                            <img src="assets/img/review/review-small2.png" alt="img">
                        </div>
                        <div class="all_review_small_img_item">
                            <img src="assets/img/review/review-small5.png" alt="img">
                        </div>
                        <div class="all_review_small_img_item">
                            <h5>+15</h5>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="all_review_box">
                    <div class="all_review_date_area">
                        <div class="all_review_date">
                            <h5>08 Dec, 2021</h5>
                        </div>
                        <div class="all_review_star">
                            <h5>Excellent</h5>
                            <div class="review_star_all">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="all_review_text">
                        <img src="assets/img/review/review4.png" alt="img">
                        <h4>Casper mike</h4>
                        <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                            money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                            on time pickup and drop overall. Thanks for it. "</p>
                    </div>
                    <div class="all_review_small_img">
                        <div class="all_review_small_img_item">
                            <img src="assets/img/review/review-small4.png" alt="img">
                        </div>
                        <div class="all_review_small_img_item">
                            <img src="assets/img/review/review-small5.png" alt="img">
                        </div>
                        <div class="all_review_small_img_item">
                            <h5>+19</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="all_review_box">
                    <div class="all_review_date_area">
                        <div class="all_review_date">
                            <h5>08 Dec, 2021</h5>
                        </div>
                        <div class="all_review_star">
                            <h5>Excellent</h5>
                            <div class="review_star_all">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="all_review_text">
                        <img src="assets/img/review/review5.png" alt="img">
                        <h4>Jason bruno</h4>
                        <p>" Loved the overall tour for all 6 days covering jaipur jodhpur and jaisalmer. worth ur
                            money for sure. thanks. Driver was very good and polite and safe driving for all 6 days.
                            on time pickup and drop overall. Thanks for it. "</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop