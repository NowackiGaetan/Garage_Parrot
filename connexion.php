<?php
try{
$pdo=new PDO('mysql:host=localhost;dbname=garageparrot','root','');
}catch(PDOException $e){
 echo 'Erreur: Impossible de se connecter à la Base de Données';
 die();
};

if(!empty($_POST)){
    extract($_POST);

    if(isset($_POST['connect'])){
        echo 'OK';
    }else{
        echo 'echec';
    }
}
?>
<?php
include('./meta.php');
include ("./header.php");
?>
<div class="cnx">
    <form method="POST">
        <input type="text" id="login" name="login" placeholder="Email">
        <input type="password" id="password" name="password" placeholder="Mot de passe">
        <button type="submit" name="connect" id="connect">Se connecter</button>
    </form>
</div>
<?php
include ('./footer.php');
?>