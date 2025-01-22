<main class="flex-shrink-0">
<div style="margin: 50px;" class="container">
    <form action="?action=saveEtudiant" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prenom">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Adresse email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
       
       
      
        <select class="form-select mb-3" aria-label="Default select example" name="filiere">

  <option value="Informatique">Informatique</option>
  <option value="Gestion">Gestion</option>
  <option value="Marketing">Marketing</option>
  
</select>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
</main>