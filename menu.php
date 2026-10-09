<?php
$pageTitle = 'Menu';
$headerImage = '../images/table.png';
include 'inc/header.inc.php';
?>

<main class="page-content menu-page">
    <section class="menu-intro">
        <p class="eyebrow">Made fresh, served simply</p>
        <h1>A little taste of Convoy.</h1>
        <p class="lead">A short seasonal menu built around fresh produce and familiar comforts.</p>
    </section>

    <section class="menu-list" aria-label="Sample menu">
        <article class="menu-item">
            <div><h2>Market vegetable bowl</h2><p>Warm grains, crisp seasonal vegetables, herbs, and lemon dressing.</p></div>
            <span class="menu-item__price">$14</span>
        </article>
        <article class="menu-item">
            <div><h2>Roasted garden plate</h2><p>Slow-roasted vegetables, whipped chickpeas, and toasted seeds.</p></div>
            <span class="menu-item__price">$16</span>
        </article>
        <article class="menu-item">
            <div><h2>Tomato &amp; herb toast</h2><p>Grilled sourdough, ripe tomatoes, soft cheese, and garden herbs.</p></div>
            <span class="menu-item__price">$11</span>
        </article>
    </section>

    <p class="menu-note">Our menu changes with the season. Please ask us about today's ingredients.</p>
</main>

<?php include 'inc/footer.inc.php'; ?>