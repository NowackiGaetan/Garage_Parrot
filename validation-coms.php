<?php
require('actions/database.php');
require('meta.php');
?>
<header id="header">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="assets/garageparrot.jpg" alt="logo garage parrot" class="logo-garage"></a>
            <a href="pageAdmin.php" class="back-index"> Retour à la page précédente</span></a>
        </div>
        </div>
    </nav>
</header>
<form method="POST" action="validation-coms.php">
    <div class="container container-commentaire">
        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo">
        </div>
        <div class="mb-3">
            <label for="coms" class="form-label">Ecrivez votre commentaire ici</label>
            <textarea class="form-control" id="coms" rows="3" name="coms"></textarea>
        </div>
        <button type="submit" class="btn btn-warning" name="post-coms">Envoyer</button>
    </div>
    <div>
        <!-- <div class="coms-place"> -->
        <div class="coms-place">
            <?php
            $valid = $_POST['valider'] ?? null;
            $refus = $_POST['refuser'] ?? 0;
            $commentaireId = $_POST['commentaireId'] ?? null;

            if (isset($valid)) {
                $sql = "UPDATE commentaires SET approved = 1 WHERE coms_id = $commentaireId";
                $result = $pdo->query($sql);
            }

            if ($refus) {
                $sql = "UPDATE commentaires SET approved = 2 WHERE coms_id = $commentaireId";
                $result = $pdo->query($sql);
            }

            $sql = 'SELECT * FROM commentaires ORDER BY date_coms DESC';
            $reqComs = $pdo->query($sql);

            while ($row = $reqComs->fetch()) {
                if ($row['approved'] == 1) {
                    echo "Commentaire accepté";
                } else if ($row['approved'] == 2) {
                    echo "Commentaire refusée";
                } else {
                    echo "Commentaire en cours de traitement";
                }
            ?>
                <div class="pseudo-coms">
                    <?php echo htmlspecialchars($row['pseudo']); ?>
                </div>
                <div class="coms">
                    <?php echo htmlspecialchars($row['coms']); ?>
                </div>
                <div class="date-coms">
                    <?php echo htmlspecialchars($row['date_coms']); ?>
                </div>
                <form method="POST" action="">
                    <input type="hidden" name="commentaireId" value="<?php echo $row["coms_id"] ?>">
                    <input type="submit" value="Valider" class="btn btn-success" name="valider">
                    <input type="submit" value="Refuser" class="btn btn-danger" name="refuser">
                </form>
                <br><br><br>
            <?php } ?>
            <br>
        </div>

        <!-- </div> -->
    </div>
</form>