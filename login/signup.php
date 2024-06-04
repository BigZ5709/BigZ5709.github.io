<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/mycss7.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign Up - Overwatch</title>
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
                    <h1 class="Important">
                        <a href="http://localhost/login">Log In</a>
                    </h1>
                </div>
            </div>
    </div>
    <div class="signup_container">
        <div class="signup">
            <h1 class="Important">Sign Up</h1>
            <form action="register.php" method="post">
                <label for="email"><h3 class="Important">Email:</h3></label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="first_name"><h3 class="Important">First Name:</h3></label><br>
                <input type="text" id="first_name" name="first_name" required><br>
                <label for="last_name"><h3 class="Important">Last Name:</h3></label><br>
                <input type="text" id="last_name" name="last_name" required><br>
                <label for="phone"><h3 class="Important">Phone:</h3></label><br>
                <input type="tel" id="phone" name="phone" required><br>
                <label for="address"><h3 class="Important">Address:</h3></label><br>
                <textarea id="address" name="address" required></textarea><br>
                <label for="battle_net"><h3 class="Important">Battle Net:</h3></label><br>
                <input type="battle_net" id="battle_net" name="battle_net" required><br>
                <input type="submit" value="Sign Up">
            </form> 
        </div>
    </div>
    <script>
        <?php
        if(isset($_GET['alert'])) {
            $alert = $_GET['alert'];
            echo "alert('$alert');";
        }
        ?>
    </script>
</body>
</html>
