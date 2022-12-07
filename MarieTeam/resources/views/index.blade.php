<html>

<head>
    <title>MARIE TEAM</title>
    <link rel="shortcut icon" href="src/img/logo.png" />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="src/css/index.css">
</head>

<body>
    <?php
        include 'src/components/nav.php';
    ?>
    <div class="trajet">
        <div class="destination">
            <div class="logo_bateau">
                <img style="width: 20px; height: 20px;" src="src/img/logo_bateau.svg">
            </div>
            <div>
                <p>route</p>
                <!-- <select>
                    <option selected="selected">selectionner un trajet</option>
                    <?php
                        $port = array("Douvres - Lille", "Lille - Douvres", "Calais - Dunkerque", "Dunkerque - Calais");
                        // Parcourir le tableau des destination
                        foreach($port as $value){
                        ?>
                    <option value="<?php echo strtolower($value); ?>">
                        <?php echo $value; ?>
                    </option>
                    <?php
                            }
                            ?>
                </select> -->
                <select>
                    <option selected="selected">selectionner un trajet</option>
                    <option value="test"></option>
                </select>
            </div>
        </div>
    </div>


    <div class="planTraverse">
        <div class="info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque id labore, et itaque repudiandae soluta minima cumque aut odit, cupiditate accusamus omnis fugiat minus molestias obcaecati nam consectetur ab maiores?
 
        </div>
        <div class="traverser">
            <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque id labore, et itaque repudiandae soluta minima cumque aut odit, cupiditate accusamus omnis fugiat minus molestias obcaecati nam consectetur ab maiores?
            </div>
        </div>

    </div>




    <div class="meteo">
        <div class="meteo-ville">
            <p style="margin-bottom: 1%;">Marseille</p>
            <p>Véritable porte ouverte sur la Méditerranée, la cité phocéenne revêt des visages bien différents ! Ville
                on ne peut plus cosmopolite, elle se meut au gré des envies du voyageur : sportive, artistique ou
                culturelle… Marseille regorge de richesses...</p>
            <div class="meteo-temp">
                <div>
                    <p style="text-align: center;">Mercredi <br> 19° <br><br> SE 24km/h</p>
                </div>
                <div>Mercredi</div>
                <div>Mercredi</div>
            </div>
        </div>
    </div>

</body>

</html>