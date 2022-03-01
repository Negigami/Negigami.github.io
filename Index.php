<?php

if(isset($_GET['view'])) {
    switch ($_GET['view']) {    
        case 'LinkType':
            include('./View/LinkType.php');
            break;

        case 'Association':
            include('./View/association.php');
            break;

        case 'Heritage':
            include('./View/heritage.php');
            break;

        case 'Contrainte':
            include('./View/contrainte.php');
            break;
    
        default:
            include('./View/Home.php');
            break;
    }
} else {
    include('./View/Home.php');
}
