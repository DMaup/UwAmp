<div>
    <h2> <?php echo $title; ?> </h2>
    <p> <?php echo $content; ?> </p>
</div>
<?php
if( $prev >= 0 ){
    echo '<a href="?article='.$prev.'">Précèdent</a>';
}
if( $next <= count($articles) - 1 ){
    echo '<a href="?article='.$next.'">Suivant</a>';
}
?>