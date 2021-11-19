
    <h1>Poste :</h1>
 
    <div class="container mt-3">
    <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Actif ?</th>
        <th>Crée le</th>
        <th>Commentaire</th>
      </tr>

      <?php 
      
      foreach($query as $cas){
        echo"<tr>
        <td>" .$cas["id"]."</td>
        <td>" .$cas["title"]."</td>
        <td>" .$cas["description"]."</td>
        <td>" .$cas["active"]."</td>
        <td>" .$cas["created_at"]."</td>
        <td> <a href='index.php?action=comments-list&post_id=".$cas['id']."'>Voir</a> </td>
        </tr>";

      }
      
      ?>

    </table>
    </div>
