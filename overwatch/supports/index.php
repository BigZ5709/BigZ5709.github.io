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
                            Support
                        </h3>
                        <p>
                        In Overwatch 2, support heroes continue to play a vital role in the team by providing healing, utility, and protection to their allies. While specifics may evolve as the game develops, here's a general overview of what you can expect from support heroes in Overwatch 2:
                        </p>
                        <ol>
                            <li>Healing: Support heroes in Overwatch 2 will likely have abilities and tools to restore health to their teammates, keeping them in the fight and sustaining their presence on the battlefield. This could range from direct healing beams or projectiles to area-of-effect healing abilities.</li>
                            <br>
                            <li>Utility: Many support heroes offer utility to their teams beyond healing. This could include abilities that boost allies' damage output, enhance their mobility, or disrupt enemy movements. Support heroes often provide the necessary tools to control objectives and turn the tide of battle.</li>
                            <br>
                            <li>Protection: Support heroes may also have abilities to protect their teammates from harm. This could involve deploying shields, barriers, or other defensive mechanisms to mitigate incoming damage and keep vulnerable allies safe.</li>
                            <br>
                            <li>Versatility: Overwatch 2 supports are likely to have a diverse range of abilities, allowing players to adapt to various situations and team compositions. Whether it's providing burst healing in intense skirmishes or offering sustained support during prolonged engagements, support heroes excel at keeping their team in fighting shape.</li>
                            <br>
                            <li>Ultimate Abilities: Each support hero typically possesses a powerful ultimate ability that can turn the tide of battle when used strategically. These ultimates often have game-changing effects, such as mass healing, resurrection, or crowd control, making them crucial tools for securing victory.</li>
                        </ol>
                        <p>
                        Overall, support heroes in Overwatch 2 serve as the backbone of the team, providing crucial healing, utility, and protection to their allies while also contributing to offensive and defensive strategies.
                        </p>
                    </div>
                </div>
                <div class="image-container">
                    <img src="../../images/Moira.jpg" alt="Moira">
                    <img src="../../images/Lifeweaver.jpeg" alt="Lifeweaver">
                    <img src="../../images/Brigitte.jpg" alt="Brigitte">
                    <img src="../../images/Lucio.jpg" alt="Lucio">
                    <img src="../../images/Illari.jpeg" alt="Illari">
                    <img src="../../images/Zenyatta.jpg" alt="Zenyatta">
                    <img src="../../images/Kiriko.jpeg" alt="Kiriko">
                    <img src="../../images/Mercy.jpg" alt="Mercy">
                    <img src="../../images/Baptiste.jpg" alt="Baptiste">
                    <img src="../../images/Ana.jpg" alt="Ana">
                </div>
            </div>
        <br>
    </body>
</html>