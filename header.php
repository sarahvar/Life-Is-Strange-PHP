<?php
$currentPage = isset($_REQUEST["page"]) ? $_REQUEST["page"] : null;
$pages = array(
    'life' => array("url" => "Life_is_strange.php", "title" => 'histoire de Life Is Strange'),
    'max' => array("url" => "Max.php", "title" => 'Fiche de personnage : Max'),
    'chloe' => array("url" => "Chloe.php", "title" => 'Fiche de personnage : Chloé'), 
    'rachel' => array("url" => "Rachel.php", "title" => 'Fiche de personnage : Rachel')
);
?>

<section class="navbar">
    <a href="index.php">
        <h1 class="logo_tittle">Life Is Strange - le site</h1>
    </a>

    <ul class="navigation">
        <?php
            foreach($pages as $key => $value ){
                echo '<li>';
                if($key == $currentPage){
                    echo '<strong>' . $value['title'] . '</strong>';
                }else{
                   echo '<a href="' . $value['url'] . '?page=' . $key . '">' . $value['title'] . '</a>'; 
                }
                
                echo '</li>';
            }
        ?>
    </ul>

</section>