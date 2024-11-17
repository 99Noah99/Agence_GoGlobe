@extends('layouts.customer_dashbord', ['current_user' => $current_user])
@section('contenu_account')

<div class="col-lg-8">
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
                        <h3>Reservation en cours</h3>
                        <h1>a voir si je fais</h1>
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
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($reservation_forfait as $reservation)
                        <td>{{ $reservation->Id_Forfait }}</td>
                        <td>{{ $reservation->forfait->type_forfait->Nom }}</td>
                        <td>{{ $reservation->forfait->Prix }} € </td>
                        <td
                            class="@if($reservation->facture->statut_facture->Intitule == 'Payé') complete @elseif($reservation->facture->statut_facture->Intitule == 'Non Payé') cancel @elseif($reservation->facture->statut_facture->Intitule == 'En Attente de Payement' || $reservation->facture->statut_facture->Intitule == 'Partiellement Payé') in_progress @endif ">
                            {{ $reservation->facture->statut_facture->Intitule }}
                        </td>
                        <td><i class="fas fa-eye"></i></td>
                        @endforeach

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop