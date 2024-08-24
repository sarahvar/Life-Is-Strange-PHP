<?php
session_start();

// Vérifier si l'utilisateur a visité d'autres pages
$showMessage = !isset($_SESSION['visited']) || $_SESSION['visited'] !== true;

// Réinitialiser la variable de session pour que le message ne s'affiche pas lors des visites suivantes
unset($_SESSION['visited']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Life Is Strange</title>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Style pour l'invite */
        #play-message {
            position: fixed;
            bottom: 60px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            display: none; /* Cacher initialement */
            cursor: pointer;
        }

        /* Style pour le bouton d'arrêt de la musique */
        #stop-music {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 0, 0, 0.7);
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            display: none; /* Cacher initialement */
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Balise audio sans autoplay -->
    <audio id="background-music">
        <source src="/assets/Life Is Strange Soundtrack.mp3" type="audio/mpeg">
        Votre navigateur ne supporte pas la balise audio.
    </audio>

    <!-- Message d'invite -->
    <?php if ($showMessage): ?>
        <p id="play-message">Cliquez ici pour démarrer la musique.</p>
    <?php endif; ?>

    <!-- Bouton d'arrêt de la musique -->
    <p id="stop-music">Arrêter la musique</p>

    <!-- Liste des liens en bas de la page -->
    <ul>
        <li><a href="life_is_strange.php">L'histoire de Life is Strange</a></li>
        <li><a href="Max.php">Max</a></li>
        <li><a href="Chloe.php">Chloe</a></li>
        <li><a href="Rachel.php">Rachel</a></li>
    </ul>

    <script>
        var audio = document.getElementById('background-music');
        var playMessage = document.getElementById('play-message');
        var stopMusic = document.getElementById('stop-music');
        var musicStarted = false;

        // Fonction pour jouer la musique
        function playMusic() {
            if (!musicStarted) {
                audio.play().then(function() {
                    musicStarted = true;
                    if (playMessage) {
                        playMessage.style.display = 'none'; // Cacher le message si la musique démarre
                    }
                    if (stopMusic) {
                        stopMusic.style.display = 'block'; // Afficher le bouton d'arrêt
                    }
                }).catch(function(error) {
                    console.log("Erreur de lecture :", error);
                });
            }
        }

        // Fonction pour arrêter la musique
        function stopMusicPlayback() {
            if (musicStarted) {
                audio.pause();
                audio.currentTime = 0; // Revenir au début de la musique
                musicStarted = false;
                if (stopMusic) {
                    stopMusic.style.display = 'none'; // Cacher le bouton d'arrêt
                }
                if (playMessage) {
                    playMessage.style.display = 'block'; // Réafficher le message d'invite si nécessaire
                }
            }
        }

        // Afficher le message d'invite au chargement de la page, s'il existe
        window.addEventListener('load', function() {
            if (playMessage) {
                playMessage.style.display = 'block'; // Afficher le message d'invite
                playMessage.addEventListener('click', playMusic); // Démarrer la musique au clic sur le message
            } else {
                playMusic(); // Démarrer la musique immédiatement si le message ne s'affiche pas
            }

            if (stopMusic) {
                stopMusic.addEventListener('click', stopMusicPlayback); // Arrêter la musique au clic sur le bouton d'arrêt
            }
        });
    </script>
</body>
</html>
