<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 10/11/2018
 * Time: 02:28
 */
include_once('header.php');
include_once('function/function.php');




    $article = selectArticleAdmin();


?>
<div class="container mt-3">
    <div class="media-right">
        <br>
        <?php if(isset($_SESSION['role'])): ?>
            <button class="btn btn-primary"><a  style="text-decoration: none; color: white" href="add.php">Ajouter un article</a></button>
        <?php else:?>
            <p>Connectez-vous pour poster un article</p>
        <?php endif ?>
    </div>


            <?php foreach ($article as $key):?>
                <div class="media">
                    <img class="mr-3 mt-3" src="img/<?php echo $key['image']; ?>" width="150px" height="150px">
                <div class="media-body">
                    <h4><a href="viewArticle.php?id=<?php echo $key['id'] ?>"><?php echo $key['title'] ?></a></h4>
                    <p><?php echo $key['content'] ?></p>
                </div>
                <?php if(isset($_SESSION['role'])): ?>
                    <?php if($_SESSION['role'] == 1): ?>
                        <a href="delete.php?id=<?php echo $key['id'] ?>&image=<?php echo $key['image']?>">Supprimer</a>
                        <a href="update.php?id=<?php echo $key['id'] ?>&img=<?php echo $key['image'] ?>">Modifier</a>
                    <?php endif; ?>
                <?php endif; ?>
                </div>
                <hr>
            <?php endforeach;?>




</div>

<?php
include_once('footer.php');
?>
