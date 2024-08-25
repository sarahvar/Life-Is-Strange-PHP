<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Quiz Interactif - Life Is Strange</title>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <style>
        /* Importation de la police Gloria Hallelujah */
        @import url('https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap');

        /* Style général */
        body {
            font-family: 'Gloria Hallelujah', cursive;
            background-color: #f0f8ff; /* Couleur de fond douce */
            color: #333; /* Couleur de texte principale */
            margin: 0;
            padding: 0;
            cursor: url('assets/curseur.png'), auto; /* Ajouter l'image comme curseur */
        }

        a, button, input, textarea, li {
            cursor: url('assets/Curseur.png'), auto; /* Appliquer le curseur personnalisé */
        }

        /* Style pour les titres */
        h1, h2, h3, h4 {
            color: #003366; /* Couleur sombre pour les titres */
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }

        h1 {
            font-size: 2.5em;
        }

        /* Style pour les questions du quiz */
        .question {
            margin-bottom: 20px;
            margin: 20px;
            width: 100%;
            font-family: 'Gloria Hallelujah', cursive; /* Appliquer la police Gloria Hallelujah */
        }

        /* Style pour les réponses, centrer horizontalement */
        .answers {
            list-style: none;
            padding: 0;
            display: flex;
            flex-direction: column; /* Afficher les réponses en colonne */
            align-items: center; /* Centre les éléments horizontalement */
        }

        /* Style pour chaque option de réponse */
        .answers li {
            margin: 5px 0;
            display: flex;
            align-items: center;
            width: 100%; /* Assurer que les éléments prennent toute la largeur du conteneur */
            justify-content: center; /* Centre le contenu de chaque élément */
        }

        /* Style pour le bouton de soumission */
        .quiz-form {
            text-align: center; /* Centre le bouton dans le formulaire */
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 20px;
            font-family: 'Gloria Hallelujah', cursive; /* Appliquer la police Gloria Hallelujah */
            display: inline-block; /* Assurer que le bouton est traité comme un bloc en ligne */
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Style pour la section des résultats */
        .quiz-results {
            margin: 20px auto; /* Marge automatique pour centrer la section */
            padding: 20px; /* Padding pour l'intérieur de la section */
            max-width: 800px; /* Largeur maximale pour la section des résultats */
            background-color: #fff; /* Fond blanc pour la section */
            border-radius: 10px; /* Coins arrondis */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre légère */
        }

        .result p {
            margin: 0 0 10px 0; /* Marges pour espacer les paragraphes */
        }

        .correct-answer {
            color: #28a745; /* Couleur verte pour les réponses correctes */
            font-weight: bold;
        }

        .incorrect-answer {
            color: #dc3545; /* Couleur rouge pour les réponses incorrectes */
            font-weight: bold;
        }

        /* Style pour les listes */
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        /* Style pour chaque élément de la liste */
        ul li {
            margin: 5px 0;
        }

        /* Style pour la liste de navigation */
        ul.navigation {
            list-style: none;
            padding: 10px 0;
            background-color: #003366;
            text-align: center;
            margin: 0;
        }

        ul.navigation li {
            display: inline-block;
            margin: 0 15px;
        }

        ul.navigation a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 400;
            padding: 10px 15px;
            border-radius: 5px;
            font-family: 'Gloria Hallelujah', cursive; /* Appliquer la police Gloria Hallelujah aux liens de navigation */
        }

        ul.navigation a:hover {
            background-color: #3399ff;
            transition: background-color 0.3s;
        }
    </style>
</head>
<body>
<section class="navbar">
    <a href="index.php" class="home-link">
        <h1>Life Is Strange - Accueil</h1>
    </a>
    <?php include('header.php'); ?>
</section>

<div class="quiz-container">
    <h1>Quiz Interactif - Life Is Strange</h1>
    
    <form method="POST" class="quiz-form">
        <?php
        // Code PHP ici pour les questions et les réponses
        $questions = [
            [
                'question' => 'Quel est le nom complet de Max Caulfield ?',
                'answers' => ['Maxine Caulfield', 'Max Caulfield', 'Maxine Carter', 'Max Carter'],
                'correct' => 0 // Indice de la bonne réponse
            ],
            [
                'question' => 'Quel est le super pouvoir de Max ?',
                'answers' => ['Voyage dans le temps', 'Télékinésie', 'Télépathie', 'Invisibilité'],
                'correct' => 0 // Indice de la bonne réponse
            ],
            [
                'question' => 'Quel est le nom de l\'amie d\'enfance de Max ?',
                'answers' => ['Chloé Price', 'Rachel Amber', 'Victoria Chase', 'Kate Marsh'],
                'correct' => 0 // Indice de la bonne réponse
            ],
            [
                'question' => 'Quel est le nom de l\'école que Max fréquente ?',
                'answers' => ['Blackwell Academy', 'Arcadia Bay School', 'Pacific Northwest School', 'West Coast Academy'],
                'correct' => 0 // Indice de la bonne réponse
            ]
        ];

        // Initialiser les variables
        $correctAnswers = 0;
        $responses = [];
        $results = [];

        // Vérifier si le quiz a été soumis
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $responses = $_POST['answers'] ?? [];
            foreach ($questions as $index => $question) {
                $selectedAnswer = isset($responses[$index]) ? intval($responses[$index]) : null;
                if ($selectedAnswer === $question['correct']) {
                    $correctAnswers++;
                    $results[$index] = [
                        'correct' => true,
                        'selected' => $question['answers'][$selectedAnswer],
                        'correct_answer' => $question['answers'][$question['correct']]
                    ];
                } else {
                    $results[$index] = [
                        'correct' => false,
                        'selected' => $selectedAnswer !== null ? $question['answers'][$selectedAnswer] : 'Aucune réponse',
                        'correct_answer' => $question['answers'][$question['correct']]
                    ];
                }
            }
        }

        foreach ($questions as $index => $question): ?>
            <div class="question">
                <p><?php echo htmlspecialchars($question['question']); ?></p>
                <ul class="answers">
                    <?php foreach ($question['answers'] as $i => $answer): ?>
                        <li>
                            <label>
                                <input type="radio" name="answers[<?php echo $index; ?>]" value="<?php echo $i; ?>" <?php echo isset($responses[$index]) && $responses[$index] == $i ? 'checked' : ''; ?> required>
                                <?php echo htmlspecialchars($answer); ?>
                            </label>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
        
        <button type="submit">Soumettre</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <div class="quiz-results">
            <p>Vous avez répondu correctement à <?php echo $correctAnswers; ?> sur <?php echo count($questions); ?> questions.</p>
            <?php foreach ($results as $index => $result): ?>
                <div class="question-result">
                    <p><?php echo htmlspecialchars($questions[$index]['question']); ?></p>
                    <?php if ($result['correct']): ?>
                        <p class="correct-answer">Votre réponse : <?php echo htmlspecialchars($result['selected']); ?> (Correct)</p>
                    <?php else: ?>
                        <p class="incorrect-answer">Votre réponse : <?php echo htmlspecialchars($result['selected']); ?></p>
                        <p class="correct-answer">Réponse correcte : <?php echo htmlspecialchars($result['correct_answer']); ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
