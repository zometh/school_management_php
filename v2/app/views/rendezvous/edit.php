
<main class="flex-shrink-0">
    <div style="margin: 50px;" class="container">
        <form action="?action=updateRendezVous&&id=<?=$rendez_vous->id?>" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Date du rendez-vous</label>
                <input value="<?=$current_date?>" type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="datetime" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description" value="<?=$rendez_vous->description?>">
            </div>
          
            <label for="exampleInputEmail1" class="form-label">Choisir le client</label>
            <select class="form-select mb-3" aria-label="Default select example" name="id_client">
                <option selected value="<?=$current_client->id?>"><?= "{$current_client->prenom} {$current_client->nom} ({$current_client->email})"?></option>
                <?php foreach($clients as $client) :?>
                <option value="<?=$client["id"]?>"><?=$client["prenom"]." ".$client["nom"]." (".$client['email'].")"?></option>
                
                <?php endforeach ?>
            </select>



            </select>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</main>