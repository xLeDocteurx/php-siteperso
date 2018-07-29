<div class="row pb-5">



    <div id="portfolio" class="jumbotron mb-0 text-center">
        <!-- <h1>Portfolio</h1> -->
        <p>
            <img class="img-fluid" src="images/001.png" alt="">
        </p>
        <a class="btn btn-outline-danger" href="#quisuisje">Qui suis-je ?</a>
    </div> 

    <div id="quisuisje" class="jumbotron mb-0 text-center bg-light">
        <hr>
        <h1>Développeur web</h1>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <hr>
                Vous recherchez un développeur Front-end confirmé, 
                passionné par la création d'applications mobiles hybrides multiplateformes (code non-natif), 
                le responsive design et le SEO, alors ma candidature devrait vous intéresser !
                <hr>
                Maitrisant parfaitement l’ensemble des étapes de la création Web, 
                tant d’un point de vue technique qu’éditorial, 
                je suis en mesure de prendre en charge la création web en responsive mais aussi 
                la maintenance quotidienne de sites existants en assurant la mise à jour de contenus 
                graphiques et éditoriaux tout en veillant à l’optimisation du référencement naturel mais aussi à 
                l’ergonomie des interfaces (UX).
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
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card border-light mb-3">
                <div class="card-header"><i class="fab fa-php fa-3"></i></div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    
            <div class="col-md">
                <div class="card border-light mb-3">
                <div class="card-header"><i class="fas fa-database fa-3"></i></div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
            
            <div class="col-md">
                <div class="card border-light mb-3">
                <div class="card-header"><i class="fas fa-gamepad fa-3"></i></div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
            </div>
        </div>

        <a class="btn btn-outline-danger" href="#else" >Else</a>
    </div> 



    <div class="col-md-2"></div>
    <div id="else" class="col-md-8">
    <hr>
        <h1>Home</h1>
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