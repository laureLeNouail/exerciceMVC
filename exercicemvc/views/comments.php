<h1>Commentaire : </h1>


    <a href="index.php" class="btn btn-primary" role="button">Liste des posts</a>
    </br>
    <div class="container mt-3">
    <table class="table table-striped">
      <tr>
        <th>Id</th>
        <th>Description</th>
        <th>Créé le</th>
      </tr>


    <?php 
      foreach($query as $cas){
        echo"<tr>
            <td>" .$cas["id"]."</td>
            <td>" .$cas["description"]."</td>
            <td>" .$cas["created_at"]."</td>
        </tr>";

      }
      
      ?>
      </table>
      </div>