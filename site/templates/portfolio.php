<?= snippet('header') ?>

<h1><?= $page->parent()->title() ?></h1>

<nav>
	<ul>
		<?php foreach ($page->siblings()->listed() as $subpage): ?>
		<li>
			<a href="<?= $subpage->url() ?>" <?php e($subpage->isActive(), ' class="active-page"') ?>><?= $subpage->title() ?></a>
		</li>
		<?php endforeach ?>
	</ul>
</nav>

<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
	<figure>
		<img data-action="zoom" src="<?= $image->url() ?>" srcset="<?= $image->srcset() ?>" alt="<?= $image->alt() ?>">
		<figcaption><?= $image->description() ?></figcaption>
	</figure>
<?php endforeach ?>

<?= snippet('footer') ?>