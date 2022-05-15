<?= snippet('header') ?>

<?php foreach($page->images() as $image): ?>
	<figure>
		<img data-action="zoom" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
	</figure>
<?php endforeach ?>

<?= snippet('footer') ?>
