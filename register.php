<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 13/11/2018
 * Time: 00:52
 */
include_once('header.php');
?>
<div class="container">
    <h2>Inscription</h2>
    <form action="register_action.php" method="post">
        <div class="form-group">
            <label for="email">Pseudo: </label>
            <input type="text" class="form-control" placeholder="Entrez votre pseudo que vous souhaitez" name="pseudo">
        </div>
        <div class="form-group">
            <label for="pwd">Mot de passe :</label>
            <input type="password" class="form-control" placeholder="Entrez votre mot de passe que vous souhaitez" name="pwd">
        </div>
        <div class="form-group">
            <label for="pwd">Confirmation :</label>
            <input type="password" class="form-control" placeholder="Entrez une deuxième fois le mot de passe que vous souhaitez" name="pwd2">
        </div>
        <button type="submit" class="btn btn-primary">Inscription</button>
    </form>
</div>




<?php
include_once('footer.php');
?>
