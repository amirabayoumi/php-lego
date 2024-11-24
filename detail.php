<?php

require('data.php');

$index = @$_GET['id'];

$lego = $photos[$index];
if (!isset($lego)) {
    header('Location: error.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://unpkg.com/mvp.css">
</head>

<body>
    <main>
        <a href="./index.php"> <b>Back Home</b></a>
        <section id="features">
            <header>
                <h2>Lego details</h2>

            </header>
            <img src="<?php echo  $lego['url']; ?>" />


            <section>
                <blockquote>
                    <?php
                    echo " $lego[description]<br>";
                    echo " $lego[alt_description]";
                    ?>
                    <footer><br><br><i>- by <?php echo $lego['user']['name']; ?></i></footer>
                    <p><sup><?php echo $lego['likes']; ?> &#9829;</sup></p>
                </blockquote>


            </section>
            <hr>

            <a href="<?php echo $lego['link']; ?>">
                <i> This photo on UNSPLASH ↗</i>
            </a>

            <a href="<?php echo $lego['user']['link']; ?>">
                <i>More About <?php echo $lego['user']['name']; ?> </i>
            </a>




        </section>
    </main>

</body>

</html>