<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Partage au monde!</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="title" class="form-control" required />
        </div>
        <div class="form-group">
            <label>Texte</label>
            <textarea type="text" name="body" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Lien</label>
            <input type="text" name="link" class="form-control" required />
        </div>
        
        <input class="btn btn-primary" name="submit" type="submit" value="submit">
        <a class="btn btn-danger" href="<?php echo ROOT_PATH ?>shares">Annuler</a>
    </form>
  </div>
</div>