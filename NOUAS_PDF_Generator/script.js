$(document).ready(function() {
    const apiUrl = 'https://geo.api.gouv.fr/communes?nom='; //RECUPERER API URL JAVASCRIPT GEO GOUV GRACE A COMMUNE
    const format = '&format=json'; //RETOURNER AU FORMAT JSON


    // VARIABLE INPUT code postal + ville + erreur
    let postal1 = $('#postal1');
    let ville1 = $('#ville1');
    let postal2 = $('#postal2');
    let ville2 = $('#ville2');
    let errorMessage1 = $('#error-message1');
    let errorMessage2 = $('#error-message2');

    // CODE POSTAL N°1 + VILLE 1
    $(ville1).on('blur', function() { //LORSQU'ON QUITTE LE CHAMP VILLE
        let nom = $(this).val();
        let url = apiUrl + nom + format;

        //ENVOYER REQUETE POUR RECUPERER DONNEES AU FORMAT JSON
        fetch(url, {
            method: 'get'
        }).then(response => response.json()).then(results => {

            $(postal1).find('option').remove(); // SUPPRIMER OPTION PRECEDENTE POSTALE
            // SI RESULTAT ENVOYER PAR API EST PRESENT...
            if (results.length) {
                $(errorMessage1).text('').hide(); // CACHER MESSSAGE ERREUR
                $.each(results, function(key, value) {

                    // SI INPUT VILLE STRICTEMENT EGAL A VALEUR NOM DE COMMUNES ALORS AFFICHER LISTE OPTION 
                   if ($(ville1).val() === value.nom) {
                    
                        console.warn(value.codesPostaux); // RETOURNE NOM DE COMMUNE
                        $(postal1).append('<option value="' + value.codesPostaux[0] + '">' + value.codesPostaux[0] + '</option>');
                    }
                })
            } else {
                if ($(ville1).val()) {
                    console.log('Erreur code postal/communes.');
                    $(errorMessage1).text('Aucun code postal correspond a cette commune.').show();
                } else {
                    $(errorMessage1).text('').hide();
                }
            }
            // CATCH ERREUR
        }).catch(err => {
            console.log(err);
        });

    });



    // CODE POSTAL N°2 + VILLE 2
    $(ville2).on('blur', function() { //LORSQU'ON QUITTE LE CHAMP VILLE
        let nom2 = $(this).val();
        let url2 = apiUrl + nom2 + format;

        //ENVOYER REQUETE POUR RECUPERER DONNEES AU FORMAT JSON
        fetch(url2, {
            method: 'get'
        }).then(response => response.json()).then(results => {

            $(postal2).find('option').remove(); // SUPPRIMER OPTION PRECEDENTE POSTALE
            // SI RESULTAT ENVOYER PAR API EST PRESENT...
            if (results.length) {
                $(errorMessage2).text('').hide(); // CACHER MESSSAGE ERREUR
                $.each(results, function(key, value) {

                    // SI INPUT VILLE STRICTEMENT EGAL A VALEUR NOM DE COMMUNES ALORS AFFICHER LISTE OPTION 
                   if ($(ville2).val() === value.nom) {
                    
                        console.warn(value.codesPostaux); // RETOURNE NOM DE COMMUNE
                        $(postal2).append('<option value="' + value.codesPostaux[0] + '">' + value.codesPostaux[0] + '</option>');
                    }
                })
            } else {
                if ($(ville2).val()) {
                    console.log('Erreur code postal/communes.');
                    $(errorMessage2).text('Aucun code postal correspond a cette commune.').show();
                } else {
                    $(errorMessage2).text('').hide();
                }
            }
            // CATCH ERREUR
        }).catch(err => {
            console.log(err);
        });

    });

    //END OF PROGRAM
});