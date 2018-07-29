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
?>
<div class="row py-5">
    <div class="col-md-2"></div>
    <div class="col-md-8 text-center">
        <h1>Save.php</h1>

    <hr>

        <?php

        if (isset($_POST["email"]) && isset($_POST["message"])) {

            echo("Hey dude ! You've come a long long way to ... post this message ! <br>
            Here is a little recap of what we saved : <br>");

            $msg_fullname = $_POST['firstname']." ".$_POST['lastname'];
            $msg_email = $_POST["email"];
            $msg_message = $_POST["message"];
            echo("Email : ".$msg_email."<br>Message : ".$msg_message."<br><br>");

            $new_message = (object) [
                'Fullname' => $msg_fullname,
                'Email' => $msg_email,
                'Message' => $msg_message
            ];

            putMessage($new_message);


        } else {

            echo("<hr>Something strange... In the neighboorhood !<br>
            Who you want to call ?");

            echo("<hr>
                Des champs n'ont pas été remplis correctement.
            <hr>");
        }

        ?>


    <hr>
        To see the last message. Check out this link : <br>
        <a class="btn btn-primary" href="/admin.php">Admin's Page</a>
    <hr>

    </div>
    <div class="col-md-2"></div>
</div>

<?php

getPart('footer');
?>