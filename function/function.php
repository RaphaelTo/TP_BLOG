<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 10/11/2018
 * Time: 01:53
 */
$user = "root";
$pass = "sio";

try{
    $db = new PDO('mysql:host=localhost;dbname=tp_bdd', $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
} catch (PDOException $e){
    print "Erreur!: ". $e->getMessage(). "<br/>";
    die();
}

function selectArticleAdmin(){
    global $db;
    $query= $db->prepare('SELECT * FROM article');
    $query->execute();

    $result = $query->fetchAll();
    return $result;
}

function addArticle($title , $content, $image, $user){
    global $db;
    $query = $db->prepare("INSERT INTO article (title,content,image,user) VALUES (:title , :content, :image, :user)");
    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':content', $content, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    $query->bindParam(':user',$user, PDO::PARAM_INT);

    return $query->execute();

}

function addAccount($username, $password, $password2){
    global $db;

    if($password === $password2){
        $query = $db->prepare("INSERT INTO user (username, password) VALUES (:username, :password)");
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        return $query->execute();
        echo '<body onLoad="alert(\'Incription reussite !\')">';
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';


    }
    else{
        return "Le mot de passe n'est pas le même veuillez recommencer";
    }

}

function accountLogin(){
    global $db;

    if(isset($_POST['pseudo']) && isset($_POST['pwd'])){
        $query = $db->prepare("SELECT * FROM user");
        $query->execute();
        $result = $query->fetchAll();

        foreach ($result as $value => $key){
            if($key['username'] == $_POST['pseudo'] && $key['password'] == $_POST['pwd']){
                session_start();
                $_SESSION['pseudo'] = $_POST['pseudo'];
                $_SESSION['pwd'] = $_POST['pwd'];
                $_SESSION['id'] = $key['id'];
                if($_SESSION['pseudo'] == "root" && $_SESSION['pwd'] == "toor" ){
                    $var = 1;
                    $_SESSION['role'] = $var;
                }else{
                    $var = 2;
                    $_SESSION['role'] = $var;
                }
                echo '<body onLoad="alert(\'Bienvenue $_SESSION[\'pseudo\']...\')">';
                header('location: index.php');
            } else{
                echo '<body onLoad="alert(\'Membre non reconnu...\')">';
                echo '<meta http-equiv="refresh" content="0;URL=index.php">';
            }
        }
    } else{
        echo 'soucis de POST';
    }

}
function deleteArticle($id, $image){
    if($id != NULL && $image != NULL ){
        global $db;

        $query = $db->prepare("DELETE FROM article WHERE id = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        unlink(  'img/'.$image);
        return $query->execute();

    }

}
function viewArticle($id){
    global $db;

    $query = $db->prepare("SELECT * FROM article WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $article = $query->fetch();

}

function sendCommentaire($article, $username, $content){
    global $db;

    $query = $db->prepare("INSERT INTO commentaire (username, content, article) VALUES (:username, :content, :article)");
    $query->bindParam(':username', $username, PDO::PARAM_STR);
    $query->bindParam(':content', $content, PDO::PARAM_STR);
    $query->bindParam(':article', $article, PDO::PARAM_INT);
    return $query->execute();

}

function selectComms($id){
    global $db;

    $query = $db->prepare("SELECT * FROM commentaire WHERE article = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $com= $query->fetchAll();
}

function updateArticle($id, $title, $content, $image, $oldImage){
    global $db;

    if ($id && $title && $content && $image && $oldImage) {
        $query = $db->prepare("UPDATE article SET title = :title, content = :content, image = :image WHERE id = :id");
        $query->bindParam(':title', $title, PDO::PARAM_STR);
        $query->bindParam(':content', $content, PDO::PARAM_STR);
        $query->bindParam(':image', $image, PDO::PARAM_STR);
        $query->bindParam(':id', $id, PDO::PARAM_INT);

        $query->execute();
        unlink(  'img/'.$oldImage);
    }
}

function selectArticle($id){
    global $db;

    $query = $db->prepare("SELECT * FROM article WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $query->fetchAll();
}
