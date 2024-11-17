<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Facture</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Facture</h1>
    <p><strong>reservation du forfait n°{{$Id_Forfait}}</p>
    <p><strong>Du : </strong> {{$date_debut}} <strong> Au : </strong>{{$date_fin}}</p>
    <p><strong>Facture de reservation pour forfait : </strong> {{ $intitule }}</p>
    <p><strong>Montant :</strong> {{ number_format($montant, 2, ',', ' ') }} €</p>
    <p><strong>Forfait réserver le :</strong> {{ $date_creation }}</p>
</body>

</html>