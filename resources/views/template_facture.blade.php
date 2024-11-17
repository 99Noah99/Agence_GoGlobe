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
    <p><strong>Intitulé :</strong> {{ $intitule }}</p>
    <p><strong>Montant :</strong> {{ number_format($montant, 2, ',', ' ') }} €</p>
    <p><strong>Date de création :</strong> {{ $date_creation }}</p>
</body>

</html>