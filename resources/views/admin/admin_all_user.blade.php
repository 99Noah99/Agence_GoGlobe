@extends('layouts.admin')
@section('contenu')

<div class="dashboard__content">
    <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
        <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Gestion clients</h1>

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
                        data-tab-target=".-tab-item-1">Tous les clients</button>
                </div>

            </div>

            <div class="tabs__content pt-30 js-tabs-content">

                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <div class="overflow-scroll scroll-bar-1">
                        <table class="table-4 -border-bottom col-12">
                            <thead class="bg-light-2">
                                <tr>
                                    <th>Client</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Date création</th>
                                    <th>Catégorie</th>
                                    <th class="text-center">Modifier</th>
                                    <th class="text-center">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donnee_client as $client)
                                <tr>
                                    <td>{{$client->user->Nom}} {{$client->user->Prenom}} </td>
                                    <td>{{$client->user->Email}}</td>
                                    <td> {{$client->user->Numero_tel}}</td>
                                    <td>{{$client->created_at}}</td>
                                    <td>{{$client->categorie_client_forfait->Type}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('show_admin_update_user', ['id' => $client->Id_Client]) }}">
                                            <i class="fa-solid fa-pen fa-bounce fa-lg"></i>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin_delete_user', ['id' => $client->Id_Client]) }}">
                                            <i class="fa-solid fa-trash fa-bounce fa-lg" style="color: #940000;"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@stop