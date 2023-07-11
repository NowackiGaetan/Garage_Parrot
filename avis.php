<?php
require("actions/database.php");
require('meta.php');
?>
<header id="header">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="assets/garageparrot.jpg" alt="logo garage parrot" class="logo-garage"></a>
            <a href="index.php" class="back-index"> Retour à l'accueil</a>
        </div>
        </div>
    </nav>
</header>
<form method="POST">
    <div class="container container-commentaire">
        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo">
        </div>
        <div class="mb-3">
            <label for="coms" class="form-label">Ecrivez votre commentaire ici</label>
            <textarea class="form-control" id="coms" rows="3" name="coms">
            </textarea>
        </div>
        <button type="submit" class="btn btn-warning" name="post-coms">Envoyer</button>
    </div>
    <div>
        <?php
        if (isset($_POST['post-coms'])) {
            //include ('actions/database.php');
            $NOW = date('Y-m-d H:i:s');
            $reqComs = $pdo->prepare("INSERT INTO commentaires (pseudo, coms, date_coms) VALUES (:pseudo, :coms, :date_coms)");
            $reqComs->bindParam(':pseudo', $_POST['pseudo']);
            $reqComs->bindParam(':coms', $_POST['coms']);
            $reqComs->bindParam(':date_coms', $NOW);
            $reqComs->execute();
        }
        ?>
    </div>
    <div class="coms-place">
        <?php
        $sql = 'SELECT * FROM commentaires ORDER BY date_coms DESC';
        $reqComs = $pdo->query($sql);
        foreach ($reqComs as $row) {
        ?>
            <div class="pseudo-coms">
                <?php echo $row['pseudo']; ?>
            </div>
            <div class="coms">
                <?php echo $row['coms']; ?>
            </div>
            <div class="date-coms">
                <?php echo $row['date_coms']; ?>
            </div>
            <br><br><br><br>
        <?php }
        ?>
    </div>
</form>
<?php
require('footer.php');
?>