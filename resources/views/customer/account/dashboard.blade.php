@extends('layouts.customer_dashbord', ['current_user' => $current_user])
@section('contenu_account')

<div class="col-lg-9">
    <div class="dashboard_main_top">
        <div class="row">
            <div class="col-lg-6">
                <div class="dashboard_top_boxed">
                    <div class="dashboard_top_icon">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="dashboard_top_text">
                        <h3>Nombre de réservation</h3>
                        <h1>{{ $reservation_forfait ? $reservation_forfait->count() : 0 }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dashboard_top_boxed">
                    <div class="dashboard_top_icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <div class="dashboard_top_text">
                        <h3>Reservation en attente</h3>
                        <h1>
                            {{ $reservation_forfait ? $reservation_forfait->filter(function($reservation) {
                            return in_array($reservation->facture->statut_facture->Id_Statut_Facture, [3, 4]);
                            })->count() : 0 }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard_common_table">
        <h3>Mes forfaits réservés</h3>
        <div class="table-responsive-lg table_common_area">
            <table class="table">
                <thead>
                    <tr>
                        <th>Forfait ID</th>
                        <th>Type de voyage</th>
                        <th>Prix</th>
                        <th>Restant à payer</th>
                        <th>Statut</th>
                        <th>Payer</th>
                        <th>Télécharger la facture</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($reservation_forfait as $reservation)
                    <tr>
                        <td>{{ $reservation->Id_Forfait }}</td>
                        <td>{{ $reservation->forfait->type_forfait->Nom }}</td>
                        <td>{{ $reservation->forfait->Prix }} € </td>
                        <td>{{ $reservation->facture->Restant_payer }} €</td>
                        <td
                            class="@if($reservation->facture->statut_facture->Intitule == 'Payé') complete @elseif($reservation->facture->statut_facture->Intitule == 'Non Payé') cancel @elseif($reservation->facture->statut_facture->Intitule == 'En Attente de Payement' || $reservation->facture->statut_facture->Intitule == 'Partiellement Payé') in_progress @endif ">
                            {{ $reservation->facture->statut_facture->Intitule }}
                        </td>
                        <td>
                            <a
                                href="{{ route('show_forfait_reservation_payement', ['Id_Reservation' => $reservation->Id_Reservation_Forfait]) }}">
                                <i class="fa-regular fa-credit-card fa-xl"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('telecharger_facture', ['Id_Facture' => $reservation->Id_Facture]) }}">
                                <i class="fa-solid fa-download fa-xl"></i>
                        </td>
                        </a>

                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>

@stop