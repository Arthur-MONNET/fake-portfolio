
<?php
require "./data.php";
require_once('./header.php');

?>

<h1 class="font-sans text-center mt-2 text-8xl">Mes réalisations</h1>

<div class="sm:flex flex-wrap justify-center items-center text-center gap-8 mt-40">
    <?php
    foreach ($realisations as $realisation) {
        include "./realisation.php";
    }
?>
</div>
<?php require_once('./footer.php');

?>
