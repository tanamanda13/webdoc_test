
<?php

// Récupérer le fichier de configuration principal
require 'assets/config/bootstrap.php';

// Début de page (Doctype, head)

include 'assets/inc/header.php';
?>

<article class="subpart subpart2 sectionId">

    <div class="about__wrapper">
        <div class="about__wrapper--intro">
            <strong class="subtitle">
                Projet de fin d'année
            </strong>
            <h1 class="title">L' ÉQUIPE <br>
                <hr> FUNGI
            </h1>
            <p class="paragraph">L’objectif de ce projet est de démocratisé  
                le savoir autour du champignon.
                Et redonner ses lettres de noblesse
                à un être vivant trop souvent ignoré
            </p> 
        </div>
        <div class="about__wrapper--people">
            <div class= "about__container">
                <img class="subpart2__imageabout1" src="assets/media/fiona.png" />
                <p> 
                    Fiona Roux 
                </p>
            </div>
            <div class= "about__container">
                <img class="subpart2__imageabout1" src="assets/media/victor.png" />
                <p> 
                    Victor Balducci 
                </p>
            </div>
            <div class= "about__container">
                <img class="subpart2__imageabout1" src="assets/media/alice.png" />
                <p> 
                    Alice Gordwin 
                </p>
            </div>
            <div class= "about__container">
                <img class="subpart2__imageabout2" src="assets/media/amanda.png" />
                <p>
                    Amanda Tan 
                </p>
            </div>

            <div class= "about__container">
                <img class="subpart2__imageabout2" src="assets/media/arthur.png" />
                <p>
                    Arthur Barré
                </p>
            </div>
        </div>
        <div class="about__wrapper--disclamer">
            <div class="bordered-text">
                <h2> 
                    AVERTISSEMENT :
                </h2>
                <p> 
                    Ce site à été réalisé à des fins pédagogiques dans le cadre du cursus Bachelor de l’école HETIC. <br>
                    Les contenus présentés ne sont en aucun cas exploités à des fins commerciales et ne seront pas publiés. 
                </p>
            </div>    
        </div>
    </div>

   
</article>


<?php
// Barre de navigation
include 'assets/inc/nav_footer.php';
// Fin de page (scripts)
include 'assets/inc/footer.php';
?>




