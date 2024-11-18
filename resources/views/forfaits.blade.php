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
                        <form action="{{ route('show_forfait') }}" method="get">
                            @csrf
                            <div class="left_side_search_heading">
                                <h5>Recherche par nom</h5>
                            </div>
                            <div class="name_search_form">
                                <input type="text" name="search" class="form-control" placeholder="recherche par nom..."
                                    required>
                                <i class="fas fa-search"></i>
                            </div>
                            <br>
                            <button type="submit" class="btn btn_theme btn_md w-80 ">Rechercher</button>
                        </form>
                    </div>
                    <div class="left_side_search_boxed">
                        <div class="left_side_search_heading">
                            <h5>Filtrer par avis</h5>
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
                </div>
            </div>

            {{-- affichage des forfaits --}}
            <div class="col-lg-9">
                <div class="row">
                    @foreach ($donnee_forfait as $forfait)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="{{ route('show_forfait_detail', ['Id_Forfait' => $forfait->Id_Forfait]) }}"><img
                                        src="/storage/forfait/{{ $forfait->Image }}" alt="img"></a>
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