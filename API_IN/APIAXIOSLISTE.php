<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        // URL de l'API à appeler
        var listeApi = 
        [
            { 'ville' : 'Rouen', 'callBack': reussiteName, 'champs' : 'name', 'apiURL' : 'https://data.metropole-rouen-normandie.fr/api/explore/v2.1/catalog/datasets/eco-counter-sites/records?limit=100'},
            { 'ville' : 'Rennes', 'callBack': reussiteNom,'champs' : 'nom', 'apiURL' : 'https://data.rennesmetropole.fr/api/explore/v2.1/catalog/datasets/etat-des-stations-le-velo-star-en-temps-reel/records?limit=60'},
            { 'ville' : 'Lille', 'callBack': reussiteName,'champs' : 'name', 'apiURL' : 'https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/osm-fr-stations-de-velo-en-libre-service@babel/records?limit=60'},
            { 'ville' : 'Toulouse', 'callBack': reussiteName,'champs' : 'name', 'apiURL' : 'https://data.toulouse-metropole.fr/api/explore/v2.1/catalog/datasets/api-velo-toulouse-temps-reel/records?limit=20'}
        ];

        var age = 12;

        function reussiteNom ( data ) 
        {
            reussiteG(data, 'nom');
        }

        function reussiteName ( data ) 
        {
            reussiteG(data, 'name');
        }

        function reussiteG ( data, $champ ) 
        {
            console.log(data.data);
            // Traitement des données de la réponse

            let name = data.data[ 'results' ][0]['$champ'];
            let results = data.data[ 'results' ];

            let div = document.getElementById( "maBelleDiv" );

            results.forEach( element => {
                div.innerHTML += element[ $champ ]+"<br>";
            });



            let divName = document.getElementById( "titre" );
            divName.innerHTML = name;

            console.log(data);    
        }

        function echec (error) 
        {
                    // Gestion des erreurs
                    console.error('Erreur lors de la récupération des données:', error);
        }

        listeApi.forEach (ville => {
            axios.get(ville['apiURL']).then(ville['callBack']).catch(echec);
            /*$.ajax(
                {
                    url: ville['apiURL'],
                    method: 'GET',
                    dataType: 'json', // Type de données attendu
                    //async: false, // Option pour une requête synchrone
                    success : ville['callBack'], 
                    error : echec
                }
            );*/
        });
            
            console.log( "hello toto" );
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