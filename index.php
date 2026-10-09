<?php
$pageTitle = 'Home';
$headerImage = '../images/hoh.png';
include 'inc/header.inc.php';
?>

<main class="page-content home-page">
	<section class="home-intro">
		<div class="home-intro__copy">
			<p class="eyebrow">A neighborhood table</p>
			<h1>Seasonal food, made to bring people together.</h1>
			<p class="lead">At Convoy, good meals start with fresh produce and a thoughtful touch. Come by for a relaxed meal made with what's good right now.</p>
			<div class="home-links">
				<a href="menu.php">Explore the menu <span aria-hidden="true">&rarr;</span></a>
				<a href="ingredients.php">Meet our ingredients <span aria-hidden="true">&rarr;</span></a>
			</div>
		</div>
		<figure class="home-photo">
			<img src="images/cabs.png" alt="A colorful selection of fresh vegetables">
			<figcaption>Fresh produce, thoughtfully prepared.</figcaption>
		</figure>
	</section>

	<section class="home-note" aria-label="Our approach">
		<p class="eyebrow">At Convoy</p>
		<p>Seasonal ingredients. Uncomplicated cooking. A seat at the table for everyone.</p>
	</section>
</main>

<?php include 'inc/footer.inc.php'; ?>
