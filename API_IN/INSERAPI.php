<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        // URL de l'API à appeler
        const apiUrl = 'http://127.0.0.1:8000/api/1234/getNumber';

        var resultats = [ -1, -1, -1, -1, -1, -1 ];
        var index = 0;

        function reussite ( data ) 
        {
            // Traitement des données de la réponse
            let number = data['number'];
            console.log(index);
            resultats[index++] = number;
            verifieResultat();
        }

        function verifieResultat () 
        {
            let divName = document.getElementById( "titre" );
            if (resultats.includes(-1)) {
                divName.innerHTML += "résultats incomplets<br>";
            } else {
                divName.innerHTML += resultats;
            }
            console.log(resultats);
        }

        function echec (error) 
        {
                    // Gestion des erreurs
                    console.error('Erreur lors de la récupération des données:', error.statusText);
        }
        for (let i = 0; i < 6; i++) {
            $.ajax(
            {
                    url: apiUrl,
                    method: 'GET',
                    dataType: 'json', // Type de données attendu
                    //async: false, // Option pour une requête synchrone
                    success : reussite, 
                    error : echec
                }
            );
            setTimeout(500);
        }
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