<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 10/11/2018
 * Time: 02:05
 */
include('header.php');
include_once('function/function.php');

?>
?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Blog Ipssi</h1>
                <p class="lead">Bienvenue sur le blog</p>
                <?php
                       if(isset($_SESSION['pseudo'])){
                            echo "Bienvenue ". $_SESSION['pseudo'];
                        }
                ?>
            </div>
        </div>
    </div>
<?php
include('footer.php');
?>
