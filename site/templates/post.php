<?= snippet('header') ?>

<a href="<?= $page->parent()->url() ?>">&lt; Back to all posts</a>

<h1 class="post-title"><?= $page->title() ?><?php e($page->showYearinTitle()->isTrue(), $page->date()->toDate(' Y')) ?></h1>

<time class="post-datetime" datetime="<?= $page->date()->toDate('M Y') ?>">Posted: <?= $page->date()->toDate('M Y') ?></time>

<?= $page->text()->kirbytext() ?>

<hr class="prev-next-navigation-hr">

<?= snippet('footer') ?>
