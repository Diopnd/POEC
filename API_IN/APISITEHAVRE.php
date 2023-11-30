<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        // URL de l'API à appeler
        const apiUrlHavre = 'https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/osm-fr-stations-de-velo-en-libre-service@babel/records?limit=10';
        const apiUrlRouen = 'https://data.metropole-rouen-normandie.fr/api/explore/v2.1/catalog/datasets/eco-counter-sites/records?limit=10';





        function reussiteG(data,champ) {
            // Traitement des données de la réponse

            let name = data['results'][0][champ];
            let results = data['results'];

            let div = document.getElementById("maBelleDiv");

            results.forEach(element => {
                div.innerHTML += element[champ] + "<br>";
            });



            let divName = document.getElementById("titre");
            divName.innerHTML = name;

            console.log(data);
        }


        function reussitenom(data)

        {
            reussiteG(data, 'nom');
        }

        function reussitename(data) {

            reussiteG(data, 'name');
        }

        function echec(error) {
            // Gestion des erreurs
            console.error('Erreur lors de la récupération des données:', error.statusText);
        }



        $.ajax({
            url: apiUrlHavre,
            method: 'GET',
            dataType: 'json', // Type de données attendu
            //async: false, // Option pour une requête synchrone
            success: reussitename,
            error: echec
        });

        $.ajax({
            url: apiUrlRouen,
            method: 'GET',
            dataType: 'json', // Type de données attendu
            //async: false, // Option pour une requête synchrone
            success: reussitename,
            error: echec
        });
        console.log("hello toto");
    </script>
</head>

<body>

    <div id="titre"></div>
    <br>
    <div id="maBelleDiv">
    </div>
    <br>
    <div id="maBelleDivDerror">
    </div>


</body>

</html>