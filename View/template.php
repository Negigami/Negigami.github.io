<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="./Utils/Bootstrap/css/bootstrap.min.css" rel="stylesheet" /> 
        <link href="./Utils/css/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <?php include('header.php'); ?>
        <?= $content ?>
        <?php include('footer.php'); ?>
        <script type= "text/javascript" src= "./Utils/js/script.js"></script>
    </body>
</html>