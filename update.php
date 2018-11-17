<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 17/11/2018
 * Time: 02:43
 */
include_once('header.php');
?>
<div class="container">
    <form action="updateGo.php?img=<?php echo $_GET['img'] ?>&id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
            <label for="titre">Nouveau titre: </label>
            <input type="text" class="form-control" id="titre" name="title">
            <label for="pwd">Nouveau contenu: </label>
            <textarea class="form-control" name="content"></textarea>
            <label>Avatar:</label>
            <input type="file" name="avatar">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>





<?php include_once ('footer.php'); ?>
