<?= snippet('header') ?>

<h1><?= $page->title() ?></h1>

<p><?= $page->text()->kirbytext() ?></p>

<ul class="posts-year-list">

<?php

// function that returns the formatted date
$callback = function($p) {
  return $p->date()->toDate('Y');
};
// group items using $callback
$groupedItems = $page->children()->listed()->group($callback);

// output items by year
foreach($groupedItems as $year => $itemsPerYear): ?>
    <h2><?= $year ?></h2>
    <ul class="posts-list">
      <?php foreach($itemsPerYear->sortBy(function ($page) {
        return $page->date()->toDate();
      }, 'desc') as $item) : ?>
      <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
      <?php endforeach; ?>
    </ul>
<?php endforeach ?>

</ul>

<?= snippet('footer') ?>
