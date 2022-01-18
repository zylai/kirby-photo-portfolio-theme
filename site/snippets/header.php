<!DOCTYPE html>
<HTML lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?= $site->title() ?> &#8212 <?= $page->title() ?></title>

	<?= css('assets/awsm.css') ?>
	<?= css('assets/override.css') ?>

	<?= css('assets/zoom-js/zoom.css') ?>
	<?= js('assets/zoom-js/zoom.min.js') ?>
</head>

<body>
	<header>
		<h2><a class="site-title" href="<?= $site->url() ?>"><?= $site->title() ?></a></h2>
		<p class="tagline"><?= $site->tagline() ?></p>
		<nav>
			<ul>
				<?php foreach ($site->children()->listed() as $subpage): ?>
				<li>
					<a href="<?= $subpage->url() ?>" <?php e($subpage->isOpen(), ' class="active-page"') ?>><?= $subpage->title() ?></a>
				</li>
				<?php endforeach ?>
			</ul>
		</nav>
		<hr>
	</header>

	<main>
		<article>