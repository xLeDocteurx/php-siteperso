<div class="pt-5">
    <!-- <h1>maison sucré maison</h1> -->
<?php
    $datas = getUserData();

    foreach($datas as $key => $value) {
        
        echo("<b>".$key." : </b>");

        $value_type = gettype($value);
        if ($value_type == "array") {
            ?>
            
            <table class="table">
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

            <?php
        } else {
            echo($value."<br>");
        }
    }
?>



</div>