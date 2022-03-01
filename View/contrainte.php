<?php $title = 'Les contraintes'; ?>

<?php ob_start(); ?>
<div class="PageContent">
    <h1>Les contraintes</h1>

    <ul>
        <li><a href="#CIF">Contrainte d'intégrité fonctionnelle (CIF)</a></li>
        <li><a href="#Nair">Association n-aires</a></li>
        <li><a href="#Ensemble">Contraintes ensemblistes</a></li>
    </ul>

    <br>

    <h2 id="CIF">Contrainte d'intégrité fonctionnelle (CIF)</h2>
    <p>Une CIF existe entre les entités A et B si toute occurrence de l’une détermine obligatoirement une et une seule occurrence de l’autre</p>
    <img src="./Utils/Img/CifEA.png" alt="">
    <img src="./Utils/Img/CifMLD.png" alt="">

    <br><br>

    <h2 id="Nair">Association n-aires</h2>
    <p>
        Une association n-aires est une association liée à n entités. 
        Il existe certains cas particuliers où l'intitulé de cette association changera légèrement : 
        <ul>
            <li>Associations unaires (dites "réflexives") : l'entité est liée à elle-même</li>
            <li>Associations binaires : deux entités sont liées entre elles</li>
            <li>Associations ternaires : trois entités sont liées entre elles</li>
        </ul>
        Au delà de trois entités liées ensemble, on parlera plus généralement d'association n-aire. 
    </p>
    <img src="./Utils/Img/NairEA.png" alt="">
    <img src="./Utils/Img/NairMLD.png" alt="">
    
    <br><br>

    <h2 id="Ensemble">Contraintes ensemblistes</h2>
    <p>
        Il y a 5 types de contraintes ensemblistes : 
        <ul>
            <li>X : Contraintes d'exclusion : L'entité ne peut pas effectuer les deux associations qui lui sont lié, seulement l'une des deux ou aucune ;</li>
            <li>XT : Contraintes de partition (OU exclusif) : L'entité peut participer soit à l'une des association, soit à l'autre ;</li>
            <li>T : Contraintes de totalité (OU inclusif) : L'entité peut prendre part à l'une ou l'autre des associations, ou les deux ;</li>
            <li>I : Contraintes d'inclusion (ET) : L'entité effectuant l'association pointée par la flèche a nécessairement participé à l'autre association (le sens de la flèche détermine le sens de lecture) ;</li>
            <li>S : Contraintes de simultanéité : L'entité doit participer à l'une et l'autre des associations lui étant lié.</li>
        </ul> 
    </p>
    <img src="./Utils/Img/ExclusionEA.png" alt="">
    <img src="./Utils/Img/PartitionEA.png" alt="">
    <img src="./Utils/Img/TotaliteEA.png" alt="">
    <img src="./Utils/Img/InclusionEA.png" alt="">
    <img src="./Utils/Img/SimulEA.png" alt="">
    <img src="./Utils/Img/EnsemblisteMLD.png" alt="">

</div>
   
<?php $content = ob_get_clean(); ?>

<?php require('./View/template.php'); ?>