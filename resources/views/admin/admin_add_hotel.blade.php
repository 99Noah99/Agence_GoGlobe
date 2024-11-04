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

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="tabs__content pt-30 js-tabs-content">
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="col-xl-10">
                            <div class="border-top-light mt-30 mb-30"></div>
                            <div class="row x-gap-20 y-gap-20">
                                <div class="col-6">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Nom</label>
                                        <input type="text" name="nom" required placeholder="Nom de l'hôtel">
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
                                <x-localisation /> {{-- Include the localisation component --}}
                                <div class="col-8">
                                    <div class="form-input">
                                        <label class="lh-1 text-16 text-light-1">Description</label>
                                        <textarea name="description" rows="5" required
                                            placeholder="Description de l'hôtel"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-30">
                                <div class="fw-500">Images</div>

                                <div class="row x-gap-20 y-gap-20 pt-15">
                                    <div class="col-auto">
                                        <div class="w-200">
                                            <div class="d-flex ratio ratio-1:1">
                                                <div id="upload-area" style="cursor: pointer;"
                                                    class="flex-center flex-column text-center bg-blue-2 h-full w-1/1 absolute rounded-4 border-type-1">
                                                    <div> <i class="fa-solid fa-image fa-2xl"></i> </div>
                                                    <div class="text-blue-1 fw-500">Upload Images</div>
                                                    <img id="image-preview" src="#" alt="Aperçu de l'image"
                                                        style="display: none; max-width: 200px;" />
                                                </div>
                                                <!-- Champ input caché -->
                                                <input type="file" name="image" id="image-input" accept="image/*"
                                                    style="display: none;" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="d-inline-block pt-30">

                        <button type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                            Créer l'hôtel
                        </button>

                    </div>
                </div>
            </form>
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
    document.getElementById('upload-area').addEventListener('click', function() {
        document.getElementById('image-input').click();
    });

    document.getElementById('image-input').addEventListener('change', function() {
        const [file] = this.files;
        if (file) {
            const preview = document.getElementById('image-preview');
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    });
</script>
@stop