<main class="flex-shrink-0">
<div style="margin: 50px;" class="container">
    <form action="?action=updateCours&&id=<?=$cours['id']?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom du cours</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" value="<?=$cours['nom']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre d'heure</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nb_heure" value="<?=$cours['nb_heure']?>">
        </div>
 
 

  
</select>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
</main>