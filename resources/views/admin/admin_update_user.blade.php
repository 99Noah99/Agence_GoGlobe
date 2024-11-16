@extends('layouts.admin')
@section('contenu')

<div class="dashboard__content">
    <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
        <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Modifier le client</h1>
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
                        data-tab-target=".-tab-item-1">Client informations</button>
                </div>
            </div>

            <div class="tabs__content pt-30 js-tabs-content">
                <form action="{{ route('admin_update_user') }}" method="POST">
                    @csrf
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="col-xl-10">
                            <div class="border-top-light mt-30 mb-30"></div>
                            <div class="row x-gap-20 y-gap-20">

                                <div class="col-6">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Nom</label>
                                        <input type="text" name="Nom" value="{{$donnee_client->user->Nom}}" required>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Prenom</label>
                                        <input type="text" name="Prenom" value="{{$donnee_client->user->Prenom}}"
                                            required>
                                    </div>
                                </div>

                                <div class=" col-6">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Email</label>
                                        <input type="text" name="Email" value="{{$donnee_client->user->Email}}"
                                            required>
                                    </div>
                                </div>

                                <div class=" col-6">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Numéro de téléphone</label>
                                        <input type="text" name="Numero_tel"
                                            value="{{$donnee_client->user->Numero_tel}}">
                                    </div>
                                </div>
                                {{-- <div class=" col-6">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Identifiant</label>
                                        <input type="text" name="username" value="{{$donnee_client->user->username}}">
                                    </div>
                                </div>

                                <div class=" col-6">
                                    <div class="form-input ">
                                        <label class="lh-1 text-16 text-light-1">Mot de passe </label>
                                        <input type="text" name="password">
                                    </div>
                                </div> --}}

                                <div class="col-12 d-flex justify-content-center">
                                    <div class="form-input">
                                        <label class="lh-1 text-16 text-light-1">Categorie du
                                            client</label>
                                        <select name="Categorie_Client_Forfait" required>
                                            <option
                                                value="{{$donnee_client->categorie_client_forfait->Id_Categorie_Client_Forfait}}">
                                                {{ $donnee_client->categorie_client_forfait->Type }}</option>
                                            @foreach ($donne_categorie_client_forfait as $categorie)
                                            @if($categorie->Id_Categorie_Client_Forfait !=
                                            $donnee_client->categorie_client_forfait->Id_Categorie_Client_Forfait)
                                            <option value="{{ $categorie->Id_Categorie_Client_Forfait }}">
                                                {{ $categorie->Type }}
                                            </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="Id_Client" value="{{$donnee_client->Id_Client}}">

                            </div>

                        </div>
                    </div>
                    <div class="d-inline-block pt-30">

                        <button type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                            Modifier client
                        </button>

                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

{{-- <style>
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
</style> --}}


<!-- Script JavaScript pour gérer l'ajout et la suppression des étapes -->
{{-- <script>
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
        deleteButton.type = 'button'; // Ensure the button does not submit the form
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

        // Enable the submit button if there's at least one étape
        if (etapeCount > 0) {
            document.getElementById('submit-button').disabled = false;
        }

        // Réinitialiser les champs Titre et Rang
        document.getElementById('titre').value = '';
        document.getElementById('rang').value = '';
    }

    function supprimerEtape(row) {
        // Supprimer la ligne du tableau
        row.remove();

        etapeCount--;

        // Disable the submit button if there are no étapes
        if (etapeCount === 0) {
            document.getElementById('submit-button').disabled = true;
        }
    }

    // Add event listener to the submit button
    document.getElementById('submit-button').addEventListener('click', function(event) {
        if (etapeCount === 0) {
            event.preventDefault(); // Prevent form submission
            alert("Veuillez ajouter au moins une étape avant de soumettre le formulaire.");
        }
    });
</script> --}}
@endsection