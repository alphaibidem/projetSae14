/*document.querySelector('.submit-btn').addEventListener('click', function (event) {
    event.preventDefault(); // empêche la soumission du formulaire

    let emptyFields = false;

    // vérifie si tous les champs sont remplis
    document.querySelectorAll('.input-field').forEach(function (input) {
        if (input.value === '') {
            emptyFields = true;
        }
    });

    if (emptyFields) {
        alert('Tous les champs doivent être remplis');
    } else {
        // tous les champs sont remplis, on peut permettre le téléchargement
        document.querySelector('.submit-btn a').href = 'cv/CV-emploi.pdf';
    }
});*/
