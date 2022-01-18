<?= snippet('header') ?>

<?php foreach($page->images() as $image): ?>
	<figure>
		<img data-action="zoom" src="<?= $image->url() ?>">
	</figure>
<?php endforeach ?>

<?= snippet('footer') ?>