<?= snippet('header') ?>

<a href="<?= $page->parent()->url() ?>">&lt; Back</a>

<br>

<time class="post-datetime"><?= $page->date()->toDate('M Y') ?></time>

<h1 class="post-title"><?= $page->title() ?></h1>

<?= $page->text()->kirbytext() ?>

<?= snippet('footer') ?>