<?= snippet('header') ?>

<?php foreach ($page->children()->listed() as $subpage): ?>
	<a href="<?= $subpage->url() ?>">
		<div class="portfolio-list-container">
			<?php $featuredImage = $subpage->MetaImage() ?>
			<img src="<?= $subpage->MetaImage()->toFile()->crop(1500,500)->url() ?>" style="width:100%;">
			<div class="portfolio-list-title"><h2><?= $subpage->title() ?></h2></div>
		</div>
	</a>
<?php endforeach ?>

<?= snippet('footer') ?>