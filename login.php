<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 13/11/2018
 * Time: 00:46
 */
include_once('header.php');

?>
<div class="container">
    <h2>Connexion</h2>
    <form action="action_page.php" method="post">
        <div class="form-group">
            <label for="email">Pseudo: </label>
            <input type="text" class="form-control" id="pseudo" placeholder="Entrez votre pseudo" name="pseudo">
        </div>
        <div class="form-group">
            <label for="pwd">Mot de passe:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Entrez votre mot de passe" name="pwd">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <div class="form-group">
            <label for="register"><a href="register.php">Inscrit toi</a></label>

        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
</div>



<?php
include_once ('footer.php');
?>
