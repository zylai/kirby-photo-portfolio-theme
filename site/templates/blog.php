<?= snippet('header') ?>

<h1><?= $page->title() ?></h1>

<ul class="posts-list">
	<?php foreach ($page->children()->listed() as $post): ?>
	<li>
		<a href="<?= $post->url() ?>"><?= $post->title() ?></a>
		<time class="posts-list-time"> <?= $post->date()->toDate('M Y') ?></time>
	</li>
	<?php endforeach ?>
</ul>

<?= snippet('footer') ?>