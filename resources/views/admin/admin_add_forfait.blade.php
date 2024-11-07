@extends('layouts.admin')
@section('contenu')

<div class="dashboard__content">
    <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
        <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Ajouter un nouveau forfait</h1>
        </div>

        <div class="col-auto">

        </div>
    </div>


    <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
        <div class="tabs -underline-2 js-tabs">

            {{-- Menu --}}
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

                <div class="col-auto">
                    <button
                        class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                        data-tab-target=".-tab-item-1">Forfait informations</button>
                </div>
            </div>

            <div class="tabs__content pt-30 js-tabs-content">
                <form>
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="col-xl-10">
                            <div class="border-top-light mt-30 mb-30"></div>
                            <div class="row x-gap-20 y-gap-20">

                                <div class="col-6">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Intitulé</label>
                                        <input type="text" name="Intitule" required>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Durée</label>
                                        <input type="text" name="Duree" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Prix</label>
                                        <input type="text" name="Prix" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <x-select2 label="Choose a Country" idName="country-select" fieldName="country"
                                        placeholder="Select a country" isMultiple="true"
                                        :route="route('get_hebergement')" />

                                </div>
                                <div class="col-6">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Trade lisense no.</label>
                                        <input type="text" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">About hotel</label>
                                        <textarea required rows="5"></textarea>
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
                                                    <div class="icon-upload-file text-40 text-blue-1 mb-10"></div>
                                                    <div class="text-blue-1 fw-500">Upload Images</div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-10 text-14 text-light-1">PNG or JPG no bigger
                                                than
                                                800px wide and
                                                tall.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-inline-block pt-30">

                            <button type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                Créer un nouveau forfait
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop