<?php
$pageTitle = $pageTitle ?? 'Welcome';
$headerImage = $headerImage ?? '/images/cabs.png';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> | Convoy Restaurant</title>
    <link rel="stylesheet" href="styles/site.css">
</head>
<body>
    <header class="site-header" style="--header-image: url('<?= htmlspecialchars($headerImage, ENT_QUOTES, 'UTF-8') ?>')">
        <div class="site-header__bar">
            <a class="site-header__brand" href="index.php">Convoy <span>Restaurant</span></a>
            <nav class="site-nav" aria-label="Main navigation">
                <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
                <a href="index.php" class="<?= $currentPage === 'index.php' ? 'active' : '' ?>">Home</a>
                <a href="ingredients.php" class="<?= $currentPage === 'ingredients.php' ? 'active' : '' ?>">Ingredients</a>
                <a href="menu.php" class="<?= $currentPage === 'menu.php' ? 'active' : '' ?>">Menu</a>
            </nav>
        </div>
        <div class="site-header__intro">
            <p class="eyebrow">Fresh from the source</p>
            <p class="site-header__tagline">Good food begins<br>with good ingredients.</p>
        </div>
    </header>