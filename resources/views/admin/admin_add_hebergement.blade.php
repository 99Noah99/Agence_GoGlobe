@extends('layouts.admin')
@section('contenu')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

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

            </div>

            <form action="{{ route('create_hebergement') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="tabs__content pt-30 js-tabs-content">
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="col-xl-10">
                            <div class="border-top-light mt-30 mb-30"></div>
                            <div class="row x-gap-20 y-gap-20">
                                <div class="col-6">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Nom</label>
                                        <input type="text" name="Nom" placeholder="Nom de l'hôtel" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Type</label>
                                        <select name="Id_Type_Hebergement" required>
                                            <option value="">Sélectionnez une option</option>
                                            @foreach ($donnee_type_hebergement as $type_hebergement)
                                            <option value="{{$type_hebergement->Id_Type_Hebergement}}">
                                                {{$type_hebergement->Intitule}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <x-localisation /> {{-- Include the localisation component --}}
                                <div class="col-8">
                                    <div class="form-input">
                                        <label class="lh-1 text-16 text-light-1">Description</label>
                                        <textarea name="Description" rows="5" required
                                            placeholder="Description de l'hôtel"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-30">
                                <div class="fw-500">Images</div>

                                {{-- <div class="row x-gap-20 y-gap-20 pt-15">
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
                                                <input type="file" name="Image" id="image-input" accept="image/*"
                                                    style="display: none;" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                                <div class="col-6">
                                    {{-- <div class="form-input"> --}}
                                        <input type="file" name="image" class="form-control" accept="image/*" required>
                                        {{--
                                    </div> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="d-inline-block pt-30">

                    <button type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                        Créer un nouvel hébergement
                    </button>

                </div>
        </div>
        </form>
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