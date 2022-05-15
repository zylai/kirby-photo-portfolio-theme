<?= snippet('header') ?>

<nav class="secondary-nav">
	<h2 class="secondary-nav-heading">Portfolio</h2>
	<ul>
		<?php foreach ($page->siblings()->listed() as $subpage): ?>
		<li>
			<a href="<?= $subpage->url() ?>" <?php e($subpage->isActive(), 'class="active-page"') ?>><?= $subpage->title() ?></a>
		</li>
		<?php endforeach ?>
	</ul>
</nav>

<h1><?= $page->title() ?></h1>

<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
	<figure>
		<img data-action="zoom" src="<?= $image->url() ?>"  alt="<?= $image->alt() ?>">
		<figcaption><?= $image->caption() ?></figcaption>
	</figure>
<?php endforeach ?>

<?= snippet('footer') ?>
