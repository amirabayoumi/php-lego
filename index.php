<?php
require('data.php');

$currentPage = @$_GET['page'];

$currentPage = (int)$currentPage;
if ($currentPage == 0) {
    $currentPage = 1;
}
$itemPerPage = 6;


$start = ($currentPage - 1) * $itemPerPage;
$stop = $start + $itemPerPage;
$totalPhotos = count($photos);
$totalPages = ceil($totalPhotos / $itemPerPage);

if ($stop > $totalPhotos) {
    $stop = $totalPhotos;
}



?>
<!DOCTYPE html>
<html lang="en" data-lt-installed="true">

<head>
    <link rel="icon" href="https://via.placeholder.com/70x70">
    <link rel="stylesheet" href="https://unpkg.com/mvp.css">

    <meta charset="utf-8">
    <meta name="description" content="My description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lego</title>
</head>

<body>
    <main>
        <section id="section-1">
            <header>
                <h1>Lego </h1>
                <h2>Total: <?php print count($photos); ?> Photos</h2>

            </header>

            <?php
            // foreach ($photos as $index => $lego): 
            ?>
            <?php for ($i = $start; $i < $stop; $i++): ?>

                <aside style="background-color: <?php echo  $photos[$i]['color']; ?>;">
                    <a href="detail.php?id=<?php echo $i; ?>">
                        <img src="<?php echo  $photos[$i]['url']; ?>"></img>
                    </a>
                </aside>

            <?php
            endfor; ?>
            <hr>
            <?php if ($currentPage < $totalPages): ?>
                <a href="./index.php?page=<?php echo $currentPage + 1 ?>"><i>Next </i></a>
            <?php endif ?>

        </section>

    </main>

</body>

</html>