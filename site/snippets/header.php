<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php e($page->template() == 'home', $site->title() . " &mdash; " . $site->tagline(), $page->title() . " &mdash; " . $site->metaTitle()) ?></title>

	<?php if($page->metaDescription()->exists()): ?>
		<meta name="description" content="<?= $page->metaDescription() ?>">
	<?php endif ?>

	<link rel="canonical" href="<?= $page->url() ?>">

	<meta property="og:title" content="<?php e($page->template() == 'home', $site->title() . " &mdash; " . $site->tagline(), $page->title() . " &mdash; " . $site->metaTitle()) ?>">

	<meta property="og:site_name" content="<?= $site->metaTitle() ?>">
	<meta property="og:locale" content="en_US">
	<meta property="og:url" content="<?= $page->url() ?>">
	<meta property="og:type" content="<?php e($page->template() == "post", "article", "website")  ?>">
	<?php if($page->metaDescription()->isNotEmpty()): ?>
		<meta property="og:description" content="<?= $page->metaDescription() ?>">
	<?php endif ?>
	<?php if($coverImage = $page->metaImage()->toFile()): ?>
		<meta property="og:image" content="<?= $coverImage->crop(1200,630)->url() ?>">
	<?php endif ?>

	<?= css('assets/style.css') ?>

	<?php if($page->template() == 'post' || $page->template() == 'portfolio'): ?>
		<?= css('assets/zoom-js/zoom.min.css') ?>
		<?= js('assets/zoom-js/zoom.min.js') ?>
	<?php endif ?>

	<?php if($page->template() == 'home'): ?>
		<!-- jQuery 1.8 or later, 33 KB -->
		<?= css('assets/fotorama/fotorama.css') ?>
		<?= js(['assets/jquery/jquery.js', 'assets/fotorama/fotorama.js']) ?>
	<?php endif ?>

</head>

<body>
	<header>
		<h2><a class="site-title" href="<?= $site->url() ?>"><?= $site->title() ?></a></h2>
		<p><?= $site->tagline() ?></p>
		<nav>
			<ul>
				<?php foreach ($site->children()->listed() as $subpage): ?>
				<li>
					<a href="<?= $subpage->url() ?>" <?php e($subpage->isOpen(), 'class="active-page"') ?>><?= $subpage->title() ?></a>
				</li>
				<?php endforeach ?>
			</ul>
		</nav>
	</header>

	<main>
		<article class="page-<?= $page->template() ?>">
