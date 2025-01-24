
<main class="flex-shrink-0">
<div style="margin: 50px;" class="container">
    <form action="?action=updateClient&&id=<?=$client->id?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prenom" value="<?=$client->prenom?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" value="<?=$client->nom?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Numéro téléphone</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telephone" value="<?=$client->telephone?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Adresse email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?=$client->email?>">
        </div>
       
       
      
  
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
</main>