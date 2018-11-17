<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 16/11/2018
 * Time: 19:10
 */
include_once('header.php');
include_once('function/function.php');
$article = viewArticle($_GET['id']);
$comms = selectComms($_GET['id']);
$i = 0;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1><?php echo $article['title'] ?></h1>
            <img src="img/<?php echo $article['image'] ?>" width="400px" height="400px">
            <p><?php echo  $article['content'] ?></p>

            <?php if(isset($_SESSION['pseudo'])): ?>
            <form action="sendComments.php?id=<?php echo $_GET['id']; ?>" method="post">
                <div class="form-group">
                    <label for="email">Pseudo: </label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="pwd">Commentaire</label>
                    <textarea class="form-control" name="content"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Envoyer</button>
            </form>
            <?php else: ?>
                <p>Vous ne pouvez pas poster d'article tant que vous êtes pas connecté</p>
            <?php endif; ?>
            <br>
            <?php foreach ($comms as $value){ ?>
                <h3><?php echo $value['username'] ?></h3>
                <p><?php echo $value['content'] ?></p>
                <hr>
            <?php }?>
        </div>
    </div>
</div>
<?php
include_once('footer.php');
?>
