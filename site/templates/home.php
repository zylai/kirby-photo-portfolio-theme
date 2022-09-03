<?= snippet('header') ?>

<div class="fotorama" data-width="100%" data-ratio="3/2" data-fit="cover" data-transition="crossfade" data-arrows="false" data-click="false" data-swipe="false" data-trackpad="false" data-nav="false" data-autoplay="4000" data-loop="true" data-stopautoplayontouch="false">
<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
		<img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" <?php e($image->orientation() == 'portrait', 'data-fit="contain"') ?>>
<?php endforeach ?>
</div>

<?= snippet('footer') ?>
