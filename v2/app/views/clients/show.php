
<main class="flex-shrink-0">
  
<div style="margin:50px;" class="container">
<?php if(isset($_GET['message'])) : ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong><?=$_GET['message']?></strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>
<?php endif?>
    <a style="margin: 10px 0;" class="btn btn-primary" href="?action=addClient">Ajouter un client</a>
<table id="myDataTable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clients as $client): ?>
            <tr>
                <td><?=$client['id']?></td>
                <td><?=$client['prenom']?></td>
                <td><?=$client['nom']?></td>
                <td><?=$client['email']?></td>
                <td><?=$client['telephone']?></td>
                <td>
              <a href="?action=editClient&&id=<?= $client['id']?>" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                </svg>
              </a>
              <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteServiceModal<?= $client['id']?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                </svg>
              </a>
              <div class="modal fade" id="deleteServiceModal<?= $client['id']?>" tabindex="-1" aria-labelledby="deleteServiceModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="deleteServiceModalLabel">Suppression de l'étudiant: <?= $client['prenom']." ". $client['nom']?></h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Voulez-vous supprimmer ce client?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                  <a href="?action=deleteClient&&id=<?=$client['id']?>" type="button" class="btn btn-primary">Oui</a>
                </div>
              </div>
            </div>
          </div>
            </td>
              
            </tr>
            <?php endforeach ?>
        </tbody>
      
    </table>
</div>
</main>
            