<?php
session_start();
if (isset($_SESSION['erreurLogin']))
    $erreurLogin = $_SESSION['erreurLogin'];
else {
    $erreurLogin = "";
}
session_destroy();
?>
<! DOCTYPE HTML>
<HTML>
<head>
    <meta charset="utf-8">
    <title>EPO Gestion des stagiaires</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>
<body style="background-image: url('images/portd'oran.jpg'); background-size: cover;">




<h1 class="text-center" style="color: #4678B7; font-size: 36px; font-weight: bold; margin-top: 20px;">Département de Formation</h1>
<h1 class="text-center" style="color: #4678B7; font-size: 36px; font-weight: bold;">Gestion des stagiaires</h1>


<div class="container col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
    <div class="panel panel-primary margetop60">
        <div class="panel-heading">Identifiez vous :</div>
        <div class="panel-body">
            <form method="post" action="seConnecter.php" class="form">

                <?php if (!empty($erreurLogin)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $erreurLogin ?>
                    </div>
                <?php } ?>

                <div class="form-group">
                    <label for="login">Login :</label>
                    <input type="text" name="login" placeholder="Login"
                           class="form-control" autocomplete="off"/>
                </div>

                <div class="form-group">
                    <label for="pwd">Mot de passe :</label>
                    <input type="password" name="pwd"
                           placeholder="Mot de passe" class="form-control"/>
                </div>

                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-log-in"></span>
                    Se connecter
                </button>
                <p class="text-right">
                    <!--<a href="InitialiserPwd.php">Mot de passe Oublié</a>-->

                    &nbsp &nbsp

                    <a href="nouvelUtilisateur.php">Créer un compte</a>
                </p>
            </form>
        </div>
    </div>
</div>
</body>
</HTML>
