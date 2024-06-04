<!DOCTYPE html>
<html>
    <head>
        <title>Overwatch 2</title>
        <link rel="stylesheet" type="text/css" href="../../css/mycss8.css">
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
                            DPS
                        </h3>
                        <p>
                        In Overwatch 2, Damage Per Second (DPS) heroes fulfill the role of dealing consistent and high amounts of damage to enemy players, thereby pressuring opponents and securing eliminations. DPS heroes are typically divided into several subcategories, each with unique playstyles and abilities:
                        </p>
                        <ol>
                            <li>Hitscan DPS: These heroes have weapons that instantly hit their targets upon firing, making them effective at dealing with fast-moving or distant enemies. Hitscan heroes often require precise aim and tracking skills to maximize their effectiveness. Examples include Soldier: 76, McCree, and Widowmaker.</li>
                            <br>
                            <li>Projectile DPS: Projectile heroes fire shots that travel through the air before hitting their targets, requiring players to predict enemy movement and lead their shots. These heroes often have area-of-effect abilities that can control space or disrupt enemy formations. Examples include Pharah, Junkrat, and Hanzo.</li>
                            <br>
                            <li>Flanker DPS: Flanker heroes excel at disrupting enemy backlines and isolating vulnerable targets. They often have high mobility and abilities that allow them to traverse the battlefield quickly and engage in hit-and-run tactics. Flankers are particularly effective at harassing enemy supports and DPS heroes. Examples include Tracer, Genji, and Sombra.</li>
                            <br>
                            <li>Burst DPS: Burst damage heroes specialize in dealing large amounts of damage in a short period, making them lethal against squishy targets or during team fights. These heroes typically have abilities with high damage output or combos that can quickly eliminate enemies. Examples include Reaper, Doomfist, and Mei.</li>
                            <br>
                            <li>Utility DPS: Utility heroes offer unique abilities that can manipulate the battlefield or provide support to their team. They may have crowd control abilities, defensive capabilities, or area denial tools that help control objectives and secure victories. Examples include Symmetra, Torbjörn, and Ashe.</li>
                        </ol>
                        <p>
                        Each DPS hero brings a distinct playstyle and strategic value to the team composition, allowing players to adapt their strategies based on the map, objectives, and enemy team composition. Effective coordination and communication among DPS players and their teammates are crucial for achieving victory in Overwatch 2 matches.
                        </p>
                    </div>
                </div>
                <div class="image-container">
                    <img src="../../images/Ashe.jpeg" alt="Ashe">
                    <img src="../../images/Bastion.jpeg" alt="Bastion">
                    <img src="../../images/Echo.jpeg" alt="Echo">
                    <img src="../../images/Junkrat.jpeg" alt="Junkrat">
                    <img src="../../images/Pharah.jpeg" alt="Pharah">
                    <img src="../../images/Reaper.jpeg" alt="Reaper">
                    <img src="../../images/Sojourn.jpeg" alt="Sojourn">
                    <img src="../../images/Soldier 76.jpeg" alt="Soldier 76">
                    <img src="../../images/Symmetra.jpeg" alt="Symmetra">
                    <img src="../../images/Torbjorn.jpeg" alt="Torbjorn">
                    <img src="../../images/Tracer.jpeg" alt="Tracer">
                    <img src="../../images/Venture.jpeg" alt="Venture">
                    <img src="../../images/Widowmaker.jpeg" alt="Widowmaker">
                    <img src="../../images/Cassidy.jpg" alt="Cassidy">
                    <img src="../../images/Genji.jpg" alt="Genji">
                    <img src="../../images/Hanzo.jpg" alt="Hanzo">
                    <img src="../../images/Mei.jpg" alt="Mei">
                    <img src="../../images/Sombra.jpg" alt="Sombra">
                </div>
            </div>
        <br>
    </body>
</html>