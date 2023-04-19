<div class="container-header" id="container-header">
    <div class="container-header-1" id="container-header-1">
        <div class="container-logo" id="container-logo">
            <a href=<?= $lienIndex ?> >
                <span class="logo" id="logo">LearnHub.</span>
            </a>
        </div>
        <div class="container-sign-in-up" id="container-sign-in-up">
            <?php 
                if(isset($_SESSION['nom']))
                {   
                    echo "<a href=''>";
                    echo "<div class='container-user' id='container-user'>";
                    echo "<span class='user' id='user'>";
                    echo "" .$_SESSION['nom']. " " .$_SESSION['prenom']. "";
                    echo "</span>";
                    echo "</div>";
                    echo "</a>";
                }
            ?>
            <a href=<?= $lienCnx ?> >
                <div class="container-sign-in" id="container-sign-in">
                    <span class="sign-in" id="sign-in">Se connecter</span>
                </div>
            </a>
            <a href=<?= $lienIns ?>>
                <div class="container-sign-up" id="container-sign-up">
                    <span class="sign-up" id="sign-up">S'inscrire</span>
                </div>
            </a>
            <a href="../index.php?action=deconnexion">
                <div class="container-sign-out" id="container-sign-out">
                    <span class="sign-out" id="sign-out">D&eacute;connexion</span>
                </div>
            </a>
            <?php
                if(isset($_SESSION['nom']))
                {
                    //echo "connected";
                    echo "<script>";
                    echo "let containerSignUp = document.getElementById('container-sign-up');";
                    echo "containerSignUp.style.display = 'none';";
                    echo "let containerSignIn = document.getElementById('container-sign-in');";
                    echo "containerSignIn.style.display = 'none';";
                    echo "</script>";
                }
                else
                {
                    //echo "disconnected";
                    echo "<script>";
                    echo "let containerSignUp = document.getElementById('container-sign-up');";
                    echo "containerSignUp.style.display = 'flex';";
                    echo "let containerSignIn = document.getElementById('container-sign-in');";
                    echo "containerSignIn.style.display = 'flex';";
                    echo "let containerSignOut = document.getElementById('container-sign-out');";
                    echo "containerSignOut.style.display = 'none';";
                    echo "</script>";
                }
            ?>
        </div>
    </div>
    <div class="container-header-2" id="container-header-2">
        <div class="container-menu" id="container-menu">
            <button class="dropbtn" id="dropbtn" onclick="showMenu()">
                <i class="fa-solid fa-bars"></i>
                Cours
            </button>
            <div class="dropdown-content" id="dropdown-menu">
                <a href="#">D&eacute;veloppement</a>
                <a href="#">Langues</a>
                <a href="#">Design</a>
                <a href="#">Sant&eacute;&Fitness</a>
            </div>
        </div>
        <div class="container-contact-us" id="container-contact-us">
            <a href=<?= $lienCtct ?>>
                <span class="contact-us" id="contact-us">Nous contacter</span>
            </a>
        </div>
    </div>
    <script src="../assets/js/header.js"></script>
</div>