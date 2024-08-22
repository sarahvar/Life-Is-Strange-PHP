<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Is Strange - Personnages</title>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Life_is_strange.css">
    <style>
        /* Style moderne pour le tableau */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: 'Gloria Hallelujah', cursive;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #ddd;
        }
        img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<?php 
    include('header.php');
?>

<h1><u>Bienvenue dans le monde de Life is Strange</u></h1>

<!-- Tableau des personnages -->
<table>
    <thead>
        <tr>
            <th>Nom du personnage</th>
            <th>Date, lieu de naissance et âge pdt l'histoire (Octobre 2013)</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $personnages = [
            [
                'nom' => 'Chloe, Elizabeth Price',
                'date_lieu' => 'née le 11 mars 1994 à Arcadia Bay (Oregon), 19 ans',
                'description' => 'Chloe "la punk aux cheveux bleus" est rebelle, elle n\'aime pas l\'autorité et a une forte personnalité. Elle n\'est pas rancunière et sous ses airs de dure à cuire a un cœur tendre. Elle est quelqu\'un avec un franc-parler et qui sait faire des compliments.',
                'image' => '/assets/Chloe-Price.jpg'
            ],
            [
                'nom' => 'Max(ine) Caufield',
                'date_lieu' => 'née le 21 septembre 1995 à Arcadia Bay, 18 ans',
                'description' => 'Max est timide, un peu réservée, discrète, en gros l\'opposée de Chloé. Max se soucie des autres et n\'aime pas les brutes. Elle est intelligente et très ou trop mature pour son âge. Elle est passionnée de photographie. Au fur et à mesure que l\'histoire avance, Max prend plus confiance en elle.',
                'image' => '/assets/Maxine-Caulfield.webp'
            ],
            [
                'nom' => 'Rachel, Dawn Amber',
                'date_lieu' => 'née le 22 juillet 1994 à Long Beach (Californie), 19 ans',
                'description' => 'Elève talentueuse, Rachel rêve de devenir mannequin, elle est la fille la plus populaire du lycée et tout le monde l\'aime sauf Victoria qui est jalouse. Elle est très proche de Chloe, toutes les deux rêvent de quitter Arcadia Bay pour Los Angeles.',
                'image' => '/assets/Rachel-Amber.webp'
            ],
            [
                'nom' => 'Victoria Chase',
                'date_lieu' => 'née le 14 août 1995 à Seattle (Washington), 18 ans',
                'description' => 'Riche et arrogante mais avec un côté vulnérable qu\'il faut souvent trouver, elle est passionnée de photographie et fan de Mark Jefferson.',
                'image' => '/assets/Victoria-Chase.webp'
            ],
            [
                'nom' => 'Nathan, Joshua Prescott',
                'date_lieu' => 'né le 29 août 1995 à Fort Lauderdale (Floride), 18 ans',
                'description' => 'Nathan est un jeune homme riche, perturbé et agressif. Il a des relations tendues avec son père.',
                'image' => '/assets/Nathan-Prescott.png'
            ],
            [
                'nom' => 'Mr Jefferson',
                'date_lieu' => 'né le 11 avril 1975 à Arcadia Bay, 38 ans',
                'description' => 'Célèbre photographe qui s\'est fait connaître dans les années 90, il est revenu dans sa ville natale pour être professeur de photo.',
                'image' => '/assets/Mark_jefferson.webp'
            ],
            [
                'nom' => 'Joyce Madsen',
                'date_lieu' => 'date de naissance inconnue, née à Arcadia Bay',
                'description' => 'Joyce travaille en tant que serveuse au Two Whales diner d\'Arcadia Bay, elle est la mère de la meilleure amie de Max et en conflit permanent avec sa fille qu\'elle aime beaucoup.',
                'image' => '/assets/Joyce-Madsen.jpg'
            ],
            [
                'nom' => 'David Madsen',
                'date_lieu' => 'né le 18 Mai 1971 à Cullman (Alabama), 42 ans',
                'description' => 'Il a rencontré Joyce le 27 novembre 2008, il est gardien de la sécurité à l\'académie de Blackwell et aussi le beau-père de la meilleure amie de Max.',
                'image' => './assets/David-Madsen.jpg'
            ],
            [
                'nom' => 'Warren Graham',
                'date_lieu' => 'né le 20 novembre 1996 à Arcadia Bay, 16 ans',
                'description' => 'C\'est le personnage geek du jeu, fan de vieux films sombres et de séries. Il est ami avec Max et amoureux d\'elle.',
                'image' => '/assets/Warren-Graham.webp'
            ],
            [
                'nom' => 'Kate Marsh',
                'date_lieu' => 'née le 12 septembre 1995 à Arcadia Bay, 18 ans',
                'description' => 'Kate est une chrétienne très croyante. Elle est douce, timide et réservée, elle est amie avec Max.',
                'image' => '/assets/Kate-Marsh.jpg'
            ]
        ];

        foreach ($personnages as $personnage):
        ?>
        <tr>
            <td>
                <b><?php echo htmlspecialchars($personnage['nom']); ?></b><br>
                <img src="<?php echo htmlspecialchars($personnage['image']); ?>" alt="Image de <?php echo htmlspecialchars($personnage['nom']); ?>">
            </td>
            <td><?php echo htmlspecialchars($personnage['date_lieu']); ?></td>
            <td><?php echo htmlspecialchars($personnage['description']); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p>
    J'ai tellement de choses à dire sur ce jeu que je ne sais pas par où commencer...
</p>

<img src="/assets/Carte.jpg" class="carte" alt="Image du jeu">


</body>
</html>
