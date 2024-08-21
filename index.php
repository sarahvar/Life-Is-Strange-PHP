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
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.7);
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
    <p id="play-message">Cliquez ici pour démarrer la musique.</p>

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
        var musicStarted = false;

        // Fonction pour essayer de jouer la musique
        function tryPlayMusic() {
            if (!musicStarted) {
                audio.play().then(function() {
                    musicStarted = true;
                    playMessage.style.display = 'none'; // Cacher le message si la musique démarre
                }).catch(function(error) {
                    console.log("Erreur de lecture :", error);
                });
            }
        }

        // Afficher le message d'invite au chargement de la page
        window.addEventListener('load', function() {
            playMessage.style.display = 'block'; // Afficher le message d'invite
        });

        // Détecter le mouvement de la souris ou un clic
        document.addEventListener('mousemove', tryPlayMusic);
        document.addEventListener('click', tryPlayMusic);

        // Optionnel : Cacher le message après une interaction utilisateur réussie
        audio.addEventListener('play', function() {
            playMessage.style.display = 'none';
        });
    </script>
</body>
</html>
