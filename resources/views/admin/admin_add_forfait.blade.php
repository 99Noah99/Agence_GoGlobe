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
                <form action="{{ route('create_forfait') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Categorie pour les clients</label>
                                        <select name="Id_Categorie_Client_Forfait" required>
                                            <option value="">Sélectionnez une option</option>
                                            @foreach ($donnee_categorie_forfait as $categorie_forfait)
                                            <option value="{{$categorie_forfait->Id_Categorie_Client_Forfait}}">
                                                {{$categorie_forfait->Type}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="form-input">
                                        <label class="lh-1 text-16 text-light-1">Type du forfait</label>
                                        <select name="Id_Type_Forfait_Voyage" required>
                                            <option value="">Sélectionnez une option</option>
                                            @foreach ($donnee_type_forfait as $type_forfait)
                                            <option value="{{ $type_forfait->Id_Type_Forfait_Voyage }}">
                                                {{ $type_forfait->Nom }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <x-select2 label="Moyens de transports" idName="moyen-transport-select"
                                        fieldName="Id_Moyen_Transport" placeholder="Sélectionnez une option"
                                        isMultiple="true" :route="route('get_moyen_transport')" />
                                </div>
                                <div class="col-6">
                                    <x-select2 label="Choisir un hebergement" idName="hebergement-select"
                                        fieldName="Id_Hebergement" placeholder="Sélectionnez une option"
                                        isMultiple="true" :route="route('get_hebergement')" />

                                </div>
                            </div>

                            <!-- Delimitation section pour les étapes avec titre-->
                            <hr class="my-4">
                            <div class="row x-gap-20 y-gap-20">
                                <h4 class="text-20 fw-500">Étapes</h4>


                                <!-- Section pour les étapes -->
                                <div class="col-6">
                                    <div class="form-input">
                                        <label class="lh-1 text-16 text-light-1">Titre</label>
                                        <input type="text" id="titre" placeholder="Titre de l'étape">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-input">
                                        <label class="lh-1 text-16 text-light-1">Rang</label>
                                        <input type="number" id="rang" placeholder="Rang de l'étape">
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <button type="button" onclick="ajouterEtape()"
                                        class="button h-40 px-20 -light-1 bg-border  text-black">
                                        Ajouter une étape
                                    </button>
                                </div>

                                <!-- Tableau pour afficher les étapes ajoutées -->
                                <div class="col-12 mt-20 d-flex justify-content-center">
                                    <table class="table table-bordered" id="table-etapes">
                                        <thead>
                                            <tr>
                                                <th>Titre</th>
                                                <th>Rang</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Les lignes ajoutées apparaîtront ici -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="mt-30">
                            <div class="fw-500">Images</div>
                            <div class="col-6">
                                <input type="file" name="image" class="form-control" accept="image/*" required>
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

<style>
    /* Style personnalisé pour les bordures du tableau */
    #table-etapes {
        border-collapse: collapse;
        /* Assure une apparence compacte pour les bordures */
    }

    #table-etapes th,
    #table-etapes td {
        border: 1px solid #000;
        /* Bordure noire de 2px pour chaque cellule */
        padding: 10px;
        padding-right: 100px;
        padding-left: 100px;
        /* Espacement à l'intérieur des cellules */
        text-align: center;
        /* Centrer le texte pour une meilleure lisibilité */
    }
</style>


<!-- Script JavaScript pour gérer l'ajout et la suppression des étapes -->
<script>
    let etapeCount = 0;

    function ajouterEtape() {
        // Récupérer les valeurs des champs "Titre" et "Rang"
        const titre = document.getElementById('titre').value;
        const rang = document.getElementById('rang').value;

        // Vérifier que les champs ne sont pas vides
        if (!titre || !rang) {
            alert("Veuillez remplir les champs Titre et Rang.");
            return;
        }

        // Créer une nouvelle ligne dans le tableau
        const tableBody = document.getElementById('table-etapes').getElementsByTagName('tbody')[0];
        const newRow = tableBody.insertRow();

        // Ajouter les cellules pour Titre, Rang, et Action (Supprimer)
        const titreCell = newRow.insertCell(0);
        const rangCell = newRow.insertCell(1);
        const actionCell = newRow.insertCell(2);

        titreCell.textContent = titre;
        rangCell.textContent = rang;

        // Créer un bouton Supprimer pour chaque ligne
        const deleteButton = document.createElement('button');
        deleteButton.textContent = "Supprimer";
        deleteButton.className = "button h-30 px-10 bg-red-1 text-white";
        deleteButton.onclick = function() {
            supprimerEtape(newRow);
        };
        actionCell.appendChild(deleteButton);

        // Ajouter des champs cachés pour envoyer les données au serveur
        const hiddenTitre = document.createElement('input');
        hiddenTitre.type = "hidden";
        hiddenTitre.name = `etapes[${etapeCount}][titre]`;
        hiddenTitre.value = titre;

        const hiddenRang = document.createElement('input');
        hiddenRang.type = "hidden";
        hiddenRang.name = `etapes[${etapeCount}][rang]`;
        hiddenRang.value = rang;

        newRow.appendChild(hiddenTitre);
        newRow.appendChild(hiddenRang);

        etapeCount++;

        // Réinitialiser les champs Titre et Rang
        document.getElementById('titre').value = '';
        document.getElementById('rang').value = '';
    }

    function supprimerEtape(row) {
        // Supprimer la ligne du tableau
        row.remove();
    }
</script>

@stop