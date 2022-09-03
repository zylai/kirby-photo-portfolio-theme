<?= snippet('header') ?>

<a href="<?= $page->parent()->url() ?>" class="back-to-all-posts">&lt; Back to all posts</a>

<p class="post-datetime"><time datetime="<?= $page->date()->toDate('M Y') ?>"><?= $page->date()->toDate('M Y') ?></time></p>

<h1 class="post-title"><?= $page->title() ?><?php e($page->showYearinTitle()->isTrue(), $page->date()->toDate(' Y')) ?></h1>

<?= $page->text()->kirbytext() ?>

<?= snippet('footer') ?>
