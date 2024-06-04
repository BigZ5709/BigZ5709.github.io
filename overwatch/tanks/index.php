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
                            Tank
                        </h3>
                        <p>
                        In Overwatch 2, tanks are the frontline warriors who excel at soaking up damage, 
                        protecting their teammates, and creating space for their team to advance. 
                        They come in various shapes and sizes, each with unique abilities and playstyles. 
                        Here's a general overview of tanks in Overwatch 2:
                        </p>
                        <ol>
                            <li>Main Tanks: Main tanks are typically characterized by their ability to create space and lead the team's charge into battle. They have large health pools and abilities that enable them to absorb damage and protect their teammates. Examples include Reinhardt, Winston, and Orisa.</li>
                            <br>
                            <li>Off-Tanks: Off-tanks provide additional support to the main tank and help control the battlefield with their crowd-control abilities and supplementary damage output. They often have abilities that can disrupt enemy formations and peel for their allies. Examples include D.Va, Zarya, and Roadhog.</li>
                            <br>
                            <li>Hybrid Tanks: Some tanks blur the lines between main tanks and off-tanks, offering a mix of protection, crowd control, and damage-dealing capabilities. These tanks can adapt to various situations and playstyles, providing versatility to the team composition. Examples include Wrecking Ball (Hammond) and Sigma.</li>
                            <br>
                            <li>Role and Objective: Tanks in Overwatch 2 are crucial for leading pushes, contesting objectives, and protecting their teammates from enemy threats. They are responsible for initiating team fights, absorbing damage, and creating opportunities for their allies to secure kills and objectives.</li>
                            <br>
                            <li>Ultimate Abilities: Each tank has a powerful ultimate ability that can turn the tide of battle when used effectively. These ultimates often have wide-ranging effects, such as area denial, crowd control, or massive damage output, further solidifying the tank's role as a cornerstone of the team.</li>
                        </ol>
                    </div>
                </div>
                <div class="image-container">
                    <img src="../../images/D.VA.avif" alt="D.Va">
                    <img src="../../images/Doomfist.avif" alt="Doomfist">
                    <img src="../../images/Junker Queen.avif" alt="Junker Queen">
                    <img src="../../images/Mauga.avif" alt="Mauga">
                    <img src="../../images/Ramattra.avif" alt="Ramattra">
                    <img src="../../images/Reinhardt.avif" alt="Reinhardt">
                    <img src="../../images/Roadhog.avif" alt="Roadhog">
                    <img src="../../images/Sigma.avif" alt="Sigma">
                    <img src="../../images/Winston.avif" alt="Winston">
                    <img src="../../images/Wrecking Ball.avif" alt="Wrecking Ball">
                    <img src="../../images/Zarya.avif" alt="Zarya">
                    <img src="../../images/Orisa.avif" alt="Orisa">
                </div>
            </div>
        <br>
    </body>
</html>