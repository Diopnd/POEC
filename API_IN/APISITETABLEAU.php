<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        // URL de l'API à appeler
        var listeApi = 
        [
            { 'ville' : 'Rouen', callBack: reussitename, 'champs' : 'name', 'apiURL' : 'https://data.metropole-rouen-normandie.fr/api/explore/v2.1/catalog/datasets/eco-counter-sites/records?limit=100'},
            { 'ville' : 'Rennes', callBack: reussitenom,'champs' : 'nom', 'apiURL' : 'https://data.rennesmetropole.fr/api/explore/v2.1/catalog/datasets/etat-des-stations-le-velo-star-en-temps-reel/records?limit=60'},
            { 'ville' : 'Lille', callBack: reussitename,'champs' : 'nom', 'apiURL' : 'https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/osm-fr-stations-de-velo-en-libre-service@babel/records?limit=60'}
        ];





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


listeApi.forEach(ville=>
{

        $.ajax(
        {
            url: ville[ 'apiURL'],
            method: 'GET',
            dataType: 'json', // Type de données attendu
            //async: false, // Option pour une requête synchrone
            success: ville['callback'],
            error: echec
        }
        );

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