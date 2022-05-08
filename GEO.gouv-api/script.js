$(document).ready(function() {
    const apiUrl = 'https://geo.api.gouv.fr/communes?nom='; //RECUPERER API URL JAVASCRIPT GEO GOUV GRACE A COMMUNE
    const format = '&format=json'; //RETOURNER AU FORMAT JSON


    // VARIABLE INPUT code postal + ville + erreur
    let postal = $('#postal');
    let ville = $('#ville');
    let errorMessage = $('#error-message');

    // CODE POSTAL  + VILLE
    $(ville).on('blur', function() { //LORSQU'ON QUITTE LE CHAMP VILLE
        let nom = $(this).val();
        let url = apiUrl + nom + format;

        //ENVOYER REQUETE POUR RECUPERER DONNEES AU FORMAT JSON
        fetch(url, {
            method: 'get'
        }).then(response => response.json()).then(results => {

            $(postal).find('option').remove(); // SUPPRIMER OPTION PRECEDENTE POSTALE
            // SI RESULTAT ENVOYER PAR API EST PRESENT...
            if (results.length) {
                $(errorMessage).text('').hide(); // CACHER MESSSAGE ERREUR
                $.each(results, function(key, value) {

                    // SI INPUT VILLE STRICTEMENT EGAL A VALEUR NOM DE COMMUNES ALORS AFFICHER LISTE OPTION 
                   if ($(ville).val() === value.nom) {
                    
                        console.warn(value.codesPostaux); // RETOURNE NOM DE COMMUNE
                        for(let i = 0; i < value.codesPostaux.length; i++){
                            $(postal).append('<option value="' + value.codesPostaux[i] + '">' + value.codesPostaux[i] + '</option>');
                        }
                    }
                })
            } else {
                if ($(ville).val()) {
                    console.log('Erreur code postal/communes.');
                    $(errorMessage).text('Aucun code postal correspond a cette commune.').show();
                } else {
                    $(errorMessage).text('').hide();
                }
            }
            // CATCH ERREUR
        }).catch(err => {
            console.log(err);
        });

    });

    //END OF PROGRAM
});