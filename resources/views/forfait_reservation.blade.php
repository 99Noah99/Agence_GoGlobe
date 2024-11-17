@extends('layouts.app')
@section('contenu')

<!-- Common Banner Area -->
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Reservation forfait</h2>
                    <ul>
                        <ul>
                            <li><a href="{{ route('show_accueil') }}">Accueil</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a
                                    href="{{ route('show_forfait') }}">Forfait</a></li>
                            <li>
                            <li><span><i class="fas fa-circle"></i></span><a
                                    href="{{ route('show_forfait_detail', ['Id_Forfait' => $forfait->Id_Forfait]) }}">Forfait</a>
                            </li>
                            <li>
                                <span><i class="fas fa-circle"></i></span> Détail du forfait
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="tour_booking_submission" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="tou_booking_form_Wrapper">
                    <div class="booking_tour_form">
                        <h3 class="heading_theme">Reservation du forfait</h3>
                        <div class="tour_booking_form_box">
                            <form action="{{ route('create_forfait_reservation') }}" method="post"
                                id="tour_bookking_form_item">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <labe>Date de début</label>
                                                <input type="date" class="form-control bg_input" id="Date_debut"
                                                    name="Date_debut" placeholder="Date de début">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Date de fin</label>
                                            <input type="date" class="form-control bg_input" id="Date_fin"
                                                name="Date_fin" placeholder="Date de fin" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Choix du moyen de transport</label>
                                            <select class="form-control form-select bg_input" name="Id_Moyen_Transport"
                                                required>
                                                <option value="">Sélectionnez une option </option>
                                                @foreach ($forfait->deplacer_moyens_transport as $transport)
                                                <option value="{{$transport->moyen_transport->Id_Moyen_Transport}}">
                                                    {{$transport->moyen_transport->Nom_mode_transport}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Choix de l'hébergement</label>
                                            <select class="form-control form-select bg_input" name="Id_Hebergement"
                                                required>
                                                <option value="">Sélectionnez une option </option>
                                                @foreach ($forfait->hebergement_forfait as $hebergement)
                                                <option value="{{$hebergement->hebergement->Id_Hebergement}}">
                                                    {{$hebergement->hebergement->Nom}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="Id_Forfait" value="{{ $forfait->Id_Forfait }}">
                                <div class="justify-content-center text-center">
                                    <button type="submit" class="btn btn_theme btn_md">
                                        Réserver
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
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
                        {{-- <div class="tour_select_offer_bar_bottom">
                            <a href="{{ route('show_forfait_reservation', ['Id_Forfait' => $forfait->Id_Forfait]) }}"
                                class="btn btn_theme btn_md w-100">Réserver le
                                forfait</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript code -->
<script>
    var duree = {{ $forfait->Duree }};
    document.getElementById('Date_debut').addEventListener('change', function() {
        var dateDebut = new Date(this.value);
        dateDebut.setDate(dateDebut.getDate() + duree);
        var dateFin = dateDebut.toISOString().split('T')[0];
        document.getElementById('Date_fin').value = dateFin;
    });
</script>


@stop