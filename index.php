<?php
session_start();

// Initialiser les variables de session si elles n'existent pas encore
if (!isset($_SESSION['music_started'])) {
    $_SESSION['music_started'] = false;
}
if (!isset($_SESSION['visited'])) {
    $_SESSION['visited'] = false;
}

// Vérifier si l'utilisateur a visité d'autres pages
$showMessage = !$_SESSION['music_started'] && !$_SESSION['visited'];

// Mettre à jour l'état de visite pour la prochaine fois
$_SESSION['visited'] = true;

// Gérer l'état de la musique via les clics sur le message ou le bouton
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'start') {
        $_SESSION['music_started'] = true;
    } elseif ($_GET['action'] == 'stop') {
        $_SESSION['music_started'] = false;
    }
}

// Déterminer si le message doit être affiché
$showMessage = !$_SESSION['music_started'] || isset($_GET['action']) && $_GET['action'] == 'stop';
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
            display: <?php echo $showMessage ? 'block' : 'none'; ?>; /* Afficher le message si nécessaire */
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
            display: <?php echo $_SESSION['music_started'] ? 'block' : 'none'; ?>; /* Afficher le bouton si la musique est en cours */
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Balise audio avec autoplay si la musique est démarrée -->
    <audio id="background-music" <?php echo $_SESSION['music_started'] ? 'autoplay' : ''; ?>>
        <source src="/assets/Life Is Strange Soundtrack.mp3" type="audio/mpeg">
        Votre navigateur ne supporte pas la balise audio.
    </audio>

    <!-- Message d'invite -->
    <?php if ($showMessage): ?>
        <a href="?action=start" id="play-message">Cliquez ici pour démarrer la musique.</a>
    <?php endif; ?>

    <!-- Bouton d'arrêt de la musique -->
    <?php if ($_SESSION['music_started']): ?>
        <a href="?action=stop" id="stop-music">Arrêter la musique</a>
    <?php endif; ?>

>
<div class="container">
        <?php include('header.php'); ?>
    </div>
</body>
</html>