<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/mycss7.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Overwatch</title>
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
                        <a href="http://localhost/login/signup.php">Sign Up</a>
                    </h1>
                </div>
            </div>
    </div>
    <div class="login_container">
        <div class="login">
            <h1 class="Important">Login</h1>
            <form action="login_process.php" method="post">
                <label for="email"><h3 class="Important">Email:</h3></label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="battle_net"><h3 class="Important">Battle Net:</h3></label><br>
                <input type="battle_net" id="battle_net" name="battle_net" required><br>
                <input type="submit" value="Login">
            </form> 
        </div>
    </div>
    <script>
        <?php
        session_start();
        if(isset($_SESSION['error'])) {
            $error = $_SESSION['error'];
            echo "alert('$error');";
            unset($_SESSION['error']); // Clear the error message
        }
        ?>
    </script>
</body>
</html>
