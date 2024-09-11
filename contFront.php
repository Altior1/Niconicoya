<?php
 include "controlleur/controllePage.php";
if(isset($_GET['pages'])){
    switch($_GET['pages']){
        case "accueil":
            $page="vue\accueil.html";
            break;
        case "plats":
            $page= "vue\plats.html";
            break;
        case "boisson":
            $page= "vue\boissons.html";
            break;
        case "mention":
            $page= "vue\mentions.html";
            break;
        case "contact":
            $page= "vue\contact.html";
            break;
        case "carte":
            $page= "vue\carte.html";
            break;
        case "groupe":
            $page= "vue\groupes.html";
            break;
    }
}
else{
    $page= "vue\accueil.html";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Restaurant Japonais</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="vue\CSS\style.css">
    </head>
    <body>
        <?php include "vue/caneva/header.html";
        ?>
        <div class="principal">
        <?php include $page;
        ?> </div>
        <?php include "vue/caneva/footer.html"; 
        ?>
    </body>
</html>