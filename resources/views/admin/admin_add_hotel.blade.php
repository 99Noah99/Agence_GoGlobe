@extends('layouts.admin')
@section('contenu')

<div class="dashboard__content">
    <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
        <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Add Hotels</h1>
            <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div>

        </div>

        <div class="col-auto">

        </div>
    </div>


    <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
        <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

                <div class="col-auto">
                    <button
                        class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                        data-tab-target=".-tab-item-1">Hotel information</button>
                </div>

                {{-- <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                        data-tab-target=".-tab-item-2"> Location</button>
                </div>

                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                        data-tab-target=".-tab-item-3">Pricing</button>
                </div>

                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                        data-tab-target=".-tab-item-4">Attributes</button>
                </div> --}}

            </div>

            <div class="tabs__content pt-30 js-tabs-content">
                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <div class="col-xl-10">
                        <div class="border-top-light mt-30 mb-30"></div>
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-6">
                                <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Nom</label>
                                    <input type="text" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Description</label>
                                    <input type="text" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Pays</label>
                                    <select id="recherche_pays" name='pays' required>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Region</label>
                                    <select id="recherche_region" name='region' required>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Ville</label>
                                    <select id="recherche_ville" name='ville' required>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Type</label>
                                    <select name="intitule" required>
                                        <option value="">Sélectionnez une option</option>
                                        @foreach ($donnee_type_hebergement as $type_hebergement)
                                        <option value="{{$type_hebergement}}">{{$type_hebergement}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mt-30">
                            <div class="fw-500">Images</div>

                            <div class="row x-gap-20 y-gap-20 pt-15">
                                <div class="col-auto">
                                    <div class="w-200">
                                        <div class="d-flex ratio ratio-1:1">
                                            <div
                                                class="flex-center flex-column text-center bg-blue-2 h-full w-1/1 absolute rounded-4 border-type-1">
                                                <div> <i class="fa-solid fa-image fa-2xl"></i> </div>
                                                <div class="text-blue-1 fw-500">Upload Images</div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-10 text-14 text-light-1">PNG or JPG no bigger than
                                            800px wide and
                                            tall.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="d-inline-block pt-30">

                    <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                        Save changes
                    </a>

                </div>
            </div>

            {{-- <div class="tabs__pane -tab-item-2">
                <div class="col-xl-10">
                    <div class="row x-gap-20 y-gap-20">
                        <div class="col-12">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Location</label>
                                <input type="text" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Town</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">City</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">State</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Zip code</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Hotel map location</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Surroundings</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Hospital</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Distance</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input">
                                <label class="lh-1 text-16 text-light-1">Shopping mall</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Distance</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Police station</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Distance</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Bus stopage</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Distance</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Airport name</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Distance</label>
                                <input type="text" required>
                            </div>
                        </div>

                    </div>

                    <div class="d-inline-block pt-30">
                        <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                            Save Changes
                        </a>
                    </div>
                </div>
            </div>

            <div class="tabs__pane -tab-item-3">
                <div class="col-xl-9 col-lg-11">
                    <div class="row x-gap-20 y-gap-20">
                        <div class="col-12">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Room name</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Number of bed</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Number of person</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Pricing</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Check in time</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Check out time</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Reservations</label>
                                <input type="text" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Day stay</label>
                                <input type="text" required>
                            </div>
                        </div>
                    </div>

                    <div class="d-inline-block mt-30">

                        <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                            Save Changes <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                    </div>
                </div>
            </div>

            <div class="tabs__pane -tab-item-4">
                <div class="col-xl-9 col-lg-11">
                    <div class="row x-gap-100 y-gap-15">
                        <div class="col-12">
                            <div class="text-18 fw-500">Property Type</div>
                        </div>


                        <div class="col-lg-2 col-sm-6">
                            <div class="row y-gap-15">
                                <div class="col-12">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Apartments</div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6">
                            <div class="row y-gap-15">
                                <div class="col-12">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Boats</div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6">
                            <div class="row y-gap-15">
                                <div class="col-12">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Resort</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6">
                            <div class="row y-gap-15">
                                <div class="col-12">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Villa</div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6">
                            <div class="row y-gap-15">
                                <div class="col-12">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Cottage</div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6">
                            <div class="row y-gap-15">
                                <div class="col-12">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Hotel</div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="row x-gap-100 y-gap-15 pt-30">
                        <div class="col-12">
                            <div class="text-18 fw-500">Facilities</div>
                        </div>


                        <div class="col-lg-3 col-sm-6">
                            <div class="row y-gap-15">
                                <div class="col-12">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Room heater</div>

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Room service</div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="row y-gap-15">
                                <div class="col-12">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Transport</div>

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Spa</div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="row y-gap-15">
                                <div class="col-12">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Laundry</div>

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Wi-fi</div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="row y-gap-15">
                                <div class="col-12">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Gym</div>

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 lh-11 ml-10">Swimming pool</div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="d-inline-block mt-30">

                        <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                            Save Changes
                        </a>

                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        // Initialiser Select2 avec l'URL de l'API
        $('#recherche_pays').select2({
            placeholder: 'Sélectionnez un pays',
            ajax: {
                url: "{{ route('recherche_pays') }}",
                dataType: 'json',
                delay: 0,
                data: function (params) {
                    return {
                        term: params.term // Terme de recherche
                    };
                },
                processResults: function (data) {
                    return {
                        results: data.results
                    };
                },
                cache: true
            }
        });

        $('#recherche_region').select2({
                placeholder: 'Sélectionnez une région',
                ajax: {
                    url: function () {
                        let countryId = $('#recherche_pays').val();
                        return '/recherche/region/' + countryId;
                    },
                    dataType: 'json',
                    delay: 0,
                    processResults: function(data) {
                        return { results: data.results };
                    }
                }
            });

        
                    // Initialisation du champ Select2 pour les villes
            $('#recherche_ville').select2({
                placeholder: 'Sélectionnez une ville',
                ajax: {
                    url: function () {
                        let regionId = $('#recherche_region').val();
                        return '/recherche/ville/' + regionId;
                    },
                    dataType: 'json',
                    delay: 0,
                    processResults: function(data) {
                        return { results: data.results };
                    }
                }
            });
        // Lorsque le pays est sélectionné, recharge les régions
        $('#recherche_pays').on('change', function() {
                let countryId = $(this).val();

                if (countryId) {
                    $('#recherche_region').removeAttr('disabled');
                    $('#recherche_region').val(null).trigger('change'); // Reset du champ région
                    $('#recherche_ville').val(null).trigger('change'); // Reset du champ ville
                    $('#recherche_ville').attr('disabled', 'disabled'); // Désactive les villes en attendant
                } else {
                    $('#recherche_region').attr('disabled', 'disabled');
                    $('#recherche_ville').attr('disabled', 'disabled');
                }
            });

            // Lorsque la région est sélectionnée, recharge les villes
            $('#recherche_region').on('change', function() {
                let regionId = $(this).val();

                if (regionId) {
                    $('#recherche_ville').removeAttr('disabled');
                    $('#recherche_ville').val(null).trigger('change'); // Reset du champ ville
                } else {
                    $('#recherche_ville').attr('disabled', 'disabled');
                }
            });
    });
</script>

@stop