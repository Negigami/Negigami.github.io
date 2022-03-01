<?php $title = 'Acceuil'; ?>

<?php ob_start(); ?>
<div id="homeContent">
    <h1>BIENVENUE SUR LE SITE DE RAPPEL DE COURS</h1>
    <p>Vous pouvez utiliser les liens ci-dessus pour naviguer sur le site</p>
    <p>Bonne révision !</p>
</div>
   
<?php $content = ob_get_clean(); ?>

<?php require('./View/template.php'); ?>