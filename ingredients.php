<?php
$pageTitle = 'Ingredients';
$headerImage = '../images/dine.png';
include 'inc/header.inc.php';
?>

<main class="page-content">
    <section class="ingredients-intro">
        <div>
            <p class="eyebrow">From nearby farms</p>
            <h1>Ingredients with a good beginning.</h1>
            <p class="lead">We choose seasonal vegetables, ripe produce, and pantry staples for flavor first. Our menu follows what is fresh, so every plate feels at home in the season.</p>
        </div>
        <figure class="ingredients-photo">
            <img src="images/carrots.png" alt="Fresh carrots, tomatoes, cucumbers, and other vegetables">
            <figcaption>Picked for freshness, prepared with care.</figcaption>
        </figure>
    </section>

    <section class="ingredient-notes" aria-labelledby="ingredient-notes-title">
        <div>
            <p class="eyebrow">Our kitchen standards</p>
            <h2 id="ingredient-notes-title">Simple, thoughtful, seasonal.</h2>
        </div>
        <ul>
            <li><strong>In season</strong><span>Produce chosen at its best, not just because it is available.</span></li>
            <li><strong>Handled with care</strong><span>Fresh ingredients prepared in small batches each day.</span></li>
            <li><strong>Full of flavor</strong><span>Good sourcing lets the ingredients speak for themselves.</span></li>
        </ul>
    </section>
</main>

<?php include 'inc/footer.inc.php'; ?>