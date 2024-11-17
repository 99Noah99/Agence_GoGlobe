@extends('layouts.customer_dashbord', ['current_user' => $current_user])
@section('contenu_account')

<div class="col-lg-8">
    <div class="dashboard_common_table">
        <div class="wallwt_area_top">
            <h3>Payement de votre réservation n°{{$reservation->Id_Reservation_Forfait}} </h3>
            <div class="row">
                <div class="col-lg-6">
                    <div class="wallet_area_boxed">
                        <h4>Informations</h4>
                        {{-- <div class="wallet_blance_boxed">
                            <p>Wallet balance</p>
                            <h5>BDT 12,750.00</h5>
                        </div> --}}
                        <div class="wallet_boxed_flex">
                            <div class="wallet_blance_boxed">
                                <p>Prix total</p>
                                <h5>{{$reservation->facture->Montant}} €</h5>
                            </div>
                            <div class="wallet_blance_boxed">
                                <p>Reste à payer</p>
                                <h5>{{$reservation->facture->Restant_payer}} €</h5>
                            </div>
                        </div>
                        <div class="dashboard_price_range">
                            <div id="progress-bar" class="main_range_price" data-progress="0"></div>
                            <div class="price_range_blance">
                                <p>{{$reservation->facture->Montant - $reservation->facture->Restant_payer}} €</p>
                                <p>{{$reservation->facture->Restant_payer}} €</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wallet_area_boxed">
                        <h4>Payer</h4>
                        <div class="add_balance_area">
                            <form id="payment-form" action="{{ route('create_forfait_reservation_payement') }}"
                                method="post">
                                @csrf
                                <!-- Boutons radio pour les types de paiement -->
                                <div class="form-group">
                                    @foreach($type_payement as $type)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Id_Type_Payement"
                                            id="payement{{ $type->Id_Type_Payement }}"
                                            value="{{ $type->Id_Type_Payement }}" required>
                                        <label class="form-check-label" for="payement{{ $type->Id_Type_Payement }}">
                                            {{ $type->Intitule }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-text">€</span>
                                    <input type="number" name="Montant" id="montant" class="form-control"
                                        aria-label="Amount (to the nearest dollar)" required>
                                </div>
                                <input type="hidden" name="Id_Facture" value="{{$reservation->facture->Id_Facture}}">
                                <div class="other_add_balance_area">
                                    <button class="btn btn_theme btn_md w-100">Payer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="wallet_table_top">Historique de vos payements</h3>
            <div class="wallet_data_table">
                <div class="table-responsive-lg table_common_area">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Montant</th>
                                <th>Type</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donnee_payement as $payement)
                            <tr>
                                <td>{{$payement->Date_creation}}</td>
                                <td>{{$payement->Prix}}</td>
                                <td>{{$payement->type_payement->Intitule}}</td>
                                <td>{{$payement->statut_payement->Intitule}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>


    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var totalAmount = {{$reservation->facture->Montant}};
        var remainingAmount = {{$reservation->facture->Restant_payer}};
        var progressBar = document.getElementById('progress-bar');

        var percentage = totalAmount > 0 ? ((totalAmount - remainingAmount) / totalAmount) * 100 : 0;
        progressBar.style.setProperty('--progress', percentage + '%');
        progressBar.setAttribute('data-progress', Math.round(percentage));
        progressBar.style.width = percentage + '%';

        // Validation du formulaire
        var form = document.getElementById('payment-form');
        var montantInput = document.getElementById('montant');
        var maxAmount = {{$reservation->facture->Restant_payer}};

        form.addEventListener('submit', function(event) {
            var montant = parseFloat(montantInput.value);
            if (montant > maxAmount || montant <= 0) {
                event.preventDefault();
                alert('Le montant saisi doit être supérieur à 0 et ne doit pas dépasser ' + maxAmount + ' €.');
            }
        });
    });
</script>

@stop