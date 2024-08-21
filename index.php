<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Life Is Strange</title>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Balise audio avec démarrage immédiat -->
    <audio id="background-music" autoplay>
        <source src="/assets/Life Is Strange Soundtrack.mp3" type="audio/mpeg">
        Votre navigateur ne supporte pas la balise audio.
    </audio>

    <!-- Message affiché si l'autoplay ne fonctionne pas -->
    <p id="play-message" style="display:none;">La musique ne peut pas démarrer automatiquement. Cliquez n'importe où pour la lancer.</p>

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

        // Vérifie si la musique a démarré automatiquement
        audio.addEventListener('play', function() {
            playMessage.style.display = 'none';
        });

        // Si l'autoplay échoue, afficher un message demandant une interaction utilisateur
        audio.addEventListener('pause', function() {
            playMessage.style.display = 'block';
        });

        // Au cas où la lecture automatique échoue, jouer la musique lors de n'importe quelle interaction
        document.addEventListener('click', function() {
            audio.play().catch(function(error) {
                console.log("La lecture automatique est toujours bloquée.");
            });
        });
    </script>
</body>
</html>
