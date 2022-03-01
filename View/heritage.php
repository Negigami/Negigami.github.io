<?php $title = 'Les héritages'; ?>

<?php ob_start(); ?>
<div class="PageContent">
    <h1>Les héritages</h1>
    <ul>
        <li><a href="#Simple">Generalisation Simple</a></li>
        <li><a href="#Heritage">Entité sous-type étant également sur-type</a></li>
        <li><a href="#Totalite">Generalisation avec contrainte de totalité</a></li>
        <li><a href="#Exclusion">Generalisation avec contrainte d'exclusion</a></li>
        <li><a href="#Partiton">Generalisation avec contrainte de partition</a></li>
    </ul>

    <br>

    <h2 id="Simple">Generalisation Simple</h2>
    <p>Une association peut comporter un ou plusieurs attributs dans le cas où ces derniers ne dépendent pas des entités, mais bien de l'association entre ces entités.</p>
    <img src="./Utils/Img/GeneralisationEA.png" alt="">
    <img src="./Utils/Img/GeneralisationMLD.png" alt="">

    <br><br>

    <h2 id="Heritage">Entité sous-type étant également sur-type</h2>
    <p>
        Lors de l'implémentation d'un cas d'héritage, il se peut qu'une entité sous-type soit également sur-type d'autres entités.
        Cette entité va donc hériter des caractéristiques de son entité sur-type, tout en transférant ses propres attributs à ses entités sous-type.
    </p>
    <img src="./Utils/Img/HeritageEA.png" alt="">
    <img src="./Utils/Img/HeritageMLD.png" alt="">
    
    <br><br>

    <h2 id="Totalite">Generalisation avec contrainte de totalité</h2>
    <p>Cette contrainte définit si toutes les occurrences d’une entité sur-type sont représentées par les entités sous-type liées à cette entité sur-type. </p>
    <img src="./Utils/Img/GeneralisationContrainteEA.png" alt="">
    <img src="./Utils/Img/GeneralisationContrainteMLD.png" alt="">

    <br><br>

    <h2 id="Exclusion">Generalisation avec contrainte d'exclusion</h2>
    <p>Cette contrainte permet de savoir si les ensembles représentés par les entités sous-types sont des ensembles qui n’ont pas d’éléments communs.</p>
    <img src="./Utils/Img/GeneralisationContrainteExclusionEA.png" alt="">
    <img src="./Utils/Img/GeneralisationContrainteExclusionMLD.png" alt="">
    
    <br><br>

    <h2 id="Partition">Generalisation avec contrainte de partition</h2>
    <p>C'est à dire, qu'il y a une contrainte d'exclusion et une contrainte de totalité</p>
    <img src="./Utils/Img/GeneralisationContraintePartitionEA.png" alt="">
    <img src="./Utils/Img/GeneralisationContraintePartitionMLD.png" alt="">
</div>
   
<?php $content = ob_get_clean(); ?>

<?php require('./View/template.php'); ?>