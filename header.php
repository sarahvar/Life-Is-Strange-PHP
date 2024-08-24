<?php
$currentPage = isset($_REQUEST["page"]) ? $_REQUEST["page"] : null;
$pages = array(
    'life' => array("url" => "Life_is_strange.php", "title" => "L'histoire de Life Is Strange"),
    'max' => array("url" => "Max.php", "title" => 'Fiche de personnage : Max'),
    'chloe' => array("url" => "Chloe.php", "title" => 'Fiche de personnage : Chloé'), 
    'rachel' => array("url" => "Rachel.php", "title" => 'Fiche de personnage : Rachel'),
    'quiz' => array("url" => "quiz.php", "title" => 'Quiz Interactif') 
);
?>

    <ul class="navigation">
        <?php
            foreach($pages as $key => $value){
                echo '<li>';
                // Ajouter la classe 'active' au lien correspondant à la page courante
                if($key == $currentPage){
                    echo '<a href="' . $value['url'] . '?page=' . $key . '" class="active">' . $value['title'] . '</a>';
                } else {
                    echo '<a href="' . $value['url'] . '?page=' . $key . '">' . $value['title'] . '</a>'; 
                }
                echo '</li>';
            }
        ?>
    </ul>
</section>
