<?php
/* on affiche  les erreurs, 
si vous avez une erreur 500, 
regardez dans votre console */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/* nous verrons plus tard comment se passer de ces 3 lignes */

// on inclue le fichier qui contient nos fonctions
require __DIR__ . '/../lib/functions.php';

// l'exemple avec le header, à vous de jouer pour le reste
getPart('head');
getPart('header');

// LE LAISSER ICI ?
// getPart('menu');

// getContent('home');
?>



<div class="row py-5">

    <div class="col-md-2"></div>
    <div class="col-md-8 text-center">
    <h1>Admin</h1>
    <hr>

    <!-- Display the last message -->
    <?php
    echo('<b>Dernier message : </b><br><br>');

    $all_messages = getMessages();
    $last_message = end($all_messages);

    foreach($last_message as $key => $val) {
        echo('<b>'.$key.' : </b>');
        echo($val);
        echo('<br>');
    }

    ?>

    <hr>
    </div>
    <div class="col-md-2"></div>


</div>



<?php
getPart('footer');