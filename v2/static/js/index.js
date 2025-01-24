

new DataTable('#myDataTable');
$(document).ready(function() {
$('#myDataTable').DataTable({
    "oLanguage": {
        "sSearch": "Rechercher",
        "sLengthMenu": "Afficher _MENU_ Lignes par page",
        "sInfo": "Affichage de _START_ à _END_ sur _TOTAL_ enregistrements",
        "oPaginate": {
            "sNext": "Suivant",
            "sPrevious": "Précédent"
        }
    }
});
});

