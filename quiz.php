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
            background-color: #f0f8ff;
            color: #333;
            margin: 0;
            padding: 0;
            cursor: url('assets/Curseur.png') 16 16, auto;
        }

        a, button, input, textarea, li {
            cursor: url('assets/Curseur.png') 16 16, auto;
        }

        /* Style pour les titres */
        h1, h2, h3, h4 {
            color: #003366;
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }

        h1 {
            font-size: 2.5em;
        }

        /* Style pour le conteneur du quiz */
        .quiz-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .quiz-content {
            display: flex;
            justify-content: center;
            width: 100%;
            max-width: 1200px;
        }

        .questions {
            flex: 1;
            margin-right: 20px;
        }

        .results {
            flex: 1;
        }

        /* Style pour les questions du quiz */
        .question {
            margin-bottom: 20px;
            width: 100%;
            font-family: 'Gloria Hallelujah', cursive;
        }

        /* Style pour les réponses, centrer horizontalement */
        .answers {
            list-style: none;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Style pour chaque option de réponse */
        .answers li {
            margin: 10px 0; /* Augmenter la marge verticale entre les réponses */
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: center;
        }

        /* Style pour le bouton de soumission */
        .quiz-form {
            text-align: center;
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
            font-family: 'Gloria Hallelujah', cursive;
            display: inline-block;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Style pour la section des résultats */
        .quiz-results {
            margin: 20px auto;
            padding: 20px;
            max-width: 800px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .quiz-results ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .quiz-results li {
            margin: 15px 0; /* Augmenter la marge verticale entre les éléments de la liste des résultats */
        }

        .result p {
            margin: 0 0 10px 0;
        }

        .correct-answer {
            color: #28a745;
            font-weight: bold;
        }

        .incorrect-answer {
            color: #dc3545;
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
            font-family: 'Gloria Hallelujah', cursive;
        }

        ul.navigation a:hover {
            background-color: #3399ff;
            transition: background-color 0.3s;
        }

        .navigation a:hover,
        .navigation a.active,
        .navigation li.active a {
            background-color: #3399ff;
            transition: background-color 0.3s;
            color: #ffffff;
            font-weight: bold;
        }

        /* Nouveau style pour le texte de la réponse correcte */
        .correct-answer-text {
            color: #28a745; /* Vert pour la réponse correcte */
            font-weight: bold;
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
        <div class="quiz-content">
            <div class="questions">
                <?php
                // Liste complète des questions
                $all_questions = [
                    [
                        'question' => 'Quel est le nom complet de Max Caulfield ?',
                        'answers' => ['Maxine Caulfield', 'Max Caulfield', 'Maxine Carter', 'Max Carter'],
                        'correct' => 1
                    ],
                    [
                        'question' => 'Quel est le super pouvoir de Max ?',
                        'answers' => ['Télékinésie', 'Voyage dans le temps', 'Télépathie', 'Invisibilité'],
                        'correct' => 1
                    ],
                    [
                        'question' => 'Quel est le nom de l\'amie d\'enfance de Max ?',
                        'answers' => ['Rachel Amber', 'Victoria Chase', 'Kate Marsh', 'Chloé Price'],
                        'correct' => 3
                    ],
                    [
                        'question' => 'Quel est le nom de l\'école que Max fréquente ?',
                        'answers' => ['Arcadia Bay School', 'Pacific Northwest School', 'Blackwell Academy', 'West Coast Academy'],
                        'correct' => 2
                    ],
                    [
                        'question' => 'Comment s\'appelle la ville où se déroule l\'histoire ?',
                        'answers' => ['Arcadia Bay', 'Bright Falls', 'Twin Peaks', 'Silent Hill'],
                        'correct' => 0
                    ],
                    [
                        'question' => 'Quelle est la passion artistique de Max ?',
                        'answers' => ['Peinture', 'Photographie', 'Écriture', 'Musique'],
                        'correct' => 1
                    ],
                    [
                        'question' => 'Quelle est la principale cause des conflits entre Max et Chloé ?',
                        'answers' => ['Le déménagement de Max', 'Les secrets de Chloé', 'La disparition de Rachel', 'Les relations amoureuses'],
                        'correct' => 0
                    ],
                    [
                        'question' => 'Qui est le principal antagoniste de "Life Is Strange" ?',
                        'answers' => ['Nathan Prescott', 'Mark Jefferson', 'David Madsen', 'Frank Bowers'],
                        'correct' => 1
                    ],
                    [
                        'question' => 'Quel est le nom de la mère de Max ?',
                        'answers' => ['Joyce', 'Diana', 'Sarah', 'Vanessa'],
                        'correct' => 0
                    ],
                    [
                        'question' => 'Qui est le beau-père de Chloé ?',
                        'answers' => ['Proviseur Wells', 'Mark Jefferson', 'David Madsen', 'Sean Prescott'],
                        'correct' => 2
                    ]
                ];
                
                // Mélanger les questions
                shuffle($all_questions);

                // Sélectionner les 8 premières questions
                $questions = array_slice($all_questions, 0, 8);

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
                
                // Affichage des questions et des réponses
                foreach ($questions as $index => $question) {
                    ?>
                    <div class="question">
                        <h3>Question <?php echo ($index + 1); ?>: <?php echo htmlspecialchars($question['question']); ?></h3>
                        <ul class="answers">
                            <?php foreach ($question['answers'] as $key => $answer) { ?>
                                <li>
                                    <label>
                                        <input type="radio" name="answers[<?php echo $index; ?>]" value="<?php echo $key; ?>"
                                            <?php echo isset($responses[$index]) && $responses[$index] == $key ? 'checked' : ''; ?>>
                                        <?php echo htmlspecialchars($answer); ?>
                                    </label>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php
                }
                ?>
                <button type="submit">Soumettre</button>
            </div>

            <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
                <div class="quiz-results">
                    <h2>Résultats</h2>
                    <p>Vous avez obtenu <?php echo $correctAnswers; ?> sur <?php echo count($questions); ?> bonnes réponses.</p>
                    <ul>
                        <?php foreach ($results as $index => $result) { ?>
                            <li class="<?php echo $result['correct'] ? 'correct-answer' : 'incorrect-answer'; ?>">
                                <strong>Question <?php echo ($index + 1); ?>:</strong>
                                <?php echo $result['correct'] ? 'Bonne réponse! ' : 'Mauvaise réponse. '; ?>
                                <br>Réponse sélectionnée: <?php echo htmlspecialchars($result['selected']); ?>
                                <br><span class="correct-answer-text">Réponse correcte: <?php echo htmlspecialchars($result['correct_answer']); ?></span>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </form>
</div>
</body>
</html>
