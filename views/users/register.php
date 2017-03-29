<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Créer un compte</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="name" class="form-control" required/>
        </div>
        <div class="form-group">
            <label>Courriel</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" name="password" class="form-control" required />
        </div>
        <input class="btn btn-primary" name="submit" type="submit" value="submit">
    </form>
  </div>
</div>