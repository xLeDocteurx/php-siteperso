<div class="row pb-5">



    <div id="quisuisje" class="jumbotron mb-0 text-center bg-light">
        <hr>
        <h1>Développeur web</h1>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <hr>
                Passionné du développement depuis l'enfance et étant formé à l'ensemble des étapes de la création web et mobiles;
                Je suis en mesure de travailler en équipe dans le respect des bonnes pratiques et des méthodes agiles.
                <br>
                Du développement de solutions au font-end et au back-end rien ne me fait peur. Je suis toujours prêt à parfaire mes compétences et à les mettres au service de mon équipe !
                <hr>
            </div>
            <div class="col-md-2"></div>
        </div>
        <a class="btn btn-outline-danger" href="#competences" >Compétences</a>
    </div> 

    <div id="competences" class="jumbotron mb-0 text-center">
        <hr>
        <h1>Mes compétences</h1>
        <hr>
        <div class="row"> 
                <div class="col-md">
                        <div class="card border-light mb-3">
                <div class="card-header"><i class="fab fa-node fa-3"></i></div>
                <div class="card-body">
                    <h5 class="card-title">Infrastructures Node js</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card border-light mb-3">
                <div class="card-header"><i class="fab fa-php fa-3"></i></div>
                <div class="card-body">
                    <h5 class="card-title">PHP</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    
            <div class="col-md">
                <div class="card border-light mb-3">
                <div class="card-header"><i class="fas fa-database fa-3"></i></div>
                <div class="card-body">
                    <h5 class="card-title">Bases de donnés</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
            
            <div class="col-md">
                <div class="card border-light mb-3">
                <div class="card-header"><i class="fas fa-gamepad fa-3"></i></div>
                <div class="card-body">
                    <h5 class="card-title">Jeux</h5>
                    <p class="card-text">
                        - Jeu de Go<br>
                        - Code Katas<br>
                        - JDR<br>
                        - Dévellopement de Jeux vidéo<br>
                    </p>
                </div>
                </div>
            </div>
        </div>

        <a class="btn btn-outline-danger" href="#else" >Else</a>
    </div> 



    <div class="col-md-2"></div>
    <div id="else" class="col-md-8">
    <hr>
        <h1>Autres informations pouvants figurer sur mon cv traditionnel</h1>
        <!-- <h1>maison sucré maison</h1> -->
        <hr>
        <?php
        $datas = getUserData();

        foreach($datas as $key => $value) {
            
            echo("<b>".$key." : </b>");

            $value_type = gettype($value);
            if ($value_type == "array") {
                ?>
                
    <hr>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Year</th>
                            <th scope="col">Company</th>
                        </tr>
                    </thead>
                        <?php
                            foreach($value as $val) {
                                
                                echo("<tr>");
                                echo("<th scope=\"row\">".$val->year."</th>");
                                echo("<td>".$val->company."</td>");
                                echo("</tr>");
                            }
                        ?>
                </table>

    <hr>
                <?php
            } else {
                echo($value."<br>");
            }
        }
        ?>



    </div>
    <div class="col-md-2"></div>
</div>