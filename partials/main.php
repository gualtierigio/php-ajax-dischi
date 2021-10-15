<?php 

include __DIR__ . "/../db/database.php";


 ?>

<div>
    <?php foreach($movieDatas as $disco){; ?>

        <h1>Titolo: <?php echo $disco['title'] ; ?></h1>
        <p>Autore e genere: <?php echo $disco['author'] . ", " . $disco['genre'] ; ?> </p>
        <p>Anno: <?php echo $disco['year'] ; ?></p>
        

    <?php }; ?>
</div>