<!DOCTYPE html>
<html>
    <head>
        <title>Overwatch 2</title>
        <link rel="stylesheet" type="text/css" href="css/mycss8.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- <script src="js/myjs.js"></script> -->
    </head>
    <body>
        <div class="flex_container_main_menu2">
            <div class="flex_container">
                <div class="flex_item">
                    <h1 class="Important">
                    <?php
                        session_start();
                        if(!isset($_SESSION['battle_net'])) {
                            echo 'Welcome to the World of Overwatch!';
                        } else {
                            echo 'Welcome ' . $_SESSION['battle_net'] . '!';
                        }
                    ?>
                    </h1>
                </div>
                <div class="flex_item">
                    <div class="dropdown">
                        <button class="dropbtn">
                            <h1 class="Important">
                                <a href="http://localhost/">Overwatch Directory</a>
                            </h1>
                        </button>
                        <div class="dropdown-content">
                          <a href="http://localhost/Overwatch/tanks">Tanks</a>
                          <a href="http://localhost/Overwatch/dps">DPS</a>
                          <a href="http://localhost/Overwatch/supports">Supports</a>
                        </div>
                    </div>
                </div>
                <div class="flex_item" style="margin-left: auto;">
                    <?php
                        if(isset($_SESSION['battle_net'])) {
                            echo '<h1 class="Important"><a href="http://localhost/logout">Log Out</a></h1>';
                        } else {
                            echo '<h1 class="Important"><a href="http://localhost/login">Log In</a></h1>';
                        }
                    ?>
                </div>
            </div>
                <div class="flex_container_main_menu">
                    <div class="flex_item">
                        <h3 class="Important">
                            Overwatch Introduction
                        </h3>
                        <p>
                            Overwatch in an online team-based game generally played as a first-person shooter. 
                            The game featured several different game modes, principally designed around squad-based combat with two 
                            opposing teams of 5 players each.
                        </p>
                    </div>
                    <div class="flex_item">
                        <h3 class="Important">
                            Overwatch Lore
                        </h3>
                        <p>
                            Overwatch takes place on a near-future Earth, some time in the mid 2070s.
                            Some thirty years before, robots turned against humanity in what became known as the Omnic Crisis. 
                            This eventually led to the formation of an elite strike team, who finally brought an end to the war. 
                            This team was the beginning of Overwatch, an international task force which tried to maintain global 
                            stability for two decades, until corruption tore it apart. Though Overwatch was disbanded, 
                            new crises are looming, and the world still needs heroes.
                        </p>
                    </div>
                    <div class="flex_item"><img src="/images/Overwatch Logo" alt="Overwatch Logo" class="flexImg"></div>
                </div>
            </div>
        </div>
        <br>
        <form id="btagSearch">
            <label><h1 class="Important">Search for an Overwatch Account!</h1>   </label><br>
            <input type="text" id="btag" name="btag" placeholder="BigZ#11384">
            <input type="submit">
        </form>
        <script>
            let btagform = document.getElementById("btagSearch");

            btagform.addEventListener("submit", searchBnet);

            function searchBnet(event) {
                event.preventDefault(); // Prevent the default form submission behavior
                let btag = document.getElementById("btag").value;
                window.open("https://overwatch.blizzard.com/en_US/search/?q=" + btag, "_blank");
            }
        </script>
        <br>
    </body>
</html>
