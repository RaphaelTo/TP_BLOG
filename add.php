<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 11/11/2018
 * Time: 01:58
 */
include_once('function/function.php');
include_once('header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-left">
            <form action="sendArticle.php" method="post" enctype="multipart/form-data">
                    <label for="title">Titre: </label>
                    <input type="text" class="form-control" name="title">
                    <br>
                    <input type="file" name="avatar">
                    <input type="hidden" name="MAX_FILE_SIZE" value="500000">
                    <br><br>
                    <label for="content">Contenu: </label>
                    <textarea class="form-control" rows="10" name="content"></textarea>
                    <br>
                    <button type="submit" class="btn btn-success">Valider</button>

            </form>
        </div>
    </div>
</div>





<?php
include_once('footer.php');
?>
