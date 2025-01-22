<main class="flex-shrink-0">
<div style="margin: 50px;" class="container">
    <form action="?action=updateEtudiant&&id=<?=$etudiant['id']?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prenom" value="<?=$etudiant['prenom']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" value="<?=$etudiant['nom']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Adresse email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?=$etudiant['email']?>">
        </div>
       
       
      
        <select class="form-select mb-3" aria-label="Default select example" name="filiere">
  <option value="<?=$etudiant['filiere']?>" selected><?=$etudiant['filiere']?></option>
  <option value="Informatique">Informatique</option>
  <option value="Gestion">Gestion</option>
  <option value="Marketing">Marketing</option>
  
</select>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
</main>