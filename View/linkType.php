<?php $title = 'Les différents type de liens'; ?>

<?php ob_start(); ?>
<div class="PageContent">
    <h1>Les différents type de liens</h1>

    <ul>
        <li><a href="#OneMany">Les liens un à plusieurs (One To Many)</a></li>
        <li><a href="#ManyMany">Les liens plusieurs à plusieurs (Many To Many)</a></li>
        <li><a href="#Faible">Entité de type faible et association identifiante</a></li>
    </ul>

    <br>

    <h2 id="OneMany">Les liens un à plusieurs (One To Many)</h2>
    <p>Un lien 1 à plusieurs représente une relation entre deux classes où l'une d'entre elles (celle du coté "1") possède implicitement une clé étrangère vers l'identifiant de l'autre classe. </p>
    <img src="./Utils/Img/OneToManyEA.png" alt="">
    <img src="./Utils/Img/OneToManyMLD.png" alt="">

    <br><br>

    <h2 id="ManyMany">Les liens plusieurs à plusieurs (Many To Many)</h2>
    <p>Un lien plusieurs à plusieurs représente une relation entre deux classes où chacune d'entre elles possède implicitement une clé étrangère vers l'identifiant de l'autre classe. </p>
    <img src="./Utils/Img/ManyToManyEA.png" alt="">
    <img src="./Utils/Img/ManyToManyMLD.png" alt="">
    
    <br><br>

    <h2 id="Faible">Entité de type faible et association identifiante</h2>
    <p>
        L'entité du côté du R dans l'association est appelée "entité de type faible" (ou "entité non identifiée"). Sa clé primaire, appelée identifiant relatif, n'est pas suffisante pour définir une de ses occurrences. Ces dernières ont besoin de la clé de l'autre entité liée à l'association, appelée "entité identifiante". 
        La clé complète de cette entité sera donc la concaténation de la clé de l'entité identifiante et de la clé de l'entité non identifiée.
    </p>
    <img src="./Utils/Img/TypeFaibleEA.png" alt="">
    <img src="./Utils/Img/TypeFaibleMLD.png" alt="">
</div>
   
<?php $content = ob_get_clean(); ?>

<?php require('./View/template.php'); ?>