<?php
session_start();

// Marquer que l'utilisateur a visité une autre page
$_SESSION['visited'] = true;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page de Chloe Elizabeth Price</title>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Chloe.css">
    <style>
        body {
            font-family: 'Gloria Hallelujah', cursive;
            background-color: #f0f8ff; /* Couleur de fond douce */
            color: #333; /* Couleur de texte principale */
            margin: 0;
            padding: 0;
        }
        
        h1, h2, h3, h4 {
            color: #003366; /* Couleur sombre pour les titres */
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }
        
        h1 {
            font-size: 2.5em;
        }
        
        h2 {
            font-size: 2em;
            border-bottom: 2px solid #003366;
            padding-bottom: 10px;
        }
        
        h3 {
            font-size: 1.8em;
            color: #3399ff; /* Couleur bleu clair pour les sous-titres */
        }
        
        h4 {
            font-size: 1.4em;
        }
        
        p {
            line-height: 1.6;
            margin: 0 20px 20px;
            text-align: center;
        }
        
        .imgcendrier img,
        .imganarchie img,
        .conteneur img,
        .imgbladerunner img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            display: block;
            margin: 0 auto;
        }

        .videocenter {
            text-align: center;
            margin: 20px;
        }

        .tableau-style {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            background-color: #ffffff;
            border: 1px solid #ddd;
        }
        
        thead {
            background-color: #003366;
            color: #ffffff;
        }
        
        th, td {
            padding: 15px;
            text-align: left;
        }
        
        th {
            font-weight: 700;
            font-size: 1.1em;
        }
        
        tbody tr:nth-child(even) {
            background-color: #f4f4f4;
        }
        
        tbody tr:hover {
            background-color: #e0e0e0;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
            text-align: center;
        }
        
        ul li {
            margin: 5px 0;
        }
        
        .imgbladerunner {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }
    </style>
</head>   

<body>

<?php 
    include('header.php');
?>

    <div class="imgcendrier">
        <img src="/assets/Cendrier.jpg" alt="Cendrier">
    </div>

    <div class="imganarchie">
        <img src="/assets/Chloe-Anarchie.png" alt="Chloe Anarchie">
    </div>

    <h1>Chloe Elizabeth Price</h1>

    <h2>Biographie de Chloe :</h2>

    <div class="videocenter">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/e7qabVbrdUs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <p>Chloe est une jeune femme née le 11 mars 1994 à Arcadia Bay. Elle est la fille de Joyce Madsen et William Price. Chloe a perdu son père à cause d'un accident de voiture le 28 septembre 2008, Chloé avait 14 ans, sa mort l'a beaucoup affectée. Elle a étudié à l'académie de Blackwell, où elle a été exclue en mai 2011 à 17 ans. Elle a 19 ans pendant le jeu en octobre 2013. Elle est la meilleure amie de Max, qu'elle connaît depuis son enfance.</p>

    <h3>Personnalité :</h3>

    <p>Quand on découvre Chloe, on la voit immature, rebelle, n'ayant pas sa langue dans sa poche, elle est dans le conflit permanent et pense que tout le monde l'a abandonnée. Ce sentiment d'abandon se justifie par la mort de son père, le départ de Max, sa mère qui a refait sa vie et Rachel. Elle est persévérante et n'a peur de rien, ce qui lui est utile dans sa recherche de Rachel. En avançant dans l'histoire, on découvre une Chloe sensible, gentille et drôle.</p>

    <h3>Caractéristiques physiques :</h3>
    <ul>
        <li>Cheveux bleus</li>
        <li>Grande (1m75)</li>
        <li>Yeux bleus</li>
    </ul>

    <div class="conteneur">
        <img class="alignRight" src="/assets/Rachel-Papillon.jpg" alt="Rachel Papillon">
    </div>

    <h3>Son rôle dans l'histoire :</h3>
   
    <h4>Deutéragoniste de Life Is Strange :</h4>    
    <ul>
        <li>Elle est le lien entre Max et Rachel</li>
        <li>Elle "enclenche" le pouvoir de Max</li>
        <li>Elle soutient et aide Max</li>
    </ul>

    <h2>Les personnages liés à Chloé :</h2>

    <table class="tableau-style">
        <thead>
            <tr>
                <th>Nom du personnage</th>
                <th>Lien avec Chloe</th>
                <th>Relation avec Chloe</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>Max(ine) Caulfield</b><br><img src="/assets/Maxine-Caulfield.webp" height="120" alt="Maxine Caulfield"></td>
                <td>Elle est sa meilleure amie avant qu'elle parte à Seattle. Elles se connaissent depuis leur enfance.</td>
                <td>Chloe est très attachée à Max. Malgré le départ de Max et son silence, Chloe lui pardonne rapidement à son retour. Chloe est intéressée par Max, leur relation est ambiguë, entre amitié et amour.</td>
            </tr>
            <tr>
                <td><b>Rachel, Dawn Amber</b><br><img src="/assets/Rachel-Amber.webp" height="120" alt="Rachel Amber"></td>
                <td>Rachel est l'ange gardien de Chloe. Elle a été là pour Chloe quand elle était seule après la mort de son père et le départ de Max. Elle lui a "sauvé la vie".</td>
                <td>Elles sont en "couple libre", elles s'aiment.</td>
            </tr>
            <tr>
                <td><b>William Price</b><br><img src="/assets/William-Price.png" height="200" alt="William Price"></td>
                <td>Il est le père de Chloe.</td>
                <td>Chloe et lui sont très proches. Il est un père très sympa, et ils s'aiment beaucoup.</td>
            </tr>   
            <tr>
                <td><b>Joyce Madsen</b><br><img src="/assets/Joyce-Madsen.jpg" height="150" alt="Joyce Madsen"></td>
                <td>Elle est la mère de Chloe.</td>
                <td>Leurs relations sont tendues. Elles se disputent souvent, mais elles s'aiment.</td>
            </tr>
            <tr>
                <td><b>David Madsen</b><br><img src="/assets/David-Madsen.jpg" height="100" alt="David Madsen"></td>
                <td>Le beau-père.</td>
                <td>Il est un ancien soldat très autoritaire avec Chloe. Ils sont en conflit permanent. Il l'aime mais ne sait pas communiquer avec elle.</td>
            </tr>
            <tr>
                <td><b>Frank Bowers</b><br><img src="/assets/Frank-Bowers.webp" height="150" alt="Frank Bowers"></td>
                <td>Le dealer.</td>
                <td>Frank est le dealer de Chloe et lui fournit de la drogue.</td>
            </tr>
        </tbody>
    </table>

    <div class="center">
        <img src="/assets/Illuminatis.jpg" height="250" alt="Illuminatis">
    </div>

    <h3><strong>Surnoms de Chloe</strong></h3>
    <ul>
        <li>Bulldog (par Frank Bowers)</li>
        <li>Professeur Price (par Maxine Caulfield)</li>
        <li>Miss I Hate Math (par Maxine Caulfield)</li>
        <li>The Keymaster (par Maxine Caulfield)</li>
        <li>Capitaine Chloe (par Maxine Caulfield)</li>
        <li>Captain Bluebeard (par Maxine Caulfield)</li>
        <li>Price (par Rachel Amber)</li>
    </ul>

    <h3>Mon opinion :</h3>
    <p><strong>JE L'ADORE</strong>, Chloe est une jeune femme très attachante. Elle est provocante, mais on peut voir que c'est une carapace pour une femme sensible, gentille et drôle.</p>

    <div class="imgbladerunner">
    <img src="/assets/Blade-Runner.jpg" height="300" width="300" alt="Blade Runner">
    <img src="/assets/Pisshead.jpg" height="300" width="300" alt="Pisshead">
</div>
>

</body>
</html>
