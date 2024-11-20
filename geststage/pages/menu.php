<?php
    //require_once('identifier.php');
?>

<nav class="navbar navbar-default navbar-fixed-top">

<div class="container-fluid">
        <a class="navbar-brand"  title="EPO">
        <img style="max-width:85px; margin-top: -14px;"src="../images/logoepo.png">
        </a>
    <div class="navbar-brand">
     Gestion des Stagiaires
    </div>
		
		<ul class="nav navbar-nav">
					
			<li><a href="stagiaires.php">
                    <i class="fa fa-vcard"></i>
                    &nbsp Les Stagiaires
                </a>
            </li>
			
			<li><a href="filieres.php">
                    <i class="fa fa-tags"></i>
                    &nbsp Les Filières
                </a>
            </li>
			
			<?php if ($_SESSION['user']['role']=='ADMIN') {?>
					
				<li><a href="Utilisateurs.php">
                        <i class="fa fa-users"></i>
                        &nbsp Les utilisteurs
                    </a>
                </li>
				
			<?php }?>
			
		</ul>
		
		
		<ul class="nav navbar-nav navbar-right">
					
			<li>
				<a href="editerUtilisateur.php?id=<?php echo $_SESSION['user']['iduser'] ?>">
                    <i class="fa fa-user-circle-o"></i>
					<?php echo  ' '.$_SESSION['user']['login']?>
				</a> 
			</li>
			
			<li>
				<a href="seDeconnecter.php">
                    <i class="fa fa-sign-out"></i>
					&nbsp Se déconnecter
				</a>
			</li>
							
		</ul>
		
	</div>
</nav>
