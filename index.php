<link rel="stylesheet" href="assets/css/style.css">
<?php include "data\data.php" ?>
<?php
// Initialiser la session
session_start();
?>



    <div class="formconnection">

        <?php



        if (isset($_POST['username'])) {
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($conn, $username);
            $mdp = stripslashes($_REQUEST['mdp']);
            $mdp = mysqli_real_escape_string($conn, $mdp);
            $query = "SELECT * FROM `users` WHERE username='$username' and mdp='" . hash('sha256', $mdp) . "'";
            $result = mysqli_query($conn, $query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                $_SESSION['username'] = $username;

                header("Location: accueil.php");
            } else {
                $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
            }
        }

        ?>
        <div id="container" class="container">


            <form method="POST" class="formulaire">
                <img class="image" src="assets/background/Logo PassionFroid.png">
                <br>

                <FONT color="#009999" face="Georgia" size="1">
                    <h1> Entrer vos identifiants :</h1>
                </FONT> <br>

                <FONT color="#009999" face="Georgia" size="2"> <label><b>Nom d'utilisateur :</b></label></FONT>
                <br>
                <input type="text" class="text" placeholder="Entrer un nom d'utilisateur" name="username" required>
                <br>

                <FONT color="#009999" face="Georgia" size="2" <label><b>Mot de passe :</b></label> </FONT>
                <br>
                <input type="password" class="password" placeholder="Entre un mot de passe" name="mdp" required>
                <br>
                <FONT color="#009999" face="Georgia" size="1">
                    <a href="accueil.php">
                        <h2>Marketing régionale?</h2>
                    </a>
                </FONT> <br>

                <input type="submit" id="submit" class="index" value="LOGIN">
            </form>
        </div>




    </div>

