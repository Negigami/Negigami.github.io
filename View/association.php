<?php $title = 'Les associations'; ?>

<?php ob_start(); ?>
<div class="PageContent">
    <h1>Les associations</h1>

    <ul>
        <li><a href="#Reflexive">L'association réfléxive</a></li>
        <li><a href="#Classe">Classe d'association</a></li>
        <li><a href="#Pseudo">La pseudo-entité</a></li>
    </ul>

    <br>

    <h2 id="Reflexive">L'association réfléxive</h2>
    <p>L'association réflexive relie une entité à elle-même. Si les deux occurrences du lien ne sont pas exactement équivalentes, on nomme alors ces derniers pour les rendre plus explicites.</p>
    <img src="./Utils/Img/AssoReflexiveEA.png" alt="">
    <img src="./Utils/Img/AssoReflexiveMLD.png" alt="">

    <br><br>

    <h2 id="Classe">Classe d'association</h2>
    <p>Une association peut comporter un ou plusieurs attributs dans le cas où ces derniers ne dépendent pas des entités, mais bien de l'association entre ces entités.</p>
    <img src="./Utils/Img/ClassAssoEA.png" alt="">
    <img src="./Utils/Img/ClassAssoMLD.png" alt="">
    
    <br><br>

    <h2 id="Pseudo">La pseudo-entité</h2>
    <p>La pseudo-entité est une association d'association : pour une valeur de l'entité A et une valeur de l'entité B, nous avons une seule valeur de l'entité C.</p>
    <img src="./Utils/Img/PseudoEntiteEA.png" alt="">
    <img src="./Utils/Img/PseudoEntiteMLD.png" alt="">

</div>
   
<?php $content = ob_get_clean(); ?>

<?php require('./View/template.php'); ?>