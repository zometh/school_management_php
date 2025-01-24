<main class="flex-shrink-0">
    <div style="margin: 50px;" class="container">
        <form action="?action=saveRendezVous" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Date du rendez-vous</label>
                <input type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="datetime">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
            </div>
          
            <label for="exampleInputEmail1" class="form-label">Choisir le client</label>
            <select class="form-select mb-3" aria-label="Default select example" name="id_client">
                <?php foreach($clients as $client) :?>
                <option value="<?=$client["id"]?>"><?=$client["prenom"]." ".$client["nom"]." (".$client['email'].")"?></option>
                
                <?php endforeach ?>
            </select>



            </select>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</main>